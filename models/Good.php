<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Good".
 *
 * @property int $id
 * @property string $title
 * @property string $img
 * @property int $publisher_id
 * @property int $year
 * @property string $antagonist
 */
class Good extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Good';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'img', 'publisher_id', 'year', 'antagonist'], 'required'],
            [['publisher_id', 'year'], 'integer'],
            [['title', 'img', 'antagonist'], 'string', 'max' => 55],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'img' => 'Img',
            'publisher_id' => 'Publisher ID',
            'year' => 'Year',
            'antagonist' => 'Antagonist',
        ];
    }

    public function getAllGoods()
    {
        return Good::find()->asArray()->all();
    }

    public function getGoodById($id)
    {
        return Good::findOne(['id' => $id]);
    }

    public function getLastThreeItems()
    {
        $goods = $this->getAllGoods();
        $reversedArray = array_reverse($goods, true);
        return array_splice($reversedArray, 0, 3);
    }
}
