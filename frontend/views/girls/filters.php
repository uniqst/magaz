<?php
use yii\helpers\Url;
// $this->title = Yii::t('app', $pages[0]->text);
if(Yii::$app->request->get('value')){
foreach($filters as $filter){
    $filt .= Yii::t('app', $filter->name) . ' - ';
    foreach($filter->category as $d){
        if ($d == end($filter->category)){
         $filtt .= Yii::t('app', $d->name) . '; ';
         }else{
             $filtt .= Yii::t('app', $d->name) . ', ';
         }
     }
    foreach($filter->category as $f){
       if ($f == end($filter->category)){
        $filt .= Yii::t('app', $f->name) . Yii::t('app', $f->description). '; ';
        }else{
            $filt .= Yii::t('app', $f->name) . Yii::t('app', $f->description). ', ';
        }
    }
}
}
if(Yii::$app->request->get('service')){    
$serv = 'Services - ';
foreach($services as $ss){
    if($ss == end($services)){
    $serv .= Yii::t('app', $ss->name) . '; ';
    }else{
     $serv .= Yii::t('app', $ss->name) . ', ';
    }
}

foreach($services as $s){
    if($s == end($services)){
    $servv .= Yii::t('app', $s->name) . Yii::t('app', $f->description). '; ';
    }else{
     $servv .= Yii::t('app', $s->name) . Yii::t('app', $f->description). ', ';
    }
}
}
// print_r($filters);
$this->title = 'Ankara escort Filters: ' . $filtt . $servv;
$this->registerMetaTag([
'name' => 'description',
'content' => Yii::t('app',  $filt . $serv),
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
                <?= $filtt . $servv ?>
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
