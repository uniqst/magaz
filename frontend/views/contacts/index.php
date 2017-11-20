<div class="row">
  <div class="offset-xl-3 col-xl-6">
    <div class="application-ask page-contacts container-fluid">
      <div class="row">
        <div class="col-12">
          <h1 class="page-name mb-5"><?=Yii::t('app', 'Contacts');?></h1>
        </div>
        <div class="col-md-6">
          <div class="image mx-auto mr-md-0"></div>
        </div>
        <div class="col-md-6 text-center text-md-left d-md-flex flex-md-column justify-content-md-center msg-block-wrap mt-5 mt-md-0">
          <div class="msg-block">
            <p><?=Yii::t('app', "If you have any questions or offers please don't hesitate to contact us!");?></p>
            <p class="contacts-page__phone"><a href="tel:+905380639316">+905380639316</a></p>
            <p class="text-uppercase"><?=Yii::t('app', 'CALL, SMS, VIBER, WHATSAPP');?></p>
            <p><a href="mailto:sandra-1994@mail.ua">sandra-1994@mail.ua</a></p>
          </div>
        </div>
      </div>
    </div>
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

<?= \frontend\components\MainSection::widget();?>

