<?php

/* @var $this yii\web\View */
use yii\helpers\Url;
$this->title = $pages[0]->text;
?>
<div class="row">
  <div class="booking-page col-xl-58p mx-auto">
    <div class="top-form">
      
      <h2 class="page-name"><?=Yii::t('app', $pages[1]->text);?></h1>
      <p class="text"><?=Yii::t('app', $pages[2]->text);?></p>

      <form class="main-application-form container-fluid" action="" method="post" novalidate="novalidate">
        <div class="row">
          <div class="col-md-6">
            <input type="text" class="form-control" name="name" placeholder="your name*">
          </div>
          <div class="col-md-6">
            <input type="email"class="form-control" name="email" placeholder="your e-mail*">
          </div>
          <div class="col-md-4" >
            <input type="text" class="form-control"name="phone" placeholder="your phone number*">
          </div>
          <div class="col-md-4">
            <input type="text" class="form-control"name="escort_name" placeholder="name of escort*">
          </div>
          <div class="col-md-4" >
            <input type="text" class="form-control"name="adult" placeholder="are you 18? (YES/NO)">
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <textarea class="form-control" name="" id="" cols="30" rows="7" class="col-md-12" placeholder="tell us if you have some special wishes*"></textarea>
          </div>
        </div>
        <div class="row submit">
          <div class="offset-md-8 col-md-4 text-right">
            <button type="submit"><?=Yii::t('app', 'Submit');?></button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="col-12 dir-tree-links">
      <div class="row">
        <div class="mx-auto col-xl-58p">
          <a href="<?= Url::to('/site/index')?>"><?=Yii::t('app', 'Home');?></a>
          <span> > </span>
          <a href="<?= Url::to('/booking/index')?>"><?=Yii::t('app', 'Booking');?></a>
        </div>
      </div>
  </div>

<?= \frontend\components\MainSection::widget();?>
