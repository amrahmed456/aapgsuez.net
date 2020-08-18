<?php
    require_once 'includes/header.php';
?>
<div class="events-page">

<!-- start filter setion -->
<div class="filters">
    <form>
        <div class="container">

            <div class="filter-small-screen d-sm-block text-center d-lg-none d-flex justify-content-between align-items-center">
                <p class="text-secondary mb-0">
                    Filter Events
                </p>
                <div>
                    <i class="fas fa-filter"></i>
                </div>
            </div>

            <div class="filter-form d-none d-lg-block">
                <div class="row">
                    
                    <div class="col-6 col-lg-2 mb-2">
                        <div class="select-box">
                            <select class="custom-select">
                                <option value="0">Categoy</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-6 col-lg-2 mb-2">
                        <div class="select-box">
                            <select class="custom-select">
                                <option value="0">Topics</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-6 col-lg-2 mb-2">
                        <div class="select-box">
                            <select class="custom-select">
                                <option value="0">Location</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-6 col-lg-2 mb-2">
                        <div class="select-box">
                            <select class="custom-select">
                                <option value="0">Status</option>
                                <option value="0">Upcoming</option>
                                <option value="0">Running</option>
                                <option value="0">Past event</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-6 col-lg-2 mb-2">
                        <button class="btn btn-primary btn-sm btn-block" type="submit">
                            Apply <i class="fas fa-check ml-2"></i>
                        </button>
                    </div>

                    <div class="col-6 col-lg-2 mb-2 d-flex justify-content-center align-items-center">

                        <p class=" mb-0">
                            <a href="" class="text-danger">
                                Clear all
                            </a>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </form>
</div>
<!-- end filter section -->

<!-- start upcoming and running events -->
<div class="upcoming padd position-relative" id="home-page">
    <div class="overlay position-absolute"></div>

    <div class="container">
        <h5 class="indicator ml-4">
            Current & Upcoming Events
        </h5>

        <div class="row">

            <div class="col-12 col-md-6 col-lg-4 mb-4">
               
                <a href="event.php">
                    <div class="event position-relative">
                        <div class="ribbon position-absolute">
                            <i class="fas fa-clipboard-list"></i> category
                        </div>
                        <div class="event-image d-flex justify-content-center align-items-center">
                            <img src="layout/imgs/event.jpg" class="img-fluid" />
                        </div>
                        <div class="event-details p-3 mb-4">
                            <p class="event-name">
                                Event Title
                            </p>

                            <div class="event-tags d-flex flex-wrap justify-content-start mb-4">
                                <div class="tag mr-2">
                                    <i class="fab fa-slack-hash"></i> Design
                                </div>
                                <div class="tag mr-2">
                                    <i class="fab fa-slack-hash"></i> Technology
                                </div>
                                <div class="tag mr-2">
                                    <i class="fab fa-slack-hash"></i> Artwork
                                </div>
                                <div class="tag mr-2">
                                    <i class="fab fa-slack-hash"></i> Web Devlopment
                                </div>
                                <div class="tag mr-2">
                                    <i class="fab fa-slack-hash"></i> Human Resource
                                </div>
                                <div class="tag mr-2">
                                    <i class="fab fa-slack-hash"></i> Freelancing
                                </div>
                                <div class="tag mr-2">
                                    <i class="fab fa-slack-hash"></i> Diving
                                </div>
                            </div>

                            <div class="event-location-date">
                                <i class="fas fa-map-marker-alt"></i> Egyptial Russian University <span>- 12/05/2020</span>
                            </div>

                        </div>
                    </div>
                </a>

            </div>

            <div class="col-12 col-md-6 col-lg-4 mb-4">
               
                <a href="event.php">
                    <div class="event position-relative">
                        <div class="ribbon position-absolute">
                            <i class="fas fa-clipboard-list"></i> category
                        </div>
                        <div class="event-image d-flex justify-content-center align-items-center">
                            <img src="layout/imgs/1.jpg" class="img-fluid" />
                        </div>
                        <div class="event-details p-3 mb-4">
                            <p class="event-name">
                                Event Title
                            </p>

                            <div class="event-tags d-flex flex-wrap justify-content-start mb-4">
                                <div class="tag mr-2">
                                    <i class="fab fa-slack-hash"></i> Design
                                </div>
                                <div class="tag mr-2">
                                    <i class="fab fa-slack-hash"></i> Technology
                                </div>
                                <div class="tag mr-2">
                                    <i class="fab fa-slack-hash"></i> Artwork
                                </div>
                                <div class="tag mr-2">
                                    <i class="fab fa-slack-hash"></i> Web Devlopment
                                </div>
                                <div class="tag mr-2">
                                    <i class="fab fa-slack-hash"></i> Human Resource
                                </div>
                                <div class="tag mr-2">
                                    <i class="fab fa-slack-hash"></i> Freelancing
                                </div>
                                <div class="tag mr-2">
                                    <i class="fab fa-slack-hash"></i> Diving
                                </div>
                            </div>

                            <div class="event-location-date">
                                <i class="fas fa-map-marker-alt"></i> Egyptial Russian University <span>- 12/05/2020</span>
                            </div>

                        </div>
                    </div>
                </a>

            </div>

            <div class="col-12 col-md-6 col-lg-4 mb-4">
               
                <a href="event.php">
                    <div class="event position-relative">
                        <div class="ribbon position-absolute">
                            <i class="fas fa-clipboard-list"></i> category
                        </div>
                        <div class="event-image d-flex justify-content-center align-items-center">
                            <img src="layout/imgs/2.jpg" class="img-fluid" />
                        </div>
                        <div class="event-details p-3 mb-4">
                            <p class="event-name">
                                Event Title
                            </p>

                            <div class="event-tags d-flex flex-wrap justify-content-start mb-4">
                                <div class="tag mr-2">
                                    <i class="fab fa-slack-hash"></i> Design
                                </div>
                                <div class="tag mr-2">
                                    <i class="fab fa-slack-hash"></i> Technology
                                </div>
                                <div class="tag mr-2">
                                    <i class="fab fa-slack-hash"></i> Artwork
                                </div>
                                <div class="tag mr-2">
                                    <i class="fab fa-slack-hash"></i> Web Devlopment
                                </div>
                                <div class="tag mr-2">
                                    <i class="fab fa-slack-hash"></i> Human Resource
                                </div>
                                <div class="tag mr-2">
                                    <i class="fab fa-slack-hash"></i> Freelancing
                                </div>
                                <div class="tag mr-2">
                                    <i class="fab fa-slack-hash"></i> Diving
                                </div>
                            </div>

                            <div class="event-location-date">
                                <i class="fas fa-map-marker-alt"></i> Egyptial Russian University <span>- 12/05/2020</span>
                            </div>

                        </div>
                    </div>
                </a>

            </div>

        </div>
    </div>
