<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "seo".
 *
 * @property int $id
 * @property string $google
 * @property string $robots
 * @property string $yandex
 */
class Seo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'seo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['google', 'robots', 'yandex'], 'required'],
            [['google', 'yandex'], 'string', 'max' => 255],
            [['robots'], 'string', 'max' => 1000],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'google' => 'Google',
            'robots' => 'Robots',
            'yandex' => 'Yandex',
        ];
    }
}
