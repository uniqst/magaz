<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "comments".
 *
 * @property integer $id
 * @property integer $parent_id
 * @property integer $profile_id
 * @property string $email
 * @property string $name
 * @property string $content
 * @property integer $is_viewed
 * @property string $date
 */
class Comments extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'comments';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['parent_id', 'profile_id', 'email', 'name', 'content', 'date'], 'required'],
            [['parent_id', 'profile_id', 'status', 'is_viewed'], 'integer'],
            [['date'], 'safe'],
            [['email', 'name', 'content'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'parent_id' => 'Parent_id',
            'profile_id' => 'Кому',
            'email' => 'Email',
            'name' => 'Name',
            'content' => 'Content',
            'status' => 'Status',
            'is_viewed' => 'Is_viewed',
            'date' => 'Date',
        ];
    }

    public function getProfile()
    {
        return $this->hasOne(Profile::className(), ['id' => 'profile_id']);
    }
}
