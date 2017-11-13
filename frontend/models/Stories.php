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

    public $imageFile;

    public static function tableName()
    {
        return 'stories';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['img', 'name', 'content'], 'required'],
            [['date'], 'safe'],
            [['img', 'name', 'content'], 'string', 'max' => 255],
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
            'name' => Yii::t('app', 'Name'),
            'content' => Yii::t('app', 'Content'),
            'date' => Yii::t('app', 'Date'),
        ];
    }
}
