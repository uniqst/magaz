<?
use yii\helpers\Url;
?>
<div class="col-12 ">
  <div class="bottom-items-slider">
    <div class="slick-carousel">
        <?php foreach($model as $rand):?>
            <?php if($rand->date == 'profile'):?>
        <div class="slider-item">
                    <div class="item-box girl" style="background-image: url('/photo/<?=$rand->image->src?>')">
                        <div class="item-box__title">
                            <a href="<?=Url::to(['/girls/girl', 'id' => $rand->id, 'name' => $rand->name])?>"><?=$rand->name?></a>
                        </div>
                        <div class="item-box__info">
                            <span>Age: <?= Yii::t('app', $rand->age)?></span>
                            <span>R<?= Yii::t('app', $rand->nationality)?></span>
                        </div>
                    </div>
                </div>
            <?php elseif($rand->date == 'stories'):?>
                <div class="slider-item">
                    <div class="item-box story" style="background-image: url('/stori/<?=$rand->img?>')">
                        <div class="item-box__title">
                            <a href="<?=Url::to(['/stories/story', 'id' => $rand->id, 'name' => $rand->name])?>"><?=Yii::t('app', $rand->name);?></a>
                        </div>
                        <div class="item-box__info">
                            <a href="#story">
                                <?= Yii::t('app', $rand->content)?>
                            </a>
                        </div>
                    </div>
                </div>
            <?php elseif($rand->date == 'service'):?>
                <div class="slider-item">
                    <div class="item-box service" style="background-image: url('/service/<?=$rand->img?>')">
                        <div class="item-box__title">
                            <a href="<?=Url::to(['/services/index', 'id' => $rand->id, 'name' => $rand->name])?>"><?=Yii::t('app', 'Service');?></a>
                        </div>
                        <div class="item-box__info">
                            <a href="#service">
                                <?= Yii::t('app', $rand->name)?>
                            </a>
                        </div>
                    </div>
                </div>    
            <?php endif;?>
        <?php endforeach;?>
        </div>
    </div>
  </div>
</div>