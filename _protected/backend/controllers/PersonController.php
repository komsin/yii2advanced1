<?php
namespace backend\controllers;

use yii\web\Controller;
use Yii;
use yii\db\Query;

/**
 * Site controller.
 * It is responsible for displaying static pages, and logging users in and out.
 */
class PersonController extends Controller
{
    /**
     * Returns a list of behaviors that this component should behave as.
     *
     * @return array
     */
    
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionIndex() {
        $query = new Query();
        $person = $query->select(['person_id','prefix_name','person_firstname'])
                        ->from('person')->join('INNER JOIN','prefix','prefix.prefix_id=person.prefix_id')
                        ->all();
        
        return $this->render('index', [
                    'persons' => $person ,
        ]);
    }

    public function actionDelete($id) {
        Yii::$app->db->createCommand()->delete('department',['department_id'=>$id])->execute();
        return $this->redirect(['index']);
        
    }
}
