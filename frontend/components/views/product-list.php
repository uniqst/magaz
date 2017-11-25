<?
use yii\helpers\Url;
use yii\widgets\LinkPager;
?>

<div class="items-block">
    <div class="container">
        <div class="row">
            <?php foreach($model as $profile):?>
                <div class="col-6 col-sm-6 col-md-4 col-xl-4">
                    <div class="items-block">
                        <div class="items-block__item" style="background-image: url(/photo/<?=$profile->image->src?>)">
                            <a href="<?=Url::to(['/girls/girl', 'id' => $profile->id, 'name' => $profile->name])?>" class="items-block__link"></a>
                            <div class="info-card">
                                <div class="wrapper">
                                    <div class="info-card__name">
                                        <a href="<?=Url::to(['/girls/girl', 'id' => $profile->id, 'name' => $profile->name])?>">
                                            <?=$profile->name?>
                                            <!-- <i class="add-button fa fa-plus"></i> -->
                                        </a>
                                    </div>
                                    <div class="info-card__about">
                                        <span class="age">Age <?=$profile->age?></span>
                                        <span class="nationality"><?=$profile->nationality?></span>
                                    </div>
                                    <p class="info-card__more-info">
                                        <?=$profile->about_myself?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
        <?= LinkPager::widget([
    'pagination' => $pages,
]);?>
    </div>
</div>