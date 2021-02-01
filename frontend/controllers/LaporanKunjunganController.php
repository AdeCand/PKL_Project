<?php

namespace frontend\controllers;

use Yii;
use frontend\models\LaporanKunjungan;
use frontend\models\LaporanKunjunganCari;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use frontend\models\Negara;

/**
 * LaporanKunjunganController implements the CRUD actions for LaporanKunjungan model.
 */
class LaporanKunjunganController extends Controller
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
     * Lists all LaporanKunjungan models.
     * @return mixed
     */
    public function actionIndex()
    {
        $laporan_kunjungan = LaporanKunjungan::find()->all();        
        $no = 1; 
        // $query = "SELECT * FROM laporan_kunjungan INNER JOIN negara, provinsi 
        // ON laporan_kunjungan.id_laporan = negara.negara, provinsi.provinsi"; 
        // $nama_negara = Negara::find()->all();
        return $this->render('index', [
            'laporan_kunjungan' => $laporan_kunjungan,
            'no' => $no,
            // 'nama_negara' => $nama_negara,
        ]);
    }

    /**
     * Displays a single LaporanKunjungan model.
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
     * Creates a new LaporanKunjungan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new LaporanKunjungan();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_laporan_kunjungan]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing LaporanKunjungan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_laporan_kunjungan]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing LaporanKunjungan model.
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
     * Finds the LaporanKunjungan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return LaporanKunjungan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = LaporanKunjungan::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
