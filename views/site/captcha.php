<?php



use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Captcha';
?>
<head>
    <link href="/assets/5e482191/css/bootstrap1234.css" rel="stylesheet">
</head>
<?php

$form = ActiveForm::begin(['options' => ['accept-charset' => "UTF-8"]]
);
?>
    
<div class="g-recaptcha" data-sitekey="6Ld2GBATAAAAAIczTuuTV4UUvDhJ-ojjwARpOtmn"></div>
<noscript>
  <div style="width: 302px; height: 422px;">
    <div style="width: 302px; height: 422px; position: relative;">
      <div style="width: 302px; height: 422px; position: absolute;">
        <iframe src="https://www.google.com/recaptcha/api/fallback?k=6Ld2GBATAAAAAOhFiHtyCn6GMB1-5hBKkVGF2TCZ"
                frameborder="0" scrolling="no"
                style="width: 302px; height:422px; border-style: none;">
        </iframe>
      </div>
      <div style="width: 300px; height: 60px; border-style: none;
                  bottom: 12px; left: 25px; margin: 0px; padding: 0px; right: 25px;
                  background: #f9f9f9; border: 1px solid #c1c1c1; border-radius: 3px;">
        <textarea id="g-recaptcha-response" name="g-recaptcha-response"
                  class="g-recaptcha-response"
                  style="width: 250px; height: 40px; border: 1px solid #c1c1c1;
                         margin: 10px 25px; padding: 0px; resize: none;" >
        </textarea>
      </div>
    </div>
  </div>
</noscript>
<div class="form-group" style="margin: 0 auto;text-align: center;padding: 5px 5px 10px 5px;">
        <?= Html::submitButton('Create',['class' => 'btn btn-success']) ?>
    </div>
<?php ActiveForm::end(); ?>