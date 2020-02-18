<!doctype html>
<html lang="en">
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$pageTitle = "Home";
require("templates/head.php");
?>
<body>
  <?php
  $activeTitle = "Home";
  require("templates/navbar.php");
  ?>
  <?php
  require("templates/masthead.php");
  ?>
  <div class="container services">
    <h2 id="servicesH1" class="text-center">Our Services</h2>
    <div class="row offers">
      <div class="col-sm-6 bar-right-service">
        <h1>Cold Spark Fountain</h1>
        <p>Our cold spark machines are a perfect choice for enhancing the experiences of first dances, new product launches, shows, grand entrances and various other types of events. Cold spark machines can either be fired all together, in a programmed sequence and/or one by one in order to create beautiful effects and create waves.</p>
      </div>
      <div class="col-sm-6 bar-left-service">
        <h1>Dry Fog Machine</h1>
        <p>Dry ice fog machines are utilized to produce a thick fog effect that enhances lighting and the mood of an event.</p>
      </div>
    </div>
    <div class="text-center">
      <div class="learn-more">
        <button class="btn btn-info ">Learn More</button>
      </div>
    </div>
  </div>
  <div class="container-fluid testimonial">
    <div class="row">
      <div class="col-12 col-md-6 padding-0"><img class="img-fluid img-responsive" src="/images/sparklers.jpg"></div>
      <div class="col-12 col-md-6 quote">
        <div class="text">
          <!--<i class="fa fa-quote-right fa-4x" aria-hidden="true"></i>-->
          <p class="vertical">Working with the SpotLite team was a fantastic experience. They went above and beyond at my wedding and really set the tone for an amazing night.</p>
          <span class="text-center">Hannah & Jan</span>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="logo">
      <img class="img-fluid" src="/images/logo.png" alt="Logo">
    </div>
  </div>
  <div class="container">
    <div class="row make-it-flex offers">
      <div class="col-xs-12 col-md-4 flex-item-1 bar-right-offers">
        <h1>High Quality <br>Products</h1>
      </div>
      <div class="col-sm-12 col-md-4 flex-item-4 bar-right-offers">
        <p>Our machines are 100% safe and use no fire,flame or dangerous chemicals. The sparks are completely harmless to run your fingers through and pose no hazard to any venue. Depending on your preference, our machines can be fired simultaneously or in a programmed sequence. We guarantee our products will leave attendees engaged and excited.</p>
      </div>
      <div class="col-sm-12 col-md-4 flex-item-2">
        <h1>Capturing Your Special Moments</h1>
      </div>
      <div class="col-sm-12 col-md-4 flex-item-5">
        <p>From grand entrances, to the intimacy of first dances, our product will guarantee a picture perfect moment you can share with your loved ones. With the range of usage being endless, we challenge you to spark up any event worthy of a candid.</p>
      </div>
      <div class="col-sm-12 col-md-4 flex-item-3 bar-left-offers">
        <h1>Transparent <br>Pricing</h1>
      </div>
      <div class="col-sm-12 col-md-4 flex-item-6 bar-left-offers">
        <p>In comparison to our competitors, we guarantee budget-friendly pricing that won't break the bank. Our team does a fantastic job of tailoring to your situation and providing a price-point that is cheaper than the competition.</p>
      </div>
    </div>
  </div>
  <?php require("templates/footer.php"); ?>
</body>

</html>