<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Burger Bun</title>

    <link href="//fonts.googleapis.com/css2?family=Dosis:wght@300;400;500;600;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Template CSS -->
    <link rel="stylesheet" href="/burgerbun/assets/css/style-starter.css">
  </head>
  <body>
<!--header-->
<header id="site-header" class="fixed-top">
  <div class="container">
      <nav class="navbar navbar-expand-lg stroke px-0">
          <h1> <a class="navbar-brand" href="index">
              <img src="/burgerbun/assets/images/burger.png" alt="burger logo"width="35px" /> Burger Bun
              </a></h1>
          <!-- if logo is image enable this   
  <a class="navbar-brand" href="#index">
      <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
  </a> -->
          <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
              data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
              <span class="navbar-toggler-icon fa icon-close fa-times"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
              <ul class="navbar-nav ml-auto">
                  <li class="nav-item active">
                      <a class="nav-link" href="home">Home</a>
                  </li>
                  <li class="nav-item @@about__active">
                      <a class="nav-link" href="about">About</a>
                  </li>
                  <li class="nav-item @@menu__active">
                      <a class="nav-link" href="menu">Menu</a>
                  </li>
                  <li class="nav-item @@contact__active">
                      <a class="nav-link" href="contact">Contact</a>
                  </li>
                  <!--/search-right-->
                  <div class="search-right">
                      <a href="#search" title="search"><span class="fa fa-search" aria-hidden="true"></span></a>
                      <!-- search popup -->
                      <div id="search" class="pop-overlay">
                          <div class="popup">
                              <h4 class="mb-3">Search here</h4>
                              <form action="error" method="GET" class="search-box">
                                  <input type="search" placeholder="Enter Keyword" name="search" required="required"
                                      autofocus="">
                                  <button type="submit" class="btn btn-style btn-primary">Search</button>
                              </form>

                          </div>
                          <a class="close" href="#close">×</a>
                      </div>
                      <!-- /search popup -->
                  </div>
                  <!--//search-right-->
              </ul>
          </div>
          <!-- toggle switch for light and dark theme -->
          <div class="mobile-position">
              <nav class="navigation">
                  <div class="theme-switch-wrapper">
                      <label class="theme-switch" for="checkbox">
                          <input type="checkbox" id="checkbox">
                          <div class="mode-container">
                              <i class="gg-sun"></i>
                              <i class="gg-moon"></i>
                          </div>
                      </label>
                  </div>
              </nav>
          </div>
          <!-- //toggle switch for light and dark theme -->
      </nav>
  </div>
</header>
<!--/header-->
<!-- banner section -->
<section id="home" class="w3l-banner py-5">
    <div class="container py-lg-5 py-md-4 mt-lg-0 mt-md-5 mt-4">
        <div class="row align-items-center py-lg-5 py-4 mt-4">
            <div class="col-lg-6 col-sm-12">
                <h3 class="">Delight your Best. </h3>
                <h2 class="mb-4">Steak Burger</h2>
                <p>Enjoy delicious burgers and our selection of menu items. For questions or messages, contact us via the contact page. Enjoy!</p>
                <div class="mt-md-5 mt-4">
                    <a class="btn btn-primary btn-style mr-2" href="menu"> See Menu </a>
                    <a class="btn btn-outline-primary btn-style" href="#call"> Book a table </a>
                </div>
            </div>
            <div class="col-lg-5">
            </div>
        </div>
    </div>
