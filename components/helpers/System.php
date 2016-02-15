<?php

namespace app\components\helpers;

use Yii;
use app\models\XfUser;
use yii\helpers\Url;

class System
{

    const STATUS_ON = 1;
    const STATUS_OFF = 0;

    public static function getStatus($status)
    {
        return ($status == self::STATUS_ON) ? Yii::t('app', 'On') : \Yii::t('app', 'Off');
    }

    public static function setLogInfo(&$model)
    {
        if ($model->isNewRecord)
        {
            $model->created_at = date('Y-m-d H:i:s');
            $model->created_by = Yii::$app->user->getId();
        }

        $model->updated_at = date('Y-m-d H:i:s');
        $model->updated_by = Yii::$app->user->getId();
    }

    public static function getAlertMessages($message_id)
    {
        $messages = [
            '403' => ['title' => Yii::t('app', '403 Forbidden Error'),
                'message' => Yii::t('app', 'You have not permission to access this page')]
        ];

        return isset($messages[$message_id]) ? $messages[$message_id] : '';
    }

    /**
     * Get avatar by userID - thanh
     */
    public function getAvatarByUserID($user_id, $size)
    {
        $modelUser = new XfUser();
        $user = $modelUser->getXfUserByUserId($user_id);
        $externalDataUrl = 'http://static8.zamba.vn';
        $group = floor($user['user_id'] / 1000);
        switch ($size)
        {
            case 'l':
                $sizeGroup = 'thumb_max';
                $sizeMedia = 'thumb_w/190';
                break;
            case 'm':
                $sizeGroup = 'thumb_w/74';
                $sizeMedia = 'thumb_w/70';
                break;
            default:
                $sizeGroup = 'thumb_w/48';
                $sizeMedia = 'thumb_w/40';
        }
        if ($user['avatar_date'] == 0)
        {
            return "https://static18.zamba.vn/styles/muare/xenforo/avatars/avatar_m.png";
        }
        if (isset($user['avatar_date']) && $user['avatar_date'] && $user['avatar_date'] < 1413436150)
        {
            return "http://muare1.vcmedia.vn/$sizeMedia/avatars/$size/$group/$user[user_id].jpg?$user[avatar_date]";
        } else if ($user['avatar_date'] < 1430878518)
        {
            return $externalDataUrl . "/$sizeGroup/muare/avatars/$size/$group/$user[user_id].jpg?$user[avatar_date]";
        } else
        {

            return $externalDataUrl . "/$sizeGroup/muare/avatars/$size/$group/$user[user_id]" . "_" . $user['avatar_date'] . ".jpg?$user[avatar_date]";
        }
    }

    /**
     * Get link thread by thread_id
     */
    public function getLinkThread($node_id, $thread_id, $title)
    {

        $marTViet = array(
            "à", "á", "ạ", "ả", "ã", "â", "ầ", "ấ", "ậ", "ẩ", "ẫ", "ă", "ằ", "ắ", "ặ", "ẳ", "ẵ",
            "è", "é", "ẹ", "ẻ", "ẽ", "ê", "ề", "ế", "ệ", "ể", "ễ",
            "ì", "í", "ị", "ỉ", "ĩ",
            "ò", "ó", "ọ", "ỏ", "õ", "ô", "ồ", "ố", "ộ", "ổ", "ỗ", "ơ", "ờ", "ớ", "ợ", "ở", "ỡ",
            "ù", "ú", "ụ", "ủ", "ũ", "ư", "ừ", "ứ", "ự", "ử", "ữ",
            "ỳ", "ý", "ỵ", "ỷ", "ỹ",
            "đ",
            "À", "Á", "Ạ", "Ả", "Ã", "Â", "Ầ", "Ấ", "Ậ", "Ẩ", "Ẫ", "Ă", "Ằ", "Ắ", "Ặ", "Ẳ", "Ẵ",
            "È", "É", "Ẹ", "Ẻ", "Ẽ", "Ê", "Ề", "Ế", "Ệ", "Ể", "Ễ",
            "Ì", "Í", "Ị", "Ỉ", "Ĩ",
            "Ò", "Ó", "Ọ", "Ỏ", "Õ", "Ô", "Ồ", "Ố", "Ộ", "Ổ", "Ỗ", "Ơ", "Ờ", "Ớ", "Ợ", "Ở", "Ỡ",
            "Ù", "Ú", "Ụ", "Ủ", "Ũ", "Ư", "Ừ", "Ứ", "Ự", "Ử", "Ữ",
            "Ỳ", "Ý", "Ỵ", "Ỷ", "Ỹ",
            "Đ",
            "(", ")", " ", '"', '>', ':', '/', '%', '#', '@', '^', '&', ',', ';', '?', '`', '~', '!', '*', '+', '|', '[', ']',
        );
        $marKoDau = array(
            "a", "a", "a", "a", "a", "a", "a", "a", "a", "a", "a", "a", "a", "a", "a", "a", "a",
            "e", "e", "e", "e", "e", "e", "e", "e", "e", "e", "e",
            "i", "i", "i", "i", "i",
            "o", "o", "o", "o", "o", "o", "o", "o", "o", "o", "o", "o", "o", "o", "o", "o", "o",
            "u", "u", "u", "u", "u", "u", "u", "u", "u", "u", "u",
            "y", "y", "y", "y", "y",
            "d",
            "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A",
            "E", "E", "E", "E", "E", "E", "E", "E", "E", "E", "E",
            "I", "I", "I", "I", "I",
            "O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "O",
            "U", "U", "U", "U", "U", "U", "U", "U", "U", "U", "U",
            "Y", "Y", "Y", "Y", "Y",
            "D",
            "", "", "-", '', '', '', '-', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '',
        );
        $titlePlus = strtolower(str_replace($marTViet, $marKoDau, $title));
        $externalDataUrl = Yii::$app->params['urlMuare']['muare'];
        return $externalDataUrl . "threads/$node_id/$titlePlus.$thread_id";
    }

