<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "category".
 *
 * @property integer $id
 * @property integer $parent_id
 * @property string $name
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['parent_id', 'name', 'description'], 'required'],
            [['parent_id'], 'integer'],
            [['name', 'description'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'parent_id' => 'Parent ID',
            'name' => 'Name',
            'description' => 'Description',
        ];
    }

    public function getCategory()
    {
        return $this->hasMany(Category::className(), ['parent_id' => 'id']);
    }

    public function getCatPar()
    {
        return $this->hasMany(Category::className(), ['parent_id' => 'id']);
    }


    public function getValues()
    {
        return $this->hasMany(FiltersValue::className(), ['filter_id' => 'id']);
    }
}
