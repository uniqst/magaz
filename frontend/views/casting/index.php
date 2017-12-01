<?

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
$this->title = $pages[0]->text;
$this->registerMetaTag([
'name' => 'description',
'content' => $pages[5]->text
]);
?>

<div class="row">
  <div class="application-page mx-auto col-xl-58p">
    <div class="top-form">
      
      <h2 class="page-name"><?=Yii::t('app', $pages[1]->text);?></h1>
      <p class="text"><?=Yii::t('app', $pages[2]->text);?></p>
      <?php $form = ActiveForm::begin(['options' => ['class' => 'main-application-form container-fluid', 'novalidate' => 'novalidate', 'enctype' => 'multipart/form-data']]) ?>
        <div class="row">
          <div class="col-md-6">
            <?= $form->field($model, 'name')->textInput(['maxlength' => true, 'placeholder' => 'name*'])->label(false) ?>
          </div>
          <div class="col-md-6">
            <?= $form->field($model, 'email')->textInput(['maxlength' => true, 'placeholder' => 'email*'])->label(false) ?>
          </div>
          <div class="col-md-6" >
            <?= $form->field($model, 'phone')->textInput(['maxlength' => true, 'placeholder' => 'phone*'])->label(false) ?>
          </div>
          <div class="col-md-6">
            <?= $form->field($model, 'nationality')->textInput(['maxlength' => true, 'placeholder' => 'nationality*'])->label(false) ?>
          </div>
          <div class="col-md-6" >
            <?= $form->field($model, 'age')->textInput(['maxlength' => true, 'placeholder' => 'age*'])->label(false) ?>
          </div>
          <div class="col-md-6">
            <?= $form->field($model, 'height')->textInput(['maxlength' => true, 'placeholder' => 'height*'])->label(false) ?>
          </div>
          <div class="col-md-6">
            <?= $form->field($model, 'mesurements')->textInput(['maxlength' => true, 'placeholder' => 'mesurements (E.G. 90 - 60 - 90)*'])->label(false) ?>
          </div>
          <div class="col-md-6" >
            <?= $form->field($model, 'weight')->textInput(['maxlength' => true, 'placeholder' => 'weight*'])->label(false) ?>
          </div>
            <?= $form->field($model, 'date')->hiddenInput(['value' => date('Y-m-d H:i:s')])->label(false) ?>

        </div>
        <div class="row">
          <div class="col-md-12">
             <?= $form->field($model, 'about_myself')->textArea(['maxlength' => true, 'placeholder' => 'few words about you*', 'cols' => 30, 'rows' => 10, 'class' => 'col-md-12'])->label(false) ?>
          </div>
        </div>
        <div class="row upload-photo submit">
            <p class="col-md-12 title subheading-main"><?=Yii::t('app', 'Upload photo');?></p>
            <div class="col-md-4">
              <label for="photo1" class="upload-label"><span><?=Yii::t('app', 'Choose file');?></span></label>
              <?= $form->field($photo, 'imageFiles[]')->fileInput(['multiple' => true, 'accept' => 'image/*', 'class' => 'upload-input', 'id' => 'photo1'])->label(false) ?>
            </div>
            <div class="offset-md-4 col-md-4 text-right">
              <button type="submit"><?=Yii::t('app', 'Submit');?></button>
            </div>
        </div>
        <!-- <div class="row submit">
          <div class="offset-md-8 col-md-4 text-right">
            <button type="submit">Submit</button>
          </div>
        </div> -->

      <?php ActiveForm::end(); ?>
    </div>
    <div class="application-ask container-fluid">
      <div class="row">
        <div class="col-md-6 text-center text-md-right d-md-flex flex-md-column justify-content-md-center msg-block-wrap">
          <div class="msg-block text-uppercase">
            <p><?=Yii::t('app', $pages[3]->text);?></p>
            <p><?=Yii::t('app', $pages[4]->text);?></p>
            <p><?= $contact->phone?></p>
            <p><?=Yii::t('app', 'Call, sms, viber, whatsapp');?></p>
            <p><?= $contact->email?></p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="image mx-auto ml-md-0"></div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="col-12 dir-tree-links">
      <div class="row">
        <div class="mx-auto col-xl-58p">
          <a href="<?= Url::to('/site/index')?>"><?=Yii::t('app', 'Home');?></a>
          <span> > </span>
          <a href="<?= Url::to('/casting/index')?>"><?=Yii::t('app', 'Casting');?></a>
        </div>
      </div>
  </div>

<?= frontend\components\MainSection::widget()?>
