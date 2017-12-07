<div class="most-wanted-block most-wanted-widget">
                    <h3 class="page-name"><?=Yii::t('app', 'Most Wanted');?></h3>
                    <div class="most-wanted-slider most-wanted-slider-js">
                        <?php foreach($model->photo as $photo):?>
                            <div class="most-wanted-slider__item">
                                <div class="girl-image" height="500" width="700"  style="background-image: url(/photo/<?= $photo->src?>)"></div>
                            </div>
                        <?php endforeach;?>
                        <!-- <div class="most-wanted-slider__buttons">
                            <button class="mv-prev"></button>
                            <button class="mv-next"></button>
                        </div> -->
                    </div>
                    <?php foreach($model->photo as $photo):?>
                        <div class="most-wanted-info-wrapper">
                            <div class="most-wanted__name">
                                <p>Name</p>
                            </div>
                            <div class="most-wanted__description">
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet ipsa totam repellendus et a sapiente, eveniet incidunt, vero consequuntur nobis laudantium odio accusantium reprehenderit id natus, expedita aut doloribus deleniti.</p>
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