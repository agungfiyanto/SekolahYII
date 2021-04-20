<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;

class BackendController extends Controller
{
    public $layout = 'backend';
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionDashboard()
    {
        
        return $this->render('dashboard');
    }
}