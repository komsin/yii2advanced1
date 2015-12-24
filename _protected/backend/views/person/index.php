<?php

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = Yii::t('app', 'Persons : ').'';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="row">
    <div class="col-md-6">
        
        <table class="table table-hover">
            <tr>
                <th>รหัส</th>   
                <th>คำนำหน้า</th>
                <th>ชื่อ</th>
                <th>ลบ</th>  
            </tr>
            <?php foreach ($persons as $person) : ?>
                <tr>
                    <td><?= HTML::encode($person['person_id']); ?></td>
                    <td><?= HTML::encode($person['prefix_name']); ?></td>
                    <td><?= HTML::encode($person['person_firstname']); ?></td>
                    <td><a href="<?=
                        Url::to([
                            'person/delete','id' => Html::encode($person['person_id'])
                        ]);
                        ?>">
                            <span class="fa fa-trash text-danger">
                        </a></span></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>

