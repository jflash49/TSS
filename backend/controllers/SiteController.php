<?php
namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use common\models\LoginForm;
use yii\filters\VerbFilter;
use common\models\TblClassroomSetup;
use common\models\SearchTblClassroomSetup;
use common\models\TblAssetLoan;
use common\models\SearchTblAssetLoan;
use common\models\User;
use common\models\UserRole;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
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
                        'actions' => ['logout', 'index'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                    [
                        'actions'=>['confg'],
                        'allow'=>true,
                        'roles'=>['@'],
                        ],
                        [
                        'actions'=>['asset'],
                        'allow'=>true,
                        'roles'=>['@'],
                        ],
                        [
                        'actions'=>['stats'],
                        'allow'=>true,
                        'roles'=>['@'],
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

    /**
     * @inheritdoc
     */
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
        $searchModel = new SearchTblClassroomSetup();
        $searchModel1 = new SearchTblAssetLoan();
        $dataProvider = $searchModel->search(['SearchTblClassroomSetup'=>['status'=>'open']]);
        $dataProvider1 = $searchModel1->search(['SearchTblAssetLoan'=>['status'=>'open']]);

        $model = new TblClassroomSetup();
        $model1 = new TblAssetLoan();
        return $this->render('index', ['searchModel'=>$searchModel, 'dataProvider'=>$dataProvider, 'model'=>$model
            ,'searchModel1'=>$searchModel1, 'dataProvider1'=>$dataProvider1,'model1'=>$model1]);
    }

    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Configurations Page
     * @return mixed
     */
    public function actionConfg()
    {
        return $this->render('confg');
    }


     /**
     * Configurations Page
     * @return mixed
     */
    public function actionAsset()
    {
        return $this->render('asset');
    }
     /**
     * User statistics page
     *   
     * @return mixed
     */
    public function actionStats()
    {
        
         $model = array();

/*$notifyModels = Notification::model()->findAllByAttributes(array(
            'user_id'=> Yii::app()->user->uid
        ));

$count = count($notifyModels);
Or

$count = Notification::model()->countByAttributes(array(
            'user_id'=> Yii::app()->user->uid
        ));*/
        $oneyrago = date('Y-m-d',strtotime(date("Y-m-d", mktime()) . " - 45 day"));
        $twoweeksago = date('Y-m-d',strtotime(date("Y-m-d", mktime()) . " - 15 day"));
        $now = date('Y-m-d');
        $model[0] = count(User::find()->asArray()->all());
        $model[1] = count(User::find()->where(['>=','lastvisit', $twoweeksago])->asArray()->all());
        $model[2] = count(User::find()->where(['created_at' => $now])->asArray()->all());
        $model[3] = count(User::find()->where(['>=','lastvisit', $oneyrago])->asArray()->all());
        // $model[4] = User::find()->where(['type' => $parents[0]])->select(['tag'])->asArray()->all();
        $model[5] = count(UserRole::find()->where(['role_id' => 7])->asArray()->all());
        $model[6] = count(User::find()->where(['lastvisit' => $now])->asArray()->all());

        return $this-> render('stats', ['model'=>$model]);
    }
}
