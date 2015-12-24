<?php
namespace backend\controllers;

use yii\web\Controller;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use Yii;

/**
 * Site controller.
 * It is responsible for displaying static pages, and logging users in and out.
 */
class PositionController extends Controller
{
    /**
     * Returns a list of behaviors that this component should behave as.
     *
     * @return array
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index','delete'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionIndex()
    {
        $position = Yii::$app->db->createCommand("SELECT * FROM position")->queryAll();
        $count = Yii::$app->db->createCommand("SELECT COUNT(*) FROM position")->queryScalar();
        return $this->render('index', [
                    'positions' => $position,
                    'count' => $count,
        ]);
    }
    public function actionDelete($id) {
        Yii::$app->db->createCommand()->delete('position',['position_id'=>$id])->execute();
        return $this->redirect(['index']);
        
    }
}
