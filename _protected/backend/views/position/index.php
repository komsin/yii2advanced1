<?php

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = Yii::t('app', 'Position All : '). HTML::encode($count).'';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="row">
    <div class="col-md-6">
        <table class="table table-hover">
            <tr>
                <th>รหัส</th>   
                <th>ชื่อตำแหน่ง</th>
                <th>ลบ</th>           
            </tr>
            <?php foreach ($positions as $position) : ?>
                <tr>
                    <td><?= HTML::encode($position['position_id']); ?></td>
                    <td><?= HTML::encode($position['position_name']); ?></td>
                    <td><a href="<?=
                        Url::to([
                            'position/delete','id' => Html::encode($position['position_id'])
                        ]);
                        ?>">
                            <span class="fa fa-trash text-danger">
                        </a></span></td>
                </tr>
            <?php endforeach; ?>
        </table>

        <!--ตัวอย่างต้นฉบับ-->
        <?php
        /*foreach ($positions as $position) {
            echo $position['position_id'] . '<br>';
            echo $position['position_name'] . '<br>';
        }*/
        ?>
    </div>
</div>

