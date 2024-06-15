<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Manage Menu</title>

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

              <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
              data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
              <span class="navbar-toggler-icon fa icon-close fa-times"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
              <ul class="navbar-nav ml-auto">
                  <li class="nav-item @@menu__active">
                      <a class="nav-link" href="/admin/menu">Menu</a>
                  </li>
                  <li class="nav-item @@contact__active">
                      <a class="nav-link" href="/admin/employee">Employee</a>
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
<section class="w3l-about-breadcrumb">
    <div class="breadcrumb-bg breadcrumb-bg-about py-5">
        <div class="container py-lg-5 py-md-3">
            <h2 class="title">Menu items</h2>
        </div>
    </div>
</section>
<div class="w3l-menublock py-5">
    <!-- menu block -->

<!-- CRUD Section -->
<div class="container mt-5">
    <div class="row mb-4">
        <div class="col-12">
            <h5 class="mb-4">Manage Menu</h5>

            <table class="table table-hover ">
                <thead>
                    <tr>
                        <th scope="col ">ID</th>
                        <th scope="col ">Menu</th>
                        <th scope="col ">Price</th>
                        <th scope="col ">Category</th>
                        <th scope="col ">Photo</th>
                        <th scope="col ">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 0; ?>
                    <?php foreach ($menus as $item): ?>
                    <tr>
                        <td><?= $no += 1; ?></td>
                        <td><?= $item['menu'] ?></td>
                        <td>$<?= $item['price'] ?></td>
                        <td><?= $item['category'] ?></td>
                        <td><img src="/photos/<?= $item['photo'] ?>" alt="" width=100 height=100></td>
                        <td>
                          <div class="btn-group" role="group" aria-label="Basic example">
                              <a href="/admin/menu/edit/<?= $item['id'] ?>" class="btn btn-info">
                                  <i class="bi bi-pencil"></i> <!-- Bootstrap Icons -->
                                  <!-- <i class="fas fa-pencil-alt"></i> --> <!-- Font Awesome -->
                              </a>
                              <form action="/admin/menu/delete/<?= $item['id'] ?>" method="POST" onsubmit="return confirm('Are you sure?')">
                                  <input type="hidden" name="_method" value="DELETE">
                                  <button class="btn btn-danger" type="submit">
                                      <i class="bi bi-trash"></i> <!-- Bootstrap Icons -->
                                      <!-- <i class="fas fa-trash-alt"></i> --> <!-- Font Awesome -->
                                  </button>
                              </form>
                          </div>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>

            <form action="/admin/menu/new" method="POST">
              <button type="submit" class="btn btn-primary">Add Menu</button>
            </form>
        </div>
    </div>
</div>

<!-- End of CRUD Section -->
    <!-- menu block -->
</div>
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
  <p>© 2020 Burger Bun. All rights reserved | Design by <a href="http://w3layouts.com"> Naia.</a> </p>
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