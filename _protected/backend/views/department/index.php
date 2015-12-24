<?php

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = Yii::t('app', 'Department : ').Html::encode($count).' Max = '.Html::encode($max).''.' Sum = '.Html::encode($sum).'';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="row">
    <div class="col-md-6">
        <?php
        echo "SQL : ".$sql->sql;
        ?>
        <table class="table table-hover">
            <tr>
                <th>รหัส</th>   
                <th>ชื่อแผนก</th>
                <th>ลบ</th>           
            </tr>
            <?php foreach ($departments as $department) : ?>
                <tr>
                    <td><?= HTML::encode($department['department_id']); ?></td>
                    <td><?= HTML::encode($department['department_name']); ?></td>
                    <td><a href="<?=
                        Url::to([
                            'department/delete','id' => Html::encode($department['department_id'])
                        ]);
                        ?>">
                            <span class="fa fa-trash text-danger">
                        </a></span></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>

