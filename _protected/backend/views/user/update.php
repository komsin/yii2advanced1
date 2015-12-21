<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $user common\models\User */
/* @var $role common\rbac\models\Role; */

$this->title = Yii::t('app', 'Update User') . ': ' . $user->username;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Users'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $user->username, 'url' => ['view', 'id' => $user->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="user-update">
    <div class="row">
        <div class="user-create">
            <div class="col-lg-6">
                <div class="box box-solid box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">ปรับปรุงผู้ใช้</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <?=
                        $this->render('_form', [
                            'user' => $user,
                            'role' => $role,
                        ])
                        ?>
                    </div><!-- /.box-body -->
                    <div class="box-footer">
                        เป็นการปรับปรุงผู้ใช้
                    </div><!-- box-footer -->
                </div><!-- /.box -->
            </div>
        </div>
    </div>
</div>
