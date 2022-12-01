<?php

namespace app\models;

use yii\db\ActiveRecord;
use Yii;

class Cart extends ActiveRecord
{
    public function addToCart($id)
    {
        $goodModel = new Good();
        $good = $goodModel->getGoodById($id);
        $session = $_SESSION['cart'][$id];
        if ($session) {
            $session->count += 1;
        } else {
            $_SESSION['cart'][$id] = [
                'good' => $good,
                'counter' => 1
            ];
        }
    }

    public function removeFromCart($id)
    {
        $goodModel = new Good();
        $good = $goodModel->getGoodById($id);
        $session = $_SESSION['cart'][$id];
        if ($session->count == 1) {
            $_SESSION['cart'][$id] = null;
        } else {
            $_SESSION['cart'][$id]->count -= 1;
        }
    }

    public function buy()
    {

    }

    public function clearCart()
    {
        $session = Yii::$app->session;
        $session->remove('cart');
    }
}