<?

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<div class="row">
  <div class="application-page offset-xl-2 col-xl-8">
    <div class="application-form">
      
      <h2 class="page-name">Applciation</h1>
      <h1 class="heading-main">Bursa platinum girls. High class escors. Pleasure without limits</h1>
      <p class="text">You are young and brave? Become one of our escorts!</p>
      <?php $form = ActiveForm::begin(['options' => ['class' => 'main-application-form container-fluid', 'novalidate' => 'novalidate', 'enctype' => 'multipart/form-data']]) ?>
        <div class="row">
          <div class="col-md-6">
            <?= $form->field($model, 'name')->textInput(['maxlength' => true, 'placeholder' => 'name*'])->label(false) ?>
          </div>
          <div class="col-md-6">
            <?= $form->field($model, 'email')->textInput(['maxlength' => true, 'placeholder' => 'email*'])->label(false) ?>
          </div>
          <div class="col-md-6" >
            <?= $form->field($model, 'phone')->textInput(['maxlength' => true, 'placeholder' => 'phone*'])->label(false) ?>
          </div>
          <div class="col-md-6">
            <?= $form->field($model, 'nationality')->textInput(['maxlength' => true, 'placeholder' => 'nationality*'])->label(false) ?>
          </div>
          <div class="col-md-6" >
            <?= $form->field($model, 'age')->textInput(['maxlength' => true, 'placeholder' => 'age*'])->label(false) ?>
          </div>
          <div class="col-md-6">
            <?= $form->field($model, 'height')->textInput(['maxlength' => true, 'placeholder' => 'height*'])->label(false) ?>
          </div>
          <div class="col-md-6">
            <?= $form->field($model, 'mesurements')->textInput(['maxlength' => true, 'placeholder' => 'mesurements (E.G. 90 - 60 - 90)*'])->label(false) ?>
          </div>
          <div class="col-md-6" >
            <?= $form->field($model, 'weight')->textInput(['maxlength' => true, 'placeholder' => 'weight*'])->label(false) ?>
          </div>
            <?= $form->field($model, 'date')->hiddenInput(['value' => date('Y-m-d H:i:s')])->label(false) ?>

        </div>
        <div class="row">
          <div class="col-md-12">
             <?= $form->field($model, 'about_myself')->textArea(['maxlength' => true, 'placeholder' => 'few words about you*', 'cols' => 30, 'rows' => 10, 'class' => 'col-md-12'])->label(false) ?>
          </div>
        </div>
        <div class="row upload-photo">
            <p class="col-md-12 title subheading-main">Upload photo</p>
            <div class="col-md-4">
              <label for="photo1" class="upload-label"><span>Choose file</span></label>
              <?= $form->field($photo, 'imageFiles[]')->fileInput(['multiple' => true, 'accept' => 'image/*', 'class' => 'upload-input', 'id' => 'photo1'])->label(false) ?>
            </div>
        </div>
        <div class="row submit">
          <div class="offset-md-8 col-md-4 text-right">
            <button type="submit">Submit</button>
          </div>
        </div>
      <?php ActiveForm::end(); ?>
    </div>
    <div class="application-ask container-fluid">
      <div class="row">
        <div class="col-md-6 text-center text-md-right d-md-flex flex-md-column justify-content-md-center msg-block-wrap">
          <div class="msg-block">
            <p>Have a quetion?</p>
            <p>Ask Lena!</p>
            <p>+905380639316</p>
            <p>Call, sms, viber, whatsapp</p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="image mx-auto ml-md-0"></div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row dir-tree-links">
  <div class="offset-xl-2 col-xl-8">
    <a href="#">Home</a>
    <span> > </span>
    <a href="#">Catalog</a>
    <span> > </span>
    <a href="#">English</a>
  </div>
</div>

