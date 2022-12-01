<?php

namespace app\controllers;

use app\models\Cart;
use app\models\Good;
use app\models\Publisher;

class GoodsController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $model = new Good();
        $cartModel = new Cart();
        $modelPublisher = new Publisher();
        $goods = $model->getAllGoods();
        return $this->render('index', compact('goods', 'modelPublisher', 'cartModel'));
    }

    public function actionItem()
    {
        $id = $_GET["id"];
        $model = new Good();
        $cartModel = new Cart();
        $modelPublisher = new Publisher();
        $good = $model->getGoodById($id);
        return $this->render('item', compact('good', 'modelPublisher', 'cartModel'));
    }

}
