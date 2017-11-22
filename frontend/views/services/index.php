<div class="row stories-page">

  <div class="col-12">
    <div class="row">
      <div class="mx-auto col-xl-58p">
        <h2 class="page-name stories"><?=Yii::t('app', 'Services');?></h1>
      </div>
    </div>
  </div>
  <div class="col-12">
    <div class="row">
      <div class="mx-auto col-xl-58p">
          <h2 class="heading-main mb-0">
            <?=Yii::t('app', 'EROTIC SERVICES IS A STRAIT PASS TO UNLIMETED PLEASURE');?>
          </h2>
      </div>
    </div>
  </div>
  <div class="col-12 dir-tree-links">
      <div class="row">
        <div class="mx-auto col-xl-58p">
          <a href="#"><?=Yii::t('app', 'Home');?></a>
          <span> > </span>
          <a href="#"><?=Yii::t('app', 'Catalog');?></a>
          <span> > </span>
          <a href="#"><?=Yii::t('app', 'English');?></a>
        </div>
      </div>
  </div>

  <?= \frontend\components\SidebarLeft::widget()?>

  <div class="mx-auto col-xl-58p">
 
    <?= \frontend\components\Service::widget()?>
  </div>
  <div class="d-none d-xl-block col-xl-21p">
    <?= \frontend\components\SidebarRight::widget()?>
  </div>
</div>

<?= \frontend\components\BottomSlider::widget()?>
