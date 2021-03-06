<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "verification".
 *
 * @property int $id
 * @property string $textup
 * @property string $textdown
 * @property string $Enter
 * @property string $Leave
 */
class Verification extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'verification';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['textup', 'textdown', 'Enter', 'Leave'], 'required'],
            [['textup', 'textdown'], 'string', 'max' => 1000],
            [['Enter', 'Leave'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'textup' => 'Textup',
            'textdown' => 'Textdown',
            'Enter' => 'Enter',
            'Leave' => 'Leave',
        ];
    }
}
