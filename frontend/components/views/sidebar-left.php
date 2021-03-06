<?php
use yii\helpers\Url;
?>
<style>
    .labelcategory{
        cursor: pointer;
    }
</style>
<div class="col-xl-21p d-xl-block main-sidebar-menu-js">
  <!-- <div class="main-sidebar-close">
    x
  </div> -->
    <form action="<?=Url::to(['/girls/filters'])?>" id="form" method="get">
      <div class="main-sidebar-menu">
        <div class="main-sidebar-close">x</div>
        <div class="page-name bubbles-sm">
          <?=Yii::t('app', 'Catalog');?>
        </div>

        <div class="category-list-wraper collapse show" id="list-filtersasdass">
            <div class="sb-heading-main sb-heading-main__link">
              <?= Yii::t('app', 'City')?> 
            </div>
          <ul class="category-list category-list--border collapse show">

            <?php foreach($city as $val):?>
            <li class="category-list__item">
                <a href="<?= $val->href?>" target="_blank"><?= Yii::t('app', $val->name)?></a>
            </li>
          <?php endforeach;?>
          </ul>
        </div>

          <div class="sb-heading-main sb-heading-main__link">
              <?= Yii::t('app', 'Filters')?>
          </div>

          <div class="category-list-wraper collapse show" id="list-filtersasdas">
              <?php foreach($model as $filter):?>
                  <a href="#list-categories<?=$filter->id?>" style="color: white; margin-left: 20px; font-size: 14px; padding-bottom: 10px;" class="sb-heading-main__link" data-toggle="collapse" aria-expanded="true">
                      <?= Yii::t('app', $filter->name)?>
                  </a>
                  <ul class="category-list category-list--border collapse show" id="list-categories<?=$filter->id?>">
                      <li class="category-list__item">
                          <a href="#" onclick="return false" class="inputAll">
                              <?=Yii::t('app', 'All');?>
                          </a>
                      </li>
                      <?php foreach($filter->category as $val):?>
                          <li class="category-list__item">
                              <input style="display: none;" type="checkbox" class="check<?=$val->id?> inputCheck" <?php if($_GET['value'][$val->id] == $val->id) echo 'checked';?>  onclick="this.form.submit()" id="value<?=$val->id?>" name="value[<?= $val->id?>]" value="<?=$val->id?>">
                              <label class="labelcategory" for="value<?=$val->id?>" <?php if($_GET['value'][$val->id] == $val->id) echo "style='color: red;'";?>><?= Yii::t('app', $val->name)?></label>
                          </li>
                      <?php endforeach;?>
                  </ul>
              <?php endforeach;?>
              <a href="#list-categoriess" style="color: white; margin-left: 20px; font-size: 14px; padding-bottom: 10px;" class="sb-heading-main__link" data-toggle="collapse" aria-expanded="true">
                  <?= Yii::t('app', 'Services')?>
              </a>
              <ul class="category-list category-list--border collapse show" id="list-categoriess">
                  <li class="category-list__item">
                      <a href="#" onclick="return false" class="inputAll">
                          <?=Yii::t('app', 'All');?>
                      </a>
                  </li>
                  <?php foreach($services as $serv):?>
                  <li class="category-list__item">
                      <input style="display: none;" type="checkbox" class="check<?=$serv->id?> inputCheck" <?php if($_GET['service'][$serv->id] == $serv->id) echo 'checked';?>  onclick="this.form.submit()" id="service<?=$serv->id?>" name="service[<?= $serv->id?>]" value="<?=$serv->id?>">
                      <label class="labelcategory" for="service<?=$serv->id?>" <?php if($_GET['service'][$serv->id] == $serv->id) echo "style='color: red;'";?>><?= Yii::t('app', $serv->name)?></label>
                  </li>
                  <?php endforeach;?>
              </ul>
          </div>
      </div>
    </form>
</div>
