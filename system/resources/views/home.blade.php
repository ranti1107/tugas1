<!DOCTYPE html>
<html lang="en">
<head>
  <title>SeShop</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
  <link rel="stylesheet" href="{{url('public')}}/plugins/fontawesome-free/css/all.min.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="icon" type="image/png" href="{{url('public')}}/Client/User/images/icons/favicon.png"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{url('public')}}/Client/User/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{url('public')}}/Client/User/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{url('public')}}/Client/User/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{url('public')}}/Client/User/fonts/linearicons-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{url('public')}}/Client/User/vendor/animate/animate.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="{{url('public')}}/Client/User/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{url('public')}}/Client/User/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{url('public')}}/Client/User/vendor/select2/select2.min.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="{{url('public')}}/Client/User/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{url('public')}}/Client/User/vendor/slick/slick.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{url('public')}}/Client/User/vendor/MagnificPopup/magnific-popup.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{url('public')}}/Client/User/vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{url('public')}}/Client/User/css/util.css">
  <link rel="stylesheet" type="text/css" href="{{url('public')}}/Client/User/css/main.css">
<!--===============================================================================================-->
</head>
<body class="animsition">
  
  <!-- Header -->
  <header>
    <!-- Header desktop -->
    <div class="container-menu-desktop">
      <!-- Topbar -->
      <div class="top-bar">
        <div class="content-topbar flex-sb-m h-full container">
          
        </div>
      </div>

      <div class="wrap-menu-desktop">
        <nav class="limiter-menu-desktop container">
          
          <!-- Logo desktop -->   
          <a href="#" class="logo">
            <img src="{{url('public')}}/Client/User/images/icons/logo-01.png" alt="IMG-LOGO">
          </a>

          <!-- Menu desktop -->
          <div class="menu-desktop">
            <ul class="main-menu">
              <li class="active-menu">
                <a href="{{url('/home')}}">Home</a>
              </li>

              <li>
                <a href="#">Shop</a>
              </li>

              <li class="label1" data-label1="hot">
                <a href="#">Features</a>
              </li>

              <li>
                <a href="#">Blog</a>
              </li>

              <li>
                <a href="#">About</a>
              </li>

              <li>
                <a href="{{url('login')}}">Log Out</a>
              </li>
            </ul>
          </div>    

          <!-- Icon header -->
          <div class="wrap-icon-header flex-w flex-r-m">
            <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
              <i class="zmdi zmdi-search"></i>
            </div>

            <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart" data-notify="2">
              <i class="zmdi zmdi-shopping-cart"></i>
            </div>

            <a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti" data-notify="0">
              <i class="zmdi zmdi-favorite-outline"></i>
            </a>
          </div>
        </nav>
      </div>  
    </div>
    <!-- Modal Search -->
    <div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
      <div class="container-search-header">
        <button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
          <img src="{{url('public')}}/Client/User/images/icons/icon-close2.png" alt="CLOSE">
        </button>

        <form class="wrap-search-header flex-w p-l-15">
          <button class="flex-c-m trans-04">
            <i class="zmdi zmdi-search"></i>
          </button>
          <input class="plh3" type="text" name="search" placeholder="Search...">
        </form>
      </div>
    </div>
  </header>

  <!-- Cart -->
  <div class="wrap-header-cart js-panel-cart">
    <div class="s-full js-hide-cart"></div>

    <div class="header-cart flex-col-l p-l-65 p-r-25">
      <div class="header-cart-title flex-w flex-sb-m p-b-8">
        <span class="mtext-103 cl2">
          Your Cart
        </span>

        <div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
          <i class="zmdi zmdi-close"></i>
        </div>
      </div>
      
      <div class="header-cart-content flex-w js-pscroll">
        <ul class="header-cart-wrapitem w-full">
          <li class="header-cart-item flex-w flex-t m-b-12">
            <div class="header-cart-item-img">
              <img src="{{url('public')}}/Client/User/images/item-cart-01.jpg" alt="IMG">
            </div>

            <div class="header-cart-item-txt p-t-8">
              <a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
                White Shirt Pleat
              </a>

              <span class="header-cart-item-info">
                1 x $19.00
              </span>
            </div>
          </li>

          <li class="header-cart-item flex-w flex-t m-b-12">
            <div class="header-cart-item-img">
              <img src="{{url('public')}}/Client/User/images/item-cart-02.jpg" alt="IMG">
            </div>

            <div class="header-cart-item-txt p-t-8">
              <a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
                Converse All Star
              </a>

              <span class="header-cart-item-info">
                1 x $39.00
              </span>
            </div>
          </li>

          <li class="header-cart-item flex-w flex-t m-b-12">
            <div class="header-cart-item-img">
              <img src="{{url('public')}}/Client/User/images/item-cart-03.jpg" alt="IMG">
            </div>

            <div class="header-cart-item-txt p-t-8">
              <a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
                Nixon Porter Leather
              </a>

              <span class="header-cart-item-info">
                1 x $17.00
              </span>
            </div>
          </li>
        </ul>
        
        <div class="w-full">
          <div class="header-cart-total w-full p-tb-40">
            Total: $75.00
          </div>

          <div class="header-cart-buttons flex-w w-full">
            <a href="shoping-cart.html" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
              View Cart
            </a>

            <a href="shoping-cart.html" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
              Check Out
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

    

  <!-- Slider -->
  <section class="section-slide">
    <div class="wrap-slick1">
      <div class="slick1">
        <div class="item-slick1" style="background-image: url({{url('public')}}/Client/User/images/slide-01.jpg);">
          <div class="container h-full">
            <div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
              <div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
                <span class="ltext-101 cl2 respon2">
                  Women Collection 2018
                </span>
              </div>
                
              <div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
                <h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
                  NEW SEASON
                </h2>
              </div>
            </div>
          </div>
        </div>

        <div class="item-slick1" style="background-image: url({{url('public')}}/Client/User/images/slide-02.jpg);">
          <div class="container h-full">
            <div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
              <div class="layer-slick1 animated visible-false" data-appear="rollIn" data-delay="0">
                <span class="ltext-101 cl2 respon2">
                  Men New-Season
                </span>
              </div>
                
              <div class="layer-slick1 animated visible-false" data-appear="lightSpeedIn" data-delay="800">
                <h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
                  Jackets & Coats
                </h2>
              </div>
            </div>
          </div>
        </div>

        <div class="item-slick1" style="background-image: url({{url('public')}}/Client/User/images/slide-03.jpg);">
          <div class="container h-full">
            <div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
              <div class="layer-slick1 animated visible-false" data-appear="rotateInDownLeft" data-delay="0">
                <span class="ltext-101 cl2 respon2">
                  Men Collection 2018
                </span>
              </div>
                
              <div class="layer-slick1 animated visible-false" data-appear="rotateInUpRight" data-delay="800">
                <h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
                  New arrivals
                </h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Product -->
  <section class="bg0 p-t-23 p-b-140">
    <div class="container">
      <div class="p-b-10">
        <h3 class="ltext-103 cl5">
          Product Overview
        </h3>
      </div>

      <div class="flex-w flex-sb-m p-b-52">
        <div class="flex-w flex-l-m filter-tope-group m-tb-10">
          <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
            All Products
          </button>

          <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5">
            SKIN CARE
          </button>

          <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5">
            MAKE UP
          </button>

          <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5">
            LIPSTIK
          </button>

          <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5">
            HAIR CARE
          </button>

          <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5">
            BODY CARE
          </button>
        </div>
        <div class="col-md-4">
          <div class="card card-header" style="color: #4B0082; font-family: Arial;">
            <i class="fa fa-bars">
            FILTER
            </i>
          </div>
          <div class="card-body">
            <form action="{{url('home/filter')}}" method="post">
            @csrf
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="" class="control-label">Harga Min   <i class="fa fa-chevron-down"></i></label>
                  <input type="text" class="form-control" name="harga_min" value="{{$harga_min ?? ""}}">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="" class="control-label">Harga Max   <i class="fa fa-chevron-up"></i></label>
                  <input type="text" class="form-control" name="harga_max" value="{{$harga_max ?? ""}}">
                </div>
              </div>
            </div>
            <button class="btn btn-dark float-right"><i class="fa fa-search"> Filter</i></button>
          </form>
          </div>
        </div>
      </div>
      <div class="row isotope-grid">
