<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "filters".
 *
 * @property int $id
 * @property int $parent_id
 * @property string $name
 * @property int $positions
 */
class Filters extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'filters';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['parent_id', 'name'], 'required'],
            [['parent_id', 'positions'], 'integer'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'parent_id' => Yii::t('app', 'Parent ID'),
            'name' => Yii::t('app', 'Name'),
            'positions' => Yii::t('app', 'Positions'),
        ];
    }

    public function getValue()
    {
        return $this->hasOne(FiltersValue::className(), ['filter_id' => 'id']);
    }
    public function getValues()
    {
        return $this->hasMany(FiltersValue::className(), ['filter_id' => 'id']);
    }

}
