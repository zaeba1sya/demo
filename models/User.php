<?php

namespace app\models;

use Yii;
use \yii\web\IdentityInterface;

/**
 * This is the model class for table "User".
 *
 * @property int $id
 * @property string $name
 * @property string $surname
 * @property string $patronomyc
 * @property string $login
 * @property string $password
 * @property int $role_Id
 * @property string $auth_key
 *
 * @property Orders[] $orders
 * @property Role $role
 */
class User extends \yii\db\ActiveRecord implements IdentityInterface
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'User';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'surname', 'patronomyc', 'login', 'password', 'role_Id', 'auth_key'], 'required'],
            [['role_Id'], 'integer'],
            [['name', 'surname', 'patronomyc', 'login', 'password', 'auth_key'], 'string', 'max' => 55],
            [['role_Id'], 'exist', 'skipOnError' => true, 'targetClass' => Role::class, 'targetAttribute' => ['role_Id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'surname' => 'Surname',
            'patronomyc' => 'Patronomyc',
            'login' => 'Login',
            'password' => 'Password',
            'role_Id' => 'Role ID',
            'auth_key' => 'Auth Key',
        ];
    }

    /**
     * Gets query for [[Orders]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Orders::class, ['user_Id' => 'id']);
    }

    /**
     * Gets query for [[Role]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRole()
    {
        return $this->hasOne(Role::class, ['id' => 'role_Id']);
    }

    public static function findIdentity($id)
    {
        return static::findOne($id);
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
        return static::findOne(['access_token' => $token]);
    }

    public function getId()
    {
        return $this->id;
    }

    public function getAuthKey()
    {
        return $this->auth_key;
    }

    public function validatePassword($password)
    {
        return Yii::$app->security->validatePassword($password, $this->password);
    }

    public function validateAuthKey($authKey)
    {
        return $authKey == $this->auth_key;
    }

    public static function findByLogin($login)
    {
        return static::findOne(['login' => $login]);
    }
}
