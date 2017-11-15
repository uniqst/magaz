<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "filters_value".
 *
 * @property int $id
 * @property int $product_id
 * @property string $value
 */
class FiltersValue extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'filters_value';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product_id', 'filter_id', 'value'], 'required'],
            [['product_id', 'filter_id'], 'integer'],
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
            'product_id' => Yii::t('app', 'Product ID'),
            'value' => Yii::t('app', 'Value'),
        ];
    }
}