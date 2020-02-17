<!DOCTYPE html>
<html>
<?php
$pageTitle = "About";
require("../templates/head.php");
?>

<body>
    <?php
    $activeTitle = "About";
    require("../templates/navbar.php");
    ?>
    <div class="container about">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 about-col">
                <img src="/images/about-pic.jpg" alt="Wedding Pic">
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 about-col">
                <div class="text">
                    <h1>About Us</h1>
                    <p>SpotLite Events are an event planning service based out of the Waterloo Region. We aim to provide an experience like no other with our cold spark and fog machine packages. Our machines are the perfect choice for enhancing the intimacy of first dances and grand entrances for your special day.</p>
                    <p>Not only are our products great for weddings, we provide services for all types of events including parties and reunions.</p>
                </div>
            </div>
        </div>
    </div>
    <?php require("../templates/footer.php");  ?>
</body>

</html>