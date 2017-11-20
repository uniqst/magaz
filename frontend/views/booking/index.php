<div class="row">
  <div class="booking-page offset-xl-3 col-xl-6">
    <div class="top-form">
      
      <h2 class="page-name"><?=Yii::t('app', 'Booking');?></h1>
      <p class="text"><?=Yii::t('app', 'You are now booking one of our stunning beuties');?></p>

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
            <button type="submit"><?=Yii::t('app', 'Submit');?></button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<?= \frontend\components\MainSection::widget();?>
