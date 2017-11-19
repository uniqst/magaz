<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "social_web".
 *
 * @property int $id
 * @property string $facebook
 * @property string $twitter
 * @property string $printerest
 * @property string $instagram
 * @property string $google_plus
 * @property string $linked_in
 * @property string $vk
 */
class SocialWeb extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'social_web';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['facebook', 'twitter', 'printerest', 'instagram', 'google_plus', 'linked_in', 'vk'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'facebook' => Yii::t('app', 'Facebook'),
            'twitter' => Yii::t('app', 'Twitter'),
            'printerest' => Yii::t('app', 'Printerest'),
            'instagram' => Yii::t('app', 'Instagram'),
            'google_plus' => Yii::t('app', 'Google Plus'),
            'linked_in' => Yii::t('app', 'Linked In'),
            'vk' => Yii::t('app', 'Vk'),
        ];
    }
}
