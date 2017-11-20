<?php
use yii\helpers\Url;
?>
<style>
    .labelcategory{
        cursor: pointer;
    }
</style>
<div class="col-xl-3 d-xl-block main-sidebar-menu-js">
  <!-- <div class="main-sidebar-close">
    x
  </div> -->
    <form action="<?=Url::to(['/girls/filters'])?>" id="form" method="get">
      <div class="main-sidebar-menu">
        <div class="main-sidebar-close">x</div>
        <div class="page-name">
          <?=Yii::t('app', 'Catalog');?>
        </div>
        <?php foreach($model as $category):?>
        <h2 class="sb-heading-main">
          <?= Yii::t('app', $category->name)?>
        </h2>
        <div class="category-list-wraper">
          <ul class="category-list">
            <?php foreach($category->category as $cat):?>
            <li class="category-list__item">
              <a href="">
                <?= $cat->name?>
              </a>
            </li>
            <?php endforeach;?>
          </ul>
        </div>
      <?php endforeach;?>
        <h2 class="sb-heading-main sb-heading-main__link">
          <a href="#list-filters" class="sb-heading-main__link" data-toggle="collapse" aria-expanded="true">
            <?=Yii::t('app', 'Filters');?>
          </a>
        </h2>
        <div class="category-list-wraper collapse show" id="list-filtersasdas">
          <?php foreach($filters as $filter):?>
          <h3 class="category-heading">
            <a href="#list-categories<?=$filter->id?>" data-toggle="collapse" aria-expanded="true">
              <?= Yii::t('app', $filter->name)?>
            </a>
          </h3>
          <ul class="category-list category-list--border collapse show" id="list-categories<?=$filter->id?>">
            <li class="category-list__item">
              <a href="#" oclick="return false"class="inputAll">
                <?=Yii::t('app', 'All');?>
              </a>
            </li>
            <?php foreach($filter->values as $val):?>
            <?php if(count($val->profiles) > 0):?>
            <li class="category-list__item">
                <input style="display: none;" type="checkbox" class="check<?=$filter->id?> inputCheck" <?php if($_GET['value'][$val->id] == $val->value) echo 'checked';?>  onclick="this.form.submit()" id="value<?=$val->id?>" name="value[<?= $val->id?>]" value="<?=$val->value?>">
                <label class="labelcategory" for="value<?=$val->id?>" <?php if($_GET['value'][$val->id] == $val->value) echo "style='color: red;'";?>><?=$val->value?></label>
            </li>
          <?php endif;?>
          <?php endforeach;?>
          </ul>
          <?php endforeach;?>
        </div>
      </div>
    </form>
</div>
