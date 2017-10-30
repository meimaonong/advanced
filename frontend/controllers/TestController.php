<?php

namespace frontend\controllers; 

use yii\web\Controller; 

class TestController extends Controller 
{ 
    public function actionIndex () {
        $p = $_REQUEST;
        print_r($p); 
    } 

    public function actionCreate () {

    } 
}