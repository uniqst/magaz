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
    public $imageFile;
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
            [['position', 'href'], 'required'],
            [['position'], 'integer'],
            [['img', 'href'], 'string', 'max' => 255],
            [['imageFile'], 'file'],
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
            'img' => Yii::t('app', 'Img'),
            'href' => Yii::t('app', 'Href'),
        ];
    }
}
