<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PrefixSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Prefixes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prefix-index">

    
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Prefix', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'prefix_id',
            [
                'attribute' => 'prefix_id',
                'options' => ['width'=>'200'],
            ],
            'prefix_name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
