<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "category_value".
 *
 * @property int $id
 * @property int $profile_id
 * @property int $category_id
 * @property string $value
 */
class CategoryValue extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'category_value';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['profile_id', 'category_id', 'value'], 'required'],
            [['profile_id', 'category_id'], 'integer'],
            [['value'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'profile_id' => Yii::t('app', 'Profile ID'),
            'category_id' => Yii::t('app', 'Category ID'),
            'value' => Yii::t('app', 'Value'),
        ];
    }
}
