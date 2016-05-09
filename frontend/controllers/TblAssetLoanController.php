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
use common\models\TblIsInventory;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Model;
use yii\helpers\Json;

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
        $modelItem = [new TblIsInventory()];

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
                                        $modelItem->entry_id = $model->inventory;
                                        if (! ($flag = $modelItem->save(false))) {
                                            $transaction->rollBack();
                                            break;
                                        }
                                    }
                                }
                                if ($flag) {
                                    $transaction->commit();
                                    return $this->redirect(['view', 'id' => $model->entry_id]);
                                }
                            } catch (Exception $e) {
                                $transaction->rollBack();
                            }
                        }
        } else {
            return $this->render('create', [
                'model' => $model,
                'external'=>$external,
                'modelItem'=>(empty($modelItem))? [new TblIsInventory]: $modelItem
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
        $external = $this->findExternal($id);
       	$modelItem = $model->inventory;
        if ($model->load(Yii::$app->request->post())) {
            $oldIds = ArrayHelper::map($modelItem, 'entry_id','inventory');
            $modelItem = Model::createMultiple(TblIsInventory::classname(),$modelItem);
            Model::loadMultiple($modelItem, Yii::$app->request->post());
             $deletedIDs = array_diff($oldIDs, array_filter(ArrayHelper::map($modelsAddress, 'id', 'id')));

        $user = $model->external_user;
        $external = TblExternalUser::find()->where(['external_user'=>$user])->one();
        // validate all models
            $valid = $model->validate();
            $valid = Model::validateMultiple($modelItem) && $valid;

            if ($valid) {
                $transaction = \Yii::$app->db->beginTransaction();
                try {
                    if ($flag = $model->save(false)) {
                        if (! empty($deletedIDs)) {
                            Address::deleteAll(['entry_id' => $deletedIDs]);
                        }
                        
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
                        return $this->redirect(['view', 'id' => $model->entry_id]);
                    }
                } catch (Exception $e) {
                    $transaction->rollBack();
                }
            }
        /*if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->entry_id]);*/
        } else {
            return $this->render('update', [
                'model' => $model,
                 'external' => $external,
                 'modelItem'=>(empty($modelItem))? [new TblIsInventory]: $modelItem
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
    /**
     * Finds the TblAssetLoan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return TblExternalUser the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findExternal($id)
    {
        $ext = $this->findModel($id);
        if (($model = TblExternalUser::findOne(['external_user'=>$ext['external_user']])) !== null) {
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
    public function actionTag($id)
    {     
        $countItems = TblIsInventory::find()
                    ->where(['type' => $id])
                    ->count();//->select(['tag'])->asArray()->all());
        $items = TblIsInventory::find()
                ->where(['type' => $id])
                ->select(['form_id','tag'])
                //->asArray()
                ->all();
        if ($countItems > 0){
            foreach ($items as $item) {
                # code...
                echo "<option value='". $item->form_id."'>".$item->tag."</option>";
            }
        }
        else{
            echo "<option>-</option>";
        }
       /* $out=[];
        if (isset($_POST['depdrop_parents'])){
            $parents = $_POST['depdrop_parents'];
            if ($parents != null){
                $type = $parents[0];
                //$out = array('Volvo', "BMW", "Toyota");
                $out = TblIsInventory::find()->where(['type' => $parents[0]])->select(['tag'])->asArray()->all();
                echo Json::encode(['output'=>$out, 'selected'=>'']);
                return;
            }
            $out = array("Volvo", "BMW", "Toyota");
        }
        echo Json::encode(['output'=>$out,'selected'=>'']);*/
    }
}
