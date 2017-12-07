<?php
use yii\helpers\Url;
?>
<?php foreach($model as $product):?>
<div class="girl-info">

      <div class="girl-info__title">
        <a href="<?= Url::to(['/girls/girl', 'id' => $product->id, 'name' => $product->name]) ?>">
          <?= Yii::t('app', $profile->name_description)?><?= $product->name?>
        </a>
      </div>

      <div class="girl-info__card container-fluid">
        <div class="row">
          <div class="col-md-8">
            <div class="card__photo-section container-fluid">
              <div class="row">
                <!-- <div class="photo" style="background-image: url(img/cat.jpg)"></div>
                <div class="photo" style="background-image: url(img/cat.jpg)"></div> -->
                <?php foreach($product->photo as $photo):?>
                <div class="col">
                  <div class="photo" style="background-image: url(/photo/<?= $photo->src?>)"></div>
                </div>
                <?php endforeach;?>
                <!-- <div class="d-none col">
                  <div class="photo" style="background-image: url(img/cat.jpg)"></div>
                </div> -->
              </div>
            </div>
            <div class="card__description">
             <?= Yii::t('app', $profile->$product->about_myself)?>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card__info-list">
              <ul>
                <li class="info-list__item">
                  <span class="property"><?=Yii::t('app','Age');?></span>
                  <span class="value"><?= $product->age?></span>
                </li>
                <li class="info-list__item">
                  <span class="property"><?= Yii::t('app', 'Nationality')?></span>
                  <span class="value"><?= $product->nationality?></span>
                </li>
                <li class="info-list__item">
                  <span class="property"><?= Yii::t('app', 'Height')?></span>
                  <span class="value"><?= $product->height?></span>
                </li>
                <li class="info-list__item">
                  <span class="property"><?= Yii::t('app', 'Weight')?></span>
                  <span class="value"><?= $product->weight?></span>
                </li>
                <li class="info-list__item">
                  <span class="property"><?= Yii::t('app', 'Options')?></span>
                  <span class="value"><?= $product->mesurements?></span>
                </li>
                <li class="info-list__item">
                  <span class="property"><?= Yii::t('app', 'Contact')?></span>
                  <span class="value"><?= $product->phone?></span>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

    </div>
    <?php endforeach;?>