</section>
<!-- //banner section -->
<section class="w3l-index3" id="work">
    <div class="midd-w3 py-5">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="row">
                <div class="col-lg-6 left-wthree-img text-righ">
                    <div class="position-relative">
                        <img src="burgerbun/assets/images/about.jpg" alt="" class="img-fluid radius-image-full">
                        <a href="#small-dialog" class="popup-with-zoom-anim play-view text-center position-absolute">
                            <span class="video-play-icon">
                                <span class="fa fa-play"></span>
                            </span>
                        </a>
                        <!-- dialog itself, mfp-hide class is required to make dialog hidden -->
                        <div id="small-dialog" class="zoom-anim-dialog mfp-hide">
                            <iframe src="https://www.youtube.com/embed/dCVEY88Fn1k" allow="autoplay; fullscreen" allowfullscreen=""></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-lg-0 mt-md-5 mt-4 about-right-faq align-self">
                    <h5 class="title-small mb-1">Our story</h5>
                    <h3 class="title-big">Burgers! You won't Find Anywhere Else with Best Quality <span>Ingredients</span></h3>
                    <p class="mt-sm-4 mt-3">Discover the magic behind our mouthwatering burgers on our YouTube channel. Watch how we craft each delicious bite with passion and top-notch ingredients. Join us on this flavorful journey!</p>
                    <a class="btn btn-primary btn-style mt-md-5 mt-4 mr-2" href="about"> Read More </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- /bottom-grids-->
<section class="w3l-bottom-grids-6 py-5">
    <div class="container py-lg-5 py-md-4 py-2">
        <div class="grids-area-hny main-cont-wthree-fea row">
            <div class="col-lg-4 col-md-6 grids-feature">
                <div class="area-box">
                    <img src="burgerbun/assets/images/burger.png" alt="burger logo" width="35px">
                    <h4><a href="#feature" class="title-head">Burgers</a></h4>
                    <p class="mb-3">Juicy, Flavorful, Fresh.</p>
                    <a href="menu" class="btn btn-text">View all </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 grids-feature mt-md-0 mt-4">
                <div class="area-box">
                    <img src="burgerbun/assets/images/snack.png" alt="burger logo" width="35px">
                    <h4><a href="#feature" class="title-head">Snacks</a></h4>
                    <p class="mb-3">Crispy, Savory, Tasty.</p>
                    <a href="menu" class="btn btn-text">View all </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 grids-feature mt-lg-0 mt-4">
                <div class="area-box">
                    <img src="burgerbun/assets/images/beverage.png" alt="burger logo" width="35px">
                    <h4><a href="#feature" class="title-head">Beverages</a></h4>
                    <p class="mb-3">Refreshing, Chilled, Delightful.</p>
                    <a href="menu" class="btn btn-text">View all </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //bottom-grids-->

<!-- /mobile section --->
<section class="w3l-mobile-content-6 py-5">
    <div class="mobile-info py-lg-5 py-md-4 py-2">
        <!-- /mobile-info-->
        <div class="container">
            <div class="row mobile-info-inn mx-lg-0">
                <div class="col-lg-4 mobile-right">
                    <div class="row mobile-right-grids mb-lg-5 mb-4">
                        <div class="col-2 mobile-right-icon">
                            <div class="mobile-icon">
                                <span class="fa fa-leaf"></span>
                            </div>
                        </div>
                        <div class="col-10 mobile-right-info">
                            <h6><a href="#url">Natural ingredients</a></h6>
                            <p>We only use high-quality, natural ingredients to ensure every bite of your burger is healthy and delicious.</p>
                        </div>
                    </div>
                    <div class="row mobile-right-grids mb-lg-5 mb-4">
                        <div class="col-2 mobile-right-icon">
                            <div class="mobile-icon">
                                <span class="fa fa-shopping-basket"></span>
                            </div>
                        </div>
                        <div class="col-10 mobile-right-info">
                            <h6><a href="#url"> Fresh vegetables & Meet</a></h6>
                            <p>Fresh vegetables and selected meats are the secret to the deliciousness of each of our dishes, providing an unmatched taste.</p>
                        </div>
                    </div>
                    <div class="row mobile-right-grids">
                        <div class="col-2 mobile-right-icon">
                            <div class="mobile-icon">
                                <span class="fa fa-users"></span>
                            </div>
                        </div>
                        <div class="col-10 mobile-right-info">
                            <h6><a href="#url">World’s best Chef </a></h6>
                            <p>Our talented chefs have honed their skills all over the world, bringing exquisite taste to every dish.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mobile-left">
                    <img src="burgerbun/assets/images/burger1.png" class="img-fluid radius-image" alt="">
                </div>
                <div class="col-lg-4 mobile-right">
                    <div class="row mobile-right-grids mb-lg-5 mb-4">
                        <div class="col-2 mobile-right-icon">
                            <div class="mobile-icon">
                                <span class="fa fa-cogs"></span>
                            </div>
                        </div>
                        <div class="col-10 mobile-right-info">
                            <h6><a href="#url">Best quality products</a></h6>
                            <p>We are always committed to presenting the best quality products, from raw materials to presentation.</p>
                        </div>
                    </div>
                    <div class="row mobile-right-grids mb-lg-5 mb-4">
                        <div class="col-2 mobile-right-icon">
                            <div class="mobile-icon">
                                <span class="fa fa-motorcycle"></span>
                            </div>
                        </div>
                        <div class="col-10 mobile-right-info">
                            <h6><a href="#url">Fastest door delivery</a></h6>
                            <p>Enjoy the deliciousness of Burger Bun without waiting long with the fastest delivery service straight to your door.</p>
                        </div>
                    </div>
                    <div class="row mobile-right-grids">
                        <div class="col-2 mobile-right-icon">
                            <div class="mobile-icon">
                                <span class="fa fa-thumbs-down"></span>
                            </div>
                        </div>
                        <div class="col-10 mobile-right-info">
                            <h6><a href="#url">Ground beef & Low fat</a></h6>
                            <p>Our low-fat ground beef provides guilt-free enjoyment, perfect for those of you who care about your health.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- //mobile-info-->
    </div>
