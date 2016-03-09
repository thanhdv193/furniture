<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\AuthItem;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AuthGroupSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Quản lý quyền';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel">
    <input type="hidden" value="define_premission" name="index-nav-menu-left" />    
    <div class="panel-heading">
        <h1><?= Html::encode($this->title) ?></h1>      
    </div>
    <div class="panel-body">   
        <table class="table table-bordered table-hover">
        <tbody><tr>
                <th style="width: 25%;">Tên quyền</th>
                <th class="text-center">Định nghĩa</th>
                <th class="text-center">Nhóm quyền</th>
                <th class="text-center">Chức năng</th>
            </tr>
            <?php foreach($data as $key => $value) { ?>
            <tr auth-id="<?php echo $key ?>">
                <td class="vertical-middle bold-text"><i class="fa fa-users"></i> <span auth-name="newscategory"><?php echo $key ?></span></td>
                <td class="vertical-middle">
                        <?php $value_permission = AuthItem::find()                                
                                ->where(['name' => $key])
                                ->asArray()
                                ->one();?>
                    <?php if($value_permission != null) { ?>
                        <input name="alias" type="text" class="form-control" value="<?php echo $value_permission['alias'] ?>" placeholder="Định nghĩa quyền của bạn">
                    <?php }else { ?>
                        <input name="alias" type="text" class="form-control" value="" placeholder="Định nghĩa quyền của bạn">
                    <?php } ?>
                </td>
                <td class="vertical-middle">
                    <select name="group_id" class="form-control">
                                <option value="">Chọn nhóm quyền ...</option>
                        <?php foreach($group as $value_group){ ?>                              
                            <?php if($value_group['id'] == $value_permission['group_id']){ ?>  
                                 <option selected="selected" value="<?php echo $value_group['id'] ?>"><?php echo $value_group['group_name'] ?></option>                            
                            <?php }else {?>
                                  <option value="<?php echo $value_group['id'] ?>"><?php echo $value_group['group_name'] ?></option>                        
                            <?php } ?>
                        <?php } ?>
                    </select>
                </td>
                <td class="vertical-middle text-center">
                    <button type="button" onclick="administrator.define('<?php echo $key ?>', 1);" class="btn btn-success"><i class="fa fa-cogs"></i> Cập nhật</button>
                </td>
            </tr>   
              <?php foreach($value as $value2){ ?>
                <tr auth-id="<?php echo $value2 ?>">
                    <td style="padding-left: 50px;" class="align-center-mg vertical-middle"><span auth-name="newscategory_index"><?php echo $value2 ?></span></td>
                    <td>
                        <?php $value_permission = AuthItem::find()->where(['name'=>$value2])->one();?>
                        <?php if($value_permission != null) { ?>
                        <input name="alias" type="text" class="form-control" value="<?php echo $value_permission['alias'] ?>" placeholder="Định nghĩa quyền của bạn">
                    <?php }else { ?>
                        <input name="alias" type="text" class="form-control" value="" placeholder="Định nghĩa quyền của bạn">
                    <?php } ?>
                    </td>
                    <td></td>
                    <td class="text-center"><button type="button" onclick="administrator.define('<?php echo $value2 ?>', 2);" class="btn btn-success"><i class="fa fa-cogs"></i> Cập nhật</button></td>
                </tr>
              <?php }?>
            <?php }?>
        </tbody></table>
    </div>
</div>