@foreach($list_produk as $produk)
        <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
          <!-- Block2 -->
          <div class="block2">
            <div class="block2-pic hov-img0">
              <img style="width: 80%; margin-left: 35px;" src="{{url("public/$produk->foto")}}" class="img-fluid">
            </div>

            <div class="block2-txt flex-w flex-t p-t-14">
              <div class="block2-txt-child1 flex-col-l ">
                <a href="{{url('produk', $produk->id)}}" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                  {{$produk->nama}}
                </a>

                <span class="stext-105 cl3">
                  Rp. {{number_format($produk->harga)}}
                </span>
              </div>

              <div class="block2-txt-child2 flex-r p-t-3">
                <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                  <img class="icon-heart1 dis-block trans-04" src="{{url('public')}}/Client/User/images/icons/icon-heart-01.png" alt="ICON">
                  <img class="icon-heart2 dis-block trans-04 ab-t-l" src="{{url('public')}}/Client/User/images/icons/icon-heart-02.png" alt="ICON">
                </a>
              </div>
            </div>
          </div>
        </div>
@endforeach
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="d-flex justify-content-center">
            {!! $list_produk->links() !!}
          </div>
        </div>
      </div>
      <!-- Load more -->
      <div class="flex-c-m flex-w w-full p-t-45">
        <a href="#" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
          Load More
        </a>
      </div>
    </div>
  </section>


  <!-- Footer -->
  <footer class="bg3 p-t-75 p-b-32">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-lg-3 p-b-50">
          <h4 class="stext-301 cl0 p-b-30">
            Categories
          </h4>

          <ul>
            <li class="p-b-10">
              <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                SKIN CARE
              </a>
            </li>

            <li class="p-b-10">
              <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                MAKE UP
              </a>
            </li>

            <li class="p-b-10">
              <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                LIPSTIK
              </a>
            </li>

            <li class="p-b-10">
              <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                HAIR CARE
              </a>
            </li>

            <li class="p-b-10">
              <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                BODY CARE
              </a>
            </li>
          </ul>
        </div>

        <div class="col-sm-6 col-lg-3 p-b-50">
          <h4 class="stext-301 cl0 p-b-30">
            Help
          </h4>

          <ul>
            <li class="p-b-10">
              <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                Track Order
              </a>
            </li>

            <li class="p-b-10">
              <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                Returns 
              </a>
            </li>

            <li class="p-b-10">
              <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                Shipping
              </a>
            </li>

            <li class="p-b-10">
              <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                FAQs
              </a>
            </li>
          </ul>
        </div>

        <div class="col-sm-6 col-lg-3 p-b-50">
          <h4 class="stext-301 cl0 p-b-30">
            GET IN TOUCH
          </h4>

          <p class="stext-107 cl7 size-201">
            Any questions? Let us know in store at 8th floor, 379 Hudson St, New York, NY 10018 or call us on (+1) 96 716 6879
          </p>

          <div class="p-t-27">
            <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
              <i class="fa fa-facebook"></i>
            </a>

            <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
              <i class="fa fa-instagram"></i>
            </a>

            <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
              <i class="fa fa-pinterest-p"></i>
            </a>
          </div>
        </div>

        <div class="col-sm-6 col-lg-3 p-b-50">
          <h4 class="stext-301 cl0 p-b-30">
            Newsletter
          </h4>

          <form>
            <div class="wrap-input1 w-full p-b-4">
              <input class="input1 bg-none plh1 stext-107 cl7" type="text" name="email" placeholder="email@example.com">
              <div class="focus-input1 trans-04"></div>
            </div>

            <div class="p-t-18">
              <button class="flex-c-m stext-101 cl0 size-103 bg1 bor1 hov-btn2 p-lr-15 trans-04">
                Subscribe
              </button>
            </div>
          </form>
        </div>
      </div>

      <div class="p-t-40">
        <div class="flex-c-m flex-w p-b-18">
          <a href="#" class="m-all-1">
            <img src="{{url('public')}}/Client/User/images/icons/icon-pay-01.png" alt="ICON-PAY">
          </a>

          <a href="#" class="m-all-1">
            <img src="{{url('public')}}/Client/User/images/icons/icon-pay-02.png" alt="ICON-PAY">
          </a>

          <a href="#" class="m-all-1">
            <img src="{{url('public')}}/Client/User/images/icons/icon-pay-03.png" alt="ICON-PAY">
          </a>

          <a href="#" class="m-all-1">
            <img src="{{url('public')}}/Client/User/images/icons/icon-pay-04.png" alt="ICON-PAY">
          </a>

          <a href="#" class="m-all-1">
            <img src="{{url('public')}}/Client/User/images/icons/icon-pay-05.png" alt="ICON-PAY">
          </a>
        </div>

        <p class="stext-107 cl6 txt-center">
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Made with <i class="fa fa-heart-o" aria-hidden="true"></i> by SUPIARTI-2021
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

        </p>
      </div>
    </div>
  </footer>


  <!-- Back to top -->
  <div class="btn-back-to-top" id="myBtn">
    <span class="symbol-btn-back-to-top">
      <i class="zmdi zmdi-chevron-up"></i>
    </span>
  </div>


