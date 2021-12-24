<!DOCTYPE html>
<html lang="en">
<head>
  <title>SheShop</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="{{url('public')}}Client/User/images/icons/favicon.png"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{url('public')}}//Client/User/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{url('public')}}//Client/User/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{url('public')}}//Client/User/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{url('public')}}//Client/User/fonts/linearicons-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{url('public')}}//Client/User/vendor/animate/animate.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="{{url('public')}}//Client/User/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{url('public')}}//Client/User/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{url('public')}}//Client/User/vendor/select2/select2.min.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="{{url('public')}}//Client/User/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{url('public')}}//Client/User/vendor/slick/slick.css">
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
                <a href="{{url('Client/home')}}">Home</a>
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

    

  <!-- Product Detail -->
  <section class="sec-product-detail bg0 p-t-65 p-b-60">
    <div class="container" style="margin-bottom: 50px;">
      <div class="row">
        <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
          <a href="index.html" class="stext-109 cl8 hov-cl1 trans-04">
            Home
            <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
          </a>

          <a href="product.html" class="stext-109 cl8 hov-cl1 trans-04">
            Produk
            <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
          </a>

          <span class="stext-109 cl4">
            {{$produk->nama}}
          </span>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-7 p-b-30">
          <div class="p-l-25 p-r-30 p-lr-0-lg">
            <div class="wrap-slick3 flex-sb flex-w">

              <div class="slick3 gallery-lb">
                  <div class="wrap-pic-w pos-relative">
                    <img style="width: 80%; margin-left: 35px;" src="{{url("public/$produk->foto")}}" class="img-fluid">
                  </div>
              </div>
            </div>
          </div>
        </div>
          
        <div class="col-md-6 col-lg-5 p-b-30">
          <div class="p-r-50 p-t-5 p-lr-0-lg">
            <h4 class="mtext-105 cl2 js-name-detail p-b-14">
              {{$produk->nama}}
            </h4>
            <span class="mtext-106 cl2">
              Rp. {{number_format($produk->harga)}}
            </span> <br>  
            <span class="mtext-106 cl2">
              Stok : {{$produk->stok}}
            </span>
            <!--  -->
                <div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
                  <div class="flex-w flex-m m-r-20 m-tb-5">
                      <label class="flex-c-m" style="margin-right: 10px;"> Jumlah Pesanan </label>
                      <input class="stext-104 cl2 plh4 size-117 bor13 p-lr-20 m-r-10 m-tb-5" type="number" name="jumlah_pesanan" value="1" min="1">
                      <div class="p-t-33">
                        <div class="flex-w flex-r-m p-b-10">
                          <div class="size-204 flex-w flex-m respon6-next">
                            <a href="{{url('pesanan', $produk->id)}}">
                            <button class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
                              Pesan Di Sini
                            </button>
                            </a>
                          </div>
                        </div>  
                      </div>
                  </div>
                </div>

            <!--  -->
            <div class="flex-w flex-m p-l-100 p-t-40 respon7">
              <div class="flex-m bor9 p-r-10 m-r-11">
                <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 js-addwish-detail tooltip100" data-tooltip="Add to Wishlist">
                  <i class="zmdi zmdi-favorite"></i>
                </a>
              </div>

              <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Facebook">
                <i class="fa fa-facebook"></i>
              </a>

              <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Twitter">
                <i class="fa fa-twitter"></i>
              </a>

              <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Google Plus">
                <i class="fa fa-google-plus"></i>
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="bor10 m-t-50 p-t-43 p-b-40">
        <!-- Tab01 -->
        <div class="tab01">
          <!-- Nav tabs -->
          <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item p-b-10">
              <a class="nav-link active" data-toggle="tab" href="#description" role="tab">Description</a>
            </li>

            <li class="nav-item p-b-10">
              <a class="nav-link" data-toggle="tab" href="#reviews" role="tab">Reviews (1)</a>
            </li>
          </ul>

          <!-- Tab panes -->
          <div class="tab-content p-t-43">
            <!-- - -->
            <div class="tab-pane fade show active" id="description" role="tabpanel">
              <div class="how-pos2 p-lr-15-md">
                <p class="stext-102 cl6">
                  {!! nl2br ($produk->deskripsi) !!}
                </p>
              </div>
            </div>

            <!-- - -->
            <div class="tab-pane fade" id="reviews" role="tabpanel">
              <div class="row">
                <div class="col-sm-10 col-md-8 col-lg-6 m-lr-auto">
                  <div class="p-b-30 m-lr-15-sm">
                    <!-- Review -->
                    <div class="flex-w flex-t p-b-68">
                      <div class="wrap-pic-s size-109 bor0 of-hidden m-r-18 m-t-6">
                        <img src="images/avatar-01.jpg" alt="AVATAR">
                      </div>

                      <div class="size-207">
                        <div class="flex-w flex-sb-m p-b-17">
                          <span class="mtext-107 cl2 p-r-20">
                            Ariana Grande
                          </span>

                          <span class="fs-18 cl11">
                            <i class="zmdi zmdi-star"></i>
                            <i class="zmdi zmdi-star"></i>
                            <i class="zmdi zmdi-star"></i>
                            <i class="zmdi zmdi-star"></i>
                            <i class="zmdi zmdi-star-half"></i>
                          </span>
                        </div>

                        <p class="stext-102 cl6">
                          Quod autem in homine praestantissimum atque optimum est, id deseruit. Apud ceteros autem philosophos
                        </p>
                      </div>
                    </div>
                    
                    <!-- Add review -->
                    <form class="w-full">
                      <h5 class="mtext-108 cl2 p-b-7">
                        Add a review
                      </h5>

                      <p class="stext-102 cl6">
                        Your email address will not be published. Required fields are marked *
                      </p>

                      <div class="flex-w flex-m p-t-50 p-b-23">
                        <span class="stext-102 cl3 m-r-16">
                          Your Rating
                        </span>

                        <span class="wrap-rating fs-18 cl11 pointer">
                          <i class="item-rating pointer zmdi zmdi-star-outline"></i>
                          <i class="item-rating pointer zmdi zmdi-star-outline"></i>
                          <i class="item-rating pointer zmdi zmdi-star-outline"></i>
                          <i class="item-rating pointer zmdi zmdi-star-outline"></i>
                          <i class="item-rating pointer zmdi zmdi-star-outline"></i>
                          <input class="dis-none" type="number" name="rating">
                        </span>
                      </div>

                      <div class="row p-b-25">
                        <div class="col-12 p-b-5">
                          <label class="stext-102 cl3" for="review">Your review</label>
                          <textarea class="size-110 bor8 stext-102 cl2 p-lr-20 p-tb-10" id="review" name="review"></textarea>
                        </div>

                        <div class="col-sm-6 p-b-5">
                          <label class="stext-102 cl3" for="name">Name</label>
                          <input class="size-111 bor8 stext-102 cl2 p-lr-20" id="name" type="text" name="name">
                        </div>

                        <div class="col-sm-6 p-b-5">
                          <label class="stext-102 cl3" for="email">Email</label>
                          <input class="size-111 bor8 stext-102 cl2 p-lr-20" id="email" type="text" name="email">
                        </div>
                      </div>

                      <button class="flex-c-m stext-101 cl0 size-112 bg7 bor11 hov-btn3 p-lr-15 trans-04 m-b-10">
                        Submit
                      </button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="bg6 flex-c-m flex-w size-302 m-t-73 p-tb-15">
      <span class="stext-107 cl6 p-lr-25">
        SKU: JAK-01
      </span>

      <span class="stext-107 cl6 p-lr-25">
        Categories: Jacket, Men
      </span>
    </div>
  </section>


  <!-- Related Products -->
  <section class="sec-relate-product bg0 p-t-45 p-b-105">
    <div class="container">
      <div class="p-b-45">
        <h3 class="ltext-106 cl5 txt-center">
          Related Products
        </h3>
      </div>

      <!-- Slide2 -->
      <div class="wrap-slick2">
        <div class="slick2">
          <div class="item-slick2 p-l-15 p-r-15 p-t-15 p-b-15">
            <!-- Block2 -->
            <div class="block2">
              <div class="block2-pic hov-img0">
                <img src="images/product-01.jpg" alt="IMG-PRODUCT">

                <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                  Quick View
                </a>
              </div>

              <div class="block2-txt flex-w flex-t p-t-14">
                <div class="block2-txt-child1 flex-col-l ">
                  <a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                    Esprit Ruffle Shirt
                  </a>

                  <span class="stext-105 cl3">
                    $16.64
                  </span>
                </div>

                <div class="block2-txt-child2 flex-r p-t-3">
                  <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                    <img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png" alt="ICON">
                    <img class="icon-heart2 dis-block trans-04 ab-t-l" src="images/icons/icon-heart-02.png" alt="ICON">
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div class="item-slick2 p-l-15 p-r-15 p-t-15 p-b-15">
            <!-- Block2 -->
            <div class="block2">
              <div class="block2-pic hov-img0">
                <img src="images/product-02.jpg" alt="IMG-PRODUCT">

                <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                  Quick View
                </a>
              </div>

              <div class="block2-txt flex-w flex-t p-t-14">
                <div class="block2-txt-child1 flex-col-l ">
                  <a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                    Herschel supply
                  </a>

                  <span class="stext-105 cl3">
                    $35.31
                  </span>
                </div>

                <div class="block2-txt-child2 flex-r p-t-3">
                  <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                    <img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png" alt="ICON">
                    <img class="icon-heart2 dis-block trans-04 ab-t-l" src="images/icons/icon-heart-02.png" alt="ICON">
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div class="item-slick2 p-l-15 p-r-15 p-t-15 p-b-15">
            <!-- Block2 -->
            <div class="block2">
              <div class="block2-pic hov-img0">
                <img src="images/product-03.jpg" alt="IMG-PRODUCT">

                <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                  Quick View
                </a>
              </div>

              <div class="block2-txt flex-w flex-t p-t-14">
                <div class="block2-txt-child1 flex-col-l ">
                  <a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                    Only Check Trouser
                  </a>

                  <span class="stext-105 cl3">
                    $25.50
                  </span>
                </div>

                <div class="block2-txt-child2 flex-r p-t-3">
                  <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                    <img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png" alt="ICON">
                    <img class="icon-heart2 dis-block trans-04 ab-t-l" src="images/icons/icon-heart-02.png" alt="ICON">
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div class="item-slick2 p-l-15 p-r-15 p-t-15 p-b-15">
            <!-- Block2 -->
            <div class="block2">
              <div class="block2-pic hov-img0">
                <img src="images/product-04.jpg" alt="IMG-PRODUCT">

                <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                  Quick View
                </a>
              </div>

              <div class="block2-txt flex-w flex-t p-t-14">
                <div class="block2-txt-child1 flex-col-l ">
                  <a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                    Classic Trench Coat
                  </a>

                  <span class="stext-105 cl3">
                    $75.00
                  </span>
                </div>

                <div class="block2-txt-child2 flex-r p-t-3">
                  <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                    <img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png" alt="ICON">
                    <img class="icon-heart2 dis-block trans-04 ab-t-l" src="images/icons/icon-heart-02.png" alt="ICON">
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div class="item-slick2 p-l-15 p-r-15 p-t-15 p-b-15">
            <!-- Block2 -->
            <div class="block2">
              <div class="block2-pic hov-img0">
                <img src="images/product-05.jpg" alt="IMG-PRODUCT">

                <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                  Quick View
                </a>
              </div>

              <div class="block2-txt flex-w flex-t p-t-14">
                <div class="block2-txt-child1 flex-col-l ">
                  <a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                    Front Pocket Jumper
                  </a>

                  <span class="stext-105 cl3">
                    $34.75
                  </span>
                </div>

                <div class="block2-txt-child2 flex-r p-t-3">
                  <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                    <img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png" alt="ICON">
                    <img class="icon-heart2 dis-block trans-04 ab-t-l" src="images/icons/icon-heart-02.png" alt="ICON">
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div class="item-slick2 p-l-15 p-r-15 p-t-15 p-b-15">
            <!-- Block2 -->
            <div class="block2">
              <div class="block2-pic hov-img0">
                <img src="images/product-06.jpg" alt="IMG-PRODUCT">

                <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                  Quick View
                </a>
              </div>

              <div class="block2-txt flex-w flex-t p-t-14">
                <div class="block2-txt-child1 flex-col-l ">
                  <a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                    Vintage Inspired Classic 
                  </a>

                  <span class="stext-105 cl3">
                    $93.20
                  </span>
                </div>

                <div class="block2-txt-child2 flex-r p-t-3">
                  <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                    <img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png" alt="ICON">
                    <img class="icon-heart2 dis-block trans-04 ab-t-l" src="images/icons/icon-heart-02.png" alt="ICON">
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div class="item-slick2 p-l-15 p-r-15 p-t-15 p-b-15">
            <!-- Block2 -->
            <div class="block2">
              <div class="block2-pic hov-img0">
                <img src="images/product-07.jpg" alt="IMG-PRODUCT">

                <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                  Quick View
                </a>
              </div>

              <div class="block2-txt flex-w flex-t p-t-14">
                <div class="block2-txt-child1 flex-col-l ">
                  <a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                    Shirt in Stretch Cotton
                  </a>

                  <span class="stext-105 cl3">
                    $52.66
                  </span>
                </div>

                <div class="block2-txt-child2 flex-r p-t-3">
                  <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                    <img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png" alt="ICON">
                    <img class="icon-heart2 dis-block trans-04 ab-t-l" src="images/icons/icon-heart-02.png" alt="ICON">
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div class="item-slick2 p-l-15 p-r-15 p-t-15 p-b-15">
            <!-- Block2 -->
            <div class="block2">
              <div class="block2-pic hov-img0">
                <img src="images/product-08.jpg" alt="IMG-PRODUCT">

                <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                  Quick View
                </a>
              </div>

              <div class="block2-txt flex-w flex-t p-t-14">
                <div class="block2-txt-child1 flex-col-l ">
                  <a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                    Pieces Metallic Printed
                  </a>

                  <span class="stext-105 cl3">
                    $18.96
                  </span>
                </div>

                <div class="block2-txt-child2 flex-r p-t-3">
                  <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                    <img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png" alt="ICON">
                    <img class="icon-heart2 dis-block trans-04 ab-t-l" src="images/icons/icon-heart-02.png" alt="ICON">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
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