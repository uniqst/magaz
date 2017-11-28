

<div class="row">

  <?= \frontend\components\SidebarLeft::widget();?>

  <div class="main-center-col col-xl-58p">

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
                            <img height="500" width="700" src="/photo/<?= $want->img_mw?>"  alt="">
                      <?php endforeach;?>
                    </div>
                    <?php foreach($model as $want):?>
                    <div class="most-wanted__name">
                        <p><?= $want->name?></p>
                    </div>
                    <div class="most-wanted__description">
                        <p><?= $want->about_myself?></p>
                    </div>
                  <?php endforeach;?>
                </div>
            </div>


            

    <div class="main-info-box">
      <h2 class="info-box__heading">
        <?=Yii::t('app', 'Ankara escort girls are here already and they are all prepared to give you the delightful evening');?>
      </h2>
      <p>
        <?=Yii::t('app', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quod atque perspiciatis dolor ipsa assumenda. Fuga culpa at minima ex assumenda quo? At voluptatem ipsa aliquid beatae debitis, modi atque aut. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ratione eligendi repudiandae voluptatibus. Corrupti officiis facere veniam consequuntur libero! Reiciendis totam ipsum impedit hic nostrum atque culpa necessitatibus sunt labore rerum? Explicabo porro fugiat atque eaque eveniet esse deserunt provident optio non, architecto sequi asperiores maiores totam? Consectetur magnam modi praesentium incidunt sapiente ea? Esse iure rerum a accusantium iste maxime. Incidunt aspernatur voluptates consectetur dolorum temporibus necessitatibus hic animi dolor in perferendis beatae vitae excepturi alias, consequuntur quas inventore nobis quam quasi sequi vel quos voluptatum rem laudantium! Ratione, excepturi!');?>
      </p>
      <p>
        <?=Yii::t('app', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ea soluta temporibus laboriosam adipisci quidem odio et, provident voluptatum non aliquam? Ad eaque, error impedit accusamus eum architecto veniam praesentium omnis. Dolorum, pariatur? At repudiandae quibusdam sunt perspiciatis, id esse voluptate praesentium suscipit cupiditate magnam ab quis eum non minus. Maxime assumenda dolores facere mollitia vitae explicabo voluptatum quae unde illo. Officia odit itaque commodi ratione totam maiores, fugit explicabo! Voluptatibus aliquid consequatur voluptates, quod, unde ducimus dolor, enim assumenda deserunt nostrum fuga dignissimos quam eum voluptatum! Quibusdam tempore eos itaque!');?>
      </p>
      <p>
        <?=Yii::t('app', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, repellendus quas dolorem odit, minus ducimus, ut beatae suscipit explicabo voluptatibus est molestiae dolor eos esse. Deleniti officia laboriosam cupiditate maiores!');?>
      </p>
    </div>

  </div>

  <div class="d-none d-xl-block col-xl-21p">
    <?= \frontend\components\SidebarRight::widget();?>
  </div>

</div>

<div class="row">
  <?= \frontend\components\BottomSlider::widget();?>
</div>