<div class="row">


  <div class="d-none d-xl-block col-xl-2">
    Left sidebar
  </div>


  <div class="main-center-col col-xl-8">
    <div class="girl-info">

      <div class="girl-info__title">
        <a href="#">
          Oksana
        </a>
      </div>

      <div class="girl-info__card container-fluid">
        <div class="row">
          <div class="col-md-8">
            <div class="card__photo-section container-fluid">
              <div class="row">
                <!-- <div class="photo" style="background-image: url(img/cat.jpg)"></div>
                <div class="photo" style="background-image: url(img/cat.jpg)"></div> -->
                <div class="col">
                  <div class="photo" style="background-image: url(img/cat.jpg)"></div>
                </div>
                <div class="col">
                  <div class="photo" style="background-image: url(img/cat.jpg)"></div>
                </div>
                <!-- <div class="d-none col">
                  <div class="photo" style="background-image: url(img/cat.jpg)"></div>
                </div> -->
              </div>
            </div>
            <div class="card__description">
              Primis maluisset voluptatibus nec in, delenit albucius pericula in est. In sumo natum sed, mel an quidam tritani theophrastus, dolorum dolores duo no. Diam eligendi pro ad, ad cum elitr nemore molestiae, pri an fugit omittantur concludaturque. Pro singulis legendos ne. Primis maluisset voluptatibus nec in, delenit albucius pericula in est. In sumo natum sed, mel an quidam tritani theophrastus, dolorum dolores duo no. Diam eligendi pro ad, ad cum elitr nemore molestiae, pri an fugit omittantur concludaturque. Pro singulis legendos ne.
            </div>
          </div>
          <div class="col-md-4">
            <div class="card__info-list">
              <ul>
                <li class="info-list__item">
                  <span class="property">Age</span>
                  <span class="value">18</span>
                </li>
                <li class="info-list__item">
                  <span class="property">Age</span>
                  <span class="value">18</span>
                </li>
                <li class="info-list__item">
                  <span class="property">Age</span>
                  <span class="value">18</span>
                </li>
                <li class="info-list__item">
                  <span class="property">Age</span>
                  <span class="value">18</span>
                </li>
                <li class="info-list__item">
                  <span class="property">Age</span>
                  <span class="value">18</span>
                </li>
                <li class="info-list__item">
                  <span class="property">Age</span>
                  <span class="value">18</span>
                </li>
                <li class="info-list__item">
                  <span class="property">Age</span>
                  <span class="value">18</span>
                </li>
                <li class="info-list__item">
                  <span class="property">Age</span>
                  <span class="value">18</span>
                </li>
                <li class="info-list__item">
                  <span class="property">Age</span>
                  <span class="value">18</span>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

    </div>
    <div class="girl-info">

      <div class="girl-info__title">
        <a href="#">
          Oksana
        </a>
      </div>

      <div class="girl-info__card container-fluid">
        <div class="row">
          <div class="col-md-8">
            <div class="card__photo-section container-fluid">
              <div class="row">
                <!-- <div class="photo" style="background-image: url(img/cat.jpg)"></div>
                <div class="photo" style="background-image: url(img/cat.jpg)"></div> -->
                <div class="col">
                  <div class="photo" style="background-image: url(img/cat.jpg)"></div>
                </div>
                <div class="col">
                  <div class="photo" style="background-image: url(img/cat.jpg)"></div>
                </div>
                <!-- <div class="d-none col">
                  <div class="photo" style="background-image: url(img/cat.jpg)"></div>
                </div> -->
              </div>
            </div>
            <div class="card__description">
              Primis maluisset voluptatibus nec in, delenit albucius pericula in est. In sumo natum sed, mel an quidam tritani theophrastus, dolorum dolores duo no. Diam eligendi pro ad, ad cum elitr nemore molestiae, pri an fugit omittantur concludaturque. Pro singulis legendos ne. Primis maluisset voluptatibus nec in, delenit albucius pericula in est. In sumo natum sed, mel an quidam tritani theophrastus, dolorum dolores duo no. Diam eligendi pro ad, ad cum elitr nemore molestiae, pri an fugit omittantur concludaturque. Pro singulis legendos ne.
            </div>
          </div>
          <div class="col-md-4">
            <div class="card__info-list">
              <ul>
                <li class="info-list__item">
                  <span class="property">Age</span>
                  <span class="value">18</span>
                </li>
                <li class="info-list__item">
                  <span class="property">Age</span>
                  <span class="value">18</span>
                </li>
                <li class="info-list__item">
                  <span class="property">Age</span>
                  <span class="value">18</span>
                </li>
                <li class="info-list__item">
                  <span class="property">Age</span>
                  <span class="value">18</span>
                </li>
                <li class="info-list__item">
                  <span class="property">Age</span>
                  <span class="value">18</span>
                </li>
                <li class="info-list__item">
                  <span class="property">Age</span>
                  <span class="value">18</span>
                </li>
                <li class="info-list__item">
                  <span class="property">Age</span>
                  <span class="value">18</span>
                </li>
                <li class="info-list__item">
                  <span class="property">Age</span>
                  <span class="value">18</span>
                </li>
                <li class="info-list__item">
                  <span class="property">Age</span>
                  <span class="value">18</span>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

    </div>

    <div class="articles-box">
      <div class="articles-box__title">
        <a href="#">Erotic stories</a>
      </div>
      <div class="articles__list">
        <ul>
          <div class="list-item">
              <div class="photo" style="background-image: url(img/cat.jpg)">
              </div>
              <div class="article">
                <div class="article__title">
                  <a href="#">The Dance Flour</a>
                </div>
                <div class="article__text">
                  Eum no semper quaestio. Natum reformidans intellegebat ei sea, partem temporibus cum in. Ut nec euismod albucius ullamcorper, ut cibo feugiat sanctus vis. Id case erant nostrum est. Ex duo accusata democritum consequuntur. Ius ex duis accommodare. Et porro appareat vis. Et nam velit viris feugait, putant mentitum no nam.
                </div>
              </div>
            </div>
          <div class="list-item">
              <div class="photo" style="background-image: url(img/cat.jpg)">
              </div>
              <div class="article">
                <div class="article__title">
                  <a href="#">The Dance Flour</a>
                </div>
                <div class="article__text">
                  Eum no semper quaestio. Natum reformidans intellegebat ei sea, partem temporibus cum in. Ut nec euismod albucius ullamcorper, ut cibo feugiat sanctus vis. Id case erant nostrum est. Ex duo accusata democritum consequuntur. Ius ex duis accommodare. Et porro appareat vis. Et nam velit viris feugait, putant mentitum no nam.
                </div>
              </div>
            </div>
          <div class="list-item">
            <div class="photo" style="background-image: url(img/cat.jpg)">
            </div>
            <div class="article">
              <div class="article__title">
                <a href="#">The Dance Flour</a>
              </div>
              <div class="article__text">
                Eum no semper quaestio. Natum reformidans intellegebat ei sea, partem temporibus cum in. Ut nec euismod albucius ullamcorper, ut cibo feugiat sanctus vis. Id case erant nostrum est. Ex duo accusata democritum consequuntur. Ius ex duis accommodare. Et porro appareat vis. Et nam velit viris feugait, putant mentitum no nam.
              </div>
            </div>
          </div>
        </ul>
      </div>
    </div>

    <div class="main-info-box">
      <h2 class="info-box__heading">
        Ankara escort girls are here already and they are all prepared to give you the delightful evening
      </h2>
      <p>
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quod atque perspiciatis dolor ipsa assumenda. Fuga culpa at minima ex assumenda quo? At voluptatem ipsa aliquid beatae debitis, modi atque aut. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ratione eligendi repudiandae voluptatibus. Corrupti officiis facere veniam consequuntur libero! Reiciendis totam ipsum impedit hic nostrum atque culpa necessitatibus sunt labore rerum? Explicabo porro fugiat atque eaque eveniet esse deserunt provident optio non, architecto sequi asperiores maiores totam? Consectetur magnam modi praesentium incidunt sapiente ea? Esse iure rerum a accusantium iste maxime. Incidunt aspernatur voluptates consectetur dolorum temporibus necessitatibus hic animi dolor in perferendis beatae vitae excepturi alias, consequuntur quas inventore nobis quam quasi sequi vel quos voluptatum rem laudantium! Ratione, excepturi!
      </p>
      <p>
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ea soluta temporibus laboriosam adipisci quidem odio et, provident voluptatum non aliquam? Ad eaque, error impedit accusamus eum architecto veniam praesentium omnis. Dolorum, pariatur? At repudiandae quibusdam sunt perspiciatis, id esse voluptate praesentium suscipit cupiditate magnam ab quis eum non minus. Maxime assumenda dolores facere mollitia vitae explicabo voluptatum quae unde illo. Officia odit itaque commodi ratione totam maiores, fugit explicabo! Voluptatibus aliquid consequatur voluptates, quod, unde ducimus dolor, enim assumenda deserunt nostrum fuga dignissimos quam eum voluptatum! Quibusdam tempore eos itaque!
      </p>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, repellendus quas dolorem odit, minus ducimus, ut beatae suscipit explicabo voluptatibus est molestiae dolor eos esse. Deleniti officia laboriosam cupiditate maiores!
      </p>
    </div>
    
  </div>


  <div class="d-none d-xl-block col-xl-2">
    Right sidebar
  </div>

