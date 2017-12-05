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

     public $imageFile;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['age', 'height', 'mesurements', 'weight', 'name', 'nationality', 'about_myself'], 'required'],
            [['age', 'height', 'weight', 'status'], 'integer'],
            [['date'], 'safe'],
            [['imageFile'], 'file'],
            [['name', 'nationality',  'about_myself_link', 'email', 'phone', 'H1', 'H2', 'title',  'name_description', 'mesurements'], 'string', 'max' => 255],
            [['description'], 'string', 'max' => 500],
            [['most_wanted', 'about_myself'], 'string', 'max' => 1000],
            [['text1000'], 'string', 'max' => 2000],
            
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
            'age' => 'Age',
            'country' => 'Country',
            'about_myself' => 'About myself',
            'date' => 'Date',
            'name_description' => 'Name page',
            'description' => 'Meta tag description'

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

    public function getAttVal()
    {
        return $this->hasMany(AttendanceValue::className(), ['profile_id' => 'id']);
    }


}
