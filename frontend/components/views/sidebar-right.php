<div class="main-sidebar-right">
    <div class="page-name">
        Intresting
    </div>
    <?php foreach($model as $rand):?>
        <?php if(isset($rand->image)):?>
            <div class="slider-item">
                <div class="item-box girl" style="background-image: url('/photo/<?=$rand->image->src?>')">
                    <div class="item-box__title">
                        <a href="#"><?=$rand->name?></a>
                    </div>
                    <div class="item-box__info">
                        <span>Age: <?=$rand->age?></span>
                        <span>R<?=$rand->nationality?></span>
                    </div>
                </div>
            </div>
        <?php elseif(isset($rand->img)):?>
            <div class="slider-item">
                <div class="item-box story" style="background-image: url('/story/<?=$rand->img?>')">
                    <div class="item-box__title">
                        <a href="#story">Story</a>
                    </div>
                    <div class="item-box__info">
                        <a href="#story">
                            <?=$rand->content?>
                        </a>
                    </div>
                </div>
            </div>
        <?php endif;?>
    <?php endforeach;?>
</div>

<!--<div class="main-sidebar-right">-->
<!--  <div class="page-name">-->
<!--    Intresting-->
<!--  </div>-->
<!--    <div class="slider-item">-->
<!--      <div class="item-box girl" style="background-image: url('../img/cat.jpg')">-->
<!--        <div class="item-box__title">-->
<!--          <a href="#">Oksana</a>-->
<!--        </div>-->
<!--        <div class="item-box__info">-->
<!--          <span>Age: 28</span>-->
<!--          <span>Russia</span>-->
<!--        </div>-->
<!--      </div>-->
<!--    </div>-->
<!--    <div class="slider-item">-->
<!--      <div class="item-box service" style="background-image: url('../img/cat.jpg')">-->
<!--        <div class="item-box__title">-->
<!--          <a href="#">Service</a>-->
<!--        </div>-->
<!--        <div class="item-box__info">-->
<!--          <a href="#">Doggy Style</a>-->
<!--        </div>-->
<!--      </div>-->
<!--    </div>-->
<!--    <div class="slider-item">-->
<!--      <div class="item-box story" style="background-image: url('../img/cat.jpg')">-->
<!--        <div class="item-box__title">-->
<!--          <a href="#story">Story</a>-->
<!--        </div>-->
<!--        <div class="item-box__info">-->
<!--          <a href="#story">-->
<!--            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi ipsam nam, itaque tempore consequatur facilis expedita et autem, iusto dolores maiores, similique praesentium beatae culpa enim? Magnam, porro voluptates? Praesentium.-->
<!--          </a>-->
<!--        </div>-->
<!--      </div>-->
<!--    </div>-->
<!--</div>-->