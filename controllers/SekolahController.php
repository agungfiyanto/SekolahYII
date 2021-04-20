<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;

class SekolahController extends Controller
{
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionFoto()
    {
        
        return $this->render('foto');
    }

    public function actionInfo()
    {
        return $this->render('informasi');
    }

    public function actionInfo_admin()
    {
        return $this->render('infoAdmin');
    }

    public function actionInfo_sekolah()
    {
        return $this->render('infoSekolah');
    }

    public function actionKontak()
    {
        return $this->render('kontak');
    }
}