<?php

namespace app\controllers;

use app\models\Cart;

class CartController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $session = $_SESSION['cart'];
        $model = new Cart();
        return $this->render('index', compact('session', 'model'));
    }

}
