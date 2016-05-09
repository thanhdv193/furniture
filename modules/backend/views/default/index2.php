<?php
use yii\helpers\Url;

$this->title = 'Trang quản trị';
$this->params['breadcrumbs'][] = '';
$this->registerJsFile(Url::base('') . '/js/mysterychess.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
?>
<div>
     <canvas id="gameBoard88196" width="449" height="487"></canvas>
     <div id="moveList" style="overflow-y:auto;width: 200px;height: 487px;margin-left: 10px;float: left;border: 1px solid black;"></div>
</div>
<!--<iframe style="border: 0px;margin: 0px;padding: 0px;" id="myIframe69278" width="700" height="600" src="./chessboard/mysterychess.htm?id=69278&amp;isNormal=0" data-type="0" data-init="phxsghsxh-9-1t5c1-m1c1t1c1p-9-9-T1H1P1H1C-1C5M1-9-CHSCGXXPH-83847987848769877082777382837385727506052324464520428777758586856364594843444858304145426042171000102947442605270304090410193948831358551909495913195958090847381989551512327747425347462644155589394636534255543254"></iframe>-->