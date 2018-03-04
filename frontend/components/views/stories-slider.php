<?php
use yii\helpers\Url;
?>

<div class="col-md-6 pl-md-0">
                <div class="posts-container">
                    <div class="page-name"><?=Yii::t('app', 'EROTIC STORIES');?></div>
                    
                    <div class="post-lists-wrapper stories-list-js">

                        <div class="posts-list">
                        
                            <?php foreach($model1 as $stor):?>
                            <div class="post-item clearfix">
                            <div class="image">
                                <a href="<?=Url::to(['/stories/story', 'id' => $stor->id, 'name' => $stor->H1])?>">
                                <img src="/stori/<?= $stor->img?>" width="200" hight="200" alt="Girl photo">
                                </a>
                            </div>
                            <div class="post-info-container">
                                <div class="title">
                                    <a href="<?=Url::to(['/stories/story', 'id' => $stor->id, 'name' => $stor->H1])?>"><?=Yii::t('app', $stor->H1);?></a>
                                </div>
                                <div class="center-block">
                                    <p><?=Yii::t('app', $stor->short_description);?></p>
                                </div>
                            </div>
                            </div>
                          <?php endforeach;?>
                        </div>
                        <div class="posts-list">
                        
                            <?php foreach($model2 as $stor):?>
                            <div class="post-item clearfix">
                            <div class="image">
                                <a href="<?=Url::to(['/stories/story', 'id' => $stor->id, 'name' => $stor->H1])?>">
                                <img src="/stori/<?= $stor->img?>" width="200" hight="200" alt="Girl photo">
                                </a>
                            </div>
                            <div class="post-info-container">
                                <div class="title">
                                    <a href="<?=Url::to(['/stories/story', 'id' => $stor->id, 'name' => $stor->H1])?>"><?=Yii::t('app', $stor->H1);?></a>
                                </div>
                                <div class="center-block">
                                    <p><?=Yii::t('app', $stor->short_description);?></p>
                                </div>
                            </div>
                            </div>
                          <?php endforeach;?>
                        </div>
                    </div>
                </div>
            </div>