<link rel="stylesheet" href="layout/css/owl.carousel.min.css" />
<link rel="stylesheet" href="layout/css/owl.theme.default.min.css" />
<link rel="stylesheet" href="layout/css/lightbox.min.css" />

<?php
    require_once 'includes/header.php';
?>

<div class="single-event-page">

<div class="top-hero padd">
    <div class="container">
        <div class="row">

            <div class="col-12 col-md-6 col-lg-7 mb-4">
                <div class="main-slider d-flex justify-content-center align-items-center">

                    <div class="owl-carousel owl-theme event-slider">
                        <div class="slider-item-img item d-flex justify-content-center align-items-center">
                            <a href="layout/imgs/logo.png" data-lightbox="image-1" data-title="My caption" >
                                <img src="layout/imgs/logo.png" title="event title" class="img-container" />
                            </a>
                        </div>

                        <div class="slider-item-img item d-flex justify-content-center align-items-center">
                            <a href="layout/imgs/0.jpg" data-lightbox="image-1" data-title="My caption" >
                                <img src="layout/imgs/0.jpg" title="event title" class="img-container" />
                            </a>
                        </div>

                        <div class="slider-item-img item d-flex justify-content-center align-items-center">
                            <a href="layout/imgs/2.jpg" data-lightbox="image-1" data-title="My caption" >
                                <img src="layout/imgs/2.jpg" title="event title" class="img-container" />
                            </a>
                        </div>
                    </div>
                    
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-5">
                
                <div class="event-details">
                    <div class="ribbon d-inline-block mb-4">
                        <i class="fas fa-clipboard-list"></i> event category
                    </div>
                    <h1 class="mb-4">
                        <b>
                            Event Name Here
                        </b>
                    </h1>

                    <div class="event-cards">
                        <div class="row">

                            <div class="col-12 col-md-6 mb-2">

                                <div class="d-flex align-items-center">
                                    <div class="mr-4">
                                        <div class="card-icon d-flex justify-content-center align-items-center">
                                            <div>
                                                <i class="fas fa-map-marker-alt fa-2x icon"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-name">
                                        <b>
                                            Event Location
                                        </b>
                                        <p class="small mb-0">
                                            Egyptial Russian University
                                        </p>
                                    </div>
                                </div>
                                
                            </div>

                            <div class="col-12 col-md-6 mb-2">

                                <div class="d-flex align-items-center">
                                    <div class="mr-4">
                                        <div class="card-icon d-flex justify-content-center align-items-center">
                                            <div>
                                                <i class="fab fa-facebook-f fa-2x icon"></i>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="card-name">
                                        <b>
                                            Event on facebook
                                        </b>
                                        <p class="small mb-0">
                                            <a href="" target="_blank" >
                                                Event Title Here
                                            </a>
                                        </p>
                                    </div>
                                  
                                </div>
                                
                            </div>

                            <div class="col-12 col-md-6 mb-2">

                                <div class="d-flex align-items-center">
                                    <div class="mr-4">
                                        <div class="card-icon d-flex justify-content-center align-items-center">
                                            <div>
                                                <i class="fas fa-calendar-day fa-2x icon"></i>
                                            </div>
                                        </div>
                                    </div>
                                   
                                    <div class="card-name">
                                        <b>
                                            Date
                                        </b>
                                        <p class="small mb-0">
                                            12-05-2020
                                        </p>
                                    </div>
                                    
                                </div>
                                
                            </div>

                            <div class="col-12 col-md-6 mb-2">

                                <div class="d-flex align-items-center">
                                    <div class="mr-4">
                                        <div class="card-icon d-flex justify-content-center align-items-center">
                                            <div>
                                                <i class="fas fa-user icon fa-2x"></i>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="card-name">
                                        <b>
                                            Attendees
                                        </b>
                                        <p class="small mb-0">
                                            +500 attendee
                                        </p>
                                    </div>
                                   
                                </div>
                                
                            </div>

                        </div>
                    </div>

                    <div class="events-page mt-4">
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
                    </div>
                    <!-- share button -->
                    <div class="share buttons mb-4">
                        <div class="sharethis-inline-share-buttons"></div>
                        <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5c4e24c180b4ba001b1eeced&product=inline-share-buttons' async='async'></script>
                    </div>
                    <!-- if upcoming event -->
                    <a href="">
                        <button class="btn btn-primary btn-block">
                            Register Now
                        </button>
                    </a>

                </div>
                
            </div>

        </div>
    </div>
</div>

