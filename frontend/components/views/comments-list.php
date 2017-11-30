<?php
use Yii\helpers\Url;
?>

<div class="embded-response-box embded-response-box--mb">
    <div class="page-name">
        <?=Yii::t('app', 'Customer reviews');?>
    </div>
    <div class="iconblock">
        <a href="<?= Url::to(['/reviews-for-escort'])?>"><span  class="pencil"></span></a>
        <a href="<?= Url::to(['/reviews-for-escort'])?>"><span class="msgbox"></span></a>
    </div>
    <div class="response-lists-wrapper resopnse-list-js">
        <div class="resoponse-list">
            <?php foreach($model1 as $com):?>
                <blockquote class="response">
                    <p class="response__quote"><?=Yii::t('app', $com->content);?></p>
                    <div class="response__author">
                        <cite><?=Yii::t('app', $com->name);?></cite>
                        |
                        <time><?= $com->date?></time>
                    </div>
                </blockquote>
            <?php endforeach;?>
        </div>
        <div class="resoponse-list">
            <?php foreach($model2 as $com):?>
                <blockquote class="response">
                    <p class="response__quote"><?=Yii::t('app', $com->content);?></p>
                    <div class="response__author">
                        <cite><?=Yii::t('app', $com->name);?></cite>
                        |
                        <time><?= $com->date?></time>
                    </div>
                </blockquote>
            <?php endforeach;?>
        </div>
    </div>
</div>

