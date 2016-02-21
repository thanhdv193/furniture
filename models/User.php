<?php

namespace app\models;

use Yii;
use yii\base\NotSupportedException;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;
use yii\web\UploadedFile;

class User extends ActiveRecord implements IdentityInterface {

    const STATUS_DELETED = 0;
    const STATUS_ACTIVE = 10;
    const ROLE_USER = 10;

    public $password_repeat;

    public static function tableName() {
        return 'user';
    }

    public function behaviors() {
        return [
            TimestampBehavior::className(),
        ];
    }

    public function rules() {
        return[
            ['username', 'filter', 'filter' => 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => '\app\models\User', 'message' => Yii::t('app', 'the user name can only contain letters ,nubers and dashes!')],
            ['username', 'string', 'min' => 2, 'max' => 255],
            ['email', 'filter', 'filter' => 'trim'],            
            ['email', 'email'],
            ['email', 'unique', 'targetClass' => '\app\models\User', 'message' => Yii::t('app', 'email')],
            [['password_hash', 'password_repeat'], 'required'],
            [['password_hash', 'password_repeat'], 'string', 'min' => 6],
            [['password_hash'], 'in', 'range' => ['password_hash', 'Password', 'Password123'], 'not' => 'true', 'message' => Yii::t('app', 'the user name can only contain letters ,nubers and dashes!')],
            ['password_repeat', 'compare', 'compareAttribute' => 'password_hash', 'message' => Yii::t('app', 'Mật khẩu không khớp!')],
            [['last_name', 'name', 'gender', 'birthday', 'address'], 'required'],
            //[['avatar'], 'file','extensions' => 'PNG,JPG,png,jpg'],
            [['updated_at','created_at','role','group', 'birthday', 'active'], 'integer'],
            [['password_reset_token','avatar','gender'], 'string']
            //[['avatar'], 'file', 'skipOnEmpty' => FALSE, 'extensions' => 'PNG,JPG,png,jpg'],
        ];
    }

    public function attributeLabels() {
        return [
            'username' => 'Tên tài khoản',
            'email' => 'email',
            'password_hash' => 'Mật khẩu',
            'password_repeat' => 'Xác nhận',
            'gender' => 'Giới tính',
            'group' => 'Nhóm quyền',
            'avatar' => 'Ảnh đại diện',
            'birthday' => 'Ngày sinh',
            'address' => 'Địa chỉ',
            'last_name' => 'Họ tên đệm',
            'updated_at'=>'Ngày sửa',
            'created_at'=>'Ngày tạo',
            'name' => 'Tên',
            'active'=>'Trạng thái'
        ];
    }

    public function upload() {
        if ($this->avatar) {
            $this->avatar->saveAs('upload/image/avatar/' . time() . '-avatar-' . $this->avatar->baseName . '.' . $this->avatar->extension);
            var_dump($this->avatar); die;
            return time() . '-avatar-' . $this->avatar->baseName . '.' . $this->avatar->extension;
        } else {
            return false;
        }
    }

    public function getImageurl() {
        return \Yii::$app->request->BaseUrl . '/<path to image>/' . $this->avatar;
    }

    /**
     * @inheritdoc
     */
    public static function findIdentity($id) {
        return static::findOne(['id' => $id, 'status' => self::STATUS_ACTIVE]);
    }

    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null) {
        throw new NotSupportedException('"findIdentityByAccessToken" is not implemented.');
    }

    /**
     * Finds user by username
     *
     * @param  string      $username
     * @return static|null
     */
    public static function findByUsername($username) {
        return static::findOne(['username' => $username, 'status' => self::STATUS_ACTIVE]);
    }

    public static function findByPasswordResetToken($token) {
        if (!static::isPasswordResetTokenValid($token)) {
            return null;
        }
        return static::findOne([
                    'password_reset_token' => $token,
                    'status' => self::STATUS_ACTIVE,
        ]);
    }

    public static function isPasswordResetTokenValid($token) {
        if (empty($token)) {
            return FALSE;
        }
        $expire = Yii::$app->params['user.passwordResetTokenExpire'];
        $parts = explode('_', $token);
        $timestamp = (int) end($parts);
        return $timestamp + $expire >= time();
    }

    /**
     * @inheritdoc
     */
    public function getId() {
        return $this->getPrimaryKey();
    }

    /**
     * @inheritdoc
     */
    public function getAuthKey() {
        return $this->auth_key;
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey) {
        return $this->getAuthKey() === $authKey;
    }

    /**
     * Validates password
     *
     * @param  string  $password password to validate
     * @return boolean if password provided is valid for current user
     */
    public function validatePassword($password) {
        return Yii::$app->security->validatePassword($password, $this->password_hash);
    }

    public function setPassword($password) {
        $this->password_hash = Yii::$app->security->generatePasswordHash($password);
    }

    public function generaAuthKey() {
        $this->auth_key = Yii::$app->security->generateRandomString();
    }

    public function generatePasswordResetToken() {
        $this->password_reset_token = Yii::$app->security->generateRandomString() . '_' . time();
    }

    public function removePasswordResetToken() {
        $this->password_reset_token = null;
    }

}
