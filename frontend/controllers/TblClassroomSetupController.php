<?php

namespace frontend\controllers;

use Yii;
use common\models\TblClassroomSetup;
use common\models\SearchTblClassroomSetup;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use common\models\TblIsInventory;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Model;
use Response;
/**
 * TblClassroomSetupController implements the CRUD actions for TblClassroomSetup model.
 */
class TblClassroomSetupController extends Controller
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
     * Lists all TblClassroomSetup models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SearchTblClassroomSetup();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TblClassroomSetup model.
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
     * Creates a new TblClassroomSetup model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new TblClassroomSetup();
        $modelItem = [new TblIsInventory()];

        if ($model->load(Yii::$app->request->post())) {
             $model->form_type=3;
             $model->status = 3;
             $model->update_date = date ('Y-m-d h:m:s');

             $modelItem = Model::createMultiple(TblIsInventory::classname());
             Model::loadMultiple($modelItem, Yii::$app->request->post());

             if (Yii::$app->request->isAjax) {
                Yii::$app->response->format = Response::FORMAT_JSON;
                return ArrayHelper::merge(
                    ActiveForm::validateMultiple($modelItem),
                    ActiveForm::validate($model)
                );
            }

            $valid = $model->validate();
            $valid = Model::validateMultiple($modelItem) && $valid;

            if ($valid) {
                            $transaction = \Yii::$app->db->beginTransaction();
                            try {
                                if ($flag = $model->save(false)) {
                                    foreach ($modelItem as $modelItem) {
                                        $modelItem->form_id = $model->inventory;
                                        if (! ($flag = $modelItem->save(false))) {
                                            $transaction->rollBack();
                                            break;
                                        }
                                    }
                                }
                                if ($flag) {
                                    $transaction->commit();
                                    return $this->redirect(['view', 'id' => $model->form_id]);
                                }
                            } catch (Exception $e) {
                                $transaction->rollBack();
                            }
                        }
             //$model->save();
            //return $this->redirect(['view', 'id' => $model->form_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'modelItem'=>(empty($modelItem))? [new TblIsInventory]: $modelItem
            ]);
        }
    }

    /**
     * Updates an existing TblClassroomSetup model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $modelItem = $model->inventory;
        if ($model->load(Yii::$app->request->post())) {
            $oldIds = ArrayHelper::map($modelItem, 'form_id','inventory');
            $modelItem = Model::createMultiple(TblIsInventory::classname(),$modelItem);
            Model::loadMultiple($modelItem, Yii::$app->request->post());
             $deletedIDs = array_diff($oldIDs, array_filter(ArrayHelper::map($modelsAddress, 'id', 'id')));

            // ajax validation
            if (Yii::$app->request->isAjax) {
                Yii::$app->response->format = Response::FORMAT_JSON;
                return ArrayHelper::merge(
                    ActiveForm::validateMultiple($modelsAddress),
                    ActiveForm::validate($modelCustomer)
                );
            }

            // validate all models
            $valid = $model->validate();
            $valid = Model::validateMultiple($modelItem) && $valid;

            if ($valid) {
                $transaction = \Yii::$app->db->beginTransaction();
                try {
                    if ($flag = $model->save(false)) {
                        if (! empty($deletedIDs)) {
                            Address::deleteAll(['form_id' => $deletedIDs]);
                        }
                        foreach ($modelsAddress as $modelAddress) {
                            $modelItemAddress->form_id = $model->inventory;
                            if (! ($flag = $modelItem->save(false))) {
                                $transaction->rollBack();
                                break;
                            }
                        }
                    }
                    if ($flag) {
                        $transaction->commit();
                        return $this->redirect(['view', 'id' => $model->form_id]);
                    }
                } catch (Exception $e) {
                    $transaction->rollBack();
                }
            }


            //$model->save();
            //return $this->redirect(['view', 'id' => $model->form_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing TblClassroomSetup model.
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
     * Finds the TblClassroomSetup model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return TblClassroomSetup the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = TblClassroomSetup::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

   /**
   *
   * @param none
   * @return mixed
   */
    public function actionTag(){
        $out=[];
        if (isset($_POST['depdrop_parents'])){
            $parents = $_POST['depdrop_parents'];
            if ($parents != null){
                $type = $parent[0];
                $out = array("Volvo", "BMW", "Toyota");
               // $out = TblIsInventory::find()->where(['type' => $parents])
                //                ->select(['tag','tag'])->asArray()->all();
                echo Json::ecncode(['output'=>$out, 'selected'=>'']);
                return;
            }
            $out = array("Volvo", "BMW", "Toyota");
        }
        echo Json::encode(['output'=>$out,'selected'=>'']);
    }

}
