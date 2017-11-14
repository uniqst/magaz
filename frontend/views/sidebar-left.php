<?php
use frontend\models\Filters;
use frontend\models\Category;
$filters = Filters::find()->with('values')->all();
$model = Category::find()->where(['parent_id' => 0])->with('category')->all();
?>



<div class="col-xl-3 d-none d-xl-block  main-sidebar-menu-js">
  <!-- <div class="main-sidebar-close">
    x
  </div> -->
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
        <a href="#list-categories" data-toggle="collapse" aria-expanded="true">
          <?= $filter->name?>
        </a>
      </h3>
      <ul class="category-list category-list--border collapse show" id="list-categories">
        <li class="category-list__item">
          <a href="#">
            All
          </a>
        </li>
        <?php foreach($filter->values as $val):?>
        <li class="category-list__item">
          <a href="#">
            <?= $val->value?>
          </a>
        </li>
      <?php endforeach;?>
      </ul>
      <?php endforeach;?>
    </div>
  </div>
</div>