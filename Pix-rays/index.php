<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pix-Rays</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/agency.min.css" rel="stylesheet">

  </head>

  <body id="page-top" onload="myfunction()">

  	<!-- Preloader -->

  	<div id="preloader">

	<div class="sk-spinner sk-spinner-pulse"></div>

</div>

    <!-- Navigation -->
    <nav class="button"></nav>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container-fluid">
        <a class="navbar-brand js-scroll-trigger ml-5" href="#page-top"><i class="fab fa-pinterest" id="px"></i>ix-Rays</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#Gallery">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">Portraitist</a>
            </li>
             <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">About</a>
            </li>  
             <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#team">Developer</a>
            </li>                    
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
            </li>            
          </ul>
        </div>
        <?php
      if (isset($_SESSION['userid'])) {
      echo '<form action="logout.inc.php" method="post"> <button class="btn btn-dark d-none d-lg-inline-block mb-3 mb-md-0 ml-md-3" type="submit" name="logout-submit" >LOGOUT</button> </form>';
      }
      else {
        echo '<a class="btn btn-dark d-none d-lg-inline-block mb-3 mb-md-0 ml-md-3" href="login.php">LOGIN</a>';
      }

    ?> 

        
      </div>        
    </nav>

    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <div class="intro-text">
           <?php
      if (isset($_SESSION['userid'])) {
      echo '<p style="color: black; font-size: 50px; font-weight: 500; font-style: italic; font-family: Droid Serif;  " >Welcome to Pix-Rays!</p>';
      }      
    ?>   
        	<div class="col-md-8 offset-md-2 mb-1">
        	<div class="intro">
         
          <h1 id="New" style="color: black;">THE PHOTOGRAPHY PORTAL</h1>      
          <h3 id="old">A Platform where you can book the best photographers<br>and get the awesome photography experience ever.<br>We provide best photographers at a very afordable<br>price range..!</h3>
          </div>
          </div>
    <?php
      if (!isset($_SESSION['userid'])) {
      echo '<a id="button" class="btn btn-success btn-xl text-uppercase js-scroll-trigger" href="register.php">Register Now</a>';
      }      
    ?> 
        </div>
      </div>
    </header>

    <!-- Services -->
    <section id="services" style="background-image: linear-gradient(135deg, rgb(246, 152, 36) 30%, rgb(132, 239, 180) 70%);">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Services</h2>
            <h3 class="section-subheading text" style="color: #495057;">We Are Best At Our Services.</h3>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-indigo"></i>
              <i class="fas fa-camera fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Photography</h4>
            <p class="text" style="color: #495057;">We provide a wide range of photography categories like Landscape, Wildlife, Portrait, Wedding Photography/Event Photography, Fashion and many more.. 
</p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-info"></i>
              <i class="fas fa-swimmer fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Go-Pro</h4>
            <p class="text" style="color: #495057;">Go-pro is in trend in this morden era, the love to take under water shoots and we are here to give you that.</p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-danger"></i>
              <i class="fas fa-video fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Videography</h4>
            <p class="text" style="color: #495057;">Videography gives soul to your precious moments so we provide our videography categories like Filming, Drone shoots, Go-Pro Shoots.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Carousel242, 36, 255 -->
    <section id="Gallery" style="background-image: linear-gradient(135deg, rgb(28, 28, 32) 50%, rgb(227, 62, 237) 90%);">
      
        
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase" style="color: white;">Gallery</h2>
            <h3 class="section-subheading text-muted">The Pix-Rays Photo Gallery.</h3>
          </div>
        </div>

    <div id="demo" class="carousel slide" data-ride="carousel" data-interval="5000" data-pause="false">

  
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
    <li data-target="#demo" data-slide-to="3"></li>
    <li data-target="#demo" data-slide-to="4"></li>
  </ul>

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/carousel/adorable1.jpg" alt="Los Angeles">
       <div class="carousel-caption d-none d-md-block">
      <h3>Adorable Girl</h3>       
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/carousel/party.jpg" alt="Chicago">
    <div class="carousel-caption d-none d-md-block">
      <h3>Party People</h3>       
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/carousel/bride-ceremony1.jpg" alt="New York">
       <div class="carousel-caption d-none d-md-block">
      <h3>Together Forever</h3>       
  </div>
    </div>
     <div class="carousel-item">
      <img class="d-block w-100" src="img/carousel/bali-couple1.jpg" alt="New York">
      <div class="carousel-caption d-none d-md-block">
      <h3>Love Couple</h3>       
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/carousel/bride1.jpg" alt="New York">
      <div class="carousel-caption d-none d-md-block">
      <h3>Beautiful Bride</h3>       
  </div>
    </div>
  </div>

  
  <a class="carousel-control-prev" href="#demo" data-slide="prev" >
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>
</div>
</section>
 
    <!-- Portraitist Grid -->
    <section class="bg" style="background-image: linear-gradient(135deg, rgb(246, 152, 36) 30%, rgb(132, 239, 180) 70%);" id="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Portraitist</h2>
            <h3 class="section-subheading text" style="color: #495057;">Our Brillent Photographers.</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-eye fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/thumb1.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>John</h4>
              <p class="text-muted">Illustration</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-eye fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/thumb2.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Edwin</h4>
              <p class="text-muted">Graphic Design</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-eye fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/thumb3.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Maria</h4>
              <p class="text-muted">Identity</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-eye fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/thumb4.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Brad</h4>
              <p class="text-muted">Creative</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-eye fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/thumb5.jpeg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Carry</h4>
              <p class="text-muted">Website Design</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-eye fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/thumb6.jpeg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Charles</h4>
              <p class="text-muted">Photography</p>
            </div>
          </div>
        </div>
      </div>

      <!-- pagenation -->

    <nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>
    <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
      </a>
    </li>
  </ul>
