<?php

use yii\helpers\Url;

$this->title = 'Báo cáo';
$this->params['breadcrumbs'][] = '';

$this->registerJsFile(Url::base('http') . '/web/js/backend/report/index.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
$this->registerCssFile(Url::base('http') . '/web/js/backend/report/normalize.css');
$this->registerCssFile(Url::base('http') . '/web/js/backend/report/style.css');
?>
<section>
    <div class="col-sm-6">
        <div class="panel">
            <div class="panel-heading">
                <h4 class="panel-title">Bar Chart</h4>
                <p>A bar chart or bar graph is a chart with rectangular bars with lengths proportional to the values that they represent.</p>
            </div>
            <div class="panel-body">
                <div id="chart">
                    <ul id="numbers">
                        <li><span>Số lượng</span></li>
                        <li><span>100%</span></li>
                        <li><span>90%</span></li>
                        <li><span>80%</span></li>
                        <li><span>70%</span></li>
                        <li><span>60%</span></li>
                        <li><span>50%</span></li>
                        <li><span>40%</span></li>
                        <li><span>30%</span></li>
                        <li><span>20%</span></li>
                        <li><span>10%</span></li>
                        <li><span>0%</span></li>
                    </ul>

                    <ul id="bars">
                        <li><div data-percentage="56" class="bar"></div><span>1</span></li>
                        <li><div data-percentage="33" class="bar"></div><span>2</span></li>
                        <li><div data-percentage="54" class="bar"></div><span>3</span></li>
                        <li><div data-percentage="94" class="bar"></div><span>4</span></li>
                        <li><div data-percentage="44" class="bar"></div><span>5</span></li>
                        <li><div data-percentage="23" class="bar"></div><span>6</span>
                        <li><div data-percentage="56" class="bar"></div><span>7</span></li>
                        <li><div data-percentage="33" class="bar"></div><span>8</span></li>
                        <li><div data-percentage="54" class="bar"></div><span>9</span></li>
                        <li><div data-percentage="94" class="bar"></div><span>10</span></li>
                        <li><div data-percentage="44" class="bar"></div><span>11</span></li>
                        <li><div data-percentage="23" class="bar"></div><span>12</span>
                        <li><span>Tháng</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div><!-- panel -->
    </div><!-- col-sm-6 -->


</section>