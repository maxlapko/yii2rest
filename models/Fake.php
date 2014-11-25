<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "fakes".
 *
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $created_at
 * @property string $updated_at
 */
class Fake extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'fakes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['name', 'email', 'phone'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'phone' => 'Phone',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}