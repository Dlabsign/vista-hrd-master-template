<?php

namespace app\controllers;

use app\models\LeadershipCompetencies;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\ActiveDataProvider;
use app\models\MasterTemplate;
use app\models\MasterPosition;
use app\models\WorkPerformance;
use app\models\GeneralCompetencies;
use app\models\MasterPositionSearch;

class MasterTemplateController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    public function actionIndex()
    {
        $searchModel = new MasterPositionSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->query->andWhere(['is_void' => 1]);
        $dataProvider->pagination = false;

        return $this->render('index', compact('searchModel', 'dataProvider'));
    }


    public function actionDetailTemplate($id)
    {
        $model = MasterPosition::findOne($id);

        // Ambil semua template_type dari posisi ini dengan flag = 1
        $types = MasterTemplate::find()
            ->select('template_type')
            ->where(['position_id' => $id, 'flag' => 1])
            ->groupBy('template_type')
            ->column();

        $dataProviders = [];

        foreach ($types as $type) {
            $query = MasterTemplate::find()
                ->where([
                    'position_id' => $id,
                    'template_type' => $type,
                    'flag' => 1, // tambahkan filter flag
                ]);

            $dataProviders[$type] = new \yii\data\ActiveDataProvider([
                'query' => $query,
                'pagination' => false,
            ]);
        }

        // Untuk generalProvider juga tambahkan flag = 1
        $generalProvider = new \yii\data\ActiveDataProvider([
            'query' => MasterTemplate::find()
                ->where([
                    'position_id' => $id,
                    'template_type' => 'general',
                    'flag' => 1,
                ]),
            'pagination' => false,
        ]);

        return $this->render('detail_template', [
            'model' => $model,
            'dataProviders' => $dataProviders,
            'generalProvider' => $generalProvider,
        ]);
    }

    


    public function actionSaveTechnical($position_id)
    {
        $model = new MasterTemplate();
        $model->position_id = $position_id;
        $model->type = 'technical';

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('success', 'Technical competency saved.');
        }

        $selectedType = Yii::$app->request->get('template_type');
        return $this->redirect(['detail-template', 'id' => $position_id, 'type' => $selectedType]);
    }

    public function actionSaveGeneral($position_id)
    {
        $model = new GeneralCompetencies();
        $model->position_id = $position_id;

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('success', 'General competency saved.');
        }

        return $this->redirect(['detail-template', 'id' => $position_id]);
    }

    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    public function actionCreate()
    {
        $model = new MasterTemplate();

        $request = Yii::$app->request;
        $positionId = $request->get('position_id');
        $departmentId = $request->get('position_department');

        if ($positionId !== null) {
            $model->position_id = $positionId;
        }

        if ($departmentId !== null) {
            $model->department = $departmentId;
        }

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', compact('model'));
    }

    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', compact('model'));
    }

    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        $position_id = $model->position_id;
        $model->delete();

        return $this->redirect(['detail-template', 'id' => $position_id]);
    }

    protected function findModel($id)
    {
        if (($model = MasterTemplate::findOne($id)) !== null) {
            return $model;
        }
        throw new NotFoundHttpException('Data tidak ditemukan.');
    }

    public function actionSavePerformance($position_id)
    {
        $templates = MasterTemplate::find()
            ->where(['position_id' => $position_id, 'type' => 'technical'])
            ->all();

        foreach ($templates as $template) {
            $exist = WorkPerformance::find()
                ->where([
                    'definition' => $template->definition,
                    'objectives' => $template->objectives
                ])->one();

            if (!$exist) {
                $wp = new WorkPerformance();
                $wp->definition = $template->definition;
                $wp->objectives = $template->objectives;
                $wp->created_at = date('Y-m-d H:i:s');
                $wp->save();
            }
        }

        Yii::$app->session->setFlash('success', 'Data berhasil disimpan ke Work Performance.');
        return $this->redirect(['detail-template', 'id' => $position_id]);
    }

    public function actionCreateTechnical($position_id)
    {
        $model = new MasterTemplate();
        $model->position_id = $position_id;

        $model->general = 0;
        $model->leadership = 0;
        $model->technical = 1;

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('success', 'Technical competency saved.');
            return $this->redirect(['detail-template', 'id' => $position_id]);
        }

        return $this->render('_form_technical', [
            'model' => $model,
        ]);
    }

    public function actionCreateGeneral($position_id)
    {
        $model = new MasterTemplate();
        $model->position_id = $position_id;

        $model->general = 1;
        $model->leadership = 0;

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('success', 'General competency saved.');
            return $this->redirect(['detail-template', 'id' => $position_id]);
        }

        return $this->render('_form_general', [
            'model' => $model,
        ]);
    }
    public function actionCreateLeadership($position_id)
    {
        $model = new MasterTemplate();
        $model->position_id = $position_id;

        $model->general = 0;
        $model->leadership = 1;

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('success', 'Leadership competency saved.');
            return $this->redirect(['detail-template', 'id' => $position_id]);
        }

        return $this->render('_form_leadership', [
            'model' => $model,
        ]);
    }

    public function actionUpdateTechnical($id)
    {
        $model = $this->findModel($id);
        $position_id = $model->position_id;

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('success', 'Technical competency updated.');
            return $this->redirect(['detail-template', 'id' => $position_id]);
        }

        return $this->render('_form_technical', [
            'model' => $model,
        ]);
    }

    public function actionUpdateGeneral($id)
    {
        $model = GeneralCompetencies::findOne($id);
        if (!$model) {
            throw new NotFoundHttpException('General Competency not found.');
        }

        $position_id = $model->position_id;

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('success', 'General competency updated.');
            return $this->redirect(['detail-template', 'id' => $position_id]);
        }

        return $this->render('_form_general', [
            'model' => $model,
        ]);
    }

    public function actionUpdateLeadership($id)
    {
        $model = LeadershipCompetencies::findOne($id);
        if (!$model) {
            throw new NotFoundHttpException('Leadership Competency not found.');
        }

        $position_id = $model->position_id;

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('success', 'Leadership competency updated.');
            return $this->redirect(['detail-template', 'id' => $position_id]);
        }

        return $this->render('_form_leadership', [
            'model' => $model,
        ]);
    }

}
