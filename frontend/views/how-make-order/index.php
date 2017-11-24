<?php

/* @var $this yii\web\View */
use yii\helpers\Url;
$this->title = 'How to make order';
?>
<div class="row">
    <div class="mx-auto col-xl-58p">
    <div class="top-form top-form-how-to-order">
      <h1 class="page-name"><?=Yii::t('app', 'How to make an order');?></h1>
      <p>
      <?=Yii::t('app', 'Grab a pen and write down: here is the phone number of our booking service:');?> <span class="text-nowrap">+90 539 460 85 63</span>. <?=Yii::t('app', 'You can dial or send SMS using the ordinary phone, the same as to make a call or chat with us using Whatsapp or Viber applications for mobile phones.');?>
      </p>
      <p>
       <?=Yii::t('app', "When ordering, be sure to name your date (a girl's name) and several more parameters necessary: how should we call you (a name or a nickname), your contact phone number (required to contact you to approve your booking) and the place where a girl should meet you (this may be a hotel of 4/5 stars in the city or, in rarer occasions, your own or rented apartment).");?> 
      </p>
      <p>
        <?=Yii::t('app', 'Just as simple as that - and in an hour or two you will be delighted by our charming girl.');?>
      </p>
    </div>
    <!-- <div class="application-ask container-fluid">
      <div class="row">
        <div class="col-md-6 text-center text-md-right d-md-flex flex-md-column justify-content-md-center msg-block-wrap">
          <div class="msg-block">
            <p>Have a quetion?</p>
            <p>Ask Lena!</p>
            <p>+905380639316</p>
            <p>Call, sms, viber, whatsapp</p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="image mx-auto ml-md-0"></div>
        </div>
      </div>
    </div> -->
  </div>
</div>

<div class="row dir-tree-links">
  <div class="mx-auto col-xl-58p">
    <a href="<?= Url::to('/site/index')?>"><?=Yii::t('app', 'Home');?></a>
    <span> > </span>
    <a href="<?= Url::to('/how-make-order/index')?>"><?=Yii::t('app', 'How to make order');?></a>
  </div>
</div>
<!-- <div class="row">
  <div class="booking-page offset-xl-2 col-xl-8">
    <div class="top-form">
      
      <h2 class="page-name">Booking</h1>
      <p class="text">You are now booking one of our stunning beuties</p>

      <form class="main-application-form container-fluid" action="" method="post" novalidate="novalidate">
        <div class="row">
          <div class="col-md-6">
            <input type="text" name="name" placeholder="your name*">
          </div>
          <div class="col-md-6">
            <input type="email" name="email" placeholder="your e-mail*">
          </div>
          <div class="col-md-4" >
            <input type="text" name="phone" placeholder="your phone number*">
          </div>
          <div class="col-md-4">
            <input type="text" name="escort_name" placeholder="name of escort*">
          </div>
          <div class="col-md-4" >
            <input type="text" name="adult" placeholder="are you 18? (YES/NO)">
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <textarea name="" id="" cols="30" rows="7" class="col-md-12" placeholder="tell us if you have some special wishes*"></textarea>
          </div>
        </div>
        <div class="row submit">
          <div class="offset-md-8 col-md-4 text-right">
            <button type="submit">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div> -->

 <?=\frontend\components\MainSection::widget();?>


