<? use yii\helpers\Url;
?>
<div class="main-sidebar-right">
    <div class="page-name">
        <?=Yii::t('app', 'Intresting');?>
    </div>
   <?php foreach($model as $rand):?>
        <?php if($rand->date == 'profile'):?>
     <div class="slider-item">
                <div class="item-box girl" style="background-image: url('/photo/<?=$rand->image->src?>')">
                <a href="<?=Url::to(['/girls/girl', 'id' => $rand->id, 'name' => $rand->name])?>" class="item-box girl"></a>
                    <div class="item-box__title">
                        <a href="<?=Url::to(['/girls/girl', 'id' => $rand->id, 'name' => $rand->name])?>"><?= Yii::t('app', $rand->name)?></a>
                    </div>
                    <div class="item-box__info">
                        <span>Age: <?= Yii::t('app', $rand->age)?></span>
                        <span><?= Yii::t('app', $rand->nationality)?></span>
                    </div>
                </div>
            </div>
        <?php elseif($rand->date == 'stories'):?>
            <div class="slider-item">
                <div class="item-box story" style="background-image: url('/stori/<?=$rand->img?>')">
                <a href="<?=Url::to(['/stories/story', 'id' => $rand->id, 'name' => $rand->H1])?>" class="item-box story"></a>
                    <div class="item-box__title">
                        <div>
                            <a href="<?=Url::to(['/stories/story', 'id' => $rand->id, 'name' => $rand->H1])?>"><?=Yii::t('app', 'Story');?></a>
                        </div>
                    </div>
                    <div class="item-box__info text-center">
                        <span>
                            <a href="<?=Url::to(['/stories/story', 'id' => $rand->id, 'name' => $rand->H1])?>" style="overflow: hidden">
                                <?= Yii::t('app', $rand->short_description)?>
                            </a>
                        </span>
                    </div>
                </div>
            </div>
        <?php elseif($rand->date == 'service'):?>
            <div class="slider-item">
                <div class="item-box service" style="background-image: url('/service/<?=$rand->img?>')">
                    <a href="<?=Url::to(['/services/index', 'id' => $rand->id, 'name' => $rand->name])?>" class="item-box service"></a>
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


