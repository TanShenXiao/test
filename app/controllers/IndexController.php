<?php
namespace app\controllers;


use app\models\Index;

class IndexController{
    public function index(){
        $model=new index();
        $model->Demo();

    }
}