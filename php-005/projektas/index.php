<?php
include 'header.php';
?>
<div id="demo" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
    </ul>
    <!-- The slideshow -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="slides/canoe_water_nature.jpg" alt="Canoe Water Nature">
            <div class="carousel-caption">
                <h3>Canoe Water Nature</h3>
            </div>
        </div>
        <div class="carousel-item">
            <img src="slides/colors_of_nature.jpg" alt="Colors of Nature">
            <div class="carousel-caption">
                <h3>Colors of Nature</h3>
            </div>
        </div>
        <div class="carousel-item">
            <img src="slides/leaf_nature_green.jpg" alt="Leaf Nature Green">
            <div class="carousel-caption">
                <h3>Leaf Nature Green</h3>
            </div>
        </div>
    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>

</div>
<div class="body-text">
    <p class="mx-auto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
</div>
<?php
include 'footer.php';
?>