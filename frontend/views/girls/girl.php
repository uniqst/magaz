<?php
use yii\helpers\Url;
use frontend\models\Profile;
$this->title = $model->name;
$id = Yii::$app->request->get('id');
$next = Profile::findOne($id+1);
$prev = Profile::findOne($id-1);
?>


<div class="row stories-page">

  <div class="col-12">
    <div class="row">
      <div class="mx-auto col-xl-58p">
        <h2 class="page-name stories"><?=Yii::t('app', 'Girls');?></h2>
      </div>
    </div>
  </div>
  <div class="col-12">
    <div class="row">
      <div class="mx-auto col-xl-58p">
          <h1 class="heading-main mb-0">
            <?=Yii::t('app', 'Bursa platinum girls. High class escorts. Plearsure without limits');?>
          </h1>
      </div>
    </div>
  </div>
  <div class="col-12 dir-tree-links">
      <div class="row">
        <div class="mx-auto col-xl-58p">
            <a href="<?=Url::to(['/'])?>"><?=Yii::t('app','Home')?></a>
            <span> > </span>
            <a href="<?=Url::to(['/girls'])?>"><?=Yii::t('app','Girls')?></a>
            <span> > </span>
            <a href="<?=Url::to(['/girls/girl', 'id' => $model->id])?>"><?=Yii::t('app',$model->name)?></a>
        </div>
      </div>
  </div>

  <?= \frontend\components\SidebarLeft::widget();?>

  <div class="col-xl-58p">

    <div class="product-card">

        <div class="row mx-0">
            <!-- <div class="product-card"> -->

            <div class="col-12">
                <h1 class="page-name"><?= $model->name?></h1>
            </div>

            <div class="prev">
                <a href="<?= Url::to(['/girls/girl/', 'id' => $model->id-1, 'name' => $prev->name])?>">
                    <button></button>
                </a>
            </div>
            <div class="next">
                <?php $next = $next->id+1?>
                <?php if(!isset($next) ){$next = 1;} ?>
                <a href="<?= Url::to(['/girls/girl/', 'id' => $model->id+1, 'name' => $next->name])?>">
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
    <div class="video-block">
        <h3 class="video-block__title">Lorem ipsum dolor sit amet, consectetur adipisicing elit</h3>
        <video id="promo-video" class="video-js mx-auto" controls preload="auto" width="480" height="290"
        poster="http://vjs.zencdn.net/v/oceans.png" data-setup="{}">
            <source src="http://vjs.zencdn.net/v/oceans.mp4" type='video/mp4'>
            <p class="vjs-no-js">
            To view this video please enable JavaScript, and consider upgrading to a web browser that
            </p>
        </video>
    </div>
            <div class="d-none d-md-block px-0 most-wanted-block--expanded">
                <div class="most-wanted-block">
                    <div class="most-wanted-slider most-wanted-new-slider-js">
                            <img src="http://placehold.it/700x500"  alt="">
                            <img src="http://placehold.it/700x500"  alt="">
                            <img src="http://placehold.it/700x500"  alt="">
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
                            <div class="girl-image" style="background-image: url(http://placehold.it/700x500)"></div>
                        </div>
                        <div class="most-wanted-slider__item">
                            <div class="girl-image" style="background-image: url(http://placehold.it/700x500)"></div>
                        </div>
                        <div class="most-wanted-slider__item">
                            <div class="girl-image" style="background-image: url(http://placehold.it/700x500)"></div>
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
  </div>

  <div class="d-none d-xl-block col-xl-21p">
    <?= \frontend\components\SidebarRight::widget();?>
    <!--?= $this->render('../sidebar-right')?-->
  </div>
</div>

  <?= \frontend\components\BottomSlider::widget();?>
<!--?= $this->render('../bottom-slider')?-->