</div>

<div class="row">
  <div class="col bottom-items-slider">
    <div class="slick-carousel">

      <div class="slider-item">
        <div class="item-box girl" style="background-image: url('img/cat.jpg')">
          <div class="item-box__title">
            <a href="#">Oksana</a>
          </div>
          <div class="item-box__info">
            <span>Age: 28</span>
            <span>Russia</span>
          </div>
        </div>
      </div>
      <div class="slider-item">
        <div class="item-box service" style="background-image: url('img/cat.jpg')">
          <div class="item-box__title">
            <a href="#">Service</a>
          </div>
          <div class="item-box__info">
            <a href="#">Doggy Style</a>
          </div>
        </div>
      </div>
      <div class="slider-item">
        <div class="item-box story" style="background-image: url('img/cat.jpg')">
          <div class="item-box__title">
            <a href="#story">Story</a>
          </div>
          <div class="item-box__info">
            <a href="#story">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi ipsam nam, itaque tempore consequatur facilis expedita et autem, iusto dolores maiores, similique praesentium beatae culpa enim? Magnam, porro voluptates? Praesentium.
            </a>
          </div>
        </div>
      </div>
      <div class="slider-item">
        <div class="item-box girl" style="background-image: url('img/cat.jpg')">
          <div class="item-box__title">
            <a href="#">Oksana</a>
          </div>
          <div class="item-box__info">
            <span>Age: 28</span>
            <span>Russia</span>
          </div>
        </div>
      </div>
      <div class="slider-item">
        <div class="item-box service" style="background-image: url('img/cat.jpg')">
          <div class="item-box__title">
            <a href="#">Service</a>
          </div>
          <div class="item-box__info">
            <a href="#">Doggy Style</a>
          </div>
        </div>
      </div>
      <div class="slider-item">
        <div class="item-box story" style="background-image: url('img/cat.jpg')">
          <div class="item-box__title">
            <a href="#story">Story</a>
          </div>
          <div class="item-box__info">
            <a href="#story">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi ipsam nam, itaque tempore consequatur facilis expedita et autem, iusto dolores maiores, similique praesentium beatae culpa enim? Magnam, porro voluptates? Praesentium.
            </a>
          </div>
        </div>
      </div>
      <div class="slider-item">
        <div class="item-box girl" style="background-image: url('img/cat.jpg')">
          <div class="item-box__title">
            <a href="#">Oksana</a>
          </div>
          <div class="item-box__info">
            <span>Age: 28</span>
            <span>Russia</span>
          </div>
        </div>
      </div>
      <div class="slider-item">
        <div class="item-box service" style="background-image: url('img/cat.jpg')">
          <div class="item-box__title">
            <a href="#">Service</a>
          </div>
          <div class="item-box__info">
            <a href="#">Doggy Style</a>
          </div>
        </div>
      </div>
      <div class="slider-item">
        <div class="item-box story" style="background-image: url('img/cat.jpg')">
          <div class="item-box__title">
            <a href="#story">Story</a>
          </div>
          <div class="item-box__info">
            <a href="#story">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi ipsam nam, itaque tempore consequatur facilis expedita et autem, iusto dolores maiores, similique praesentium beatae culpa enim? Magnam, porro voluptates? Praesentium.
            </a>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

