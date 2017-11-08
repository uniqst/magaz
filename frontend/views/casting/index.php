<div>
  <div class="application">

    <h2 class="heading-main">Appliation</h1>
    <p>You are young and brave? Become one of our escorts!</p>

    <form class="main-application-form container-fluid" action="/CastingController.php" method="post" novalidate="novalidate">
      <div class="row">
        <div class="col-md-6">
          <input type="text" name="name" placeholder="name*">
        </div>
        <div class="col-md-6" >
          <input type="text" name="phone" placeholder="your phone number*">
        </div>
      </div>
      <div class="row">
        <div class="col-md-6" >
          <input type="text" name="age" placeholder="age*">
        </div>
        <div class="col-md-6" >
          <input type="text" name="weight" placeholder="weight*">
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <input type="email" name="email" placeholder="e-mail*">
        </div>
        <div class="col-md-6">
          <input type="text" name="nationality" placeholder="nationality*">
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <input type="text" name="height" placeholder="height*">
        </div>
        <div class="col-md-6">
          <input type="text" name="mesurements" placeholder="mesurements (E.G. 90 - 60 - 90)*">
        </div>
      </div>
      <div class="row">
        <textarea name="" id="" cols="30" rows="10" class="col-md-12"></textarea>
      </div>
      <div class="row upload-photo">
        <p class="col-md-12 title">Upload photo</p>
        <input type="file" class="" name="photo1">
        <input type="file" class="" name="photo2">
        <input type="file" class="" name="photo3">
      </div>
      <div class="row submit">
        <button type="submit">Submit</button>
      </div>
    </form>
  </div>
</div>
