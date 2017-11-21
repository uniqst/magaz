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
            [['age', 'phone', 'height', 'mesurements', 'weight', 'name', 'email', 'nationality', 'about_myself'], 'required'],
            [['age', 'phone', 'height', 'weight', 'status'], 'integer'],
            [['date'], 'safe'],
            [['name', 'nationality', 'about_myself', 'mesurements', 'email'], 'string', 'max' => 255],
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

    public function getPhoto()
    {
        return $this->hasMany(Photo::className(), ['profile_id' => 'id']);
    }

    public function getImage()
    {
        return $this->hasOne(Photo::className(), ['profile_id' => 'id']);
    }

    public function getComments()
    {
        return $this->hasMany(Comments::className(), ['profile_id' => 'id']);
    }

    public function getValue()
    {
        return $this->hasMany(FiltersValue::className(), ['product_id' => 'id']);
    }


}
