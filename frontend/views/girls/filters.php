<?php
use yii\helpers\Url;
// $this->title = Yii::t('app', $pages[0]->text);
if(Yii::$app->request->get('value')){
foreach($filters as $filter){
    $filt .= Yii::t('app', $filter->name) . ' > ';
    foreach($filter->category as $f){
       if ($f == end($filter->category)){
        $filt .= Yii::t('app', $f->name) . '; ';
        }else{
            $filt .= Yii::t('app', $f->name) . ', ';
        }
    }
}
}
if(Yii::$app->request->get('service')){    
$serv = 'Services: ';
foreach($services as $s){
    if($s == end($services)){
    $serv .= Yii::t('app', $s->name) . '; ';
    }else{
     $serv .= Yii::t('app', $s->name) . ', ';
    }
}
}

$this->title = 'Filters: ' . $filt . $serv;
$this->registerMetaTag([
'name' => 'description',
'content' => Yii::t('app', $pages[3]->text),
]);
?>
<div class="row stories-page">
    <div class="col-12">
        <div class="row">
            <div class="mx-auto col-xl-58p">
                <p class="page-name stories">Girls</p>
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="row">
            <div class="mx-auto col-xl-58p">
                <h1 class="heading-main mb-0">
                <?= Yii::t('app', 'Bursa platinum girls. High class escorts. Plearsure without limits')?>
                </h1>
            </div>
        </div>
    </div>
    <div class="col-12 dir-tree-links">
        <div class="row">
            <div class="mx-auto col-xl-58p">
                <a href="<?=Url::to(['/'])?>"><?=Yii::t('app','Home')?></a>
                <span> > </span>
                <a href="<?=Url::to(['/girls'])?>"><?=Yii::t('app','Catalog')?></a>
                <span> > </span>
                <a href="<?=Url::to(['/girls/filters'])?>"><?=Yii::t('app','Filters')?></a>
            </div>
        </div>
    </div>
    <?= \frontend\components\SidebarLeft::widget();?>
    <div class="col-xl-58p px-0">
    <?= \frontend\components\ProductList::widget(['model' => $model]);?>
    </div>
    <div class="d-none d-lg-block col-xl-21p">
        <?= \frontend\components\SidebarRight::widget();?>
        <!--?= $this->render('../sidebar-right')?-->
    </div>
</div>

<?= \frontend\components\BottomSlider::widget();?>
<!--?= $this->render('../bottom-slider')?-->
