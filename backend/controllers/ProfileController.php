<?php

namespace backend\controllers;

use Yii;
use yii\data\ActiveDataProvider;
use frontend\models\Profile;
use frontend\models\Comments;
use frontend\models\Photo;
use frontend\models\UploadForm;
use yii\web\UploadedFile;
use backend\models\SearchProfile;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ProfileController implements the CRUD actions for Profile model.
 */
class ProfileController extends Controller
{
    /**
     * @inheritdoc
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
     * Lists all Profile models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SearchProfile();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);


        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Profile model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        $comments = Comments::find()->where(['profile_id' => $id]); 
        $provider = new ActiveDataProvider([
    'query' => $comments,
    'pagination' => [
        'pageSize' => 10,
    ],
]);
        return $this->render('view', [
            'model' => Profile::find()->where(['id' => $id])->with('photo')->one(),
            'comments' => $provider,
        ]);
    }

    /**
     * Creates a new Profile model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Profile();
        $photo = new UploadForm();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $photo->imageFiles = UploadedFile::getInstances($photo, 'imageFiles');
            if ($photo->upload()) {
                foreach($photo->imageFiles as $img){
                    $image = new Photo();
                    $image->profile_id = $model->id;
                    $image->src = $img->name;
                    $image->save();
                }
            }
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'photo' => $photo,
            ]);
        }
    }

    /**
     * Updates an existing Profile model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {

        $model = $this->findModel($id);
        $photo = new UploadForm();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {

                $photo->imageFiles = UploadedFile::getInstances($photo, 'imageFiles');
                if ($photo->upload()) {
                    foreach($photo->imageFiles as $img){
                        $image = new Photo();
                        $image->profile_id = $id;
                        $image->src = $img->name;
                        $image->save();
                    }
                }
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
                'photo' => $photo,
            ]);
        }
    }

    /**
     * Deletes an existing Profile model.
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
     * Finds the Profile model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Profile the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Profile::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
