<?php
use yii\helpers\Url;
?>

<div class="col-xl-3 d-none d-xl-block  main-sidebar-menu-js">
  <!-- <div class="main-sidebar-close">
    x
  </div> -->
    <form action="<?=Url::to(['/girls/filters'])?>" method="get">
      <div class="main-sidebar-menu">
        <div class="page-name">
          Catalog
        </div>
        <?php foreach($model as $category):?>
        <h2 class="sb-heading-main">
          <?= $category->name?>
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
            Filters
          </a>
        </h2>
        <div class="category-list-wraper collapse show" id="list-filters">
          <?php foreach($filters as $filter):?>
          <h3 class="category-heading">
            <a href="#list-categories<?=$filter->id?>" data-toggle="collapse" aria-expanded="true">
              <?= $filter->name?>
            </a>
          </h3>
          <ul class="category-list category-list--border collapse show" id="list-categories<?=$filter->id?>">
            <li class="category-list__item">
              <a href="#">
                All
              </a>
            </li>
            <?php foreach($filter->values as $val):?>
            <?php if(count($val->profiles) > 0):?>
            <li class="category-list__item">
                <input style="display: none;" type="checkbox" <?php if($_GET['value'][$val->id] == $val->value) echo 'checked';?>  onclick="this.form.submit()" id="value<?=$val->id?>" name="value[<?= $val->id?>]" value="<?=$val->value?>">
                <label for="value<?=$val->id?>" <?php if($_GET['value'][$val->id] == $val->value) echo "style='color: red;'";?>><?=$val->value?></label>
            </li>
          <?php endif;?>
          <?php endforeach;?>
          </ul>
          <?php endforeach;?>
        </div>
      </div>
    </form>
</div>
