<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\User */

$this->title = $model->username;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Users'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-view">

    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">
                    <?= Html::a(Yii::t('app', 'Back'), ['index'], ['class' => 'btn btn-warning']) ?>
                    <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], [
                        'class' => 'btn btn-primary'])
                    ?>
                    <?=
                    Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
                        'class' => 'btn btn-danger',
                        'data' => [
                            'confirm' => Yii::t('app', 'Are you sure you want to delete this user?'),
                            'method' => 'post',
                        ],
                    ])
                    ?>
            </h3>
            <div class="box-tools pull-right">
                <!-- Buttons, labels, and many other things can be placed here! -->
                <!-- Here is a label for example -->
                <span class="label label-primary">Label</span>
            </div><!-- /.box-tools -->
        </div><!-- /.box-header -->
        <div class="box-body">
            <?=
            DetailView::widget([
                'model' => $model,
                'attributes' => [
                    'id',
                    'username',
                    'email:email',
                    //'password_hash',
                    [
                        'attribute' => 'status',
                        'value' => $model->getStatusName(),
                    ],
                    [
                        'attribute' => 'item_name',
                        'value' => $model->getRoleName(),
                    ],
                    //'auth_key',
                    //'password_reset_token',
                    //'account_activation_token',
                    'created_at:datetime',
                    'updated_at:date',
                ],
            ])
            ?>
        </div><!-- /.box-body -->
        <div class="box-footer">
            The footer of the box
        </div><!-- box-footer -->
    </div><!-- /.box -->
</div>
