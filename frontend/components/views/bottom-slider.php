<div class="col-12 bottom-items-slider">
  <div class="slick-carousel">
    <?php foreach($model as $rand):?>
        <?php if(isset($rand->image)):?>
     <div class="slider-item">
                <div class="item-box girl" style="background-image: url('/photo/<?=$rand->image->src?>')">
                    <div class="item-box__title">
                        <a href="#"><?=$rand->name?></a>
                    </div>
                    <div class="item-box__info">
                        <span>Age: <?= Yii::t('app', $rand->age)?></span>
                        <span>R<?= Yii::t('app', $rand->nationality)?></span>
                    </div>
                </div>
            </div>
        <?php elseif(isset($rand->img)):?>
            <div class="slider-item">
                <div class="item-box story" style="background-image: url('/story/<?=$rand->img?>')">
                    <div class="item-box__title">
                        <a href="#story"><?=Yii::t('app', 'Story');?></a>
                    </div>
                    <div class="item-box__info">
                        <a href="#story">
                            <?= Yii::t('app', $rand->content)?>
                        </a>
                    </div>
                </div>
            </div>
        <?php endif;?>
    <?php endforeach;?>
    </div>
  </div>
</div>