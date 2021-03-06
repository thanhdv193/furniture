<?php

use yii\helpers\Html;
use yii\helpers\Url;
use app\widgets\ProductBoxOneWidget;

/* @var $this yii\web\View */
$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>

<div id="getting-started">
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
                    <input name="alias" type="text" class="form-control" value="" placeholder="Định nghĩa quyền của bạn">
                </td>
                <td class="vertical-middle">
                    <select name="group_id" class="form-control">
                        <?php foreach($group as $value_group){ ?>
                        <option value="<?php echo $value_group['id'] ?>"><?php echo $value_group['group_name'] ?></option>                        
                        <?php } ?>
                    </select>
                </td>
                <td class="vertical-middle text-center">
                    <button type="button" onclick="administrator.define('newscategory', 1);" class="btn btn-success"><i class="fa fa-cogs"></i> Cập nhật</button>
                </td>
            </tr>   
              <?php foreach($value as $value2){ ?>
                <tr auth-id="<?php echo $value2 ?>">
                    <td style="padding-left: 50px;" class="align-center-mg vertical-middle"><span auth-name="newscategory_index"><?php echo $value2 ?></span></td>
                    <td><input name="alias" type="text" class="form-control" value="" placeholder="Định nghĩa quyền của bạn"></td>
                    <td></td>
                    <td class="text-center"><button type="button" onclick="administrator.define('newscategory_index', 2);" class="btn btn-success"><i class="fa fa-cogs"></i> Cập nhật</button></td>
                </tr>
              <?php }?>
            <?php }?>
        </tbody></table>
</div>
