<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\AuthItem;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AuthGroupSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Phân quyền người dùng';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel">
    <div class="panel-heading">
        <h1>Người dùng : abc</h1>      
    </div>
    <div class="panel-body">
        <?php foreach ($group as $value)
        { ?>
            <div class="box-body">
                <div class="split_group">
                </div>
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th style="width: 30px"></th>
                            <th style="font-size: 13px; padding-left: 15px; text-transform: uppercase"><?php echo $value['group_name'] ?></th>
                        </tr>

                        <?php
                        $listItem = AuthItem::find()
                                ->where(['group_id' => $value['id'],'type'=>AuthItem::permission])
                                ->asArray()
                                ->all();
                        ?>
    <?php foreach ($listItem as $value2)
    { ?>                
                            <tr>
                                <td class="text-center"><input type="checkbox" value="<?php echo $value2['name'] ?>" name="check_name_item[]"></td>
                                <td style="text-align: justify; padding-left: 15px;"><?php echo $value2['alias'] ?></td>
                            </tr>
            <?php } ?>
                    </tbody>
                </table>
            </div>
<?php } ?>
    <button type="button" class="btn btn btn-success" id="assign-item"><span data-rel="btn"><i class="fa fa-cog"></i> Cấp quyền<span></span></span></button>
    </div>   
</div>
