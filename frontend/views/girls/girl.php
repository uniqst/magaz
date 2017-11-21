<?php
$this->title = $model->name;
?>


<div class="row stories-page">

  <div class="col-12">
    <div class="row">
      <div class="offset-lg-3 col-lg-6">
        <h2 class="page-name stories"><?=Yii::t('app', 'Girls');?></h2>
      </div>
    </div>
  </div>
  <div class="col-12">
    <div class="row">
      <div class="offset-lg-3 col-lg-6">
          <h1 class="heading-main mb-0">
            <?=Yii::t('app', 'Bursa platinum girls. High class escorts. Plearsure without limits');?>
          </h1>
      </div>
    </div>
  </div>
  <div class="col-12 dir-tree-links">
      <div class="row">
        <div class="offset-lg-3 col-lg-6">
          <a href="#"><?=Yii::t('app', 'Home');?></a>
          <span> > </span>
          <a href="#"><?=Yii::t('app', 'Catalog');?></a>
          <span> > </span>
          <a href="#"><?=Yii::t('app', 'English');?></a>
        </div>
      </div>
  </div>

  <?= \frontend\components\SidebarLeft::widget();?>

  <div class="col-xl-6">

    <div class="product-card">

        <div class="row mx-0">
            <!-- <div class="product-card"> -->

            <div class="col-12">
                <h1 class="page-name"><?= $model->name?></h1>
            </div>

            <div class="prev">
                <a href="#prev-girl">
                    <button></button>
                </a>
            </div>
            <div class="next">
                <a href="#next-girl">
                    <button></button>
                </a>
            </div>

            <div class="col-sm-7">
                <div class="photo-block">
                    <a href="#" class="order-button">
                        Order now
                    </a>
                    <a class="photo-block__photo" href="http://placehold.it/700x900?text=Image 1" style="background-image: url('http://placehold.it/700x900?text=Image 1')">
                    </a>
                    <div class="photo-block__list flex-column">
                        <a href="http://placehold.it/700x900?text=Image 2">
                            <img src="http://placehold.it/200x200?text=Image 2" alt="Image 1" class="photo-tn">
                        </a>
                        <a href="http://placehold.it/700x900?text=Image 3">
                            <img src="http://placehold.it/200x200?text=Image 3" alt="Image 1" class="photo-tn">
                        </a>
                        <a href="http://placehold.it/700x900?text=Image 4">
                            <img src="http://placehold.it/200x200?text=Image 4" alt="Image 1" class="photo-tn">
                        </a>
                        <a href="http://placehold.it/700x900?text=Image 5">
                            <img src="http://placehold.it/200x200?text=Image 5" alt="Image 1" class="photo-tn">
                        </a>
                    </div>
                </div>
                <h3 class="headline">Price</h3>
                <div class="price-block">
                    <div class="price-block__tabs">
                        <div class="currency">
                            <a href="#" class="active text-left" data-type="eur">eur</a>
                            <a href="#" class="text-center" data-type="try">try</a>
                            <a href="#" class="text-right" data-type="usd">usd</a>
                        </div>
                        <div class="titles">
                            <div class="text-left">Duration</div>
                            <div class="text-center">Incall</div>
                            <div class="text-right">Outcall</div>
                        </div>
                    </div>
                    <div class="price-block__prices">
                        <ul class="eur active price-list" id="eur">
                            <li class="price-item">
                                <span class="duration">1 hour</span>
                                <span class="incall"></span>
                                <span class="outcall">250</span>
                            </li>
                            <li class="price-item">
                                <span class="duration">2 hour</span>
                                <span class="incall"></span>
                                <span class="outcall">350</span>
                            </li>
                        </ul>
                        <ul class="try price-list" id="try">
                            <li class="price-item">
                                <span class="duration">1 hour</span>
                                <span class="incall"></span>
                                <span class="outcall">2350</span>
                            </li>
                            <li class="price-item">
                                <span class="duration">2 hour</span>
                                <span class="incall"></span>
                                <span class="outcall">3350</span>
                            </li>
                        </ul>
                        <ul class="usd price-list" id="usd">
                            <li class="price-item">
                                <span class="duration">1 hour</span>
                                <span class="incall"></span>
                                <span class="outcall">450</span>
                            </li>
                            <li class="price-item">
                                <span class="duration">2 hour</span>
                                <span class="incall"></span>
                                <span class="outcall">550</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-sm-5">
                <div class="card__info-list">
                    <ul>
                        <li class="info-list__item">
                            <span class="property"><?=Yii::t('app', 'Age')?></span>
                            <span class="value"><?= $model->age?></span>
                        </li>
                        <li class="info-list__item">
                            <span class="property"><?=Yii::t('app', 'Nationality')?></span>
                            <span class="value"><?= $model->nationality?></span>
                        </li>
                        <li class="info-list__item">
                            <span class="property"><?=Yii::t('app', 'Height')?></span>
                            <span class="value"><?= $model->height?></span>
                        </li>
                        <li class="info-list__item">
                            <span class="property"><?=Yii::t('app', 'Weight')?></span>
                            <span class="value"><?= $model->weight?></span>
                        </li>
                        <li class="info-list__item">
                            <span class="property"><?=Yii::t('app', 'Mesurements')?></span>
                            <span class="value"><?= $model->mesurements?></span>
                        </li>
                    </ul>
                </div>
                <h3 class="headline"><?=Yii::t('app', 'Categories &amp; Services')?></h3>
                <div class="categories">
                    <a href="#">female escort</a>,
                    <a href="#">russian escort</a>,
                    <a href="#">vip escort</a>
                </div>
                
                <div class="services">
                    <?php foreach($service as $serv):?>
                    <a href="#"><?= $serv->name?></a>
                    <?php endforeach;?>
                </div>
               
            </div>
            <div class="col-12">
                <h3 class="headline about"><?=Yii::t('app', 'About')?> <?= $model->name?></h3>
                <div class="description">
                    <?=Yii::t('app', "$model->about_myself")?>
                </div>
            </div>

        </div>
    </div>
  </div>
  <div class="d-none d-xl-block col-xl-3">
  <?= \frontend\components\SidebarRight::widget();?>
    <!--?= $this->render('../sidebar-right')?-->
  </div>
</div>

  <?= \frontend\components\BottomSlider::widget();?>
<!--?= $this->render('../bottom-slider')?-->
