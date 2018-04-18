<?php
use yii\helpers\Url;
use frontend\models\Profile;
$this->title = Yii::t('app', $model->title);
$this->registerMetaTag([
'name' => 'description',
'content' => Yii::t('app', $model->description)
]);

Yii::$app->controller->view->registerMetaTag(['property'=>'og:title', 'content'=>$model->title], 'og:title');
Yii::$app->controller->view->registerMetaTag(['property'=>'og:site_name', 'content'=>"allescortsankara"], 'og:site_name');
Yii::$app->controller->view->registerMetaTag(['property'=>'og:url', 'content'=>Url::to(['/girl', 'id' => $model->id, 'name' => $model->name])], 'og:url');
Yii::$app->controller->view->registerMetaTag(['property'=>'og:image', 'content'=>"/photo/" . $model->photo['0']->src], 'og:image');
Yii::$app->controller->view->registerMetaTag(['property'=>'og:type', 'content'=>"website"], 'og:type');

$id = Yii::$app->request->get('id');
$last = Profile::find()->orderBy('id DESC')->where(['status' => 1])->one();
$first = Profile::find()->orderBy('id ASC')->where(['status' => 1])->one();

$next = Profile::find()->where(['>', 'id', $id])->andWhere(['status' => 1])->one();
if(!isset($next->id)){
    $next = Profile::findOne($first->id);
}
$prev = Profile::find()->where(['<', 'id', $id])->orderBy('id DESC')->andWhere(['status' => 1])->one();
if($prev->id == ''){
    $prev = Profile::findOne($last->id);
}
?>


