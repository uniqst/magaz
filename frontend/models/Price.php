<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "price".
 *
 * @property int $id
 * @property string $name
 * @property int $incall
 * @property int $outcall
 * @property int $currency
 */
class Price extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'price';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'incall', 'outcall', 'currency'], 'required'],
            [['incall', 'outcall', 'currency'], 'integer'],
            [['name'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'incall' => Yii::t('app', 'Incall'),
            'outcall' => Yii::t('app', 'Outcall'),
            'currency' => Yii::t('app', 'Currency'),
        ];
    }
}
