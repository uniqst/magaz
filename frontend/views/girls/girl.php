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
                        <?=Yii::t('app', 'Order now')?>
                    </a>
                    <a class="photo-block__photo" href="/photo/<?=$model->photo['0']->src?>" style="background-image: url('/photo/<?=$model->photo['0']->src?>')">
                    </a>
                    <div class="photo-block__list flex-column">
                        <?php $photos = array_slice($model->photo, 1);?>
                        <?php foreach($photos as $photo):?>
                        <a href="/photo/<?=$photo->src?>">
                            <img src="/photo/<?=$photo->src?>" alt="Image 1" class="photo-tn">
                        </a>
                        <?php endforeach;?>
                    </div>
                </div>
                <h3 class="headline"><?=Yii::t('app', 'Price')?></h3>
                <div class="price-block">
                    <div class="price-block__tabs">
                        <div class="currency">
                            <a href="#" class="active text-left" data-type="eur"><?=Yii::t('app', 'eur')?></a>
                            <a href="#" class="text-center" data-type="try"><?=Yii::t('app', 'try')?></a>
                            <a href="#" class="text-right" data-type="usd"><?=Yii::t('app', 'usd')?></a>
                        </div>
                        <div class="titles">
                            <div class="text-left"><?=Yii::t('app', 'Duration')?></div>
                            <div class="text-center"><?=Yii::t('app', 'Incall')?></div>
                            <div class="text-right"><?=Yii::t('app', 'Outcall')?></div>
                        </div>
                    </div>
                    <div class="price-block__prices">
                        <ul class="eur active price-list" id="eur">
                            <li class="price-item">
                                <span class="duration"><?=Yii::t('app', '1 hour')?></span>
                                <span class="incall"></span>
                                <span class="outcall"><?=$model->price_eur?></span>
                            </li>
                            <li class="price-item">
                                <span class="duration"><?=Yii::t('app', '2 hour')?></span>
                                <span class="incall"></span>
                                <span class="outcall"><?=$model->price_eur_two?></span>
                            </li>
                            <li class="price-item">
                                <span class="duration"><?=Yii::t('app', '3 hour')?></span>
                                <span class="incall"></span>
                                <span class="outcall"><?=$model->price_eur_three?></span>
                            </li>
                            <li class="price-item">
                                <span class="duration"><?=Yii::t('app', '4 hour')?></span>
                                <span class="incall"></span>
                                <span class="outcall"><?=$model->price_eur_four?></span>
                            </li>
                            <li class="price-item">
                                <span class="duration"><?=Yii::t('app', 'All night')?></span>
                                <span class="incall"></span>
                                <span class="outcall"><?=$model->price_eur_night?></span>
                            </li>
                            <li class="price-item">
                                <span class="duration"><?=Yii::t('app', 'Taxi')?></span>
                                <span class="incall"></span>
                                <span class="outcall"><?=$model->taxi_eur?></span>
                            </li>
                        </ul>
                        <ul class="try price-list" id="try">
                            <li class="price-item">
                                <span class="duration"><?=Yii::t('app', '1 hour')?></span>
                                <span class="incall"></span>
                                <span class="outcall"><?=$model->price_try?></span>
                            </li>
                            <li class="price-item">
                                <span class="duration"><?=Yii::t('app', '2 hour')?></span>
                                <span class="incall"></span>
                                <span class="outcall"><?=$model->price_try_two?></span>
                            </li>
                            <li class="price-item">
                                <span class="duration"><?=Yii::t('app', '3 hour')?></span>
                                <span class="incall"></span>
                                <span class="outcall"><?=$model->price_try_three?></span>
                            </li>
                            <li class="price-item">
                                <span class="duration"><?=Yii::t('app', '4 hour')?></span>
                                <span class="incall"></span>
                                <span class="outcall"><?=$model->price_try_four?></span>
                            </li>
                            <li class="price-item">
                                <span class="duration"><?=Yii::t('app', 'All night')?></span>
                                <span class="incall"></span>
                                <span class="outcall"><?=$model->price_try_night?></span>
                            </li>
                            <li class="price-item">
                                <span class="duration"><?=Yii::t('app', 'Taxi')?></span>
                                <span class="incall"></span>
                                <span class="outcall"><?=$model->taxi_try?></span>
                            </li>
                        </ul>
                        <ul class="usd price-list" id="usd">
                            <li class="price-item">
                                <span class="duration"><?=Yii::t('app', '1 hour')?></span>
                                <span class="incall"></span>
                                <span class="outcall"><?=$model->price_usd?></span>
                            </li>
                            <li class="price-item">
                                <span class="duration"><?=Yii::t('app', '2 hour')?></span>
                                <span class="incall"></span>
                                <span class="outcall"><?=$model->price_usd_two?></span>
                            </li>
                            <li class="price-item">
                                <span class="duration"><?=Yii::t('app', '3 hour')?></span>
                                <span class="incall"></span>
                                <span class="outcall"><?=$model->price_usd_three?></span>
                            </li>
                            <li class="price-item">
                                <span class="duration"><?=Yii::t('app', '4 hour')?></span>
                                <span class="incall"></span>
                                <span class="outcall"><?=$model->price_usd_four?></span>
                            </li>
                            <li class="price-item">
                                <span class="duration"><?=Yii::t('app', 'All night')?></span>
                                <span class="incall"></span>
                                <span class="outcall"><?=$model->price_usd_night?></span>
                            </li>
                            <li class="price-item">
                                <span class="duration"><?=Yii::t('app', 'Taxi')?></span>
                                <span class="incall"></span>
                                <span class="outcall"><?=$model->taxi_usd?></span>
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
<!--                <div class="categories">-->
<!--                    <a href="#">female escort</a>,-->
<!--                    <a href="#">russian escort</a>,-->
<!--                    <a href="#">vip escort</a>-->
<!--                </div>-->
                
                <div class="services">
                    <?php foreach($model->value as $cat):?>
                    <a href="#"><?= $cat->category->name?>, </a>
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
