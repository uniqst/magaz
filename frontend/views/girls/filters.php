
<div class="row stories-page">

    <div class="col-12">
        <div class="row">
            <div class="offset-lg-3 col-lg-6">
                <h2 class="page-name stories">Girls</h2>
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="row">
            <div class="offset-lg-3 col-lg-6">
                <h1 class="heading-main mb-0">
                    Bursa platinum girls. High class escorts. Plearsure without limits
                </h1>
            </div>
        </div>
    </div>
    <div class="col-12 dir-tree-links">
        <div class="row">
            <div class="offset-lg-3 col-lg-6">
                <a href="#">Home</a>
                <span> > </span>
                <a href="#">Catalog</a>
                <span> > </span>
                <a href="#">English</a>
            </div>
        </div>
    </div>
    <?= \frontend\components\SidebarLeft::widget();?>
    <div class="col-xl-6 px-0">
    <?= \frontend\components\ProductList::widget(['model' => $model]);?>
    </div>
    <div class="d-none d-lg-block col-lg-3">
        <?= \frontend\components\SidebarRight::widget();?>
        <!--?= $this->render('../sidebar-right')?-->
    </div>
</div>

<?= \frontend\components\BottomSlider::widget();?>
<!--?= $this->render('../bottom-slider')?-->
