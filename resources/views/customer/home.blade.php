
<!DOCTYPE html>
<html dir="ltr" lang="zxx">
<head>

  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <meta name="author" content="flexkit">

  <link rel="shortcut icon" href="{{ asset('/assets/images/favicon.ico') }}" type="image/x-icon">
  <link rel="preconnect" href="https://fonts.gstatic.com">

  <!-- Fonts -->
  <link href="../css2?family=Jost:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link href="../css2-1?family=Allura&display=swap" rel="stylesheet">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="{{ asset('/assets/css/plugins/swiper.min.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ asset('/assets/css/plugins/jquery.fancybox.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}" type="text/css">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Document Title -->
  <title>My Account | Sika's Clothing</title>

</head>

<body>

  @include('templates/header')

  <main>
    <div class="mb-4 pb-4"></div>
    <section class="my-account container">
      <h2 class="page-title">My Account</h2>
      <div class="row">
        <div class="col-lg-3">
          @include('templates/account_nav')
        </div>
        <div class="col-lg-9">
          <div class="page-content my-account__dashboard">
            <p>Hello <strong>Anima</strong> (not <strong>Anima?</strong> 
                <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style="text-decoration: underline; color: blue; cursor: pointer;">Log out</a>)
            </p>
            <!-- Hidden form -->
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            <p>From your account dashboard you can view your <a class="unerline-link" href="{{ route('orders') }}">recent orders</a>, manage your <a class="unerline-link" href="{{ route('account.details') }}">shipping and billing addresses</a>, and <a class="unerline-link" href="account_edit.html">edit your password and account details.</a></p>
          </div>
        </div>
      </div>
    </section>
  </main>

  <div class="mb-5 pb-xl-5"></div>
  
  @include('templates/footer')

  <!-- Customer Login Form -->
  @include('templates/side_login_form')

  <!-- Cart Drawer -->
  <div class="aside aside_right overflow-hidden cart-drawer" id="cartDrawer">
    <div class="aside-header d-flex align-items-center">
      <h3 class="text-uppercase fs-6 mb-0">SHOPPING BAG ( <span class="cart-amount js-cart-items-count">1</span> ) </h3>
      <button class="btn-close-lg js-close-aside btn-close-aside ms-auto"></button>
    </div><!-- /.aside-header -->

    <div class="aside-content cart-drawer-items-list">
      <div class="cart-drawer-item d-flex position-relative">
        <div class="position-relative">
          <a href="product1_simple.html">
            <img loading="lazy" class="cart-drawer-item__img" src="../images/cart-item-1.jpg" alt="">
          </a>
        </div>
        <div class="cart-drawer-item__info flex-grow-1">
          <h6 class="cart-drawer-item__title fw-normal"><a href="product1_simple.html">Zessi Dresses</a></h6>
          <p class="cart-drawer-item__option text-secondary">Color: Yellow</p>
          <p class="cart-drawer-item__option text-secondary">Size: L</p>
          <div class="d-flex align-items-center justify-content-between mt-1">
            <div class="qty-control position-relative">
              <input type="number" name="quantity" value="1" min="1" class="qty-control__number border-0 text-center">
              <div class="qty-control__reduce text-start">-</div>
              <div class="qty-control__increase text-end">+</div>
            </div><!-- .qty-control -->
            <span class="cart-drawer-item__price money price">$99</span>
          </div>
        </div>

        <button class="btn-close-xs position-absolute top-0 end-0 js-cart-item-remove"></button>
      </div><!-- /.cart-drawer-item d-flex -->

      <hr class="cart-drawer-divider">

      <div class="cart-drawer-item d-flex position-relative">
        <div class="position-relative">
          <a href="product1_simple.html">
            <img loading="lazy" class="cart-drawer-item__img" src="../images/cart-item-2.jpg" alt="">
          </a>
        </div>
        <div class="cart-drawer-item__info flex-grow-1">
          <h6 class="cart-drawer-item__title fw-normal"><a href="product1_simple.html">Kirby T-Shirt</a></h6>
          <p class="cart-drawer-item__option text-secondary">Color: Black</p>
          <p class="cart-drawer-item__option text-secondary">Size: XS</p>
          <div class="d-flex align-items-center justify-content-between mt-1">
            <div class="qty-control position-relative">
              <input type="number" name="quantity" value="4" min="1" class="qty-control__number border-0 text-center">
              <div class="qty-control__reduce text-start">-</div>
              <div class="qty-control__increase text-end">+</div>
            </div><!-- .qty-control -->
            <span class="cart-drawer-item__price money price">$89</span>
          </div>
        </div>

        <button class="btn-close-xs position-absolute top-0 end-0 js-cart-item-remove"></button>
      </div><!-- /.cart-drawer-item d-flex -->

      <hr class="cart-drawer-divider">

      <div class="cart-drawer-item d-flex position-relative">
        <div class="position-relative">
          <a href="product1_simple.html">
            <img loading="lazy" class="cart-drawer-item__img" src="../images/cart-item-3.jpg" alt="">
          </a>
        </div>
        <div class="cart-drawer-item__info flex-grow-1">
          <h6 class="cart-drawer-item__title fw-normal"><a href="product1_simple.html">Cableknit Shawl</a></h6>
          <p class="cart-drawer-item__option text-secondary">Color: Green</p>
          <p class="cart-drawer-item__option text-secondary">Size: L</p>
          <div class="d-flex align-items-center justify-content-between mt-1">
            <div class="qty-control position-relative">
              <input type="number" name="quantity" value="3" min="1" class="qty-control__number border-0 text-center">
              <div class="qty-control__reduce text-start">-</div>
              <div class="qty-control__increase text-end">+</div>
            </div><!-- .qty-control -->
            <span class="cart-drawer-item__price money price">$129</span>
          </div>
        </div>

        <button class="btn-close-xs position-absolute top-0 end-0 js-cart-item-remove"></button>
      </div><!-- /.cart-drawer-item d-flex -->

    </div><!-- /.aside-content -->

    <div class="cart-drawer-actions position-absolute start-0 bottom-0 w-100">
      <hr class="cart-drawer-divider">
      <div class="d-flex justify-content-between">
        <h6 class="fs-base fw-medium">SUBTOTAL:</h6>
        <span class="cart-subtotal fw-medium">$176.00</span>
      </div><!-- /.d-flex justify-content-between -->
      <a href="shop_cart.html" class="btn btn-light mt-3 d-block">View Cart</a>
      <a href="shop_checkout.html" class="btn btn-primary mt-3 d-block">Checkout</a>
    </div><!-- /.aside-content -->
  </div><!-- /.aside -->

  <!-- Sitemap -->
  <div class="modal fade" id="siteMap" tabindex="-1">
    <div class="modal-dialog modal-fullscreen">
      <div class="sitemap d-flex">
        <div class="w-50 d-none d-lg-block">
          <img loading="lazy" src="../images/nav-bg.jpg" alt="Site map" class="sitemap__bg">
        </div><!-- /.sitemap__bg w-50 d-none d-lg-block -->
        <div class="sitemap__links w-50 flex-grow-1">
          <div class="modal-content">
            <div class="modal-header">
              <ul class="nav nav-pills" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                  <a class="nav-link active rounded-1 text-uppercase" id="pills-item-1-tab" data-bs-toggle="pill" href="#pills-item-1" role="tab" aria-controls="pills-item-1" aria-selected="true">WOMEN</a>
                </li>
                <li class="nav-item" role="presentation">
                  <a class="nav-link rounded-1 text-uppercase" id="pills-item-2-tab" data-bs-toggle="pill" href="#pills-item-2" role="tab" aria-controls="pills-item-2" aria-selected="false">MEN</a>
                </li>
                <li class="nav-item" role="presentation">
                  <a class="nav-link rounded-1 text-uppercase" id="pills-item-3-tab" data-bs-toggle="pill" href="#pills-item-3" role="tab" aria-controls="pills-item-3" aria-selected="false">KIDS</a>
                </li>
              </ul>
              <button type="button" class="btn-close-lg" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
              <div class="tab-content col-12" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-item-1" role="tabpanel" aria-labelledby="pills-item-1-tab">
                  <div class="row">
                    <ul class="nav nav-tabs list-unstyled col-5 d-block" id="myTab" role="tablist">
                      <li class="nav-item position-relative" role="presentation">
                        <a class="nav-link nav-link_rline active" id="tab-item-1-tab" data-bs-toggle="tab" href="#tab-item-1" role="tab" aria-controls="tab-item-1" aria-selected="true"><span class="rline-content">WOMEN</span></a>
                      </li>
                      <li class="nav-item position-relative" role="presentation">
                        <a class="nav-link nav-link_rline" id="tab-item-2-tab" data-bs-toggle="tab" href="#tab-item-2" role="tab" aria-controls="tab-item-2" aria-selected="false"><span class="rline-content">MAN</span></a>
                      </li>
                      <li class="nav-item position-relative" role="presentation">
                        <a class="nav-link nav-link_rline" id="tab-item-3-tab" data-bs-toggle="tab" href="#tab-item-3" role="tab" aria-controls="tab-item-3" aria-selected="false"><span class="rline-content">KIDS</span></a>
                      </li>
                      <li class="nav-item position-relative" role="presentation">
                        <a class="nav-link nav-link_rline" href="#"><span class="rline-content">HOME</span></a>
                      </li>
                      <li class="nav-item position-relative" role="presentation">
                        <a class="nav-link nav-link_rline" href="#"><span class="rline-content">COLLECTION</span></a>
                      </li>
                      <li class="nav-item position-relative" role="presentation">
                        <a class="nav-link nav-link_rline text-red" href="#">SALE UP TO 50% OFF</a>
                      </li>
                      <li class="nav-item position-relative" role="presentation">
                        <a class="nav-link nav-link_rline" href="#"><span class="rline-content">NEW</span></a>
                      </li>
                      <li class="nav-item position-relative" role="presentation">
                        <a class="nav-link nav-link_rline" href="#"><span class="rline-content">SHOES</span></a>
                      </li>
                      <li class="nav-item position-relative" role="presentation">
                        <a class="nav-link nav-link_rline" href="#"><span class="rline-content">ACCESSORIES</span></a>
                      </li>
                      <li class="nav-item position-relative" role="presentation">
                        <a class="nav-link nav-link_rline" href="#"><span class="rline-content">JOIN LIFE</span></a>
                      </li>
                      <li class="nav-item position-relative" role="presentation">
                        <a class="nav-link nav-link_rline" href="#"><span class="rline-content">#UOMOSTYLE</span></a>
                      </li>
                    </ul>

                    <div class="tab-content col-7" id="myTabContent">
                      <div class="tab-pane fade show active" id="tab-item-1" role="tabpanel" aria-labelledby="tab-item-1-tab">
                        <ul class="sub-menu list-unstyled">
                          <li class="sub-menu__item">
                            <a href="#" class="menu-link menu-link_us-s">New</a>
                          </li>
                          <li class="sub-menu__item">
                            <a href="#" class="menu-link menu-link_us-s">Best Sellers</a>
                          </li>
                          <li class="sub-menu__item">
                            <a href="#" class="menu-link menu-link_us-s">Collaborations®</a>
                          </li>
                          <li class="sub-menu__item">
                            <a href="#" class="menu-link menu-link_us-s">Sets</a>
                          </li>
                          <li class="sub-menu__item">
                            <a href="#" class="menu-link menu-link_us-s">Denim</a>
                          </li>
                          <li class="sub-menu__item">
                            <a href="#" class="menu-link menu-link_us-s">Jackets & Coats</a>
                          </li>
                          <li class="sub-menu__item">
                            <a href="#" class="menu-link menu-link_us-s">Overshirts</a>
                          </li>
                          <li class="sub-menu__item">
                            <a href="#" class="menu-link menu-link_us-s">Trousers</a>
                          </li>
                          <li class="sub-menu__item">
                            <a href="#" class="menu-link menu-link_us-s">Jeans</a>
                          </li>
                          <li class="sub-menu__item">
                            <a href="#" class="menu-link menu-link_us-s">Dresses</a>
                          </li>
                          <li class="sub-menu__item">
                            <a href="#" class="menu-link menu-link_us-s">Sweatshirts and Hoodies</a>
                          </li>
                          <li class="sub-menu__item">
                            <a href="#" class="menu-link menu-link_us-s">T-shirts & Tops</a>
                          </li>
                          <li class="sub-menu__item">
                            <a href="#" class="menu-link menu-link_us-s">Shirts & Blouses</a>
                          </li>
                          <li class="sub-menu__item">
                            <a href="#" class="menu-link menu-link_us-s">Shorts and Bermudas</a>
                          </li>
                          <li class="sub-menu__item">
                            <a href="#" class="menu-link menu-link_us-s">Shoes</a>
                          </li>
                          <li class="sub-menu__item">
                            <a href="shop3.html" class="menu-link menu-link_us-s">Accessories</a>
                          </li>
                          <li class="sub-menu__item">
                            <a href="#" class="menu-link menu-link_us-s">Bags</a>
                          </li>
                          <li class="sub-menu__item">
                            <a href="about.html" class="menu-link menu-link_us-s">Gift Card</a>
                          </li>
                        </ul><!-- /.sub-menu -->
                      </div>
                      <div class="tab-pane fade" id="tab-item-2" role="tabpanel" aria-labelledby="tab-item-2-tab">
                        <ul class="sub-menu list-unstyled">
                          <li class="sub-menu__item">
                            <a href="#" class="menu-link menu-link_us-s">Best Sellers</a>
                          </li>
                          <li class="sub-menu__item">
                            <a href="#" class="menu-link menu-link_us-s">New</a>
                          </li>
                          <li class="sub-menu__item">
                            <a href="#" class="menu-link menu-link_us-s">Sets</a>
                          </li>
                          <li class="sub-menu__item">
                            <a href="#" class="menu-link menu-link_us-s">Denim</a>
                          </li>
                          <li class="sub-menu__item">
                            <a href="#" class="menu-link menu-link_us-s">Collaborations®</a>
                          </li>
                          <li class="sub-menu__item">
                            <a href="#" class="menu-link menu-link_us-s">Trousers</a>
                          </li>
                          <li class="sub-menu__item">
                            <a href="#" class="menu-link menu-link_us-s">Jackets & Coats</a>
                          </li>
                          <li class="sub-menu__item">
                            <a href="#" class="menu-link menu-link_us-s">Overshirts</a>
                          </li>
                          <li class="sub-menu__item">
                            <a href="#" class="menu-link menu-link_us-s">Dresses</a>
                          </li>
                          <li class="sub-menu__item">
                            <a href="#" class="menu-link menu-link_us-s">Jeans</a>
                          </li>
                          <li class="sub-menu__item">
                            <a href="#" class="menu-link menu-link_us-s">Sweatshirts and Hoodies</a>
                          </li>
                          <li class="sub-menu__item">
                            <a href="about.html" class="menu-link menu-link_us-s">Gift Card</a>
                          </li>
                          <li class="sub-menu__item">
                            <a href="#" class="menu-link menu-link_us-s">Shirts & Blouses</a>
                          </li>
                          <li class="sub-menu__item">
                            <a href="#" class="menu-link menu-link_us-s">T-shirts & Tops</a>
                          </li>
                          <li class="sub-menu__item">
                            <a href="#" class="menu-link menu-link_us-s">Shorts and Bermudas</a>
                          </li>
                          <li class="sub-menu__item">
                            <a href="shop3.html" class="menu-link menu-link_us-s">Accessories</a>
                          </li>
                          <li class="sub-menu__item">
                            <a href="#" class="menu-link menu-link_us-s">Shoes</a>
                          </li>
                          <li class="sub-menu__item">
                            <a href="#" class="menu-link menu-link_us-s">Bags</a>
                          </li>
                        </ul><!-- /.sub-menu -->
                      </div>
                      <div class="tab-pane fade" id="tab-item-3" role="tabpanel" aria-labelledby="tab-item-3-tab">
                        <ul class="sub-menu list-unstyled">
                          <li class="sub-menu__item">
                            <a href="about.html" class="menu-link menu-link_us-s">Gift Card</a>
                          </li>
                          <li class="sub-menu__item">
                            <a href="#" class="menu-link menu-link_us-s">Collaborations®</a>
                          </li>
                          <li class="sub-menu__item">
                            <a href="#" class="menu-link menu-link_us-s">Sets</a>
                          </li>
                          <li class="sub-menu__item">
                            <a href="#" class="menu-link menu-link_us-s">Denim</a>
                          </li>
                          <li class="sub-menu__item">
                            <a href="#" class="menu-link menu-link_us-s">New</a>
                          </li>
                          <li class="sub-menu__item">
                            <a href="#" class="menu-link menu-link_us-s">Best Sellers</a>
                          </li>
                          <li class="sub-menu__item">
                            <a href="#" class="menu-link menu-link_us-s">Overshirts</a>
                          </li>
                          <li class="sub-menu__item">
                            <a href="#" class="menu-link menu-link_us-s">Jackets & Coats</a>
                          </li>
                          <li class="sub-menu__item">
                            <a href="#" class="menu-link menu-link_us-s">Jeans</a>
                          </li>
                          <li class="sub-menu__item">
                            <a href="#" class="menu-link menu-link_us-s">Trousers</a>
                          </li>
                          <li class="sub-menu__item">
                            <a href="#" class="menu-link menu-link_us-s">Shorts and Bermudas</a>
                          </li>
                          <li class="sub-menu__item">
                            <a href="#" class="menu-link menu-link_us-s">Shoes</a>
                          </li>
                          <li class="sub-menu__item">
                            <a href="shop3.html" class="menu-link menu-link_us-s">Accessories</a>
                          </li>
                          <li class="sub-menu__item">
                            <a href="#" class="menu-link menu-link_us-s">Dresses</a>
                          </li>
                          <li class="sub-menu__item">
                            <a href="#" class="menu-link menu-link_us-s">Bags</a>
                          </li>
                        </ul><!-- /.sub-menu -->
                      </div>
                    </div>
                  </div><!-- /.row -->
                </div>
                <div class="tab-pane fade" id="pills-item-2" role="tabpanel" aria-labelledby="pills-item-2-tab">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                  Elementum lectus a porta commodo suspendisse arcu, aliquam lectus faucibus.
                </div>
                <div class="tab-pane fade" id="pills-item-3" role="tabpanel" aria-labelledby="pills-item-3-tab">
                  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                  Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?
                </div>
              </div>
            </div><!-- /.modal-body -->
          </div><!-- /.modal-content -->
        </div><!-- /.sitemap__links w-50 flex-grow-1 -->
      </div>
    </div><!-- /.modal-dialog modal-fullscreen -->
  </div><!-- /.sitemap position-fixed w-100 -->

  <!-- Quick View -->
  <div class="modal fade" id="quickView" tabindex="-1">
    <div class="modal-dialog quick-view modal-dialog-centered">
      <div class="modal-content">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="product-single">
          <div class="product-single__media m-0">
            <div class="product-single__image position-relative w-100">
              <div class="swiper-container js-swiper-slider" data-settings='{
                  "slidesPerView": 1,
                  "slidesPerGroup": 1,
                  "effect": "none",
                  "loop": false,
                  "navigation": {
                    "nextEl": ".modal-dialog.quick-view .product-single__media .swiper-button-next",
                    "prevEl": ".modal-dialog.quick-view .product-single__media .swiper-button-prev"
                  }
                }'>
                <div class="swiper-wrapper">
                  <div class="swiper-slide product-single__image-item">
                    <img loading="lazy" src="../images/products/quickview_1.jpg" alt="">
                  </div>
                  <div class="swiper-slide product-single__image-item">
                    <img loading="lazy" src="../images/products/quickview_2.jpg" alt="">
                  </div>
                  <div class="swiper-slide product-single__image-item">
                    <img loading="lazy" src="../images/products/quickview_3.jpg" alt="">
                  </div>
                  <div class="swiper-slide product-single__image-item">
                    <img loading="lazy" src="../images/products/quickview_4.jpg" alt="">
                  </div>
                </div>
                <div class="swiper-button-prev"><svg width="7" height="11" viewbox="0 0 7 11" xmlns="http://www.w3.org/2000/svg"><use href="#icon_prev_sm"></use></svg></div>
                <div class="swiper-button-next"><svg width="7" height="11" viewbox="0 0 7 11" xmlns="http://www.w3.org/2000/svg"><use href="#icon_next_sm"></use></svg></div>
              </div>
            </div>
          </div>
          <div class="product-single__detail">
            <h1 class="product-single__name">Lightweight Puffer Jacket With a Hood</h1>
            <div class="product-single__price">
              <span class="current-price">$449</span>
            </div>
            <div class="product-single__short-desc">
              <p>Phasellus sed volutpat orci. Fusce eget lore mauris vehicula elementum gravida nec dui. Aenean aliquam varius ipsum, non ultricies tellus sodales eu. Donec dignissim viverra nunc, ut aliquet magna posuere eget.</p>
            </div>
            <form name="addtocart-form" method="post">
              <div class="product-single__swatches">
                <div class="product-swatch text-swatches">
                  <label>Sizes</label>
                  <div class="swatch-list">
                    <input type="radio" name="size" id="swatch-1">
                    <label class="swatch js-swatch" for="swatch-1" aria-label="Extra Small" data-bs-toggle="tooltip" data-bs-placement="top" title="Extra Small">XS</label>
                    <input type="radio" name="size" id="swatch-2" checked="">
                    <label class="swatch js-swatch" for="swatch-2" aria-label="Small" data-bs-toggle="tooltip" data-bs-placement="top" title="Small">S</label>
                    <input type="radio" name="size" id="swatch-3">
                    <label class="swatch js-swatch" for="swatch-3" aria-label="Middle" data-bs-toggle="tooltip" data-bs-placement="top" title="Middle">M</label>
                    <input type="radio" name="size" id="swatch-4">
                    <label class="swatch js-swatch" for="swatch-4" aria-label="Large" data-bs-toggle="tooltip" data-bs-placement="top" title="Large">L</label>
                    <input type="radio" name="size" id="swatch-5">
                    <label class="swatch js-swatch" for="swatch-5" aria-label="Extra Large" data-bs-toggle="tooltip" data-bs-placement="top" title="Extra Large">XL</label>
                  </div>
                  <a href="#" class="sizeguide-link" data-bs-toggle="modal" data-bs-target="#sizeGuide">Size Guide</a>
                </div>
                <div class="product-swatch color-swatches">
                  <label>Color</label>
                  <div class="swatch-list">
                    <input type="radio" name="color" id="swatch-11">
                    <label class="swatch swatch-color js-swatch" for="swatch-11" aria-label="Black" data-bs-toggle="tooltip" data-bs-placement="top" title="Black" style="color: #222"></label>
                    <input type="radio" name="color" id="swatch-12" checked="">
                    <label class="swatch swatch-color js-swatch" for="swatch-12" aria-label="Red" data-bs-toggle="tooltip" data-bs-placement="top" title="Red" style="color: #C93A3E"></label>
                    <input type="radio" name="color" id="swatch-13">
                    <label class="swatch swatch-color js-swatch" for="swatch-13" aria-label="Grey" data-bs-toggle="tooltip" data-bs-placement="top" title="Grey" style="color: #E4E4E4"></label>
                  </div>
                </div>
              </div>
              <div class="product-single__addtocart">
                <div class="qty-control position-relative">
                  <input type="number" name="quantity" value="1" min="1" class="qty-control__number text-center">
                  <div class="qty-control__reduce">-</div>
                  <div class="qty-control__increase">+</div>
                </div><!-- .qty-control -->
                <button type="submit" class="btn btn-primary btn-addtocart js-open-aside" data-aside="cartDrawer">Add to Cart</button>
              </div>
            </form>
            <div class="product-single__addtolinks">
              <a href="#" class="menu-link menu-link_us-s add-to-wishlist"><svg width="16" height="16" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart"></use></svg><span>Add to Wishlist</span></a>
              <share-button class="share-button">
                <button class="menu-link menu-link_us-s to-share border-0 bg-transparent d-flex align-items-center">
                  <svg width="16" height="19" viewbox="0 0 16 19" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_sharing"></use></svg>
                </button>
                <details id="Details-share-template__main" class="m-1 xl:m-1.5" hidden="">
                  <summary class="btn-solid m-1 xl:m-1.5 pt-3.5 pb-3 px-5">+</summary>
                  <div id="Article-share-template__main" class="share-button__fallback flex items-center absolute top-full left-0 w-full px-2 py-4 bg-container shadow-theme border-t z-10">
                    <div class="field grow mr-4">
                      <label class="field__label sr-only" for="url">Link</label>
                      <input type="text" class="field__input w-full" id="url" value="https://uomo-crystal.myshopify.com/blogs/news/go-to-wellness-tips-for-mental-health" placeholder="Link" onclick="this.select();" readonly="">
                    </div>
                    <button class="share-button__copy no-js-hidden">
                      <svg class="icon icon-clipboard inline-block mr-1" width="11" height="13" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" viewbox="0 0 11 13">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M2 1a1 1 0 011-1h7a1 1 0 011 1v9a1 1 0 01-1 1V1H2zM1 2a1 1 0 00-1 1v9a1 1 0 001 1h7a1 1 0 001-1V3a1 1 0 00-1-1H1zm0 10V3h7v9H1z" fill="currentColor"></path>
                      </svg>
                      <span class="sr-only">Copy link</span>
                    </button>
                  </div>
                </details>
              </share-button>
              <script src="js/details-disclosure.js" defer="defer"></script>
              <script src="js/share.js" defer="defer"></script>
            </div>
            <div class="product-single__meta-info mb-0">
              <div class="meta-item">
                <label>SKU:</label>
                <span>N/A</span>
              </div>
              <div class="meta-item">
                <label>Categories:</label>
                <span>Casual & Urban Wear, Jackets, Men</span>
              </div>
              <div class="meta-item">
                <label>Tags:</label>
                <span>biker, black, bomber, leather</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- /.modal-dialog -->
  </div><!-- /.quickview position-fixed -->

  <!-- Go To Top -->
  <div id="scrollTop" class="visually-hidden end-0"></div>

  <!-- Page Overlay -->
  <div class="page-overlay"></div><!-- /.page-overlay -->

  <!-- External JavaScripts -->
  <script src="{{ asset('/assets/js/plugins/jquery.min.js') }}"></script>
  <script src="{{ asset('/assets/js/plugins/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('/assets/js/plugins/bootstrap-slider.min.js') }}"></script>
  
  <script src="{{ asset('/assets/js/plugins/swiper.min.js') }}"></script>
  <script src="{{ asset('/assets/js/plugins/countdown.js') }}"></script>
  <script src="{{ asset('/assets/js/plugins/jquery.fancybox.js') }}"></script>

  <!-- Footer Scripts -->
  <script src="{{ asset('/assets/js/theme.js') }}"></script>

</body>
</html>