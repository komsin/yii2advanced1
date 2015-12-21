<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $user common\models\User */
/* @var $role common\rbac\models\Role */

$this->title = Yii::t('app', 'Create User');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Users'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="user-create">
        <div class="col-lg-6">
            <div class="box box-solid box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">เพิ่มผู้ใช้ใหม่</h3>
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
                    เป็นการเพิ่มผู้ใช้ในระบบใหม่
                </div><!-- box-footer -->
            </div><!-- /.box -->
        </div>
    </div>
</div>