<div class="row stories-page">

 
  <div class="col-12">
    <div class="row">
      <div class="mx-auto col-xl-58p">
          <h1 class="heading-main mb-0">
            <?=Yii::t('app', $model->H1);?>
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
        </div>
      </div>
  </div>

  <?= \frontend\components\SidebarLeft::widget();?>

  <div class="col-xl-58p">

    <div class="product-card">

        <div class="row mx-0">
            <!-- <div class="product-card"> -->

            <div class="col-12">
                <div class="page-name"><?=Yii::t('app', $model->name);?></div>
            </div>

            <div class="prev">
                <a href="<?= Url::to(['/girls/girl/', 'id' => $prev->id, 'name' => $prev->name])?>">
                <span class="button"></span>
                </a>
            </div>
            <div class="next">
                <a href="<?= Url::to(['/girls/girl/', 'id' => $next->id, 'name' => $next->name])?>">
                <span class="button"></span>
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
                <div class="headline"><?=Yii::t('app', 'Price')?></div>
                <div class="price-block">
                    <div class="price-block__tabs">
                        <div class="currency">
                            <a href="#" class="active text-left" data-type="try"><?=Yii::t('app', 'try')?></a>
                            <a href="#" class="text-center" data-type="eur"><?=Yii::t('app', 'eur')?></a>
                            <a href="#" class="text-right" data-type="usd"><?=Yii::t('app', 'usd')?></a>
                        </div>
                        <div class="titles">
                            <div class="text-left"><?=Yii::t('app', 'Duration')?></div>
                            <div class="text-center"><?=Yii::t('app', 'Incall')?></div>
                            <div class="text-right"><?=Yii::t('app', 'Outcall')?></div>
                        </div>
                    </div>
                    <div class="price-block__prices">
                        <ul class="try active price-list" id="try">
                            <?php foreach($price_try as $eur):?>
                            <li class="price-item">
                                <span class="duration"><?=Yii::t('app', $eur->name)?></span>
                                <span class="incall"><?= $eur->incall ? $eur->incall . ' <i class="fa fa-try" aria-hidden="true"></i>' : '-'?></span>
                                <span class="outcall"><?=$eur->outcall ? $eur->outcall . ' <i class="fa fa-try" aria-hidden="true"></i>' : '-'?></span>
                            </li>
                            <?php endforeach;?>
                        </ul>
                        <ul class="eur price-list" id="eur">
                            <?php foreach($price_eur as $eur):?>
                            <li class="price-item">
                                <span class="duration"><?=Yii::t('app', $eur->name)?></span>
                                <span class="incall"><?= $eur->incall ? $eur->incall . ' <i class="fa fa-eur" aria-hidden="true"></i>' : '-'?></span>
                                <span class="outcall"><?=$eur->outcall ? $eur->outcall . ' <i class="fa fa-eur" aria-hidden="true"></i>' : '-'?></span>
                            </li>
                            <?php endforeach;?>
                        </ul>
                        <ul class="usd price-list" id="usd">
                            <?php foreach($price_usd as $eur):?>
                            <li class="price-item">
                                <span class="duration"><?=Yii::t('app', $eur->name)?></span>
                                <span class="incall"><?= $eur->incall ? $eur->incall . ' <i class="fa fa-usd" aria-hidden="true"></i>' : '-'?></span>
                                <span class="outcall"><?=$eur->outcall ? $eur->outcall . ' <i class="fa fa-usd" aria-hidden="true"></i>' : '-'?> </span>
                            </li>
                            <?php endforeach;?>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-sm-5">
                <div class="card__info-list">
                    <ul>
                        <li class="info-list__item">
                            <span class="property"><?=Yii::t('app', 'age')?></span>
                            <span class="value"><?= $model->age?></span>
                        </li>
                        <li class="info-list__item">
                            <span class="property"><?=Yii::t('app', 'nationality')?></span>
                            <span class="value"><?=Yii::t('app' ,$model->nationality)?></span>
                        </li>
                        <li class="info-list__item">
                            <span class="property"><?=Yii::t('app', 'height')?></span>
                            <span class="value"><?= $model->height?></span>
                        </li>
                        <li class="info-list__item">
                            <span class="property"><?=Yii::t('app', 'weight')?></span>
                            <span class="value"><?= $model->weight?></span>
                        </li>
                        <li class="info-list__item">
                            <span class="property"><?=Yii::t('app', 'chest')?></span>
                            <span class="value"><?= $model->chest?></span>
                        </li>
                        <li class="info-list__item">
                            <span class="property"><?=Yii::t('app', 'options')?></span>
                            <span class="value"><?=Yii::t('app', $model->mesurements)?></span>
                        </li>
                        <li class="info-list__item">
                            <span class="property"><?=Yii::t('app', 'hair color')?></span>
                            <span class="value"><?=Yii::t('app', $model->hair)?></span>
                        </li>
                        <li class="info-list__item">
                            <span class="property"><?=Yii::t('app', 'eye color')?></span>
                            <span class="value"><?=Yii::t('app', $model->eye)?></span>
                        </li>
                        <li class="info-list__item">
                            <span class="property"><?=Yii::t('app', 'language')?></span>
                            <span class="value"><?=Yii::t('app', $model->language)?></span>
                        </li>
                        <li class="info-list__item">
                            <span class="property"><?=Yii::t('app', 'contact')?></span>
                            <span class="value"><?= $contact->phone?></span>
                        </li>
                        <li class="info-list__item">
                            <span class="property"><?=Yii::t('app', 'email')?></span>
                            <span class="value"><?= $contact->email?></span>
                        </li>
                        <li class="info-list__item">
                            <span class="property"><?=Yii::t('app', 'city')?></span>
                            <span class="value"><?=Yii::t('app', $model->city)?></span>
                        </li>
                        <li class="info-list__item">
                            <span class="property"><?=Yii::t('app', 'working hour')?></span>
                            <span class="value"><?= $model->working_hours?></span>
                        </li>
                        <li class="info-list__item">
                            <span class="property"><?=Yii::t('app', 'registrate')?></span>
                            <span class="value"><?= date('d-m-Y', time($model->date))?></span>
                        </li>
                    </ul>
                </div>
                <div class="headline"><?=Yii::t('app', 'Categories &amp; Services')?></div>
                
                <div class="services">
                    <?php foreach($model->value as $cat):?>
                        <?php if($cat == end($model->value)):?>

                    <a href="<?=Url::to(['/girls/filters', 'value['. $cat->category->id .']' => $cat->category->id])?>"><?=Yii::t('app', $cat->category->name)?></a>
                            <?php elseif($cat != end($model->value)):?>
                            <a href="<?=Url::to(['/girls/filters', 'value['. $cat->category->id .']' => $cat->category->id])?>"><?=Yii::t('app', $cat->category->name)?>,</a>
                        <?php endif;?>
                    <?php endforeach;?>
                </div>

                <div class="services" style="margin-top: -17px;">
                    <?php foreach($model->attVal as $at):?>
                        <?php if($at == end($model->attVal)):?>
                            <a href="<?=Url::to(['/girls/filters', 'service['. $at->att->id .']' => $at->att->id])?>"><?=Yii::t('app', $at->att->name)?></a>
                        <?php elseif($at != end($model->attVal)):?>
                            <a href="<?=Url::to(['/girls/filters', 'service['. $at->att->id .']' => $at->att->id])?>"><?=Yii::t('app', $at->att->name)?>,</a>
                        <?php endif;?>
                    <?php endforeach;?>
                </div>
               
            </div>
            <div class="col-12">
                <div class="headline about"><?=Yii::t('app', 'About')?> <?=Yii::t('app', $model->name)?></div>
                <div class="description">
                    <?=Yii::t('app', "$model->about_myself")?>
                </div>
            </div>

        </div>
    </div>




            <div class="mp-text-block">
                <h2 class="mp-text-block__heading">
                    <?=Yii::t('app', $model->H2);?>
                </h2>
                <div class="mp-text-block__text">
                        <?=Yii::t('app', $model->text1000)?>
                </div>
            </div>

            <?= \frontend\components\MostWantedGirl::widget();?>
  </div>

  <div class="d-none d-xl-block col-xl-21p">
    <?= \frontend\components\SidebarRight::widget();?>
  </div>


  <?= \frontend\components\BottomSlider::widget();?>


<style>
    .property{
        text-transform: uppercase;
    }
</style>