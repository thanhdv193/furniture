<?php

use yii\helpers\Url;

$this->title = 'Báo cáo';
$this->params['breadcrumbs'][] = '';

$this->registerJsFile(Url::base('http') . '/web/lib/chart/chart.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
$this->registerJsFile(Url::base('http') . '/web/js/backend/report/charts.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
$this->registerCssFile(Url::base('http') . '/web/js/backend/report/normalize.css');
$this->registerCssFile(Url::base('http') . '/web/js/backend/report/style.css');
?>

<section>
    <div class="col-sm-8">
        <div class="panel">
            <div class="panel-heading">
                <h4 class="panel-title">Biều đồ đơn hàng theo năm</h4>
                <p>A bar chart or bar graph is a chart with rectangular bars with lengths proportional to the values that they represent.</p>
            </div>
            <div class="panel-body">
                <div id="chart-area">
                    <canvas id="bar" width="800" height="500" style="width: 250px; height: 250px;"></canvas>
                    <div id="legend"></div>
                </div>
            </div>
        </div><!-- panel -->
    </div><!-- col-sm-6 -->


</section>
<style>
#legend ul {
  list-style: none;
}
#legend ul li {
  display: block;
  padding-left: 30px;
  position: relative;
  margin-bottom: 4px;
  border-radius: 5px;
  padding: 2px 8px 2px 28px;
  font-size: 14px;
  cursor: default;
  -webkit-transition: background-color 200ms ease-in-out;
  -moz-transition: background-color 200ms ease-in-out;
  -o-transition: background-color 200ms ease-in-out;
  transition: background-color 200ms ease-in-out;
}
#legend li span {
  display: block;
  position: absolute;
  left: 0;
  top: 0;
  width: 20px;
  height: 100%;
  border-radius: 5px;
}
#chart-area > *{
  float:left
    }
</style>