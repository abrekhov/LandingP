<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\Main;
use app\models\ContactForm;
use app\models\RequestForm;

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
                'only' => ['logout','about'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
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
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex($theme='')
    {
		$model = new RequestForm();

		if ($model->load(Yii::$app->request->post())) {
			
			// form inputs are valid, do something here
			if($model->request(Yii::$app->params['adminEmail'])){
				Yii::$app->session->setFlash('requestSended');
				return $this->redirect(['//']);
			}
			return Yii::$app->session->setFlash('requestFailed');
		}
		if($desc = Main::findOne(['name'=>$theme])){
			$header_desc = $desc->header_desc;
			$blog_text = $desc->blog_text;
			$title = ($desc->bwr_title)?$desc->bwr_title:$desc->full_name;
			$meta_keywords = ($desc->meta_keywords)?$desc->meta_keywords:'';
			$meta_description = ($desc->meta_description)?$desc->meta_description:'';
		}
		
        return $this->render('index',[
			'model'=>$model,
			'header_desc'=>$header_desc,
			'title'=>$title,
			'meta_keywords'=>$meta_keywords,
			'meta_description'=>$meta_description,
			'blog_text'=>$blog_text,
		]);
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
}
