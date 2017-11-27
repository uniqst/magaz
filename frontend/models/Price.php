<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "price".
 *
 * @property int $id
 * @property int $price_eur
 * @property int $price_try
 * @property int $price_usd
 * @property int $price_eur_two
 * @property int $price_try_two
 * @property int $price_usd_two
 * @property int $price_eur_three
 * @property int $price_try_three
 * @property int $price_usd_three
 * @property int $price_eur_four
 * @property int $price_try_four
 * @property int $price_usd_four
 * @property int $price_eur_night
 * @property int $price_try_night
 * @property int $price_usd_night
 * @property int $taxi_eur
 * @property int $taxi_try
 * @property int $taxi_usd
 * @property string $email
 * @property string $phone
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
            [['price_eur', 'price_try', 'price_usd', 'price_eur_two', 'price_try_two', 'price_usd_two', 'price_eur_three', 'price_try_three', 'price_usd_three', 'price_eur_four', 'price_try_four', 'price_usd_four', 'price_eur_night', 'price_try_night', 'price_usd_night', 'taxi_eur', 'taxi_try', 'taxi_usd'], 'integer'],
            [['email', 'phone'], 'required'],
            [['email', 'phone'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'price_eur' => Yii::t('app', 'Price Eur'),
            'price_try' => Yii::t('app', 'Price Try'),
            'price_usd' => Yii::t('app', 'Price Usd'),
            'price_eur_two' => Yii::t('app', 'Price Eur Two'),
            'price_try_two' => Yii::t('app', 'Price Try Two'),
            'price_usd_two' => Yii::t('app', 'Price Usd Two'),
            'price_eur_three' => Yii::t('app', 'Price Eur Three'),
            'price_try_three' => Yii::t('app', 'Price Try Three'),
            'price_usd_three' => Yii::t('app', 'Price Usd Three'),
            'price_eur_four' => Yii::t('app', 'Price Eur Four'),
            'price_try_four' => Yii::t('app', 'Price Try Four'),
            'price_usd_four' => Yii::t('app', 'Price Usd Four'),
            'price_eur_night' => Yii::t('app', 'Price Eur Night'),
            'price_try_night' => Yii::t('app', 'Price Try Night'),
            'price_usd_night' => Yii::t('app', 'Price Usd Night'),
            'taxi_eur' => Yii::t('app', 'Taxi Eur'),
            'taxi_try' => Yii::t('app', 'Taxi Try'),
            'taxi_usd' => Yii::t('app', 'Taxi Usd'),
            'email' => Yii::t('app', 'Email'),
            'phone' => Yii::t('app', 'Phone'),
        ];
    }
}
