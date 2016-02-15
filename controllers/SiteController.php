<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\SignupForm;
use app\models\Auth;
use app\models\User;
use yii\authclient\OAuth2;
use yii\imagine\Image;
use yii\helpers\Url;
use app\components\helpers\ImageHelper;
use app\components\helpers\FunctionService;
use app\models\Menu;
use yii\data\Pagination;
use app\models\Product;
use yii\web\Cookie;
use app\components\helpers\EmailHelper;
use app\models\Location;

class SiteController extends Controller
{

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
            'auth' => [
                'class' => 'yii\authclient\AuthAction',
                'successCallback' => [$this, 'onAuthSuccess'],
            ],
        ];
    }

    public function actionIndex()
    {
        $id = 2;
        $query = Product::find()->where(['product_category_id' => $id, 'active' => 1]);
        $count = $query->count();
        $pagination = new Pagination(['totalCount' => $count, 'defaultPageSize' => 5]);
        $product = $query->offset($pagination->offset)
                ->limit(5)
                ->all();
        //echo'<pre>'; var_dump($pagination); die;
        return $this->render('index', ['data' => $product, 'pages' => $pagination]);
    }

    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest)
        {
            return $this->goHome();
        }
        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login())
        {
            return $this->goBack();
        } else
        {
            return $this->render('login', [
                        'model' => $model,
            ]);
        }
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail']))
        {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        } else
        {
            return $this->render('contact', [
                        'model' => $model,
            ]);
        }
    }

    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post()))
        {
            if ($user = $model->signup())
            {
                if (Yii::$app->getUser()->login($user))
                {
                    return $this->goHome();
                }
            }
        }
        return $this->render('signup', [
                    'model' => $model,
        ]);
    }

    public function actionSeo($parametrel = "", $parametrel2 = "")
    {
        echo $parametrel;
        echo $parametrel2;
    }

    public function onAuthSuccess($client)
    {
        $attributes = $client->getUserAttributes();

        /** @var Auth $auth */
        $auth = Auth::find()->where([
                    'source' => $client->getId(),
                    'source_id' => $attributes['id'],
                ])->one();

        if (Yii::$app->user->isGuest)
        {
            if ($auth)
            { // login
                $user = $auth->user;
                Yii::$app->user->login($user);
            } else
            { // signup
                if (isset($attributes['email']) && isset($attributes['username']) && User::find()->where(['email' => $attributes['email']])->exists())
                {
                    Yii::$app->getSession()->setFlash('error', [
                        Yii::t('app', "User with the same email as in {client} account already exists but isn't linked to it. Login using email first to link it.", ['client' => $client->getTitle()]),
                    ]);
                } else
                {
                    $password = Yii::$app->security->generateRandomString(6);

                    $user = new User([
                        'username' => $attributes['last_name'] . $attributes['first_name'],
                        'email' => $attributes['email'],
                        'password' => $password,
                        'password_repeat' => $password,
                    ]);
                    $user->generaAuthKey();
                    $user->generatePasswordResetToken();
                    $transaction = $user->getDb()->beginTransaction();

                    if ($user->save(FALSE))
                    {
                        //  echo 'xu';die;
                        $auth = new Auth([
                            'user_id' => $user->id,
                            'source' => $client->getId(),
                            'source_id' => (string) $attributes['id'],
                        ]);
                        if ($auth->save())
                        {
                            $transaction->commit();
                            Yii::$app->user->login($user);
                        } else
                        {
                            print_r($auth->getErrors());
                        }
                    } else
                    {
                        print_r($user->getErrors());
                    }
                }
            }
        } else
        { // user already logged in
            if (!$auth)
            { // add auth provider
                $auth = new Auth([
                    'user_id' => Yii::$app->user->id,
                    'source' => $client->getId(),
                    'source_id' => $attributes['id'],
                ]);
                $auth->save();
            }
        }
    }

    public function actionLoginAjax()
    {
        if (!\Yii::$app->user->isGuest)
        {
            return 'successful';
        }
        $model = new LoginForm();
//        if ($model->load(Yii::$app->request->post())) {
        $data = array();
        $post = Yii::$app->request->post();
        if ($post['username'] == null)
        {
            return 'user_name_null';
        }
        if ($post['password'] == null)
        {
            return 'password_name_null';
        }
        $model->username = $post['username'];
        $model->password = $post['password'];
        $model->rememberMe = false;
        $user = User::findByUsername($model->username);

        if ($user == null)
        {
            return 'user_not_exist';
        } else
        {
            if ($model->login())
            {
                return 'successful';
            } else
            {
                return 'password_exist';
            }
        }
    }

    public function actionTest()
    {
        $amount = 123456789;
        if ($amount <= 0)
        {
            return $textnumber = "Tiền phải là số nguyên dương lớn hơn số 0";
        }
        $Text = array("không", "một", "hai", "ba", "bốn", "năm", "sáu", "bảy", "tám", "chín");
        $TextLuythua = array("", "nghìn", "triệu", "tỷ", "ngàn tỷ", "triệu tỷ", "tỷ tỷ");
        $textnumber = "";
        $length = strlen($amount);

        for ($i = 0; $i < $length; $i++)
            $unread[$i] = 0;

        for ($i = 0; $i < $length; $i++)
        {
            $so = substr($amount, $length - $i - 1, 1);

            if (($so == 0) && ($i % 3 == 0) && ($unread[$i] == 0))
            {
                for ($j = $i + 1; $j < $length; $j ++)
                {
                    $so1 = substr($amount, $length - $j - 1, 1);
                    if ($so1 != 0)
                        break;
                }

                if (intval(($j - $i ) / 3) > 0)
                {
                    for ($k = $i; $k < intval(($j - $i) / 3) * 3 + $i; $k++)
                        $unread[$k] = 1;
                }
            }
        }

        for ($i = 0; $i < $length; $i++)
        {
            $so = substr($amount, $length - $i - 1, 1);

            if ($unread[$i] == 1)
                continue;

            if (($i % 3 == 0) && ($i > 0))
                $textnumber = $TextLuythua[$i / 3] . " " . $textnumber;

            if ($i % 3 == 2)
                $textnumber = 'trăm ' . $textnumber;
            if ($i % 3 == 1)
                $textnumber = 'mươi ' . $textnumber;
            $textnumber = $Text[$so] . " " . $textnumber;
        }


        //Phai de cac ham replace theo dung thu tu nhu the nay
        $textnumber = str_replace("không mươi", "lẻ", $textnumber);
        $textnumber = str_replace("lẻ không", "", $textnumber);
        $textnumber = str_replace("mươi không", "mươi", $textnumber);
        $textnumber = str_replace("một mươi", "mười", $textnumber);
        $textnumber = str_replace("mươi năm", "mươi lăm", $textnumber);
        $textnumber = str_replace("mươi một", "mươi mốt", $textnumber);
        $textnumber = str_replace("mười năm", "mười lăm", $textnumber);


        var_dump(ucfirst($textnumber . " đồng"));
        die;
        return ucfirst($textnumber . " đồng chẵn");
    }

    public function actionNumber()
    {
        $message_id = md5(uniqid('', true));
        $otp = $randomString = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 4);
        $expiration = 10;
        ;
        $data = array('username' => 'muare_otp',
            'password' => '3T6r5u',
            'message' => 'Ma OTP cua ban la ' . $otp . '. Ma OTP ton tai trong ' . $expiration . ' phut. ',
            'brandname' => 'Muare',
            'recipients' => array(
                array(
                    'message_id' => '089hjd',
                    'number' => '01647519202'
                )
        ));
        $params = json_encode($data);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'http://api.bipbip.vn/api/send');
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Accept: application/json', 'Content-Type: application/json'));
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        $result = curl_exec($ch);
        curl_close($ch);
        $result = json_decode($result);
        echo'<pre>';
        var_dump($result);
        die;
    }

    function product_price($priceFloat)
    {
        $symbol = 'đ';
        $symbol_thousand = '.';
        $decimal_place = 0;
        $price = number_format($priceFloat, $decimal_place, '', $symbol_thousand);
        return $price . $symbol;
    }

    public function actionThumb()
    {
//       $a = FunctionService::getServices();
//       echo'<pre>'; var_dump($a); die;
        $url1 = Yii::$app->request->baseUrl . 'upload/photos/demo1.jpg';
        $url2 = Yii::$app->request->baseUrl . 'upload/photos/thumbs/demo1.jpg';
        ImageHelper::resizeImage($url1, $url2, '700', '700');
        die;
    }

    function set_thumb($file, $photos_dir, $thumbs_dir, $width_w = 150, $height_h = 167, $square_size = 167, $quality = 100)
    {
        //check if thumb exists
        if (!file_exists($thumbs_dir . "/" . $file))
        {
//            echo '<pre>';
//            var_dump(getimagesize($photos_dir . "/" . $file));
//            die;
            //get image info
            list($width, $height, $type, $attr) = getimagesize($photos_dir . "/" . $file);

            //set dimensions
            if ($width > $height)
            {
                $width_t = $width_w;
                //respect the ratio
                $height_t = round($height / $width * $height_h);
                //set the offset
                $off_y = ceil(($width_t - $height_t) / 2);
                $off_x = 0;
            } elseif ($height > $width)
            {
                $height_t = $height_h;
                $width_t = round($width / $height * $width_w);

                $off_x = ceil(($height_t - $width_t) / 2);
                $off_y = 0;
            } else
            {
                $width_t = $height_t = $square_size;
                $off_x = $off_y = 0;
            }

            $thumb = imagecreatefromjpeg($photos_dir . "/" . $file);
            $thumb_p = imagecreatetruecolor($width_w, $height_h);
            //default background is black
            $bg = imagecolorallocate($thumb_p, 255, 255, 255);
            imagefill($thumb_p, 0, 0, $bg);
            imagecopyresampled($thumb_p, $thumb, $off_x, $off_y, 0, 0, $width_t, $height_t, $width, $height);
            imagejpeg($thumb_p, $thumbs_dir . "/" . $file, $quality);
        }
    }

    public function createThumbnailofSize($sourcefilepath, $destdir, $reqwidth, $reqheight, $aspectratio = false)
    {
        /*
         * $sourcefilepath =  absolute source file path of jpeg
         * $destdir =  absolute path of destination directory of thumbnail ending with "/"
         */
        $thumbWidth = $reqwidth; /* pixels */
        $filename = split("[/\\]", $sourcefilepath);
        $filename = $filename[count($filename) - 1];
        $thumbnail_path = $destdir . $filename;
        $image_file = $sourcefilepath;

        $img = imagecreatefromjpeg($image_file);
        $width = imagesx($img);
        $height = imagesy($img);

        // calculate thumbnail size
        $new_width = $thumbWidth;
        if ($aspectratio == true)
        {
            $new_height = floor($height * ( $thumbWidth / $width ));
        } else
        {
            $new_height = $reqheight;
        }

        // create a new temporary image
        $tmp_img = imagecreatetruecolor($new_width, $new_height);

        // copy and resize old image into new image
        imagecopyresized($tmp_img, $img, 0, 0, 0, 0, $new_width, $new_height, $width, $height);

        // save thumbnail into a file

        $returnvalue = imagejpeg($tmp_img, $thumbnail_path, 100);
        imagedestroy($img);
        return $returnvalue;
    }

    public function actionMenu()
    {
        $menu = Menu::find()->asArray()->all();
        return $this->render('menu', ['data' => $menu]);
    }

    public function actionCaptCha()
    {
        if (Yii::$app->request->post())
        {

            $ip = $_SERVER['REMOTE_ADDR'];
            $response = $_POST['g-recaptcha-response'];
            $file = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6Ld2GBATAAAAAOhFiHtyCn6GMB1-5hBKkVGF2TCZ&response=" . $response . "&remoteip='.$ip.'");
            $json = json_decode($file);
            var_dump($json);
            die;
        } else
        {
            return $this->render('captcha');
        }
    }

    public function actionSetCookie()
    {
        $data = array('1', '2', '3', '4', '5', '6', '7');

        $cookies = Yii::$app->response->cookies;

        $cookies->add(new \yii\web\Cookie([
            'name' => 'user_guest',
            'value' => serialize($data),
            'expire' => time() + 86400 * 365,
        ]));
        $cookies1 = Yii::$app->request->cookies;
        if ($cookies1->has('user_guest'))
        {
            $cookieValue = $cookies1->getValue('user_guest', '');
            $value = unserialize($cookieValue);
            array_push($value, '12');
            if (($key = array_search('1', $value)) !== false)
            {
                unset($value[$key]);
            }
            echo'<pre>';
            var_dump($value);
            die;
            echo 'value : ' . $b;
        }
        echo 'Cookie set!';
    }

    public function actionGetCookie()
    {

        $cookies1 = Yii::$app->request->cookies;

        if ($cookies1->has('abc'))
        {
            $cookieValue = $cookies1->getValue('user_guest', '');

            $b = unserialize($cookieValue);
            echo'<pre>';
            var_dump($b);
            die;
            echo 'value : ' . $b;
        }
    }

    public function actionSendEmail()
    {
        $link = '/mailtemplate' . DIRECTORY_SEPARATOR . 'user' . DIRECTORY_SEPARATOR . 'html';
        $param = 202020202;
        $a = EmailHelper::sendEmail('thanhdv193@gmail.com', 'Tiêu đề email', $link, $param);
        var_dump($a);
        die('123');
    }

    public function actionGetLocation()
    {
        $address = "Vũ trọng phụng, Thanh Xuân, Hà Nội, Việt Nam";
        $prepAddr = str_replace(' ', '+', $address);
        $ch = curl_init(); // initiate curl
        $url = 'http://maps.google.com/maps/api/geocode/json?address=' . $prepAddr . '&sensor=false';
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // return the output in string format
        $output = curl_exec($ch); // execute  
        $output = json_decode($output);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        
        echo'<pre>'; var_dump($output->results[0]->geometry->location->lat); die;
        $geocode = file_get_contents('http://maps.google.com/maps/api/geocode/json?address=' . $prepAddr . '&sensor=false');
        $output = json_decode($geocode);
        $lat = $output->results[0]->geometry->location->lat;
        $long = $output->results[0]->geometry->location->lng;
        echo'<pre>'; var_dump($output); die;
        //$sql = 'SELECT * FROM customer WHERE status=:status';
        $lat = 21.007792;
        $lng = 105.801147;
        $sql = 'SELECT loc_id, 
                ( 6371 * acos( cos( radians('.$lat.') ) * cos(radians(lat) ) * cos(radians(lng)
                 - radians('.$lng.') ) + sin(radians('.$lat.')) * sin( radians(lat) ) ) ) 
                 AS distance FROM location HAVING distance < 50 ORDER BY distance LIMIT 0 , 20;';
        $customers = Location::findBySql($sql)->asArray()->all();       
        echo'<pre>'; var_dump($customers); die;
        //SELECT id, ( 3959 * acos( cos( radians(37) ) * cos( radians( lat ) ) * cos( radians( lng ) - radians(-122) ) + sin( radians(37) ) * sin( radians( lat ) ) ) ) AS distance FROM markers HAVING distance < 25 ORDER BY distance LIMIT 0 , 20;
//        $address = 'han,VietNam'; // Your address
//        $prepAddr = str_replace(' ', '+', $address);
//        $geocode = file_get_contents('http://maps.google.com/maps/api/geocode/json?address=' . $prepAddr . '&sensor=false');
//        $output = json_decode($geocode);
//        $lat = $output->results[0]->geometry->location->lat;
//        $long = $output->results[0]->geometry->location->lng;
//
//        echo $address . '<br>Lat: ' . $lat . '<br>Long: ' . $long;
    }

}
