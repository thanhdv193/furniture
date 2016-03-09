<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\AuthItem;
use app\models\AuthAssignment;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AuthGroupSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Phân quyền người dùng';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel">
    <input type="hidden" value="premission_get_user_admin" name="index-nav-menu-left" />     
    <?php if($user == null){ ?>
        <div class="panel-heading">
            <h1>Không tồn tại người dùng.</h1>                 
        </div>
    <?php }else{?>
    <div class="panel-heading">
        <h1>Người dùng : <?php echo $user['username'] ?></h1>      
        <input type="hidden" value="<?php echo $user['id'] ?>" name="user_id">
    </div>
    <div class="panel-body">
        <label><input type="checkbox" id="checkAll"/> Chọn tất cả</label>
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
                        $list = AuthAssignment::find()
                                ->select('*')
                                ->rightJoin('auth_item','auth_assignment.item_name = auth_item.name')
                                ->where(['auth_item.group_id' => $value['id'],'auth_item.type'=>AuthItem::permission])
                                ->asArray()
                                ->all();
                        ?>
            <?php foreach ($list as $value2)
            { ?>                
                            <tr>
                                <td class="text-center"><input  type="checkbox" value="<?php echo $value2['name'] ?>" name="check_name_item[]" <?php if($value2['user_id'] != null){?> checked="checked" <?php }  ?>></td>
                                <td style="text-align: justify; padding-left: 15px;"><?php echo $value2['alias'] ?></td>
                            </tr>
            <?php } ?>
                    </tbody>
                </table>
            </div>
<?php } ?>
    <button type="button" class="btn btn btn-success" id="assign-item"><span data-rel="btn"><i class="fa fa-cog"></i> Cấp quyền<span></span></span></button>
    </div>   
    <?php }?>
</div>