<!--===============================================================================================-->  
  <script src="{{url('public')}}/Client/User/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="{{url('public')}}/Client/User/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
  <script src="{{url('public')}}/Client/User/vendor/bootstrap/js/popper.js"></script>
  <script src="{{url('public')}}/Client/User/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="{{url('public')}}/Client/User/vendor/select2/select2.min.js"></script>
  <script>
    $(".js-select2").each(function(){
      $(this).select2({
        minimumResultsForSearch: 20,
        dropdownParent: $(this).next('.dropDownSelect2')
      });
    })
  </script>
<!--===============================================================================================-->
  <script src="{{url('public')}}/Client/User/vendor/daterangepicker/moment.min.js"></script>
  <script src="{{url('public')}}/Client/User/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
  <script src="{{url('public')}}/Client/User/vendor/slick/slick.min.js"></script>
  <script src="{{url('public')}}/Client/User/js/slick-custom.js"></script>
<!--===============================================================================================-->
  <script src="{{url('public')}}/Client/User/vendor/parallax100/parallax100.js"></script>
  <script>
        $('.parallax100').parallax100();
  </script>
<!--===============================================================================================-->
  <script src="{{url('public')}}/Client/User/vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
  <script>
    $('.gallery-lb').each(function() { // the containers for all your galleries
      $(this).magnificPopup({
            delegate: 'a', // the selector for gallery item
            type: 'image',
            gallery: {
              enabled:true
            },
            mainClass: 'mfp-fade'
        });
    });
  </script>