    /**
     * Get link Forum by node_id -thanh
     */
    public function getLinkForums($node_id, $location_alias = 1, $title)
    {

        $forum = $this->vn2latin($title);
        $externalDataUrl = Yii::$app->params['urlMuare']['muare'];
        return $externalDataUrl . "/forums/$location_alias/$forum.$node_id/";
    }

    public function getLinkUser($user_name, $user_id)
    {
        $externalDataUrl = Yii::$app->params['urlMuare']['muare'];
        return $externalDataUrl . "/members/$user_name.$user_id/";
    }

    public function getAppLink($user_id)
    {
        return $user_id . ',' . sha1($user_id . 's3l493QHaky8674yciA45GdGsHPlbwK4');
    }

    public function vn2latin($cs, $tolower = false)
    {
        $marTViet = array(
            "à", "á", "ạ", "ả", "ã", "â", "ầ", "ấ", "ậ", "ẩ", "ẫ", "ă", "ằ", "ắ", "ặ", "ẳ", "ẵ",
            "è", "é", "ẹ", "ẻ", "ẽ", "ê", "ề", "ế", "ệ", "ể", "ễ",
            "ì", "í", "ị", "ỉ", "ĩ",
            "ò", "ó", "ọ", "ỏ", "õ", "ô", "ồ", "ố", "ộ", "ổ", "ỗ", "ơ", "ờ", "ớ", "ợ", "ở", "ỡ",
            "ù", "ú", "ụ", "ủ", "ũ", "ư", "ừ", "ứ", "ự", "ử", "ữ",
            "ỳ", "ý", "ỵ", "ỷ", "ỹ",
            "đ",
            "À", "Á", "Ạ", "Ả", "Ã", "Â", "Ầ", "Ấ", "Ậ", "Ẩ", "Ẫ", "Ă", "Ằ", "Ắ", "Ặ", "Ẳ", "Ẵ",
            "È", "É", "Ẹ", "Ẻ", "Ẽ", "Ê", "Ề", "Ế", "Ệ", "Ể", "Ễ",
            "Ì", "Í", "Ị", "Ỉ", "Ĩ",
            "Ò", "Ó", "Ọ", "Ỏ", "Õ", "Ô", "Ồ", "Ố", "Ộ", "Ổ", "Ỗ", "Ơ", "Ờ", "Ớ", "Ợ", "Ở", "Ỡ",
            "Ù", "Ú", "Ụ", "Ủ", "Ũ", "Ư", "Ừ", "Ứ", "Ự", "Ử", "Ữ",
            "Ỳ", "Ý", "Ỵ", "Ỷ", "Ỹ",
            "Đ", "(", ")", " ", ",");
        $marKoDau = array(
            "a", "a", "a", "a", "a", "a", "a", "a", "a", "a", "a", "a", "a", "a", "a", "a", "a",
            "e", "e", "e", "e", "e", "e", "e", "e", "e", "e", "e",
            "i", "i", "i", "i", "i",
            "o", "o", "o", "o", "o", "o", "o", "o", "o", "o", "o", "o", "o", "o", "o", "o", "o",
            "u", "u", "u", "u", "u", "u", "u", "u", "u", "u", "u",
            "y", "y", "y", "y", "y",
            "d",
            "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A",
            "E", "E", "E", "E", "E", "E", "E", "E", "E", "E", "E",
            "I", "I", "I", "I", "I",
            "O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "O",
            "U", "U", "U", "U", "U", "U", "U", "U", "U", "U", "U",
            "Y", "Y", "Y", "Y", "Y",
            "D", "", "", "-", "");
        if ($tolower)
        {
            return strtolower(str_replace($marTViet, $marKoDau, $cs));
        }
        return str_replace($marTViet, $marKoDau, $cs);
    }

    public static function getLocationByAddress($address)
    {
        $ch = curl_init(); // initiate curl
        $url = 'http://maps.google.com/maps/api/geocode/json?address=' . $address . '&sensor=false';
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // return the output in string format
        $output = curl_exec($ch); // execute  
        $output = json_decode($output);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        
        //$address = 'han,VietNam'; // Your address
        $prepAddr = str_replace(' ', '+', $address);
        $geocode = file_get_contents('http://maps.google.com/maps/api/geocode/json?address=' . $prepAddr . '&sensor=false');
        $output = json_decode($geocode);
        $lat = $output->results[0]->geometry->location->lat;
        $long = $output->results[0]->geometry->location->lng;

//        echo $address . '<br>Lat: ' . $lat . '<br>Long: ' . $long;

        return array(
                'lat' => $lat,
                'long' =>$long,
                );
    }

}
