<?php
namespace backend\controllers;

use yii\web\Controller;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use Yii;
use yii\db\Query;

/**
 * Site controller.
 * It is responsible for displaying static pages, and logging users in and out.
 */
class DepartmentController extends Controller
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
        /*$department = $query->select(['department_id','department_name'])
                            ->from('department')
                            ->all();*/
        
        //$department = $query->from('department')->all(); //เทียบได้กับโดยไม่ต้องใส่ select ใส่ from เลย
        //yii จะใส่ select ให้ SELECT * FROM department
        
        /*$search ='กลุ่ม'
        $department = $query->select(['department_id','department_name'])
                            ->from('department')
                            ->where([
                                '>like','department_id',$search
                                ])
                            ->all();*/
        //order by อีกหนึ่งวิธี
        //$department = $query->from('department_id')->orderBy('department_id DESC')->all();
        $department = $query->from('department')
                    ->orderBy([
                        'department_name'=> SORT_ASC,
                    ])->all();
        $count = $query->from('department')->count();
        $max = $query->from('department')->max('department_id');
        $sum = $query->from('department')->sum('department_id');
        // echo sql
        $sql = $query->from('department')
                    ->orderBy([
                        'department_name'=> SORT_ASC,
                    ])->createCommand();
        
        return $this->render('index', [
                    'departments' => $department ,
                    'count' =>$count,
                    'max' => $max,
                    'sum' => $sum,
                    'sql' => $sql,
        ]);
    }

    public function actionDelete($id) {
        Yii::$app->db->createCommand()->delete('department',['department_id'=>$id])->execute();
        return $this->redirect(['index']);
        
    }
}
