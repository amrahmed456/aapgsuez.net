<link rel="stylesheet" href="layout/css/lightbox.min.css" />

<?php
    require_once 'includes/header.php';
?>

<div class="gallery-about-page">
    <!-- include about template page-->
    <?php
        require_once 'includes/about-template.php';
    ?>

    <!-- start nav sections -->
    <div class="d-flex flex-wrap sections mt-4 position-sticky filter-button-group">
        <div class="section mr-2 mb-2" data-filter="*">
            All
        </div>
        <div class="section mr-2 mb-2" data-filter=".class1">
            Some category
        </div>
        <div class="section mr-2 mb-2 active" data-filter=".class2">
            Category
        </div>
        <div class="section mr-2 mb-2" data-filter=".class3">
            Sub
        </div>
        <div class="section mr-2 mb-2" data-filter=".class4">
            Fun day
        </div>
        <div class="section mr-2 mb-2" data-filter=".class5">
            Recruitment 2019
        </div>
        <div class="section mr-2 mb-2" data-filter=".class6">
            Another category
        </div>
    </div>
    <!-- end nav section -->
    <?php
        require_once 'includes/about-template-navigation-closer.php';
    ?>

    <!--- start actual content section -->
    <div class="row">
        <div class="masonry">
            <div class="col-12 col-md-6 col-lg-4 class1">
                <div class="gallery-img">
                    <a href="layout/imgs/logo.png" data-lightbox="gallery" data-title="My caption" >
                        <img class="lazy" data-src="layout/imgs/logo.png" title="event title" class="img-container" />
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 class2">
                <div class="gallery-img">
                    <a href="layout/imgs/aspire-3.jpg" data-lightbox="gallery" data-title="My caption" >
                        <img class="lazy" data-src="layout/imgs/aspire-3.jpg" title="event title" class="img-container" />
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 class1">
                <div class="gallery-img">
                    <a href="layout/imgs/1.jpg" data-lightbox="gallery" data-title="My caption" >
                        <img class="lazy" data-src="layout/imgs/1.jpg" title="event title" class="img-container" />
                    </a>
                </div>
            </div>
            
            <div class="col-12 col-md-6 col-lg-4 class6">
                <div class="gallery-img">
                    <a href="layout/imgs/0.jpg" data-lightbox="gallery" data-title="My caption" >
                        <img class="lazy" data-src="layout/imgs/0.jpg" title="event title" class="img-container" />
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 class5">
                <div class="gallery-img">
                    <a href="layout/imgs/0a-600x730.jpg" data-lightbox="gallery" data-title="My caption" >
                        <img class="lazy" data-src="layout/imgs/0a-600x730.jpg" title="event title" class="img-container" />
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 class3">
                <div class="gallery-img">
                    <a href="layout/imgs/IMG_3110.jpg" data-lightbox="gallery" data-title="My caption" >
                        <img class="lazy" data-src="layout/imgs/IMG_3110.jpg" title="event title" class="img-container" />
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 class2">
                <div class="gallery-img">
                    <a href="layout/imgs/3-1a-600x730.jpg" data-lightbox="gallery" data-title="My caption" >
                        <img class="lazy" data-src="layout/imgs/3-1a-600x730.jpg" title="event title" class="img-container" />
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 class4">
                <div class="gallery-img">
                    <a href="layout/imgs/6-1a-550x550.jpg" data-lightbox="gallery" data-title="My caption" >
                        <img class="lazy" data-src="layout/imgs/6-1a-550x550.jpg" title="event title" class="img-container" />
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 class3">
                <div class="gallery-img">
                    <a href="layout/imgs/video-poster.jpg" data-lightbox="gallery" data-title="My caption" >
                        <img class="lazy" data-src="layout/imgs/video-poster.jpg" title="event title" class="img-container" />
                    </a>
                </div>
            </div>
        </div>
    </div>

    <?php
        require_once 'includes/about-template-closer.php';
    ?>

</div>

<?php
    require_once 'includes/footer.php';
?>


<script src="layout/js/isotope.min.js"></script>
<script src="layout/js/lightbox.min.js"></script>
<script src="layout/js/pages/gallery.js"></script>