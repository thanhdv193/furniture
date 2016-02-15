<?php

use yii\helpers\Html;

/* @var $this \yii\web\View view component instance */
/* @var $message \yii\mail\MessageInterface the message being composed */
/* @var $content string main view render result */
?>
<?php $this->beginPage() ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=<?= Yii::$app->charset ?>" />
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
        <?php $this->beginBody() ?>
            <table cellspacing="0" cellpadding="0" border="0" style="color:#333;background:#fff;padding:0;margin:0;width:100%;font:15px/1.25em 'Helvetica Neue',Arial,Helvetica">
                <tbody>
                    <tr width="100%"> 
                        <td valign="top" align="left" style="background:#eef0f1;font:15px/1.25em 'Helvetica Neue',Arial,Helvetica">
                            <table style="border:none;padding:0 18px;margin:50px auto;width:500px"> 
                                <tbody> 
                                    <tr width="100%" height="60">
                                        <td valign="top" align="left" style="border-top-left-radius:4px;border-top-right-radius:4px;background:#27709b url(https://ci5.googleusercontent.com/proxy/EX6LlCnBPhQ65bTTC5U1NL6rTNHBCnZ9p-zGZG5JBvcmB5SubDn_4qMuoJ-shd76zpYkmhtdzDgcSArG=s0-d-e1-ft#https://trello.com/images/gradient.png) bottom left repeat-x;padding:10px 18px;text-align:center"> 
                                            <img height="40" width="125" src="https://ci3.googleusercontent.com/proxy/7m5AZPLRiWrS9iaZtGJvTrvU6-sObEiz9kbUukDCTWkGKVHg-PrW-CKqVf1lPGXN1AuheejYI8tlRA=s0-d-e1-ft#https://trello.com/images/logo-s.png" title="Trello" style="font-weight:bold;font-size:18px;color:#fff;vertical-align:top" class="CToWUd"> 
                                        </td> 
                                    </tr> 
                                    <tr width="100%"> 
                                        <td valign="top" align="left" style="background:#fff;padding:18px">                               

                                            <h1 style="font-size:20px;margin:16px 0;color:#333;text-align:center"> Chào bạn xxx! </h1>

                                            <p style="font:15px/1.25em 'Helvetica Neue',Arial,Helvetica;color:#333;text-align:center"> <?= $content ?>  </p>

                                            <div style="background:#f6f7f8;border-radius:3px"> 
                                                <br>                                   
                                                <p style="text-align:center"> <a href="#" style="color:#306f9c;font:26px/1.25em 'Helvetica Neue',Arial,Helvetica;text-decoration:none;font-weight:bold" target="_blank">Thanh.com.vn</a> </p>
                                                <p style="font:15px/1.25em 'Helvetica Neue',Arial,Helvetica;margin-bottom:0;text-align:center"> <a href="#" style="border-radius:3px;background:#3aa54c;color:#fff;display:block;font-weight:700;font-size:16px;line-height:1.25em;margin:24px auto 6px;padding:10px 18px;text-decoration:none;width:180px" target="_blank"> See you again</a> </p>

                                                <br>
                                                <br> 
                                            </div>
                                            <p style="font:14px/1.25em 'Helvetica Neue',Arial,Helvetica;color:#333"> <strong>What's Trello?</strong> Mọi thắc mắc vui lòng liên hệ số điện thoại xxxx. </p>

                                        </td>

                                    </tr>
                                </tbody>
                             </table> 
                        </td> 
                    </tr>
                </tbody>
        </table>               
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
