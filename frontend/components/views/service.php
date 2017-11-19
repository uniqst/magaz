<?php
use yii\helpers\Url;
?>

<div class="posts-container">
      <h1 class="page-name">Services</h1>
      <?php foreach($model as $services):?>
      <div class="posts-list">
        <div class="post-item clearfix">
          <div class="image">
            <a href="#">
              <img src="/service/<?= $services->img?>" style="hight:200px; width:200px" alt="Servise photo">
            </a>
          </div>
          <div class="post-info-container">
            <h2 class="title">
              <?= $services->name?>
            </h2>
            <div class="center-block">
              <p>
              <?= mb_substr($services->content, 0, 1000).'...'?>
              </p>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach;?>
    </div>
    