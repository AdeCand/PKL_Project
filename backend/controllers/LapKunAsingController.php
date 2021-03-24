<?php

namespace backend\controllers;

use Yii;
use backend\models\LapKunAsing;
use backend\models\LapKunAsingCari;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * LapKunAsingController implements the CRUD actions for LapKunAsing model.
 */
class LapKunAsingController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all LapKunAsing models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new LapKunAsingCari();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionJanuari()
    {
        $model = LapKunAsing::find()->where(['bulan'=> 'Januari'])->all();
        $searchModel = new LapKunAsingCari();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        return $this->render('januari', [        
            'model' => $model,
            'dataProvider' => $dataProvider,
            'searchModel' => $searchModel,
        ]);
        
    }

    public function actionFebruari()
    {
        $model = LapKunAsing::find()->where(['bulan'=> 'Februari'])->all();
        $searchModel = new LapKunAsingCari();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        return $this->render('februari', [        
            'model' => $model,
            'dataProvider' => $dataProvider,
            'searchModel' => $searchModel,
        ]);
        
    }
    public function actionMaret()
    {
        $model = LapKunAsing::find()->where(['bulan'=> 'Maret'])->all();
        $searchModel = new LapKunAsingCari();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        return $this->render('maret', [        
            'model' => $model,
            'dataProvider' => $dataProvider,
            'searchModel' => $searchModel,
        ]);
        
    }
    public function actionApril()
    {
        $model = LapKunAsing::find()->where(['bulan'=> 'April'])->all();
        $searchModel = new LapKunAsingCari();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        return $this->render('april', [        
            'model' => $model,
            'dataProvider' => $dataProvider,
            'searchModel' => $searchModel,
        ]);
        
    }
    public function actionMei()
    {
        $model = LapKunAsing::find()->where(['bulan'=> 'Mei'])->all();
        $searchModel = new LapKunAsingCari();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        return $this->render('mei', [        
            'model' => $model,
            'dataProvider' => $dataProvider,
            'searchModel' => $searchModel,
        ]);
        
    }
    public function actionJuni()
    {
        $model = LapKunAsing::find()->where(['bulan'=> 'Juni'])->all();
        $searchModel = new LapKunAsingCari();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        return $this->render('juni', [        
            'model' => $model,
            'dataProvider' => $dataProvider,
            'searchModel' => $searchModel,
        ]);
        
    }
    public function actionJuli()
    {
        $model = LapKunAsing::find()->where(['bulan'=> 'Juli'])->all();
        $searchModel = new LapKunAsingCari();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        return $this->render('juli', [        
            'model' => $model,
            'dataProvider' => $dataProvider,
            'searchModel' => $searchModel,
        ]);
        
    }
    public function actionAgustus()
    {
        $model = LapKunAsing::find()->where(['bulan'=> 'Agustus'])->all();
        $searchModel = new LapKunAsingCari();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        return $this->render('agustus', [        
            'model' => $model,
            'dataProvider' => $dataProvider,
            'searchModel' => $searchModel,
        ]);
        
    }
    public function actionSeptember()
    {
        $model = LapKunAsing::find()->where(['bulan'=> 'September'])->all();
        $searchModel = new LapKunAsingCari();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        return $this->render('september', [        
            'model' => $model,
            'dataProvider' => $dataProvider,
            'searchModel' => $searchModel,
        ]);
        
    }
    public function actionOktober()
    {
        $model = LapKunAsing::find()->where(['bulan'=> 'Oktober'])->all();
        $searchModel = new LapKunAsingCari();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        return $this->render('oktober', [        
            'model' => $model,
            'dataProvider' => $dataProvider,
            'searchModel' => $searchModel,
        ]);
        
    }
    public function actionNovember()
    {
        $model = LapKunAsing::find()->where(['bulan'=> 'Novemeber'])->all();
        $searchModel = new LapKunAsingCari();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        return $this->render('november', [        
            'model' => $model,
            'dataProvider' => $dataProvider,
            'searchModel' => $searchModel,
        ]);
        
    }
    public function actionDesember()
    {
        $model = LapKunAsing::find()->where(['bulan'=> 'Desember'])->all();
        $searchModel = new LapKunAsingCari();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        return $this->render('desember', [        
            'model' => $model,
            'dataProvider' => $dataProvider,
            'searchModel' => $searchModel,
        ]);
        
    }

    /**
     * Displays a single LapKunAsing model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new LapKunAsing model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new LapKunAsing();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_lap_asing]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing LapKunAsing model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_lap_asing]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing LapKunAsing model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the LapKunAsing model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return LapKunAsing the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = LapKunAsing::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
