
<?php  

const LINK_NAMES = array("Home", "Packages", "About", "Contact Us");
const LINKS = array("/", "/packages", "/about", "/contact-us");


function drawNavbar($activeTitle) {
    for ($i = 0;  $i < sizeof(LINK_NAMES); $i++) {
        echo '<li class="nav-item"><a class="nav-link" href="' . LINKS[$i] . '"><div class="' . (LINK_NAMES[$i] == $activeTitle ? "active" : "") .'">' . LINK_NAMES[$i] . '</div></a></li>';
    }
}
?>

<nav class="navbar navbar-dark navbar-expand-lg">
    <a class="navbar-brand" href="#"><img class="" src="/images/logo.png"></a>
    <button class="navbar-toggler ml-1" type="button" data-toggle="collapse" data-target="#collapsingNavbar2">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse justify-content-between align-items-center w-100" id="collapsingNavbar2">
        <ul class="navbar-nav mx-auto text-center">
           <?php   drawNavbar($activeTitle); ?>
          
        </ul>
        <ul class="nav navbar-nav flex-row justify-content-center flex-nowrap icons">
            <li class="nav-item"><a style="" class="nav-link" href=""><i class="fab fa-facebook"></i></a> </li>
            <li class="nav-item"><a style="" class="nav-link" href=""><i class="fab fa-linkedin"></i></a> </li>
            <li class="nav-item"><a style="" class="nav-link" href=""><i class="fab fa-instagram "></i></a> </li>
        </ul>
    </div>
</nav>

