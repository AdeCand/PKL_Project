<?php

namespace backend\controllers;

use Yii;
use backend\models\LapKunNus;
use backend\models\LapKunNusCari;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * LapKunNusController implements the CRUD actions for LapKunNus model.
 */
class LapKunNusController extends Controller
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
     * Lists all LapKunNus models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new LapKunNusCari();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionJanuari()
    {
        $model = LapKunNus::find()->where(['bulan'=> 'Januari'])->all();
        $searchModel = new LapKunNusCari();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        return $this->render('januari', [        
            'model' => $model,
            'dataProvider' => $dataProvider,
            'searchModel' => $searchModel,
        ]);
        
    }

    public function actionFebruari()
    {
        $model = LapKunNus::find()->where(['bulan'=> 'Februari'])->all();
        $searchModel = new LapKunNusCari();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        return $this->render('februari', [        
            'model' => $model,
            'dataProvider' => $dataProvider,
            'searchModel' => $searchModel,
        ]);
        
    }
    public function actionMaret()
    {
        $model = LapKunNus::find()->where(['bulan'=> 'Maret'])->all();
        $searchModel = new LapKunNusCari();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        return $this->render('maret', [        
            'model' => $model,
            'dataProvider' => $dataProvider,
            'searchModel' => $searchModel,
        ]);
        
    }
    public function actionApril()
    {
        $model = LapKunNus::find()->where(['bulan'=> 'April'])->all();
        $searchModel = new LapKunNusCari();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        return $this->render('april', [        
            'model' => $model,
            'dataProvider' => $dataProvider,
            'searchModel' => $searchModel,
        ]);
        
    }
    public function actionMei()
    {
        $model = LapKunNus::find()->where(['bulan'=> 'Mei'])->all();
        $searchModel = new LapKunNusCari();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        return $this->render('mei', [        
            'model' => $model,
            'dataProvider' => $dataProvider,
            'searchModel' => $searchModel,
        ]);
        
    }
    public function actionJuni()
    {
        $model = LapKunNus::find()->where(['bulan'=> 'Juni'])->all();
        $searchModel = new LapKunNusCari();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        return $this->render('juni', [        
            'model' => $model,
            'dataProvider' => $dataProvider,
            'searchModel' => $searchModel,
        ]);
        
    }
    public function actionJuli()
    {
        $model = LapKunNus::find()->where(['bulan'=> 'Juli'])->all();
        $searchModel = new LapKunNusCari();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        return $this->render('juli', [        
            'model' => $model,
            'dataProvider' => $dataProvider,
            'searchModel' => $searchModel,
        ]);
        
    }
    public function actionAgustus()
    {
        $model = LapKunNus::find()->where(['bulan'=> 'Agustus'])->all();
        $searchModel = new LapKunNusCari();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        return $this->render('agustus', [        
            'model' => $model,
            'dataProvider' => $dataProvider,
            'searchModel' => $searchModel,
        ]);
        
    }
    public function actionSeptember()
    {
        $model = LapKunNus::find()->where(['bulan'=> 'September'])->all();
        $searchModel = new LapKunNusCari();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        return $this->render('september', [        
            'model' => $model,
            'dataProvider' => $dataProvider,
            'searchModel' => $searchModel,
        ]);
        
    }
    public function actionOktober()
    {
        $model = LapKunNus::find()->where(['bulan'=> 'Oktober'])->all();
        $searchModel = new LapKunNusCari();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        return $this->render('oktober', [        
            'model' => $model,
            'dataProvider' => $dataProvider,
            'searchModel' => $searchModel,
        ]);
        
    }
    public function actionNovember()
    {
        $model = LapKunNus::find()->where(['bulan'=> 'Novemeber'])->all();
        $searchModel = new LapKunNusCari();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        return $this->render('november', [        
            'model' => $model,
            'dataProvider' => $dataProvider,
            'searchModel' => $searchModel,
        ]);
        
    }
    public function actionDesember()
    {
        $model = LapKunNus::find()->where(['bulan'=> 'Desember'])->all();
        $searchModel = new LapKunNusCari();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        return $this->render('desember', [        
            'model' => $model,
            'dataProvider' => $dataProvider,
            'searchModel' => $searchModel,
        ]);
        
    }

    /**
     * Displays a single LapKunNus model.
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
     * Creates a new LapKunNus model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new LapKunNus();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_lap_nus]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing LapKunNus model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_lap_nus]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing LapKunNus model.
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
     * Finds the LapKunNus model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return LapKunNus the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = LapKunNus::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
