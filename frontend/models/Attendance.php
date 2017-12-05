<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "attendance".
 *
 * @property int $id
 * @property string $name
 */
class Attendance extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'attendance';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 50],
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
        ];
    }


    public function getValue()
    {
        return $this->hasMany(AttendanceValue::className(), ['attendance_id' => 'id']);
    }
}
