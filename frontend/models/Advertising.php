<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "advertising".
 *
 * @property int $id
 * @property int $position
 * @property string $img
 */
class Advertising extends \yii\db\ActiveRecord
{

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'advertising';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['position', 'banner'], 'required'],
            [['position'], 'integer'],
            [['banner'], 'string', 'max' => 500],
            
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'position' => Yii::t('app', 'Position'),
            'banner' => Yii::t('app', 'Banner'),
        ];
    }
}
