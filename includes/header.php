<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Title - AAPG Suez</title>


        <link rel="stylesheet" href="layout/css/bootstrap.min.css" />
        <link rel="stylesheet" href="layout/css/fontawesome.min.css" />
        <link rel="stylesheet" href="layout/css/main.css" />

        <style>
            /* just for preloader*/
            body{
                overflow: hidden;
            }
            .preloader{
                width: 100%;
                height: 100vh;
                background-color: #FFF;
                z-index: 9999;
                top: 0;
                bottom: 0;
                left: 0;
                right: 0;
                position: absolute;
            }
            .preloader > div{
                width: 100%;
                height: 100%;
                position: relative;
            }
            .preloader .progress-preloader{
                position: absolute;
                background: rgb(255, 224, 224);
            }

        </style>
    </head>
    <body>

    <!-- start preloader -->
    <div class="preloader" id="preloader">
        <div>
            <div class="overlay progress-preloader" id="progress-overlay-proloader"></div>
        </div>
    </div>
    
    <script>
        function updatePageProgress(progress){
            var element = document.getElementById("progress-overlay-proloader");
            element.style.width = progress + '%';
            if(progress >= 100){
                var element = document.getElementById("preloader");
                element.style.display = 'none';
            }
        }
    </script>
    <script src="layout/js/pace.min.js"></script>

    <!-- start navbar -->
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="layout/imgs/logo.png" />
            </a>
            <div class="social-copy d-block d-md-none"></div>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle custom-dropdown" data-to="#insider-aapg-menu" role="button">
                    Insider AAPG
                        <i class="dropdown-i fas fa-chevron-down position-absolute"></i>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Magazines
                        <i class="dropdown-i fas fa-chevron-down position-absolute"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="magazine.php">PetroPlus Magazine</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="magazine.php">Aspire Magazine</a>
                        <div class="dropdown-divider"></div>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="position-relative nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Projects
                        <i class="dropdown-i fas fa-chevron-down position-absolute"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="project.php">Activation Program</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="project.php">Triple Effect</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="project.php">Minute Schools</a>
                    <div class="dropdown-divider"></div>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Science
                        <i class="dropdown-i fas fa-chevron-down position-absolute"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="articles.php">Scientific Articles</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="news.php">News</a>
                        <div class="dropdown-divider"></div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>

            </ul>
               
                <div class="social-btns d-flex align-items-center mr-2 ">
                    <div class="m-auto">
                        <a class="mr-4 facebook" href="#" target="_blank">
                            <i class="icon fab fa-facebook-f"></i>
                        </a>
                        
                        <a class="mr-4 twitter" href="#" target="_blank">
                            <i class="icon fab fa-twitter"></i>
                        </a>
                    
                        <a class="mr-4 google" href="#" target="_blank">
                            <i class="icon fab fa-linkedin-in"></i>
                        </a>
                        
                        <a class="mr-4 instagram" href="#" target="_blank">
                            <i class="icon fab fa-whatsapp"></i>
                        </a>
                    </div>
				</div>
                
                <button data-toggle="modal" data-target="#contact-us-modal" class="btn btn-sm btn-secondary my-2 my-sm-0" type="submit">Contact us</button>
                
            </div>
            
        </div>
    </nav>

    <div class="navholder"></div>

    <!-- custom nav dropdown menus -->
    <div class="slide-up custom-dropdown-parent p-4" id="insider-aapg-menu" >
        <div class="container">
            <div class="close-custom-slider mb-4 d-block d-md-none">
                <i class="fas fa-chevron-left"></i>
                Back
            </div>

            <div class="row">
                <div class="col-12 col-md-4 sub-slide">
                    <div class="custom-dropdown-child p-3">
                        <a href="events.php" class="d-flex align-items-between">
                           
                            <div>
                                <i class="fas fa-calendar-day fa-2x"></i>
                            </div>
                            
                            <div>
                                <div>
                                <h2 class="lead">
                                    <b>
                                    Events
                                    </b>
                                </h2>
                                <p class="descripton">
                                    For the past few years, AAPG has organised many great Events that you've missed but it's not late.
                                </p>
                                </div>
                            </div>
                            
                        </a>
                    </div>
                </div>

                <div class="col-12 col-md-4 sub-slide">
                    <div class="custom-dropdown-child p-3">
                        <a href="team.php" class="d-flex align-items-between">
                           
                            <div>
                            <i class="fas fa-users fa-2x"></i>
                            </div>
                            
                            <div>
                                <div>
                                <h2 class="lead">
                                    <b>
                                        Structure
                                    </b>
                                </h2>
                                <p class="descripton">
                                    Know about our infrastucture to know how is aapg is lead by great leaders and meet them yourself.
                                </p>
                                </div>
                            </div>
                            
                        </a>
                    </div>
                </div>

                <div class="col-12 col-md-4 sub-slide">
                    <div class="custom-dropdown-child p-3">
                        <a href="" class="d-flex align-items-between">
                           
                            <div>
                            <i class="fas fa-user-circle fa-2x"></i>
                            </div>
                            
                            <div>
                                <div>
                                <h2 class="lead">
                                    <b>
                                    MyAccount
                                    </b>
                                </h2>
                                <p class="descripton">
                                    AAPG Online Community.
                                </p>
                                </div>
                            </div>
                            
                        </a>
                    </div>
                </div>

                </div>
            </div>
        </div>
    </div>
    <!-- end custom dropdowns -->


    <!-- start contact us modal -->

<div class="modal fade" id="contact-us-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Contact Us</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form>
        <div class="modal-body">
        
            <div class="form-group row">
                <label for="name-static" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10 mb-2">
                    <input type="text" name="name" type="text" placeholder="You name..." required class="form-control" id="name-static">
                </div>
                <label for="email-static" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="text" name="email" type="email" required placeholder="You email..." required class="form-control" id="email-static">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Message</label>
                <div class="col-sm-10">
                    <textarea name="message" class="form-control" required placeholder="Your message ...."></textarea>
                </div>
            </div>
            
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Send</button>
        </div>
    </form>
    </div>
  </div>
</div>

    <!-- end contact us modal -->

    <!-- end navbar -->
    
    