</div>
<!-- end upcoming and running events -->

<!-- start subscription section -->
<?php

    include_once 'includes/subscribe-template.php';

?>
<!-- end subscription section -->

<!-- start past events section -->
<div class="all-past-events padd">

    <div class="container">
        <h5 class="indicator ml-4">
            Past events
        </h5>

        <div class="row">

            <div class="col-12 col-md-6 col-lg-3 mb-4">
                <div class="past-event">
                    <a href="event.php">
                        <div class="event-image position-relative">
                            <img src="layout/imgs/2.jpg" class="img-fluid" />
                            <div class="ribbon position-absolute">
                                <i class="fas fa-clipboard-list"></i> category
                            </div>
                            
                        </div>
                    </a>

                    <h5 class="mt-4">
                        <b>
                            Event Title
                        </b>
                    </h5>
                    <div class="event-tags d-flex flex-wrap justify-content-start mb-2">
                        
                        <a href="">
                            <div class="tag mr-2">
                                <i class="fab fa-slack-hash"></i> Design
                            </div>
                        </a>

                        <a href="">
                            <div class="tag mr-2">
                                <i class="fab fa-slack-hash"></i> Technology
                            </div>
                        </a>

                        <a href="">
                            <div class="tag mr-2">
                                <i class="fab fa-slack-hash"></i> Art
                            </div>
                        </a>

                        <a href="">
                            <div class="tag mr-2">
                                <i class="fab fa-slack-hash"></i> Cryptocurrncey
                            </div>
                        </a>

                        <a href="">
                            <div class="tag mr-2">
                                <i class="fab fa-slack-hash"></i> Swimming
                            </div>
                        </a>

                        <a href="">
                            <div class="tag mr-2">
                                <i class="fab fa-slack-hash"></i> Web Devlopment
                            </div>
                        </a>

                    </div>

                    <div class="event-location-date">
                        <i class="fas fa-map-marker-alt"></i> Egyptial Russian University <span>- 12/05/2020</span>
                    </div>
                    
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3 mb-4">
                <div class="past-event">
                    <a href="event.php">
                        <div class="event-image position-relative">
                            <img src="layout/imgs/1.jpg" class="img-fluid" />
                            <div class="ribbon position-absolute">
                                <i class="fas fa-clipboard-list"></i> category
                            </div>
                            
                        </div>
                    </a>

                    <h5 class="mt-4">
                        <b>
                            Event Title
                        </b>
                    </h5>
                    <div class="event-tags d-flex flex-wrap justify-content-start mb-2">
                        
                        <a href="">
                            <div class="tag mr-2">
                                <i class="fab fa-slack-hash"></i> Design
                            </div>
                        </a>

                        <a href="">
                            <div class="tag mr-2">
                                <i class="fab fa-slack-hash"></i> Technology
                            </div>
                        </a>

                        <a href="">
                            <div class="tag mr-2">
                                <i class="fab fa-slack-hash"></i> Art
                            </div>
                        </a>

                        <a href="">
                            <div class="tag mr-2">
                                <i class="fab fa-slack-hash"></i> Cryptocurrncey
                            </div>
                        </a>

                        <a href="">
                            <div class="tag mr-2">
                                <i class="fab fa-slack-hash"></i> Swimming
                            </div>
                        </a>

                        <a href="">
                            <div class="tag mr-2">
                                <i class="fab fa-slack-hash"></i> Web Devlopment
                            </div>
                        </a>

                    </div>

                    <div class="event-location-date">
                        <i class="fas fa-map-marker-alt"></i> Egyptial Russian University <span>- 12/05/2020</span>
                    </div>
                    
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3 mb-4">
                <div class="past-event">
                    <a href="event.php">
                        <div class="event-image position-relative">
                            <img src="layout/imgs/3.jpg" class="img-fluid" />
                            <div class="ribbon position-absolute">
                                <i class="fas fa-clipboard-list"></i> category
                            </div>
                            
                        </div>
                    </a>

                    <h5 class="mt-4">
                        <b>
                            Event Title
                        </b>
                    </h5>
                    <div class="event-tags d-flex flex-wrap justify-content-start mb-2">
                        
                        <a href="">
                            <div class="tag mr-2">
                                <i class="fab fa-slack-hash"></i> Design
                            </div>
                        </a>

                        <a href="">
                            <div class="tag mr-2">
                                <i class="fab fa-slack-hash"></i> Technology
                            </div>
                        </a>

                        <a href="">
                            <div class="tag mr-2">
                                <i class="fab fa-slack-hash"></i> Art
                            </div>
                        </a>

                        <a href="">
                            <div class="tag mr-2">
                                <i class="fab fa-slack-hash"></i> Cryptocurrncey
                            </div>
                        </a>

                        <a href="">
                            <div class="tag mr-2">
                                <i class="fab fa-slack-hash"></i> Swimming
                            </div>
                        </a>

                        <a href="">
                            <div class="tag mr-2">
                                <i class="fab fa-slack-hash"></i> Web Devlopment
                            </div>
                        </a>

                    </div>

                    <div class="event-location-date">
                        <i class="fas fa-map-marker-alt"></i> Egyptial Russian University <span>- 12/05/2020</span>
                    </div>
                    
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3 mb-4">
                <div class="past-event">
                    <a href="event.php">
                        <div class="event-image position-relative">
                            <img src="layout/imgs/0.jpg" class="img-fluid" />
                            <div class="ribbon position-absolute">
                                <i class="fas fa-clipboard-list"></i> category
                            </div>
                            
                        </div>
                    </a>

                    <h5 class="mt-4">
                        <b>
                            Event Title
                        </b>
                    </h5>
                    <div class="event-tags d-flex flex-wrap justify-content-start mb-2">
                        
                        <a href="">
                            <div class="tag mr-2">
                                <i class="fab fa-slack-hash"></i> Design
                            </div>
                        </a>

                        <a href="">
                            <div class="tag mr-2">
                                <i class="fab fa-slack-hash"></i> Technology
                            </div>
                        </a>

                        <a href="">
                            <div class="tag mr-2">
                                <i class="fab fa-slack-hash"></i> Art
                            </div>
                        </a>

                        <a href="">
                            <div class="tag mr-2">
                                <i class="fab fa-slack-hash"></i> Cryptocurrncey
                            </div>
                        </a>

                        <a href="">
                            <div class="tag mr-2">
                                <i class="fab fa-slack-hash"></i> Swimming
                            </div>
                        </a>

                        <a href="">
                            <div class="tag mr-2">
                                <i class="fab fa-slack-hash"></i> Web Devlopment
                            </div>
                        </a>

                    </div>

                    <div class="event-location-date">
                        <i class="fas fa-map-marker-alt"></i> Egyptial Russian University <span>- 12/05/2020</span>
                    </div>
                    
                </div>
            </div>

        </div>
    </div>
</div>

</div>
<?php
    require_once 'includes/footer.php';
?>
<script src="layout/js/pages/events.js"></script>