<div class="container-fluid padd details-similar-section">
    <div class="row">
        <div class="col-12 col-lg-8 mb-4">
            <div class="content mb-4">
                loreum ipsum dolar is a dummy text for printing industry to replace no sense wordsloreum ipsum dolar is a dummy text for printing industry to replace no sense wordsloreum ipsum dolar is a dummy text for printing industry to replace no sense wordsloreum ipsum dolar is a dummy text for printing industry to replace no sense wordsloreum ipsum dolar is a dummy text for printing industry to replace no sense wordsloreum ipsum dolar is a dummy text for printing industry to replace no sense wordsloreum ipsum dolar is a dummy text for printing industry to replace no sense wordsloreum ipsum dolar is a dummy text for printing industry to replace no sense wordsloreum ipsum dolar is a dummy text for printing industry to replace no sense wordsloreum ipsum dolar is a dummy text for printing industry to replace no sense wordsloreum ipsum dolar is a dummy text for printing industry to replace no sense wordsloreum ipsum dolar is a dummy text for printing industry to replace no sense wordsloreum ipsum dolar is a dummy text for printing industry to replace no sense wordsloreum ipsum dolar is a dummy text for printing industry to replace no sense wordsloreum ipsum dolar is a dummy text for printing industry to replace no sense wordsloreum ipsum dolar is a dummy text for printing industry to replace no sense wordsloreum ipsum dolar is a dummy text for printing industry to replace no sense wordsloreum ipsum dolar is a dummy text for printing industry to replace no sense wordsloreum ipsum dolar is a dummy text for printing industry to replace no sense words
            </div>
            <div class="comments-section">
           

                <div id="disqus_thread" class="disqus_thread mt-4 mb-4"></div>
                <script>
                (function() { // DON'T EDIT BELOW THIS LINE
                var d = document, s = d.createElement('script');
                s.src = 'https://masusc.disqus.com/embed.js';
                s.setAttribute('data-timestamp', +new Date());
                (d.head || d.body).appendChild(s);
                })();
                </script>
                <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
    
               
            </div>
        </div>

        <div class="col-12 col-lg-4 similar-events">
            <!-- similar events section -->
            
            <div class="p-3 mb-4 head d-flex align-items-center">
                <i class="fa fa-eye fa-2x mr-2"></i> similar events
            </div>

            <div class="d-flex similar-event-single mb-4">
                <a href="" class="href-event d-block">
                    <div class="mr-2 event-image">
                        <img src="layout/imgs/0.jpg" class="img-fluid" />
                    </div>
                </a>
                <div class="event-details">

                    <div class="ribbon d-inline-block mb-2">
                        <i class="fas fa-clipboard-list"></i> event category
                    </div>
                    <p>
                        <b>
                            Event Name Here
                        </b>
                    </p>
                    <div class="events-page mt-2">
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
    
                        </div>
                    

                        <div class="event-location-date">
                            <i class="fas fa-map-marker-alt"></i> Egyptial Russian University <span>- 12/05/2020</span>
                        </div>
                    </div>

                </div>
            </div>

            <div class="d-flex similar-event-single mb-4">
                <a href="" class="href-event d-block">
                    <div class="mr-2 event-image">
                        <img src="layout/imgs/1.jpg" class="img-fluid" />
                    </div>
                </a>
                <div class="event-details">

                    <div class="ribbon d-inline-block mb-2">
                        <i class="fas fa-clipboard-list"></i> event category
                    </div>
                    <p>
                        <b>
                            Event Name Here
                        </b>
                    </p>
                    <div class="events-page mt-2">
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
    
                        </div>
                    

                        <div class="event-location-date">
                            <i class="fas fa-map-marker-alt"></i> Egyptial Russian University <span>- 12/05/2020</span>
                        </div>
                    </div>

                </div>
            </div>

            <div class="d-flex similar-event-single mb-4">
                <a href="" class="href-event d-block">
                    <div class="mr-2 event-image">
                        <img src="layout/imgs/2.jpg" class="img-fluid" />
                    </div>
                </a>
                <div class="event-details">

                    <div class="ribbon d-inline-block mb-2">
                        <i class="fas fa-clipboard-list"></i> event category
                    </div>
                    <p>
                        <b>
                            Event Name Here
                        </b>
                    </p>
                    <div class="events-page mt-2">
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

<!-- subscribe template -->
<?php
    include_once 'includes/subscribe-template.php';
?>



</div>

<?php
    require_once 'includes/footer.php';
?>

<script src="layout/js/owl.carousel.min.js"></script>
<script src="layout/js/lightbox.min.js"></script>
<script src="layout/js/pages/event.js"></script>