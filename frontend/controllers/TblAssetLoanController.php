<?php

namespace frontend\controllers;

use Yii;
use common\models\TblAssetLoan;
use common\models\TblExternalUser;
use common\models\SearchTblAssetLoan;
use common\models\SearchTblExternalUser;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TblAssetLoanController implements the CRUD actions for TblAssetLoan model.
 */
class TblAssetLoanController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all TblAssetLoan models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SearchTblAssetLoan();
        $dataProvider = $searchModel->search(['SearchTblClassroomSetup'=>['status'=>'open']]);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TblAssetLoan model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new TblAssetLoan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new TblAssetLoan();
        $external = new TblExternalUser();

        if ($model->load(Yii::$app->request->post()) && $external->load(Yii::$app->request->post())) {

            $model->user_id = Yii::$app->user->id;
            $model->form_type = 1;
            $model->start_date = date ('Y-m-d h:m:s');
            $model->update_date = date ('Y-m-d h:m:s');
            $model->loan_date = date ('Y-m-d h:m:s');
            $model->status = 3;
            $model->save();


            if ($external->first_name != ''){
            	$external->save();
            }

            return $this->redirect(['view', 'id' => $model->entry_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'external'=>$external,
            ]);
        }
    }

    /**
     * Updates an existing TblAssetLoan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
       	
        $user = $model->external_user;
        $external = TblExternalUser::find()->where(['external_user'=>$user])->one();
       
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->entry_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
                'external' => $external,
            ]);
        }
    }

    /**
     * Deletes an existing TblAssetLoan model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the TblAssetLoan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return TblAssetLoan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = TblAssetLoan::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
