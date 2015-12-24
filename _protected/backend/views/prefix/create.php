<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Prefix */

$this->title = 'Create Prefix';
$this->params['breadcrumbs'][] = ['label' => 'Prefixes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="row">
    <div class="user-create">
        <div class="col-lg-6">
            <div class="box box-solid box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">เพิ่มคำนำหน้า</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <?=
        $this->render('_form', [
            'model' => $model,
        ])
        ?>
                </div><!-- /.box-body -->
                <div class="box-footer">
                    เป็นการเพิ่มคำนำหน้า
                </div><!-- box-footer -->
            </div><!-- /.box -->
        </div>
    </div>
</div>