</section>
<!-- //mobile section --->
<!-- middle -->
<div class="middle py-5" id="call">
    <div class="container py-lg-3">
        <div class="welcome-left text-center py-md-5 py-3">
            <h3>The Right Ingredients for the Right Food. Eat Healthy, Delicious and Perfect Burgers From Our Restaurant</h3>
            <h3 class="mt-4">Call us to order: <a href="tel:+1 123 456 789">+1 123 456 789</a> </h3>
            <a href="contact" class="btn btn-style btn-primary mt-sm-5 mt-4 mr-2">Contact Us</a>
            <a href="#book" class="btn btn-style btn-outline-primary mt-sm-5 mt-4">Book a table</a>
        </div>
    </div>
</div>
<!-- //middle -->
<!--  Work gallery section -->
<div class="w3l-gallery2" id="gallery">
    <div class="burger galleryks py-5">
      <div class="container py-lg-4 py-md-3">
        <h6 class="title-small text-center">Food Gallery</h6>
        <h3 class="title-big mb-lg-5 mb-4 text-center">Our Burger Gallery</h3>
        <div class="row no-gutters masonry">
          <div class="col-lg-3 col-md-4 col-sm-6">
            <a href="burgerbun/assets/images/g1.jpg" class="js-img-viwer d-block" data-caption="The Right Ingredients for the Right Food."
              data-id="lion">
              <img src="burgerbun/assets/images/g1.jpg" class="img-fluid radius-image-full" alt="burger gallery" />
              <div class="content-overlay"></div>
              <div class="content-details fadeIn-top">
                <span class="fa fa-plus" aria-hidden="true"></span>
                <h4>Delight your Best</h4>
              </div>
            </a>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6">
            <a href="burgerbun/assets/images/g2.jpg" class="js-img-viwer d-block" data-caption="The Right Ingredients for the Right Food."
              data-id="camel">
              <img src="burgerbun/assets/images/g2.jpg" class="img-fluid radius-image-full" alt="burger gallery" />
              <div class="content-overlay"></div>
              <div class="content-details fadeIn-top">
                <span class="fa fa-plus" aria-hidden="true"></span>
                <h4>Delight your Best</h4>
              </div>
            </a>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6">
            <a href="burgerbun/assets/images/g3.jpg" class="js-img-viwer d-block" data-caption="The Right Ingredients for the Right Food."
              data-id="hippopotamus">
              <img src="burgerbun/assets/images/g3.jpg" class="img-fluid radius-image-full" alt="burger gallery" />
              <div class="content-overlay"></div>
              <div class="content-details fadeIn-top">
                <span class="fa fa-plus" aria-hidden="true"></span>
                <h4>Delight your Best</h4>
              </div>
            </a>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6">
            <a href="burgerbun/assets/images/g4.jpg" class="js-img-viwer d-block" data-caption="The Right Ingredients for the Right Food."
              data-id="koala">
              <img src="burgerbun/assets/images/g4.jpg" class="img-fluid radius-image-full" alt="burger gallery" />
              <div class="content-overlay"></div>
              <div class="content-details fadeIn-top">
                <span class="fa fa-plus" aria-hidden="true"></span>
                <h4>Delight your Best</h4>
              </div>
            </a>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6">
            <a href="burgerbun/assets/images/g5.jpg" class="js-img-viwer d-block" data-caption="The Right Ingredients for the Right Food."
              data-id="bear">
              <img src="burgerbun/assets/images/g5.jpg" class="img-fluid radius-image-full" alt="burger gallery" />
              <div class="content-overlay"></div>
              <div class="content-details fadeIn-top">
                <span class="fa fa-plus" aria-hidden="true"></span>
                <h4>Delight your Best</h4>
              </div>
            </a>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6">
            <a href="burgerbun/assets/images/g6.jpg" class="js-img-viwer d-block" data-caption="The Right Ingredients for the Right Food."
              data-id="rhinoceros">
              <img src="burgerbun/assets/images/g6.jpg" class="img-fluid radius-image-full" alt="burger gallery" />
              <div class="content-overlay"></div>
              <div class="content-details fadeIn-top">
                <span class="fa fa-plus" aria-hidden="true"></span>
                <h4>Delight your Best</h4>
              </div>
            </a>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6">
            <a href="burgerbun/assets/images/g7.jpg" class="js-img-viwer d-block" data-caption="The Right Ingredients for the Right Food."
              data-id="hippopotamus">
              <img src="burgerbun/assets/images/g7.jpg" class="img-fluid radius-image-full" alt="burger gallery" />
              <div class="content-overlay"></div>
              <div class="content-details fadeIn-top">
                <span class="fa fa-plus" aria-hidden="true"></span>
                <h4>Delight your Best</h4>
              </div>
            </a>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6">
            <a href="burgerbun/assets/images/g8.jpg" class="js-img-viwer d-block" data-caption="The Right Ingredients for the Right Food."
              data-id="koala">
              <img src="burgerbun/assets/images/g8.jpg" class="img-fluid radius-image-full" alt="burger gallery" />
              <div class="content-overlay"></div>
              <div class="content-details fadeIn-top">
                <span class="fa fa-plus" aria-hidden="true"></span>
                <h4>Delight your Best</h4>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--  //Work gallery section -->

