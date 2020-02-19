<!DOCTYPE html>
<html>
<?php
$pageTitle = "Packages";
require("../templates/head.php");
?>
<body>
    <?php
    $activeTitle = "Packages";
    require("../templates/navbar.php");
    ?>
    <div class="packages">
        <div class="our-packages">
            <div class="container text-center">
                <div class="row">
                    <div class="col-12">
                        <h1>Our Packages</h1>
                    </div>

                    <div class="col-12">
                        <p>SpotLite Events takes tremendous pride in helping create unforgettable moments. Below are our premium packages to select from at competitive prices. Can't decide on a package? We can collaborate in tailoring to your needs upon further request.</p>

                    </div>
                    <div class="col-12">
                        <i class="fas fa-arrow-down fa-2x"></i>
                    </div>
                </div>
            </div>
        </div>
        <header class="masthead-packages">
        </header>
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col col-md-6">
                    <h1>Platinum Package</h1>
                    <ul>
                        <li>4 Cold Spark Fountains</li>
                        <li>2 Dry Fog Machines</li>
                    </ul>
                    <span class="lead">Contact us for pricing details</span>
                </div>
                <div class="col col-md-6">
                <a href="/contact-us"><button class="btn btn-info">Book Now</button></a>
                </div>
            </div>
        </div>

        <div class="container-fluid divider"></div>

        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col col-md-6">
                    <h1>Gold Package</h1>
                    <ul>
                        <li>2 Cold Spark Fountains</li>
                        <li>1 Dry Fog Machines</li>
                    </ul>
                    <span class="lead">Contact us for pricing details</span>
                </div>
                <div class="col col-md-6">
                    <a href="/contact-us"><button class="btn btn-info">Book Now</button></a>
                </div>
            </div>
        </div>
        <div class="container-fluid divider"></div>
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col col-md-6">
                    <h1>Silver Package</h1>
                    <ul>
                        <li>2 Cold Spark Fountains</li>
                    </ul>
                    <span class="lead">Contact us for pricing details</span>
                </div>
                <div class="col col-md-6">
                <a href="/contact-us"><button class="btn btn-info">Book Now</button></a>
                </div>
            </div>
        </div>

    </div>
    <?php require("../templates/footer.php");  ?>
</body>


</html>