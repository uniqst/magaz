<div class="most-wanted-block">
                    <h3 class="page-name"><?=Yii::t('app', 'Most Wanted');?></h3>
                    <div class="most-wanted-slider most-wanted-slider-js">
                        <?php foreach($model->photo as $photo):?>
                        <div class="most-wanted-slider__item">
                            <div class="girl-image" height="500" width="700"  style="background-image: url(/photo/<?= $photo->src?>)"></div>
                        </div>
                        <?php endforeach;?>
                    </div>
                    <div class="most-wanted__name">
                        <p><?= $model->name?></p>
                    </div>
                    <div class="most-wanted__description">
                        <p><?=Yii::t('app', $model->about_myself);?></p>
                    </div>
                </div>