<!-- features -->
<section class="w3l-reasons py-5" id="why">
    <div class="main-w3 py-lg-5 py-md-d py-2">
        <div class="container">
            <div class="title-content text-center">
                <h6 class="title-small">Why we are the best</h6>
                <h3 class="title-big">4 Reasons to Choose us</h3>
            </div>
            <div class="row main-cont-wthree-fea mt-5 pt-lg-4 text-center">
                <div class="col-lg-3 col-sm-6 grids-feature">
                    <a href="#url" class="icon"><span class="fa fa-cutlery"></span></a>
                    <h4><a href="#feature" class="title-head">Tasty Burgers</a></h4>
                    <p>Enjoy juicy burgers with fresh ingredients and unforgettable flavors.</p>
                </div>
                <div class="col-lg-3 col-sm-6 grids-feature mt-sm-0 mt-5">
                    <a href="#url" class="icon"><span class="fa fa-cogs"></span></a>
                    <h4><a href="#feature" class="title-head">Quality Products</a></h4>
                    <p>We only use high quality products for each dish.</p>
                </div>
                <div class="col-lg-3 col-sm-6 grids-feature mt-lg-0 mt-sm-5 mt-5">
                    <a href="#url" class="icon"><span class="fa fa-users"></span></a>
                    <h4><a href="#feature" class="title-head">World's best Chef</a></h4>
                    <p>Our talented chefs bring you exquisite flavors from around the world.</p>
                </div>
                <div class="col-lg-3 col-sm-6 grids-feature mt-lg-0 mt-sm-5 mt-5">
                    <a href="#url" class="icon"><span class="fa fa-motorcycle"></span></a>
                    <h4><a href="#feature" class="title-head">Fastest delivery</a></h4>
                    <p>Your satisfaction is our priority with the fastest delivery service directly to your door.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //features -->

