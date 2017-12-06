

<div class="row">

  <?= \frontend\components\SidebarLeft::widget();?>

  <div class="main-center-col col-xl-58p">
        <?php if(Yii::$app->controller->id == 'reviews-for-escort'):?>
          <?=\frontend\components\CommentsList::widget()?>
      <?php endif;?>

   <?= frontend\components\Product::widget(); ?>

   <?= frontend\components\Story::widget(); ?>



            <!-- <script>
              jQuery(function() {
                jQuery('.most-wanted-new-slider-js').waterwheelCarousel({
                  separation: 130,
                  horizonOffset: 60,
                  opacityMultiplier: .4
                });
              });
            </script> -->

            <div class="d-none d-md-block px-0 most-wanted-block--expanded">
                <div class="most-wanted-block">
                    <div class="most-wanted-slider most-wanted-new-slider-js">
                      <?php foreach($model as $want):?>
                            <img height="500" width="700" data-girl-id="girl-<?= $want->id?>" src="/photo/<?= $want->img_mw?>"  alt="Girl image">
                      <?php endforeach;?>
                      <div class="most-wanted-slider__buttons">
                          <button class="mv-prev"></button>
                          <button class="mv-next"></button>
                      </div>
                    </div>
                    <?php foreach($model as $want):?>
                      <div class="most-wanted-wrapper" id="girl-<?= $want->id?>">
                        <div class="most-wanted__name">
                            <p><?= Yii::t('app', $want->name)?></p>
                        </div>
                        <div class="most-wanted__description">
                            <p><?= Yii::t('app', $want->about_myself)?></p>
                        </div>
                      </div>
                  <?php endforeach;?>
                </div>
            </div>


            

    
