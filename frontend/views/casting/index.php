<div class="row">
  <div class="application-page offset-xl-2 col-xl-8">
    <div class="application-form">
      
      <h2 class="page-name">Applciation</h1>
      <h1 class="heading-main">Bursa platinum girls. High class escors. Pleasure without limits</h1>
      <p class="text">You are young and brave? Become one of our escorts!</p>

      <form class="main-application-form container-fluid" action="/CastingController.php" method="post" novalidate="novalidate">
        <div class="row">
          <div class="col-md-6">
            <input type="text" name="name" placeholder="name*">
          </div>
          <div class="col-md-6">
            <input type="email" name="email" placeholder="e-mail*">
          </div>
          <div class="col-md-6" >
            <input type="text" name="phone" placeholder="your phone number*">
          </div>
          <div class="col-md-6">
            <input type="text" name="nationality" placeholder="nationality*">
          </div>
          <div class="col-md-6" >
            <input type="text" name="age" placeholder="age*">
          </div>
          <div class="col-md-6">
            <input type="text" name="height" placeholder="height*">
          </div>
          <div class="col-md-6">
            <input type="text" name="mesurements" placeholder="mesurements (E.G. 90 - 60 - 90)*"> 
          </div>
          <div class="col-md-6" >
            <input type="text" name="weight" placeholder="weight*">
          </div>

        </div>
        <div class="row">
          <div class="col-md-12">
            <textarea name="" id="" cols="30" rows="10" class="col-md-12" placeholder="few words about you*"></textarea>
          </div>
        </div>
        <div class="row upload-photo">
            <p class="col-md-12 title subheading-main">Upload photo</p>
            <div class="col-md-4">
              <label for="photo1" class="upload-label"><span>Choose file</span></label>
              <input type="file" class="upload-input" id="photo1" name="photo1">
            </div>
            <div class="col-md-4">
              <label for="photo2" class="upload-label"><span>Choose file</span></label>
              <input type="file" class="upload-input" id="photo2" name="photo2">
            </div>
            <div class="col-md-4">
              <label for="photo3" class="upload-label"><span>Choose file</span></label>
              <input type="file" class="upload-input" id="photo3" name="photo3">
            </div>
        </div>
        <div class="row submit">
          <div class="offset-md-8 col-md-4 text-right">
            <button type="submit">Submit</button>
          </div>
        </div>
      </form>
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

<?= $this->render('../main-section')?>
