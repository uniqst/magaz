<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "service".
 *
 * @property int $id
 * @property string $name
 * @property string $content
 * @property string $img
 */
class Service extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'service';
    }

    public $imageFile;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'content', 'img'], 'required'],
            [['name', 'img'], 'string', 'max' => 255],
            [['content'], 'string', 'max' => 1000],
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
            'name' => Yii::t('app', 'Name'),
            'content' => Yii::t('app', 'Content'),
            'img' => Yii::t('app', 'Img'),
        ];
    }
}
