<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use frontend\models\Photo;
use frontend\models\Filters;
use frontend\models\FiltersValue;
use frontend\models\Category;
use yii\helpers\ArrayHelper;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;
use frontend\models\Attendance;
use frontend\models\AttendanceValue;

// $cat = Category::find()->where(['parent_id' => 0])->
$category = Category::find()->where(['parent_id' => 0])->with('category')->all();

$att = Attendance::find()->all();
/* @var $this yii\web\View */
/* @var $model frontend\models\Profile */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="profile-form">
    <div class="row">
        <div class="col-md-6">
        <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

        <?= $form->field($photo, 'imageFiles[]')->fileInput(['multiple' => true, 'accept' => 'image/*']) ?>

        <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'H1')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'H2')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'text1000')->widget(CKEditor::className(), [

        'editorOptions' => ElFinder::ckeditorOptions('elfinder',[
            'preset' => 'full',
            'inline' => false,
        ]),

        ]);?>

        <?= $form->field($model, 'name_description')->widget(CKEditor::className(), [

        'editorOptions' => ElFinder::ckeditorOptions('elfinder',[
            'preset' => 'full',
            'inline' => false,
        ]),

        ]);?>

        <?= $form->field($model, 'description')->textArea(['maxlength' => true]) ?>

        <?= $form->field($model, 'imageFile')->fileInput(['accept' => 'image/*']) ?>

        <?= $form->field($model, 'most_wanted')->widget(CKEditor::className(), [

        'editorOptions' => ElFinder::ckeditorOptions('elfinder',[
            'preset' => 'full',
            'inline' => false,
        ]),

        ]);?>

        <?= $form->field($model, 'nationality')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'age')->textInput() ?>

        <?= $form->field($model, 'height')->textInput() ?>

        <?= $form->field($model, 'mesurements')->textInput() ?>

        <?= $form->field($model, 'weight')->textInput() ?>

        <?= $form->field($model, 'chest')->textInput() ?>

        <?= $form->field($model, 'hair')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'eye')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'language')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'country')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'city')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'working_hours')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'about_myself')->widget(CKEditor::className(), [

        'editorOptions' => ElFinder::ckeditorOptions('elfinder',[
            'preset' => 'full',
            'inline' => false,
        ]),

        ]);?>

        <?= $form->field($model, 'status')->dropDownList([
            '0' => 'Waiting',
            '1' => 'Approved',
            '2'=> 'Disapproved'
            ]); ?>

        <?= $form->field($model, 'date')->hiddenInput(['value' => date('Y-m-d H:i:s')])->label(false) ?>



        <?php foreach($category as $cat):?>
        <?php $items = ArrayHelper::map($cat->category,'id','name');?>
        <?php $value = FiltersValue::find()->where(['filter_id' => $cat->id, 'product_id' => $model->id])->one();
        if(empty($value)){
            $value = new FiltersValue();
        }
        ?>
        <?= $form->field($value, 'value')->dropDownList($items, ['name' => 'value['.$cat->id.']'])->label($cat->name) ?>
        <?php endforeach;?>
        <p><label class="control-label" for="filtersvalue-value">Services</label></p>
        <p>
        <?php foreach($att as $a):?>
            <?php if(empty(AttendanceValue::find()->where(['profile_id' => $model->id, 'attendance_id' => $a->id])->one())):?>
            <input type="checkbox" name="option[<?=$a->id?>]" value="<?=$a->id?>"><?=$a->name?>
            <?php else:?>
                <input type="checkbox" name="option[<?=$a->id?>]" checked value="<?=$a->id?>"><?=$a->name?>
            <?php endif;?>
        <?php endforeach;?>
        </p>
        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>

        <?php ActiveForm::end(); ?>
        </div>

        <div class="col-md-6">
        <?= \backend\components\Translate::widget(['text' => $model->name, 'input' => 'text', 'label' => 'name']);?>
        <?= \backend\components\Translate::widget(['text' => $model->title, 'input' => 'text', 'label' => 'title']);?>
        <?= \backend\components\Translate::widget(['text' => $model->H1, 'input' => 'text', 'label' => 'H1']);?>
        <?= \backend\components\Translate::widget(['text' => $model->H2, 'input' => 'text', 'label' => 'H2']);?>
        <?= \backend\components\Translate::widget(['text' => $model->text1000, 'input' => 'area', 'label' => 'text1000']);?>
        <?= \backend\components\Translate::widget(['text' => $model->name_description, 'input' => 'area', 'label' => 'name description']);?>
        <?= \backend\components\Translate::widget(['text' => $model->description, 'input' => 'area', 'label' => 'desription']);?>
        <?= \backend\components\Translate::widget(['text' => $model->most_wanted, 'input' => 'area', 'label' => 'most wanted']);?>
        <?= \backend\components\Translate::widget(['text' => $model->nationality, 'input' => 'text', 'label' => 'nationality']);?>
        <?= \backend\components\Translate::widget(['text' => $model->weight, 'input' => 'text', 'label' => 'weight']);?>
        <?= \backend\components\Translate::widget(['text' => $model->hair, 'input' => 'text', 'label' => 'hair']);?>
        <?= \backend\components\Translate::widget(['text' => $model->language, 'input' => 'text', 'label' => 'language']);?>
        <?= \backend\components\Translate::widget(['text' => $model->country, 'input' => 'text', 'label' => 'country']);?>
        <?= \backend\components\Translate::widget(['text' => $model->city, 'input' => 'text', 'label' => 'city']);?>
        <?= \backend\components\Translate::widget(['text' => $model->about_myself, 'input' => 'area', 'label' => 'about myself']);?>
        </div>
    </div>

</div>
