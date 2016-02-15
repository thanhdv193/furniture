<?php

namespace app\components\helpers;

use Yii;
use app\models\XfUser;
use yii\helpers\Url;
use yii\swiftmailer\Mailer;
use app\models\Email;

class EmailHelper
{

    public static function sendEmail($emailTo, $subject, $link, $param, $charset = 'utf-8')
    {
        $email = Email::find()
                ->where(['email_status' => 1])
                ->asArray()
                ->one();
       Yii::$app->set('mailer', [
            'class' => 'yii\swiftmailer\Mailer',
            'useFileTransport' => false,
            'transport' => [
                'class' => 'Swift_SmtpTransport',
                'host' => 'smtp.gmail.com',
                'username' => $email['account_email'],
                'password' => $email['password_email'],
                'port' => '587',
                'encryption' => 'tls',
            ],
        ]);        
        
        $mail = new Mailer();
        $teamplate = $mail->render($link, ['param' => $param], '/mailtemplate' . DIRECTORY_SEPARATOR . 'layouts' . DIRECTORY_SEPARATOR . 'html');

        try
        {
            $compose = Yii::$app->mailer->compose()
                    ->setFrom('from@domain.com')
                    ->setCharset($charset)
                    ->setTo($emailTo)
                    ->setSubject($subject)
                    ->setHtmlBody($teamplate)
                    ->send();
        } catch (\yii\db\Exception $e)
        {
            return $e;
        }

        return $compose;
    }

}
