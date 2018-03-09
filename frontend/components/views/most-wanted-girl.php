<div class="d-none d-md-block px-0 most-wanted-block--expanded">
  <div class="most-wanted-block">
      <div class="most-wanted-slider most-wanted-new-slider-js">
        <?php foreach($model as $want):?>
              <img height="500" width="700" data-girl-id="girl-<?= $want->id?>" src="/photo/<?= $want->img_mw?>"  alt="Girl image">
        <?php endforeach;?>
        <div class="most-wanted-slider__buttons">
            <button class="mv-prev"></button>
            <button class="mv-next"></button>
        </div>
      </div>
      <?php foreach($model as $want):?>
        <div class="most-wanted-wrapper" id="girl-<?= $want->id?>">
          <div class="most-wanted__name">
              <p><a href="<?=\yii\helpers\Url::to(['/girls/girl', 'id' => $want->id, 'name' => $want->name])?>"><?= $want->name?></a></p>

          </div>
          <div class="most-wanted__description link-u">
              <?= Yii::t('app', $want->about_myself)?>
          </div>
        </div>
    <?php endforeach;?>
  </div>
</div>