<!-- footer -->
<footer class="py-5">
  <div class="container py-xl-4">
    <div class="row footer-top">
      <div class="col-lg-4 footer-grid_section_1its footer-text">
        <!-- logo -->
        <h2>
          <a class="logo text-wh" href="index">
            <img src="burgerbun/assets/images/burger.png" alt="burger logo" width="35px" /> Burger Bun
          </a>
        </h2>
        <!-- //logo -->
        <p class="mt-lg-4 mt-3 mb-4 pb-lg-2">We are dedicated to the safety of our guests and employees and have updated
          our safety measures. We believe in Simple, Creative, Modern and Flexible Design Standards with a Retina and Responsive Approach.
          Browse the amazing Features this template offers.</p>
        <!-- social icons -->
        <ul class="top-right-info">
          <li>
            <p>Follow us:</p>
          </li>
          <li class="facebook-w3">
            <a href="#facebbok">
              <span class="fa fa-facebook-f"></span>
            </a>
          </li>
          <li class="twitter-w3">
            <a href="#twitter">
              <span class="fa fa-twitter"></span>
            </a>
          </li>
          <li class="google-w3">
            <a href="#google">
              <span class="fa fa-google-plus"></span>
            </a>
          </li>
          <li class="dribble-w3">
            <a href="#dribble">
              <span class="fa fa-dribbble"></span>
            </a>
          </li>
        </ul>
        <!-- //social icons -->
      </div>
      <div class="col-lg-4 col-sm-6 footer-grid_section_1its mt-lg-0 mt-5">
        <div class="footer-title">
          <h3>Contact Us</h3>
        </div>
        <div class="footer-text mt-4">
          <p><strong>Address :</strong> Burger Bun, 208 Trainer Avenue street, Corner
            Market, NY - 62617.</p>
          <p class="my-2"><strong>Phone :</strong> <a href="tel:+12 534894364">+12 534894364</a></p>
          <p><strong>Email :</strong> <a href="mailto:info@example.com">info@example.com</a></p>
        </div>
        <div class="footer-title mt-4 pt-md-2">
          <h3>Payments we accept</h3>
        </div>
        <ul class="list-unstyled payment-links mt-4">
          <li>
            <a href="#payment"><img src="burgerbun/assets/images/pay2.png" class="radius-image" width="55px" alt=""></a>
          </li>
          <li>
            <a href="#payment"><img src="burgerbun/assets/images/pay5.png" class="radius-image" width="55px" alt=""></a>
          </li>
          <li>
            <a href="#payment"><img src="burgerbun/assets/images/pay1.png" class="radius-image" width="55px" alt=""></a>
          </li>
          <li>
            <a href="#payment"><img src="burgerbun/assets/images/pay4.png" class="radius-image" width="55px" alt=""></a>
          </li>
        </ul>
      </div>
      <div class="col-lg-4 col-sm-6 footer-grid_section_1its footer-text mt-lg-0 mt-5">
        <div class="footer-title">
          <h3>Subscribe Newsletter</h3>
        </div>
        <div class="info-form-right mt-4 p-0">
          <p class="mb-4">Enter your email and receive the latest news, updates and special offers from us.</p>
          <form action="#" method="post">
            <div class="form-group mb-2">
              <input type="email" class="form-control" name="Email" placeholder="Email" required="">
            </div>
            <button type="submit" class="btn btn-style btn-primary w-100 d-block ml-auto py-2">Subscribe</button>
          </form>
          <h4 class="mt-4">Subscribe & Get $10 on Your First Order</h4>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- //footer -->