</nav>

    </section>

    <!-- About -->
    <section id="about" style="background-image: linear-gradient(135deg, rgb(28, 28, 32) 50%, rgb(227, 62, 237) 90%);
">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase" style="color: white;">About</h2>
            <h3 class="section-subheading text-muted">Some Info About Pix-Rays.</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <ul class="timeline">
              <li>
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/about/1.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4 style="color: white;">2017-2018</h4>
                    <h4 class="subheading" style="color: white;">Our Humble Beginnings</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted"></p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/about/2.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4 style="color: white;">March 2018</h4>
                    <h4 class="subheading" style="color: white;">An Agency is Born</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted"></p>
                  </div>
                </div>
              </li>
              <li>
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/about/3.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4 style="color: white;">December 2018</h4>
                    <h4 class="subheading" style="color: white;">Transition to Full Service</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted"></p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/about/4.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4 style="color: white;">July 2019</h4>
                    <h4 class="subheading" style="color: white;">Phase Two Expansion</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted"></p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <h4>Be Part
                    <br>Of Our
                    <br>Story!</h4>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- Developer -->
    <section class="bg" style="background-image: linear-gradient(135deg, rgb(246, 152, 36) 30%, rgb(132, 239, 180) 70%);" id="team">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">The Developer</h2>
            <h3 class="section-subheading text" style="color: #495057;">Mind Behind Pix-Rays.</h3>
          </div>
        </div>
       
          <div class="col-sm-4 offset-md-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="img/team/4.jpg" alt="">
              <h4>Kaushal Kishor</h4>
              <p class="text" style="color: #495057;">Lead Developer</p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-instagram"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <p class="large text" style="color: #495057;">The price of success is hard work, dedication to the job at hand, and the determination that whether we win or lose, we have applied the best of ourselves to the task at hand.</p>
          </div>
        </div>
      </div>
    </section>
  
    
    

    <!-- Clients -->
    <section class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="img/logos/envato.jpg" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="img/logos/designmodo.jpg" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="img/logos/themeforest.jpg" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="img/logos/creative-market.jpg" alt="">
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact -->
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Contact Us</h2>
            <h3 class="section-subheading text-muted">Let Us Know What You Think.!</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <form id="contactForm" name="sentMessage" novalidate="novalidate">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" id="name" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required="required" data-validation-required-message="Please enter your phone number.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <textarea class="form-control" id="message" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                  <div id="success"></div>
                  <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Send Message</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <span class="copyright">Copyright &copy;2018 All Rights Reserved<br> Made with <i class="fa fa-heart" aria-hidden="true"></i> by Kaushal.</span>
          </div>
          <div class="col-md-4">
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-instagram"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="list-inline quicklinks">
              <li class="list-inline-item">
                <a href="#">Privacy Policy</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Terms of Use</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <!-- Portfolio Modals -->

    <!-- Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>          
          <div class="container">
            <div class="row">          
              <div class="col-lg-8 mx-auto">                
                <div class="modal-body">
                  <!-- Project Details Go Here -->

                  <h2 class="text-uppercase">John</h2>
                  <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/adult-art-camera-.jpg" alt="">                  
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class="list-inline">
                    <li>Date: January 2017</li>
                    <li>Client: Threads</li>
                    <li>Category: Illustration</li>
                  </ul>
                  <button class="btn btn-success" data-dismiss="modal" type="button">                  
                    Book Now</button>
                </div>
              </div>
            </div>
          </div>

          
        </div>
      </div>
    </div>


    <!-- Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Edwin</h2>
                  <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/02-full.jpg" alt="">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class="list-inline">
                    <li>Date: January 2017</li>
                    <li>Client: Explore</li>
                    <li>Category: Graphic Design</li>
                  </ul>
                  <button class="btn btn-success" data-dismiss="modal" type="button">                  
                    Book Now</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Maria</h2>
                  <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/03-full.jpg" alt="">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class="list-inline">
                    <li>Date: January 2017</li>
                    <li>Client: Finish</li>
                    <li>Category: Identity</li>
                  </ul>
                  <button class="btn btn-success" data-dismiss="modal" type="button">                 
                    Book Now</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Brad</h2>
                  <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/04-full.jpg" alt="">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class="list-inline">
                    <li>Date: January 2017</li>
                    <li>Client: Lines</li>
                    <li>Category: Branding</li>
                  </ul>
                  <button class="btn btn-success" data-dismiss="modal" type="button">                  
                    Book Now</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 5 -->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Carry</h2>
                  <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/05-full.jpg" alt="">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class="list-inline">
                    <li>Date: January 2017</li>
                    <li>Client: Southwest</li>
                    <li>Category: Website Design</li>
                  </ul>
                  <button class="btn btn-success" data-dismiss="modal" type="button">Book Now</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 6 -->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Charles</h2>
                  <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/06-full.jpg" alt="">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class="list-inline">
                    <li>Date: January 2017</li>
                    <li>Client: Window</li>
                    <li>Category: Photography</li>
                  </ul>
                  <button class="btn btn-success" data-dismiss="modal" type="button">                  
                    Book Now</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/bootstrap.js"></script>


    <!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/agency.min.js"></script>

    <!-- preloader script -->

     <script>

      var preloader = document.getElementById('preloader')

      function myfunction(){

        preloader.style.display = 'none';

      } 
    </script>

  </body>
</html>