<!--===============================================================================================-->
  <script src="{{url('public')}}/Client/User/vendor/isotope/isotope.pkgd.min.js"></script>
<!--===============================================================================================-->
  <script src="{{url('public')}}/Client/User/vendor/sweetalert/sweetalert.min.js"></script>
  <script>
    $('.js-addwish-b2').on('click', function(e){
      e.preventDefault();
    });

    $('.js-addwish-b2').each(function(){
      var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
      $(this).on('click', function(){
        swal(nameProduct, "is added to wishlist !", "success");

        $(this).addClass('js-addedwish-b2');
        $(this).off('click');
      });
    });

    $('.js-addwish-detail').each(function(){
      var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

      $(this).on('click', function(){
        swal(nameProduct, "is added to wishlist !", "success");

        $(this).addClass('js-addedwish-detail');
        $(this).off('click');
      });
    });

    /*---------------------------------------------*/

    $('.js-addcart-detail').each(function(){
      var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
      $(this).on('click', function(){
        swal(nameProduct, "is added to cart !", "success");
      });
    });
  
  </script>
<!--===============================================================================================-->
  <script src="{{url('public')}}/Client/User/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
  <script>
    $('.js-pscroll').each(function(){
      $(this).css('position','relative');
      $(this).css('overflow','hidden');
      var ps = new PerfectScrollbar(this, {
        wheelSpeed: 1,
        scrollingThreshold: 1000,
        wheelPropagation: false,
      });

      $(window).on('resize', function(){
        ps.update();
      })
    });
  </script>
<!--===============================================================================================-->
  <script src="{{url('public')}}/Client/User/js/main.js"></script>

</body>
</html>