<!-- copyright -->
<div class="cpy-right text-center py-4">
  <p>© 2024 Burger Bun. All rights reserved | Design by <a href="http://w3layouts.com"> Naia.</a> </p>
</div>
<!-- //copyright -->

 <!-- move top -->
 <button onclick="topFunction()" id="movetop" title="Go to top">
  <span class="fa fa-level-up" aria-hidden="true"></span>
</button>
<script>
  // When the user scrolls down 20px from the top of the document, show the button
  window.onscroll = function () {
    scrollFunction()
  };

  function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      document.getElementById("movetop").style.display = "block";
    } else {
      document.getElementById("movetop").style.display = "none";
    }
  }

  // When the user clicks on the button, scroll to the top of the document
  function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }
</script>
<!-- /move top -->

<script src="burgerbun/assets/js/jquery-3.3.1.min.js"></script> <!-- Common jquery plugin -->

<script src="burgerbun/assets/js/theme-change.js"></script><!-- theme switch js (light and dark)-->

<script src="burgerbun/assets/js/owl.carousel.js"></script><!-- owl carousel -->

<!-- script for tesimonials carousel slider -->
<script>
  $(document).ready(function () {
    $("#owl-demo1").owlCarousel({
      loop: true,
      margin: 20,
      nav: false,
      responsiveClass: true,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        1000: {
          items: 1,
          nav: false,
          loop: false
        }
      }
    })
  })
</script>
<!-- //script for tesimonials carousel slider -->

<script src="burgerbun/assets/js/jquery.magnific-popup.min.js"></script>
<script>
  $(document).ready(function () {
    $('.popup-with-zoom-anim').magnificPopup({
      type: 'inline',

      fixedContentPos: false,
      fixedBgPos: true,

      overflowY: 'auto',

      closeBtnInside: true,
      preloader: false,

      midClick: true,
      removalDelay: 300,
      mainClass: 'my-mfp-zoom-in'
    });

    $('.popup-with-move-anim').magnificPopup({
      type: 'inline',

      fixedContentPos: false,
      fixedBgPos: true,

      overflowY: 'auto',

      closeBtnInside: true,
      preloader: false,

      midClick: true,
      removalDelay: 300,
      mainClass: 'my-mfp-slide-bottom'
    });
  });
</script>

<script src="burgerbun/assets/js/counter.js"></script>

<!-- gallery popup js -->
<script src="burgerbun/assets/js/smartphoto.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const sm = new SmartPhoto(".js-img-viwer", {
      showAnimation: false
    });
    // sm.destroy();
  });
</script>
<!-- //gallery popup js -->

<!--/MENU-JS-->
<script>
  $(window).on("scroll", function () {
    var scroll = $(window).scrollTop();

    if (scroll >= 80) {
      $("#site-header").addClass("nav-fixed");
    } else {
      $("#site-header").removeClass("nav-fixed");
    }
  });

  //Main navigation Active Class Add Remove
  $(".navbar-toggler").on("click", function () {
    $("header").toggleClass("active");
  });
  $(document).on("ready", function () {
    if ($(window).width() > 991) {
      $("header").removeClass("active");
    }
    $(window).on("resize", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
    });
  });
</script>
<!--//MENU-JS-->

<!-- disable body scroll which navbar is in active -->
<script>
  $(function () {
    $('.navbar-toggler').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- //disable body scroll which navbar is in active -->

<!--bootstrap-->
<script src="burgerbun/assets/js/bootstrap.min.js"></script>
<!-- //bootstrap-->

</body>

</html>