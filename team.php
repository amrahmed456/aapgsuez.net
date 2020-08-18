<?php
    require_once 'includes/header.php';
?>

<div class="team-about-page">
    <!-- include about template page-->
    <?php
        require_once 'includes/about-template.php';
    ?>

    <!-- start nav sections -->
    <div class="team-about-page-menu">
        <div class="about-navigation-menu mt-4">
            <ul class="list-unstyled mb-0">
                <li>
                    <a href="" class="d-block about-nav-menu-item active">
                        Highboard
                    </a>
                </li>
                <li>
                    <a href="" class="d-block about-nav-menu-item">
                        Heads
                    </a>
                </li>
                <li>
                    <a href="" class="d-block about-nav-menu-item">
                        It Committee
                    </a>
                </li>
                <li>
                    <a href="" class="d-block about-nav-menu-item">
                        Hr Committee
                    </a>
                </li>
                <li>
                    <a href="" class="d-block about-nav-menu-item">
                        Social Media Committee
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- end nav section -->

    <?php
        require_once 'includes/about-template-navigation-closer.php';
    ?>

    <!--- start actual content section -->


    <div class="row">

        <div class="d-flex justify-content-center flex-wrap btn-block">

            <div class="member text-center mr-2 mb-2">
                <div class="member-img d-flex justify-content-center align-items-center">
                    <img src="layout/imgs/logo.png" class="img-fluid" />
                </div>
                <div class="member-info">
                    <div class="p-3">
                        <span class="member-name">
                            Amr Ahmed
                        </span>
                        -
                        <span class="member-position">
                            president
                        </span>
                    </div>
                    <div class="show-more-info p-3">
                        show more <i class="fas fa-chevron-down ml-2"></i>
                    </div>
                    <div class="member-description p-3">
                        <p class="small">
                            loreum ipsum dolar is a dummy text for printing industry to replace no sense words is a dummy text for printing
                        </p>
                    </div>
                    <div class="social-btns mb-4 mt-2">
                        <div class="m-auto">
                            <a class="facebook" href="#" target="_blank">
                                <i class="icon fab fa-facebook-f"></i>
                            </a>
                            
                            <a class="twitter" href="#" target="_blank">
                                <i class="icon fab fa-twitter"></i>
                            </a>
                        
                            <a class="google" href="#" target="_blank">
                                <i class="icon fab fa-linkedin-in"></i>
                            </a>
                            
                            <a class="instagram" href="#" target="_blank">
                                <i class="icon fab fa-whatsapp"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="member text-center mb-2 mr-2">
                <div class="member-img d-flex justify-content-center align-items-center">
                    <img src="layout/imgs/team.png" class="img-fluid" />
                </div>
                <div class="member-info">
                    <div class="p-3">
                        <span class="member-name">
                            Amr Ahmed
                        </span>
                        -
                        <span class="member-position">
                            president
                        </span>
                    </div>
                    <div class="show-more-info p-3">
                        show more <i class="fas fa-chevron-down ml-2"></i>
                    </div>
                    <div class="member-description p-3">
                        <p class="small">
                            loreum ipsum dolar is a dummy text for printing industry to replace no sense words is a dummy text for printing
                        </p>
                    </div>
                    <div class="social-btns mb-4 mt-2">
                        <div class="m-auto">
                            <a class="facebook" href="#" target="_blank">
                                <i class="icon fab fa-facebook-f"></i>
                            </a>
                            
                            <a class="twitter" href="#" target="_blank">
                                <i class="icon fab fa-twitter"></i>
                            </a>
                        
                            <a class="google" href="#" target="_blank">
                                <i class="icon fab fa-linkedin-in"></i>
                            </a>
                            
                            <a class="instagram" href="#" target="_blank">
                                <i class="icon fab fa-whatsapp"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- end actual content section -->
    
    <!-- close page template -->
    <?php
        require_once 'includes/about-template-closer.php';
    ?>



</div>

<?php
    require_once 'includes/footer.php';
?>

<script src="layout/js/pages/team.js"></script>