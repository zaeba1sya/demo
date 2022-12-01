<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Publisher".
 *
 * @property int $id
 * @property string $publisher
 */
class Publisher extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Publisher';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['publisher'], 'required'],
            [['publisher'], 'string', 'max' => 55],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'publisher' => 'Publisher',
        ];
    }

    public static function getPublisherById($id)
    {
        return static::findOne($id);
    }
}
