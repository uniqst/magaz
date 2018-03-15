<?php
namespace backend\components;

use Yii;
use yii\base\Widget;
use Zelenin\yii\modules\I18n\models\SourceMessage;
use Zelenin\yii\modules\I18n\models\Message;

Class Translate extends Widget{
    public $text;
    public $input;
    public $label;
    public function run(){
            $model = SourceMessage::find()->where(['message' => $this->text])->one();
            if ($model != null) {
                $model->initMessages();
                if ($model::loadMultiple($model->messages, Yii::$app->getRequest()->post()) && $model::validateMultiple($model->messages)) {
                    $model->saveMessages();
                }
                return $this->render('translate', [
                    'model' => $model,
                    'input' => $this->input,
                    'text' => $this->text,
                    'label' => $this->label
                ]);
            } else {
                return '<h2>'.$this->label.' не проверено</h2>';
            }
    }
}