<?php

namespace app\controllers;

class JurusanController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionDaftar()
    {
        return $this->render('daftar');
    }

}
