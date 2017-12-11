<?php
/**
 * @var View $this
 * @var SourceMessage $model
 * 
 */

use yii\helpers\Html;
use yii\web\View;
use Zelenin\yii\modules\I18n\models\SourceMessage;
use Zelenin\yii\modules\I18n\Module;
use Zelenin\yii\SemanticUI\collections\Breadcrumb;
use Zelenin\yii\SemanticUI\Elements;
use Zelenin\yii\SemanticUI\widgets\ActiveForm;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;

$this->title = Module::t('Update') . ': ' . $model->message;
echo Breadcrumb::widget(['links' => [
    ['label' => Module::t('Translations'), 'url' => ['index']],
    ['label' => $this->title]
]]);
?>
<div class="message-update">
    <div class="message-form">
        <?= Elements::header(Module::t('Source message'), ['class' => 'top attached']) ?>
        <?= Elements::segment(Html::encode($model->message), ['class' => 'bottom attached']) ?>
        <?php $form = ActiveForm::begin(); ?>
        <div class="field">
            <div class="ui grid">
                    <div class="four wide column">
                        <?= $form->field($model->messages['tr'], '[' . 'tr' . ']translation')->widget(CKEditor::className(), [

  'editorOptions' => ElFinder::ckeditorOptions('elfinder',[
  		'preset' => 'full',
  		'inline' => false,
  	]),

]);?>
                    </div>
            </div>
        </div>
        <?= Html::submitButton(Module::t('Update'), ['class' => 'ui primary button']) ?>
        <?php $form::end(); ?>
    </div>
</div>
