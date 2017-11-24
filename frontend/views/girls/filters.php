
<div class="row stories-page">

    <div class="col-12">
        <div class="row">
            <div class="mx-auto col-xl-58p">
                <h2 class="page-name stories">Girls</h2>
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="row">
            <div class="mx-auto col-xl-58p">
                <h1 class="heading-main mb-0">
                    Bursa platinum girls. High class escorts. Plearsure without limits
                </h1>
            </div>
        </div>
    </div>
    <div class="col-12 dir-tree-links">
        <div class="row">
            <div class="mx-auto col-xl-58p">
                <a href="#">Home</a>
                <span> > </span>
                <a href="#">Catalog</a>
                <span> > </span>
                <a href="#">English</a>
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
