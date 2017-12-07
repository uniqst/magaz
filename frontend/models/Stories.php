<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "stories".
 *
 * @property int $id
 * @property string $img
 * @property string $name
 * @property string $content
 * @property string $date
 */
class Stories extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'stories';
    }
    public $imageFile;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['short_description', 'content'], 'required'],
            [['content'], 'string'],
            [['date'], 'safe'],
            [['img', 'title', 'H1'], 'string', 'max' => 255],
            [['description'], 'string', 'max' => 750],
            [['short_description'], 'string', 'max' => 1000],
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
            'img' => Yii::t('app', 'Img'),
            'description' => Yii::t('app', 'Meta description'),
            'content' => Yii::t('app', 'Content'),
            'date' => Yii::t('app', 'Date'),
        ];
    }
}
