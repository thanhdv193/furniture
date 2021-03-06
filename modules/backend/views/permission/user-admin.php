<?php

use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Danh sách quản trị';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel">  
    <input type="hidden" value="premission_get_user_admin" name="index-nav-menu-left" />    
    <div class="panel-body">  
        <div class="col-sm-5 col-md-12">
        <div class="panel panel-inverse">
            <div class="panel-heading">
                <h4 class="panel-title">Danh sách quản trị</h4>
            </div>
            <div class="panel-body">
                <ul class="media-list user-list">
                    <?php foreach ($listData as $value)
                    { ?>
                        <li class="media">
                            <div class="media-left">
                                <a href="#">
                                    <?php if($value['avatar'] != null){ ?>
                                         <img class="media-object img-circle" src="<?php echo Url::base('http') ?>/<?php echo $value['avatar'] ?>" alt="">                                    
                                    <?php }else { ?>
                                        <img src="<?php echo Url::base('http') ?>/upload/avatar/no-avatar.png" alt="">
                                    <?php }?>
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading"><a href="#"><?php echo $value['username'] ?></a></h4>
                                <span>5,323</span> Followers
                            </div>
                            <div class="media-right">
                                <a href="<?php echo Url::base('http') ?>/backend/permission/get-permission-user?id=<?php echo $value['id'] ?>">Cấp quyền</a>
                            </div>
                        </li>                                                 
                    <?php } ?>
                                       
                </ul>
            </div>
        </div>
    </div>
    </div>
    
          </div>
    

</div>
