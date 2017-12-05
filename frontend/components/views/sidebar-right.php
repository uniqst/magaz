<?
use yii\helpers\Url;
?>
<div class="main-sidebar-right">
    <div class="page-name">
        <?=Yii::t('app', 'Intresting');?>
    </div>
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
                        <a href="<?=Url::to(['/stories/story', 'id' => $rand->id, 'name' => $rand->H1])?>"><?=Yii::t('app', 'Story');?></a>
                    </div>
                    <div class="item-box__info">
                        <a href="<?=Url::to(['/stories/story', 'id' => $rand->id, 'name' => $rand->H1])?>">
                            <?= Yii::t('app', substr($rand->short_description, 0, 50))?>
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
                        <a href="<?=Url::to(['/services/index', 'id' => $rand->id, 'name' => $rand->name])?>">
                            <?= Yii::t('app', $rand->name)?>
                        </a>
                    </div>
                </div>
            </div>    
        <?php endif;?>
    <?php endforeach;?>
</div>

<!--<div class="main-sidebar-right">-->
<!--  <div class="page-name">-->
<!--    Intresting-->
<!--  </div>-->
<!--    <div class="slider-item">-->
<!--      <div class="item-box girl" style="background-image: url('../img/cat.jpg')">-->
<!--        <div class="item-box__title">-->
<!--          <a href="#">Oksana</a>-->
<!--        </div>-->
<!--        <div class="item-box__info">-->
<!--          <span>Age: 28</span>-->
<!--          <span>Russia</span>-->
<!--        </div>-->
<!--      </div>-->
<!--    </div>-->
<!--    <div class="slider-item">-->
<!--      <div class="item-box service" style="background-image: url('../img/cat.jpg')">-->
<!--        <div class="item-box__title">-->
<!--          <a href="#">Service</a>-->
<!--        </div>-->
<!--        <div class="item-box__info">-->
<!--          <a href="#">Doggy Style</a>-->
<!--        </div>-->
<!--      </div>-->
<!--    </div>-->
<!--    <div class="slider-item">-->
<!--      <div class="item-box story" style="background-image: url('../img/cat.jpg')">-->
<!--        <div class="item-box__title">-->
<!--          <a href="#story">Story</a>-->
<!--        </div>-->
<!--        <div class="item-box__info">-->
<!--          <a href="#story">-->
<!--            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi ipsam nam, itaque tempore consequatur facilis expedita et autem, iusto dolores maiores, similique praesentium beatae culpa enim? Magnam, porro voluptates? Praesentium.-->
<!--          </a>-->
<!--        </div>-->
<!--      </div>-->
<!--    </div>-->
<!--</div>-->