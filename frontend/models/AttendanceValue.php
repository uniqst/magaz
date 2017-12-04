<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "attendance_value".
 *
 * @property int $id
 * @property int $attendance_id
 * @property int $profile_id
 */
class AttendanceValue extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'attendance_value';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['attendance_id', 'profile_id'], 'required'],
            [['attendance_id', 'profile_id'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'attendance_id' => Yii::t('app', 'Attendance ID'),
            'profile_id' => Yii::t('app', 'Profile ID'),
        ];
    }
}
