<?php
use yii\helpers\Url;
?>
<?php foreach($model as $product):?>
<div class="girl-info">

    <div class="girl-info__title">
        <p><?= Yii::t('app', $product->name_description)?></p>
        <a href="<?= Url::to(['/girls/girl', 'id' => $product->id, 'name' => $product->name]) ?>">
            <?= Yii::t('app',$product->name)?>
        </a>

    </div>


    <div class="girl-info__card container-fluid">
        <div class="row">
          <div class="col-md-8">
            <div class="card__photo-section container-fluid">
              <div class="row">

                <?php $photos = array_slice($product->photo, 0, 2);?>
                <?php foreach($photos as $photo):?>
                <div class="col">
                    <a href="<?= Url::to(['/girls/girl', 'id' => $product->id, 'name' => $product->name]) ?>">
                      <div class="photo" style="background-image: url(/photo/<?= $photo->src?>)"></div>
                    </a>
                </div>
                <?php endforeach;?>

              </div>
            </div>
            <div class="card__description">
             <?= Yii::t('app', $product->about_myself)?>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card__info-list">
              <ul>
                <li class="info-list__item">
                            <span class="property"><?=Yii::t('app', 'AGE')?></span>
                            <span class="value"><?= $product->age?></span>
                        </li>
                        <li class="info-list__item">
                            <span class="property"><?=Yii::t('app', 'NATIONALITY')?></span>
                            <span class="value"><?= $product->nationality?></span>
                        </li>
                        <li class="info-list__item">
                            <span class="property"><?=Yii::t('app', 'HEIGHT')?></span>
                            <span class="value"><?= $product->height?></span>
                        </li>
                        <li class="info-list__item">
                            <span class="property"><?=Yii::t('app', 'WEIGHT')?></span>
                            <span class="value"><?= $product->weight?></span>
                        </li>
                        <li class="info-list__item">
                            <span class="property"><?=Yii::t('app', 'CHEST')?></span>
                            <span class="value"><?= $product->chest?></span>
                        </li>
                        <li class="info-list__item">
                            <span class="property"><?=Yii::t('app', 'OPTIONS')?></span>
                            <span class="value"><?= $product->mesurements?></span>
                        </li>
                        <li class="info-list__item">
                            <span class="property"><?=Yii::t('app', 'HAIR COLOR')?></span>
                            <span class="value"><?= $product->hair?></span>
                        </li>
                        <li class="info-list__item">
                            <span class="property"><?=Yii::t('app', 'EYE COLOR')?></span>
                            <span class="value"><?= $product->eye?></span>
                        </li>
                        <li class="info-list__item">
                            <span class="property"><?=Yii::t('app', 'LANGUAGES')?></span>
                            <span class="value"><?= $product->language?></span>
                        </li>
                        <li class="info-list__item">
                            <span class="property"><?=Yii::t('app', 'CONTACT')?></span>
                            <span class="value"><?= $contact->phone?></span>
                        </li>
                        <li class="info-list__item">
                            <span class="property"><?=Yii::t('app', 'EMAIL')?></span>
                            <span class="value"><?= $contact->email?></span>
                        </li>
                        <li class="info-list__item">
                            <span class="property"><?=Yii::t('app', 'CITY')?></span>
                            <span class="value"><?= $product->city?></span>
                        </li>
                        <li class="info-list__item">
                            <span class="property"><?=Yii::t('app', 'WORKING HOURS')?></span>
                            <span class="value"><?= $product->working_hours?></span>
                        </li>
                        <li class="info-list__item">
                            <span class="property"><?=Yii::t('app', 'REGISTRATE')?></span>
                            <span class="value"><?= date('d-m-Y', time($product->date))?></span>
                        </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

    </div>
    <?php endforeach;?>