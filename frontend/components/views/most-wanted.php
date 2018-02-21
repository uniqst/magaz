<?php
use yii\helpers\Url;
?>
<div class="most-wanted-block most-wanted-widget">
                    <div class="page-name"><?=Yii::t('app', 'Most Wanted');?></div>
                    <div class="most-wanted-slider most-wanted-slider-js">
                        <?php foreach($model as $want):?>
                            <div class="most-wanted-slider__item">
                                <a href="<?=Url::to(['/girls/girl', 'id' => $want->id, 'name' => $want->name])?>">
                                    <div class="girl-image" height="500" width="700"  style="background-image: url(/photo/<?= $want->img_mw?>)"></div>
                                </a>
                            </div>
                        <?php endforeach;?>
                        <!-- <div class="most-wanted-slider__buttons">
                            <button class="mv-prev"></button>
                            <button class="mv-next"></button>
                        </div> -->
                    </div>
                    <?php foreach($model as $want):?>
                        <div class="most-wanted-info-wrapper">
                            <div class="most-wanted__name">
                                <a href="<?=Url::to(['/girls/girl', 'id' => $want->id, 'name' => $want->name])?>">
                                <p><?= $want->name?></p>
                                </a>
                            </div>
                            <div class="most-wanted__description links-u">
                                <p><?= $want->most_wanted?></p>
                            </div>
                        </div>
                    <?php endforeach;?>
                    <!-- <div class="most-wanted-info-wrapper">
                        <div class="most-wanted__name">
                            <p><?= Yii::t('app', $model->name)?></p>
                        </div>
                        <div class="most-wanted__description">
                            <p><?=Yii::t('app', $model->most_wanted);?></p>
                        </div>
                    </div> -->
                </div>