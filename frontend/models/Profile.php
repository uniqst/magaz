<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "profile".
 *
 * @property integer $id
 * @property string $name
 * @property integer $age
 * @property string $country
 * @property string $about_myself
 * @property string $contacts
 * @property string $date
 */
class Profile extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'profile';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'age', 'country', 'about_myself', 'contacts'], 'required'],
            [['age'], 'integer'],
            [['date'], 'safe'],
            [['name', 'country', 'about_myself', 'contacts'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Номер',
            'name' => 'Имя',
            'age' => 'Возраст',
            'country' => 'Страна',
            'about_myself' => 'О себе',
            'contacts' => 'Контакты',
            'date' => 'Дата',
        ];
    }
}
