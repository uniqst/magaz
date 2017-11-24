<div class="row dir-tree-links">
  <div class="mx-auto col-xl-58p">
    <a href="#"><?=Yii::t('app', 'Home');?></a>
    <span> > </span>
    <a href="#"><?=Yii::t('app', 'Catalog');?></a>
    <span> > </span>
    <a href="#"><?=Yii::t('app', 'English');?></a>
  </div>
</div>

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
                            <img src="photo/82db0c2c079e2f8f56a2.png"  alt="">
                            <img src="photo/82db0c2c079e2f8f56a2.png"  alt="">
                            <img src="photo/82db0c2c079e2f8f56a2.png"  alt="">
                    </div>
                    <div class="most-wanted__name">
                        <p>Sveta</p>
                    </div>
                    <div class="most-wanted__description">
                        <p>This design is fucking brilliant. Fuck. Can we all just agree as the greater design community to stop fucking talking about Comic Sans altogether? It’s getting fucking old. A good fucking composition is the result of a hierarchy consisting of clearly contrasting elements set with distinct alignments containing irregular intervals of negative space. Paul Rand once said, “The public is more familiar with bad fucking design than good design.</p>
                    </div>
                </div>
            </div>


            <div class="d-md-none px-0 most-wanted-block">
                <div class="most-wanted-block">
                    <h3 class="page-name">Most Wanted</h3>
                    <div class="most-wanted-slider most-wanted-slider-js">
                        <div class="most-wanted-slider__item">
                            <div class="girl-image" style="background-image: url(photo/82db0c2c079e2f8f56a2.png)"></div>
                        </div>
                        <div class="most-wanted-slider__item">
                            <div class="girl-image" style="background-image: url(photo/82db0c2c079e2f8f56a2.png)"></div>
                        </div>
                        <div class="most-wanted-slider__item">
                            <div class="girl-image" style="background-image: url(photo/82db0c2c079e2f8f56a2.png)"></div>
                        </div>
                    </div>
                    <div class="most-wanted__name">
                        <p>Sveta</p>
                    </div>
                    <div class="most-wanted__description">
                        <p>This design is fucking brilliant. Fuck. Can we all just agree as the greater design community to stop fucking talking about Comic Sans altogether? It’s getting fucking old. A good fucking composition is the result of a hierarchy consisting of clearly contrasting elements set with distinct alignments containing irregular intervals of negative space. Paul Rand once said, “The public is more familiar with bad fucking design than good design.</p>
                    </div>
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
