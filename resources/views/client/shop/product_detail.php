<body>
<!-- Header Start -->
<header class="pb-md-4 pb-0">
    <div class="top-nav top-header sticky-header">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="navbar-top">
                        <button class="navbar-toggler d-xl-none d-inline navbar-menu-button" type="button" data-bs-toggle="offcanvas" data-bs-target="#primaryMenu">
                                <span class="navbar-toggler-icon">
                                    <i class="fa-solid fa-bars"></i>
                                </span>
                        </button>
                        <a href="index.html" class="web-logo nav-logo">
                            <img src="<?= _WEB_ROOT ?>assets/client/images/logo/1.png" class="img-fluid blur-up lazyload" alt="">
                        </a>

                        <div class="middle-box">

                            <div class="search-box">
                                <div class="input-group">
                                    <input type="search" class="form-control" placeholder="Tìm kiếm..." aria-label="Recipient's username" aria-describedby="button-addon2">
                                    <button class="btn" type="button" id="button-addon2">
                                        <i data-feather="search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="rightside-box">
                            <div class="search-full">
                                <div class="input-group">
                                        <span class="input-group-text">
                                            <i data-feather="search" class="font-light"></i>
                                        </span>
                                    <input type="text" class="form-control search-type" placeholder="Tìm kiếm..">
                                    <span class="input-group-text close-search">
                                            <i data-feather="x" class="font-light"></i>
                                        </span>
                                </div>
                            </div>
                            <ul class="right-side-menu">
                                <li class="right-side">
                                    <div class="delivery-login-box">
                                        <div class="delivery-icon">
                                            <div class="search-box">
                                                <i data-feather="search"></i>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="right-side">
                                    <a href="contact-us.html" class="delivery-login-box">
                                        <div class="delivery-icon">
                                            <i data-feather="phone-call"></i>
                                        </div>
                                        <div class="delivery-detail">
                                            <h6>24/7 Vận chuyển</h6>
                                            <h5>+91 888 104 2340</h5>
                                        </div>
                                    </a>
                                </li>
                                <li class="right-side">
                                    <a href="wishlist.html" class="btn p-0 position-relative header-wishlist">
                                        <i data-feather="heart"></i>
                                    </a>
                                </li>
                                <li class="right-side">
                                    <div class="onhover-dropdown header-badge">
                                        <button type="button" class="btn p-0 position-relative header-wishlist">
                                            <i data-feather="shopping-cart"></i>
                                            <span class="position-absolute top-0 start-100 translate-middle badge">2
                                                    <span class="visually-hidden">Tin nhắn chưa đọc</span>
                                                </span>
                                        </button>

                                        <div class="onhover-div">
                                            <ul class="cart-list">
                                                <li class="product-box-contain">
                                                    <div class="drop-cart">
                                                        <a href="product-left-thumbnail.html" class="drop-image">
                                                            <img src="<?= _WEB_ROOT ?>assets/client/images/vegetable/product/2.png" class="blur-up lazyload" alt="">
                                                        </a>

                                                        <div class="drop-contain">
                                                            <a href="product-left-thumbnail.html">
                                                                <h5>Bánh quy bơ đậu phộng 600g
                                                                </h5>
                                                            </a>
                                                            <h6><span>1 x</span> 12.000 đ</h6>
                                                            <button class="close-button close_button">
                                                                <i class="fa-solid fa-xmark"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>

                                            <div class="price-box">
                                                <h5>Tổng :</h5>
                                                <h4 class="theme-color fw-bold">12.000 đ</h4>
                                            </div>

                                            <div class="button-group">
                                                <a href="cart.html" class="btn btn-sm cart-button">Xem giỏ hàng</a>
                                                <a href="checkout.html" class="btn btn-sm cart-button theme-bg-color
                                                    text-white">Thanh Toán</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="right-side onhover-dropdown">
                                    <div class="delivery-login-box">
                                        <div class="delivery-icon">
                                            <i data-feather="user"></i>
                                        </div>
                                        <div class="delivery-detail">
                                            <h6>Xin chào, Monsaide</h6>
                                            <h5>Tài khoản của tôi</h5>
                                        </div>
                                    </div>

                                    <div class="onhover-div onhover-div-login">
                                        <ul class="user-box-name">
                                            <li class="product-box-contain">
                                                <i></i>
                                                <a href="dang-nhap">Đăng nhập</a>
                                            </li>

                                            <li class="product-box-contain">
                                                <a href="dang-ki">Đăng kí</a>
                                            </li>

                                            <li class="product-box-contain">
                                                <a href="quen-mat-khau">Quên mật khẩu</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid-lg">
        <div class="row">
            <div class="col-12">
                <div class="header-nav">
                    <div class="header-nav-left">
                        <button class="dropdown-category">
                            <i data-feather="align-left"></i>
                            <span>Tất cả loại</span>
                        </button>

                        <div class="category-dropdown">
                            <div class="category-title">
                                <h5>Loại</h5>
                                <button type="button" class="btn p-0 close-button text-content">
                                    <i class="fa-solid fa-xmark"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="header-nav-middle">
                        <div class="main-nav navbar navbar-expand-xl navbar-light navbar-sticky">
                            <div class="offcanvas offcanvas-collapse order-xl-2" id="primaryMenu">
                                <div class="offcanvas-header navbar-shadow">
                                    <h5>Menu</h5>
                                    <button class="btn-close lead" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body">
                                    <ul class="navbar-nav">
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="/">Trang Chủ</a>
                                        </li>

                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="/cua-hang">Cửa Hàng</a>
                                        </li>

                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="/gioi-thieu">Giới Thiệu</a>
                                        </li>

                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="/lien-he">Liên Hệ</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="header-nav-right">
                        <button class="btn deal-button" data-bs-toggle="modal" data-bs-target="#deal-box">
                            <i data-feather="zap"></i>
                            <span>Giảm giá hôm nay</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header End -->

<!-- mobile fix menu start -->
<div class="mobile-menu d-md-none d-block mobile-cart">
    <ul>
        <li class="active">
            <a href="/">
                <i class="iconly-Home icli"></i>
                <span>Trang chủ</span>
            </a>
        </li>

        <li class="mobile-category">
            <a href="cua-hang">
                <i class="iconly-Category icli js-link"></i>
                <span>Cửa hàng</span>
            </a>
        </li>

        <li>
            <a href="tim-kiem" class="search-box">
                <i class="iconly-Search icli"></i>
                <span>Tìm kiếm</span>
            </a>
        </li>

        <li>
            <a href="yeu-thich" class="notifi-wishlist">
                <i class="iconly-Heart icli"></i>
                <span>Yêu thích</span>
            </a>
        </li>

        <li>
            <a href="gio-hang">
                <i class="iconly-Bag-2 icli fly-cate"></i>
                <span>Giỏ hàng</span>
            </a>
        </li>
    </ul>
</div>
<!-- mobile fix menu end -->

<!-- Breadcrumb Section Start -->
<section class="breadscrumb-section pt-0">
    <div class="container-fluid-lg">
        <div class="row">
            <div class="col-12">
                <div class="breadscrumb-contain">
                    <h2>Bánh sô cô la kem</h2>
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a href="/">
                                    <i class="fa-solid fa-house"></i>
                                </a>
                            </li>

                            <li class="breadcrumb-item active">Bánh sô cô la kem</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Product Left Sidebar Start -->
<section class="product-section">
    <div class="container-fluid-lg">
        <div class="row">
            <div class="col-xxl-9 col-xl-8 col-lg-7 wow fadeInUp">
                <div class="row g-4">
                    <div class="col-xl-6 wow fadeInUp">
                        <div class="product-left-box">
                            <div class="row g-2">
                                <div class="col-xxl-10 col-lg-12 col-md-10 order-xxl-2 order-lg-1 order-md-2">
                                    <div class="product-main-2 no-arrow">
                                        <div>
                                            <div class="slider-image">
                                                <img src="<?=_WEB_ROOT?>assets/client/images/product/category/1.jpg" id="img-1"
                                                     data-zoom-image="<?=_WEB_ROOT?>assets/client/images/product/category/1.jpg"
                                                     class="img-fluid image_zoom_cls-0 blur-up lazyload" alt="">
                                            </div>
                                        </div>

                                        <div>
                                            <div class="slider-image">
                                                <img src="<?=_WEB_ROOT?>assets/client/images/product/category/2.jpg"
                                                     data-zoom-image="<?=_WEB_ROOT?>assets/client/images/product/category/2.jpg"
                                                     class="img-fluid image_zoom_cls-1 blur-up lazyload" alt="">
                                            </div>
                                        </div>

                                        <div>
                                            <div class="slider-image">
                                                <img src="<?=_WEB_ROOT?>assets/client/images/product/category/3.jpg"
                                                     data-zoom-image="<?=_WEB_ROOT?>assets/client/images/product/category/3.jpg"
                                                     class="img-fluid image_zoom_cls-2 blur-up lazyload" alt="">
                                            </div>
                                        </div>

                                        <div>
                                            <div class="slider-image">
                                                <img src="<?=_WEB_ROOT?>assets/client/images/product/category/4.jpg"
                                                     data-zoom-image="<?=_WEB_ROOT?>assets/client/images/product/category/4.jpg"
                                                     class="img-fluid image_zoom_cls-3 blur-up lazyload" alt="">
                                            </div>
                                        </div>

                                        <div>
                                            <div class="slider-image">
                                                <img src="<?=_WEB_ROOT?>assets/client/images/product/category/5.jpg"
                                                     data-zoom-image="<?=_WEB_ROOT?>assets/client/images/product/category/5.jpg"
                                                     class="img-fluid image_zoom_cls-4 blur-up lazyload" alt="">
                                            </div>
                                        </div>

                                        <div>
                                            <div class="slider-image">
                                                <img src="<?=_WEB_ROOT?>assets/client/images/product/category/6.jpg"
                                                     data-zoom-image="<?=_WEB_ROOT?>assets/client/images/product/category/6.jpg"
                                                     class="img-fluid image_zoom_cls-5 blur-up lazyload" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xxl-2 col-lg-12 col-md-2 order-xxl-1 order-lg-2 order-md-1">
                                    <div class="left-slider-image-2 left-slider no-arrow slick-top">
                                        <div>
                                            <div class="sidebar-image">
                                                <img src="<?=_WEB_ROOT?>assets/client/images/product/category/1.jpg"
                                                     class="img-fluid blur-up lazyload" alt="">
                                            </div>
                                        </div>

                                        <div>
                                            <div class="sidebar-image">
                                                <img src="<?=_WEB_ROOT?>assets/client/images/product/category/2.jpg"
                                                     class="img-fluid blur-up lazyload" alt="">
                                            </div>
                                        </div>

                                        <div>
                                            <div class="sidebar-image">
                                                <img src="<?=_WEB_ROOT?>assets/client/images/product/category/3.jpg"
                                                     class="img-fluid blur-up lazyload" alt="">
                                            </div>
                                        </div>

                                        <div>
                                            <div class="sidebar-image">
                                                <img src="<?=_WEB_ROOT?>assets/client/images/product/category/4.jpg"
                                                     class="img-fluid blur-up lazyload" alt="">
                                            </div>
                                        </div>

                                        <div>
                                            <div class="sidebar-image">
                                                <img src="<?=_WEB_ROOT?>assets/client/images/product/category/5.jpg"
                                                     class="img-fluid blur-up lazyload" alt="">
                                            </div>
                                        </div>

                                        <div>
                                            <div class="sidebar-image">
                                                <img src="<?=_WEB_ROOT?>assets/client/images/product/category/6.jpg"
                                                     class="img-fluid blur-up lazyload" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="right-box-contain">
                            <h6 class="offer-top">Giảm giá 30%</h6>
                            <h2 class="name">Bánh sô cô la kem</h2>
                            <div class="price-rating">
                                <h3 class="theme-color price">30.000 đ <del class="text-content">40.000đ</del> <span
                                        class="offer theme-color">(Giảm giá 8%)</span></h3>
                                <div class="product-rating custom-rate">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <span class="review">23 Đánh giá của khách hàng</span>
                                </div>
                            </div>

                            <div class="procuct-contain">
                                <p>Bánh kẹo sô cô la bánh sô cô la táo tàu tráng miệng. Mận đường shortbread
                                    món tráng miệng
                                    bánh quy bột bánh hạnh nhân ngọt ngào. Bánh quy bánh táo tráng miệng bánh mận đường
                                    bánh pho mát.
                                </p>
                            </div>

                            <div class="product-packege">
                                <div class="product-title">
                                    <h4>Cân nặng</h4>
                                </div>
                                <ul class="select-packege">
                                    <li>
                                        <a href="" class="active">1/2 KG</a>
                                    </li>
                                    <li>
                                        <a href="">1 KG</a>
                                    </li>
                                    <li>
                                        <a href="">1.5 KG</a>
                                    </li>
                                    <li>
                                        <a href="">Những bông hồng đỏ</a>
                                    </li>
                                    <li>
                                        <a href="">Với hoa hồng màu hồng</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="time deal-timer product-deal-timer mx-md-0 mx-auto" id="clockdiv-1"
                                 data-hours="1" data-minutes="2" data-seconds="3">
                                <div class="product-title">
                                    <h4>Nhanh lên! Bán hàng kết thúc vào</h4>
                                </div>
                                <ul>
                                    <li>
                                        <div class="counter d-block">
                                            <div class="days d-block">
                                                <h5></h5>
                                            </div>
                                            <h6>Ngày</h6>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="counter d-block">
                                            <div class="hours d-block">
                                                <h5></h5>
                                            </div>
                                            <h6>Giờ</h6>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="counter d-block">
                                            <div class="minutes d-block">
                                                <h5></h5>
                                            </div>
                                            <h6>Phút</h6>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="counter d-block">
                                            <div class="seconds d-block">
                                                <h5></h5>
                                            </div>
                                            <h6>Giây</h6>
                                        </div>
                                    </li>
                                </ul>
                            </div>



                            <div class="note-box product-packege">
                                <div class="cart_qty qty-box product-qty">
                                    <div class="input-group">
                                        <button type="button" class="qty-right-plus" data-type="plus" data-field="">
                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                        </button>
                                        <input class="form-control input-number qty-input" type="text"
                                               name="quantity" value="0">
                                        <button type="button" class="qty-left-minus" data-type="minus"
                                                data-field="">
                                            <i class="fa fa-minus" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>

                                <button onclick="location.href = '/';"
                                        class="btn btn-md bg-dark cart-button text-white w-100">Thêm vào giỏ hàng</button>
                            </div>

                            <div class="buy-box">
                                <a href="/">
                                    <i data-feather="heart"></i>
                                    <span>Thêm vào yêu thích</span>
                                </a>
                            </div>

                            <div class="pickup-box">
                                <div class="product-title">
                                    <h4>Lưu trữ thông tin</h4>
                                </div>

                                <div class="pickup-detail">
                                    <h4 class="text-content">Bánh kẹo sô cô la bánh sô cô la táo tàu tráng miệng.
                                        Bánh quy bột ngọt tráng miệng mận đường bánh hạnh nhân ngọt ngào.</h4>
                                </div>

                                <div class="product-info">
                                    <ul class="product-info-list product-info-list-2">
                                        <li>Type : <a href="">Rừng đen</a></li>
                                        <li>SKU : <a href="">SDFVW65467</a></li>
                                        <li>MFG : <a href="">Ngày 4 tháng 6 năm 2022</a></li>
                                        <li>Stock : <a href="">Còn 2 món</a></li>
                                        <li>Tags : <a href="">Bánh, </a> <a
                                                href="">Cửa hàng bánh mì</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="paymnet-option">
                                <div class="product-title">
                                    <h4>Đảm bảo thanh toán an toàn</h4>
                                </div>
                                <ul>
                                    <li>
                                        <a href="">
                                            <img src="<?=_WEB_ROOT?>assets/client/images/product/payment/1.svg"
                                                 class="blur-up lazyload" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <img src="<?=_WEB_ROOT?>assets/client/images/product/payment/2.svg"
                                                 class="blur-up lazyload" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <img src="<?=_WEB_ROOT?>assets/client/images/product/payment/3.svg"
                                                 class="blur-up lazyload" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <img src="<?=_WEB_ROOT?>assets/client/images/product/payment/4.svg"
                                                 class="blur-up lazyload" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <img src="<?=_WEB_ROOT?>assets/client/images/product/payment/5.svg"
                                                 class="blur-up lazyload" alt="">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="product-section-box">
                            <ul class="nav nav-tabs custom-nav" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="description-tab" data-bs-toggle="tab"
                                            data-bs-target="#description" type="button" role="tab"
                                            aria-controls="description" aria-selected="true">Sự miêu tả</button>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="info-tab" data-bs-toggle="tab"
                                            data-bs-target="#info" type="button" role="tab" aria-controls="info"
                                            aria-selected="false">Thông tin bổ sung</button>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="care-tab" data-bs-toggle="tab"
                                            data-bs-target="#care" type="button" role="tab" aria-controls="care"
                                            aria-selected="false">Hướng dẫn chăm sóc</button>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="review-tab" data-bs-toggle="tab"
                                            data-bs-target="#review" type="button" role="tab" aria-controls="review"
                                            aria-selected="false">Đánh giá</button>
                                </li>
                            </ul>

                            <div class="tab-content custom-tab" id="myTabContent">
                                <div class="tab-pane fade show active" id="description" role="tabpanel"
                                     aria-labelledby="description-tab">
                                    <div class="product-description">
                                        <div class="nav-desh">
                                            <p>Thạch đậu bánh cà rốt bánh quy kem bánh yến mạch gummi gấu tart.
                                                Bánh chanh cà rốt bánh pudding kẹo gummi gấu ngọt ngào. Bánh sô-cô-la
                                                bánh tart bánh donut phủ đường cam thảo thanh sô cô la mận. Thạch
                                                đậu tiramisu caramen táo tàu bánh quy sô cô la cam thảo. bánh pudding
                                                kẹo bơ cứng táo tàu bánh yến mạch cuộn ngọt. Bánh sừng bò tráng miệng giọt chanh
                                                bánh cupcake của Đan Mạch. Kẹo cuộn ngọt socola kẹo bơ cứng thạch ngọt ngào
                                                cuộn topping halvah brownie. Bánh kẹo mè bột Marshmallow
                                                kẹo dẻo kẹo dẻo bánh gừng.</p>
                                        </div>

                                        <div class="nav-desh">
                                            <div class="desh-title">
                                                <h5>Hữu cơ:</h5>
                                            </div>
                                            <p>Sản xuất</p>
                                        </div>

                                        <div class="banner-contain nav-desh">
                                            <img src="<?=_WEB_ROOT?>assets/client/images/vegetable/banner/14.jpg"
                                                 class="bg-img blur-up lazyload" alt="">
                                            <div class="banner-details p-center banner-b-space w-100 text-center">
                                                <div>
                                                    <h6 class="ls-expanded theme-color mb-sm-3 mb-1">MÙA HÈ</h6>
                                                    <h2>RAU QUẢ</h2>
                                                    <p class="mx-auto mt-1">Tiết kiệm tới 5% GIẢM GIÁ</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="nav-desh">
                                            <div class="desh-title">
                                                <h5>Từ nhà sản xuất:</h5>
                                            </div>
                                            <p>Jđậu Elly bánh quy chupa chups bánh cà rốt thạch-o halvah táo
                                                bánh pudding bánh gừng. Bánh táo halvah bánh tiramisu shortbread
                                                bánh sô cô la bánh sừng bò kẹo bông. Bánh cupcake caramen gummi
                                                gấu bánh hạnh nhân bánh gừng bánh trái cây bánh hạnh nhân bánh xốp. bánh hạnh nhân
                                                món tráng miệng cupcake kem tootsie cuộn. Bánh sô cô la brownie
                                                bánh pudding bột kẹo kem bánh kem. souffle táo tàu
                                                bánh chupa chups kẹo halvah donut. Tart tart chanh giọt
                                                bánh táo bánh trái cây.</p>

                                            <p>Món tráng miệng cam thảo bánh tart soufflé thanh sô cô la bánh táo bánh ngọt Đan Mạch
                                                souffle. Gummi gấu kem thạch bánh gừng halvah. Bánh sô-cô-la
                                                thanh sô cô la bánh pudding chupa chups bánh vuốt gấu dragée donut halvah.
                                                Gummi Bears bánh quy kem thạch hoặc táo tàu bánh sừng bò ngọt ngào.
                                                Kẹo bông hạnh nhân gummi gấu chanh kẹo mút kẹo mút
                                                sô cô la. Bánh quy kem bánh ngọt cuộn ngọt cuộn chanh
                                                giọt cookie muffin bánh cà rốt sô cô la bánh hạnh nhân bánh gừng
                                                thanh sô cô la đứng đầu. Bánh ngọt soufflé tiramisu tráng miệng ngọt ngào.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="info" role="tabpanel" aria-labelledby="info-tab">
                                    <div class="table-responsive">
                                        <table class="table info-table">
                                            <tbody>
                                            <tr>
                                                <td>Chuyên môn</td>
                                                <td>Người ăn chay</td>
                                            </tr>
                                            <tr>
                                                <td>Loại thành phần</td>
                                                <td>Người ăn chay</td>
                                            </tr>
                                            <tr>
                                                <td>Thương hiệu</td>
                                                <td>Lavian kỳ lạ</td>
                                            </tr>
                                            <tr>
                                                <td>Hình thức</td>
                                                <td>quán bar bánh hạnh nhân</td>
                                            </tr>
                                            <tr>
                                                <td>Thông tin gói hàng</td>
                                                <td>Hộp</td>
                                            </tr>
                                            <tr>
                                                <td>nhà chế tạo</td>
                                                <td>Công ty TNHH Sản phẩm Dinh dưỡng Prayagh</td>
                                            </tr>
                                            <tr>
                                                <td>Mã sản phẩm</td>
                                                <td>LE 014 - 20 Bánh Crème (Gói 2)</td>
                                            </tr>
                                            <tr>
                                                <td>Số lượng ròng</td>
                                                <td>40.00 đém</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="care" role="tabpanel" aria-labelledby="care-tab">
                                    <div class="information-box">
                                        <ul>
                                            <li>Bảo quản bánh kem trong tủ lạnh. Bánh kẹo mềm nên được
                                                được bảo quản trong môi trường có điều hòa nhiệt độ.</li>

                                            <li>Cắt lát và phục vụ bánh ở nhiệt độ phòng và đảm bảo
                                                nó không tiếp xúc với nhiệt.</li>

                                            <li>Dùng dao răng cưa để cắt bánh kẹo mềm.</li>

                                            <li>Các yếu tố điêu khắc và tượng nhỏ có thể chứa dây đỡ
                                                hoặc tăm hoặc xiên gỗ để hỗ trợ.</li>

                                            <li>Pthuê kiểm tra vị trí của các mục này trước khi phục vụ
                                                trẻ nhỏ.</li>

                                            <li>Bánh nên được tiêu thụ trong vòng 24 giờ.</li>

                                            <li>Thưởng thức bánh của bạn!</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
                                    <div class="review-box">
                                        <div class="row g-4">
                                            <div class="col-xl-6">
                                                <div class="review-title">
                                                    <h4 class="fw-500">Phản hồi khách hàng</h4>
                                                </div>

                                                <div class="d-flex">
                                                    <div class="product-rating">
                                                        <ul class="rating">
                                                            <li>
                                                                <i data-feather="star" class="fill"></i>
                                                            </li>
                                                            <li>
                                                                <i data-feather="star" class="fill"></i>
                                                            </li>
                                                            <li>
                                                                <i data-feather="star" class="fill"></i>
                                                            </li>
                                                            <li>
                                                                <i data-feather="star"></i>
                                                            </li>
                                                            <li>
                                                                <i data-feather="star"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <h6 class="ms-3">4.2 Đánh giá trên 5</h6>
                                                </div>

                                                <div class="rating-box">
                                                    <ul>
                                                        <li>
                                                            <div class="rating-list">
                                                                <h5>5 Sao</h5>
                                                                <div class="progress">
                                                                    <div class="progress-bar" role="progressbar"
                                                                         style="width: 68%" aria-valuenow="100"
                                                                         aria-valuemin="0" aria-valuemax="100">
                                                                        68%
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>

                                                        <li>
                                                            <div class="rating-list">
                                                                <h5>4 Sao</h5>
                                                                <div class="progress">
                                                                    <div class="progress-bar" role="progressbar"
                                                                         style="width: 67%" aria-valuenow="100"
                                                                         aria-valuemin="0" aria-valuemax="100">
                                                                        67%
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>

                                                        <li>
                                                            <div class="rating-list">
                                                                <h5>3 Sao</h5>
                                                                <div class="progress">
                                                                    <div class="progress-bar" role="progressbar"
                                                                         style="width: 42%" aria-valuenow="100"
                                                                         aria-valuemin="0" aria-valuemax="100">
                                                                        42%
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>

                                                        <li>
                                                            <div class="rating-list">
                                                                <h5>2 Sao</h5>
                                                                <div class="progress">
                                                                    <div class="progress-bar" role="progressbar"
                                                                         style="width: 30%" aria-valuenow="100"
                                                                         aria-valuemin="0" aria-valuemax="100">
                                                                        30%
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>

                                                        <li>
                                                            <div class="rating-list">
                                                                <h5>1 Sao</h5>
                                                                <div class="progress">
                                                                    <div class="progress-bar" role="progressbar"
                                                                         style="width: 24%" aria-valuenow="100"
                                                                         aria-valuemin="0" aria-valuemax="100">
                                                                        24%
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="col-xl-6">
                                                <div class="review-title">
                                                    <h4 class="fw-500">Add a review</h4>
                                                </div>

                                                <div class="row g-4">
                                                    <div class="col-md-6">
                                                        <div class="form-floating theme-form-floating">
                                                            <input type="text" class="form-control" id="name"
                                                                   placeholder="Tên">
                                                            <label for="name">Tên của bạn</label>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-floating theme-form-floating">
                                                            <input type="email" class="form-control" id="email"
                                                                   placeholder="Email">
                                                            <label for="email">Địa chỉ Email</label>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-floating theme-form-floating">
                                                            <input type="url" class="form-control" id="website"
                                                                   placeholder="Website">
                                                            <label for="website">Trang Web</label>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-floating theme-form-floating">
                                                            <input type="url" class="form-control" id="review1"
                                                                   placeholder="Ghi đánh giá tiêu đề..">
                                                            <label for="review1">Tiêu đề đánh giá</label>
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <div class="form-floating theme-form-floating">
                                                                <textarea class="form-control"
                                                                          placeholder="Leave a comment here"
                                                                          id="floatingTextarea2"
                                                                          style="height: 150px"></textarea>
                                                            <label for="floatingTextarea2">Viết bình luận của bạn</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="review-title">
                                                    <h4 class="fw-500">Câu hỏi & trả lời của khách hàng</h4>
                                                </div>

                                                <div class="review-people">
                                                    <ul class="review-list">
                                                        <li>
                                                            <div class="people-box">
                                                                <div>
                                                                    <div class="people-image">
                                                                        <img src="<?=_WEB_ROOT?>assets/client/images/review/1.jpg"
                                                                             class="img-fluid blur-up lazyload"
                                                                             alt="">
                                                                    </div>
                                                                </div>

                                                                <div class="people-comment">
                                                                    <a class="name"
                                                                       href="">Dấu vết</a>
                                                                    <div class="date-time">
                                                                        <h6 class="text-content">Ngày 14 tháng 1 năm 2022 lúc
                                                                            12:58 sáng</h6>

                                                                        <div class="product-rating">
                                                                            <ul class="rating">
                                                                                <li>
                                                                                    <i data-feather="star"
                                                                                       class="fill"></i>
                                                                                </li>
                                                                                <li>
                                                                                    <i data-feather="star"
                                                                                       class="fill"></i>
                                                                                </li>
                                                                                <li>
                                                                                    <i data-feather="star"
                                                                                       class="fill"></i>
                                                                                </li>
                                                                                <li>
                                                                                    <i data-feather="star"></i>
                                                                                </li>
                                                                                <li>
                                                                                    <i data-feather="star"></i>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>

                                                                    <div class="reply">
                                                                        <p>Bánh quy phủ kem bánh cà rốt bánh sô cô la
                                                                            thạch mận đường-o Đan Mạch. Dragée dragée
                                                                            bánh mì nướng tootsie cuộn bánh sừng bò muffin
                                                                            bánh tôi yêu gấu gummi. Kẹo que đá
                                                                            bánh kem caramel tiramisu marshmallow
                                                                            bánh quy kẹo gậy shortbread.<a
                                                                                href="">Reply</a>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xxl-3 col-xl-4 col-lg-5 d-none d-lg-block wow fadeInUp">
                <div class="right-sidebar-box">
                    <div class="vendor-box">
                        <div class="verndor-contain">
                            <div class="vendor-image">
                                <img src="<?=_WEB_ROOT?>assets/client/images/product/vendor.png" class="blur-up lazyload" alt="">
                            </div>

                            <div class="vendor-name">
                                <h5 class="fw-500">Noodles Co.</h5>

                                <div class="product-rating mt-1">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <span>(36 Reviews)</span>
                                </div>

                            </div>
                        </div>

                        <p class="vendor-detail">Noodles & Company là một cửa hàng ăn nhanh bình dân của Mỹ
                            nhà hàng phục vụ các món mì và mì ống quốc tế và Mỹ.</p>

                        <div class="vendor-list">
                            <ul>
                                <li>
                                    <div class="address-contact">
                                        <i data-feather="map-pin"></i>
                                        <h5>Địa chỉ: <span class="text-content">1288 Franklin Avenue</span></h5>
                                    </div>
                                </li>

                                <li>
                                    <div class="address-contact">
                                        <i data-feather="headphones"></i>
                                        <h5>Contact Seller: <span class="text-content">(+1)-123-456-789</span></h5>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Trending Product -->
                    <div class="pt-25">
                        <div class="category-menu">
                            <h3>Sản phẩm thịnh hành</h3>

                            <ul class="product-list product-right-sidebar border-0 p-0">
                                <li>
                                    <div class="offer-product">

                                        <a href="product-left-thumbnail.html" class="offer-image">
                                            <img src="<?=_WEB_ROOT?>assets/client/images/vegetable/product/23.png"
                                                 class="img-fluid blur-up lazyload" alt="">
                                        </a>

                                        <div class="offer-detail">
                                            <div>
                                                <a href="product-left-thumbnail.html">
                                                    <h6 class="name">Cà ri dê cao cấp Meatigo</h6>
                                                </a>
                                                <span>450 G</span>
                                                <h6 class="price theme-color">70.000 đ</h6>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>

                    <!-- Banner Section -->
                    <div class="ratio_156 pt-25">
                        <div class="home-contain">
                            <img src="<?=_WEB_ROOT?>assets/client/images/vegetable/banner/8.jpg" class="bg-img blur-up lazyload"
                                 alt="">
                            <div class="home-detail p-top-left home-p-medium">
                                <div>
                                    <h6 class="text-yellow home-banner">Hải sản</h6>
                                    <h3 class="text-uppercase fw-normal"><span
                                            class="theme-color fw-bold">Tươi</span> Các sản phẩm</h3>
                                    <h3 class="fw-light">Mỗi giờ </h3>
                                    <button onclick="location.href = '';"
                                            class="btn btn-animation btn-md fw-bold mend-auto">Đến cửa hàng <i
                                            class="fa-solid fa-arrow-right icon"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Product Left Sidebar End -->

<!-- Releted Product Section Start -->
<section class="product-list-section section-b-space">
    <div class="container-fluid-lg">
        <div class="title">
            <h2>Những sảm phẩm tương tự</h2>
            <span class="title-leaf">
                    <svg class="icon-width">
                        <use xlink:href="<?=_WEB_ROOT?>assets/client/svg/leaf.svg#leaf"></use>
                    </svg>
                </span>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="slider-6_1 product-wrapper">
                    <div>
                        <div class="product-box-3 wow fadeInUp">
                            <div class="product-header">
                                <div class="product-image">
                                    <a href="">
                                        <img src="<?=_WEB_ROOT?>assets/client/images/cake/product/11.png"
                                             class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="product-option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                            <a href="" data-bs-toggle="modal"
                                               data-bs-target="#view">
                                                <i data-feather="eye"></i>
                                            </a>
                                        </li>

                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="">
                                                <i data-feather="refresh-cw"></i>
                                            </a>
                                        </li>

                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="" class="notifi-wishlist">
                                                <i data-feather="heart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="product-footer">
                                <div class="product-detail">
                                    <span class="span-name">Bánh</span>
                                    <a href="product-left-thumbnail.html">
                                        <h5 class="name">Bánh Quy Chocolate Chip 250 g</h5>
                                    </a>
                                    <div class="product-rating mt-2">
                                        <ul class="rating">
                                            <li>
                                                <i data-feather="star" class="fill"></i>
                                            </li>
                                            <li>
                                                <i data-feather="star" class="fill"></i>
                                            </li>
                                            <li>
                                                <i data-feather="star" class="fill"></i>
                                            </li>
                                            <li>
                                                <i data-feather="star" class="fill"></i>
                                            </li>
                                            <li>
                                                <i data-feather="star" class="fill"></i>
                                            </li>
                                        </ul>
                                        <span>(5.0)</span>
                                    </div>
                                    <h6 class="unit">500 G</h6>
                                    <h5 class="price"><span class="theme-color">10.000 đ</span> <del>12.000 đ</del>
                                    </h5>
                                    <div class="add-to-cart-box bg-white">
                                        <button class="btn btn-add-cart addcart-button"> Thêm
                                            <span class="add-icon bg-light-gray">
                                                    <i class="fa-solid fa-plus"></i>
                                                </span>
                                        </button>
                                        <div class="cart_qty qty-box">
                                            <div class="input-group bg-white">
                                                <button type="button" class="qty-left-minus bg-gray"
                                                        data-type="minus" data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text"
                                                       name="quantity" value="0">
                                                <button type="button" class="qty-right-plus bg-gray"
                                                        data-type="plus" data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Releted Product Section End -->

<!-- Footer Section Start -->
<footer class="section-t-space">
    <div class="container-fluid-lg">
        <div class="service-section">
            <div class="row g-3">
                <div class="col-12">
                    <div class="service-contain">
                        <div class="service-box">
                            <div class="service-image">
                                <img src="<?= _WEB_ROOT ?>assets/client/svg/product.svg" class="blur-up lazyload" alt="">
                            </div>

                            <div class="service-detail">
                                <h5>Mỗi sản phẩm tươi sống</h5>
                            </div>
                        </div>

                        <div class="service-box">
                            <div class="service-image">
                                <img src="<?= _WEB_ROOT ?>assets/client/svg/delivery.svg" class="blur-up lazyload" alt="">
                            </div>

                            <div class="service-detail">
                                <h5>Giao hàng miễn phí cho đơn hàng trên 50K</h5>
                            </div>
                        </div>

                        <div class="service-box">
                            <div class="service-image">
                                <img src="<?= _WEB_ROOT ?>assets/client/svg/discount.svg" class="blur-up lazyload" alt="">
                            </div>

                            <div class="service-detail">
                                <h5>Giảm giá lớn hàng ngày</h5>
                            </div>
                        </div>

                        <div class="service-box">
                            <div class="service-image">
                                <img src="<?= _WEB_ROOT ?>assets/client/svg/market.svg" class="blur-up lazyload" alt="">
                            </div>

                            <div class="service-detail">
                                <h5>Giá tốt nhất trên thị trường</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-footer section-b-space section-t-space">
            <div class="row g-md-4 g-3">
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="footer-logo">
                        <div class="theme-logo">
                            <a href="index.html">
                                <img src="<?= _WEB_ROOT ?>assets/client/images/logo/1.png" class="blur-up lazyload" alt="">
                            </a>
                        </div>

                        <div class="footer-logo-contain">
                            <p>Chúng tôi là một quán bar thân thiện phục vụ nhiều loại cocktail, rượu vang và bia. Quán bar của chúng tôi là nơi hoàn hảo cho một cặp đôi</p>

                            <ul class="address">
                                <li>
                                    <i data-feather="home"></i>
                                    <a href="">1418 Riverwood Drive, CA 96052, Hoa Kỳ</a>
                                </li>
                                <li>
                                    <i data-feather="mail"></i>
                                    <a href="">support@fastkart.com</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                    <div class="footer-title">
                        <h4>Thể loại</h4>
                    </div>

                    <div class="footer-contain">
                        <ul>
                            <li>
                                <a href="/" class="text-content">Rau & Trái cây</a>
                            </li>
                            <li>
                                <a href="/" class="text-content">Đồ uống</a>
                            </li>
                            <li>
                                <a href="/" class="text-content">Thịt & Hải Sản</a>
                            </li>
                            <li>
                                <a href="/" class="text-content">Thực phẩm đông lạnh</a>
                            </li>
                            <li>
                                <a href="/" class="text-content">Bánh quy & đồ ăn nhẹ</a>
                            </li>
                            <li>
                                <a href="/" class="text-content">Tạp hóa & Mặt hàng chủ lực</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-xl col-lg-2 col-sm-3">
                    <div class="footer-title">
                        <h4>Liên kết hữu ích</h4>
                    </div>

                    <div class="footer-contain">
                        <ul>
                            <li>
                                <a href="index.html" class="text-content">Trang chủ</a>
                            </li>
                            <li>
                                <a href="/" class="text-content">Cửa hàng</a>
                            </li>
                            <li>
                                <a href="about-us.html" class="text-content">Về chúng tôi</a>
                            </li>
                            <li>
                                <a href="blog-list.html" class="text-content">Blog</a>
                            </li>
                            <li>
                                <a href="contact-us.html" class="text-content">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-xl-2 col-sm-3">
                    <div class="footer-title">
                        <h4>Trung tâm trợ giúp</h4>
                    </div>

                    <div class="footer-contain">
                        <ul>
                            <li>
                                <a href="" class="text-content">Đơn hàng của bạn</a>
                            </li>
                            <li>
                                <a href="" class="text-content">Theo dõi thứ tự</a>
                            </li>
                            <li>
                                <a href="" class="text-content">Theo dõi thứ tự</a>
                            </li>
                            <li>
                                <a href="" class="text-content">Danh sách mong muốn của bạn</a>
                            </li>
                            <li>
                                <a href="" class="text-content">Tìm kiếm</a>
                            </li>
                            <li>
                                <a href="" class="text-content">FAQ</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="footer-title">
                        <h4>Liên hệ chúng tôi</h4>
                    </div>

                    <div class="footer-contact">
                        <ul>
                            <li>
                                <div class="footer-number">
                                    <i data-feather="phone"></i>
                                    <div class="contact-number">
                                        <h6 class="text-content">Hotline 24/7 :</h6>
                                        <h5>+91 888 104 2340</h5>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="footer-number">
                                    <i data-feather="mail"></i>
                                    <div class="contact-number">
                                        <h6 class="text-content">Địa chỉ email :</h6>
                                        <h5>fastkart@hotmail.com</h5>
                                    </div>
                                </div>
                            </li>

                            <li class="social-app mb-0">
                                <h5 class="mb-2 text-content">Tải ứng dụng :</h5>
                                <ul>
                                    <li class="mb-0">
                                        <a href="https://play.google.com/store/apps" target="_blank">
                                            <img src="<?= _WEB_ROOT ?>assets/client/images/playstore.svg" class="blur-up lazyload" alt="">
                                        </a>
                                    </li>
                                    <li class="mb-0">
                                        <a href="https://www.apple.com/in/app-store/" target="_blank">
                                            <img src="<?= _WEB_ROOT ?>assets/client/images/appstore.svg" class="blur-up lazyload" alt="">
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="sub-footer section-small-space">
            <div class="reserve">
                <h6 class="text-content">©2022 Fastkart All quyền được bảo lưu</h6>
            </div>

            <div class="payment">
                <img src="../assets/images/payment/1.png" class="blur-up lazyload" alt="">
            </div>

            <div class="social-link">
                <h6 class="text-content">Giữ liên lạc :</h6>
                <ul>
                    <li>
                        <a href="https://www.facebook.com/" target="_blank">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://twitter.com/" target="_blank">
                            <i class="fa-brands fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/" target="_blank">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://in.pinterest.com/" target="_blank">
                            <i class="fa-brands fa-pinterest-p"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->

<!-- Quick View Modal Box Start -->
<div class="modal fade theme-modal view-modal" id="view" tabindex="-1" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl modal-fullscreen-sm-down">
        <div class="modal-content">
            <div class="modal-header p-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="row g-sm-4 g-2">
                    <div class="col-lg-6">
                        <div class="slider-image">
                            <img src="<?=_WEB_ROOT?>assets/client/images/product/category/1.jpg" class="img-fluid blur-up lazyload"
                                 alt="">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="right-sidebar-modal">
                            <h4 class="title-name">Peanut Butter Bite Premium Butter Cookies 600 g</h4>
                            <h4 class="price">$36.99</h4>
                            <div class="product-rating">
                                <ul class="rating">
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star"></i>
                                    </li>
                                </ul>
                                <span class="ms-2">8 Reviews</span>
                                <span class="ms-2 text-danger">6 sold in last 16 hours</span>
                            </div>

                            <div class="product-detail">
                                <h4>Product Details :</h4>
                                <p>Candy canes sugar plum tart cotton candy chupa chups sugar plum chocolate I love.
                                    Caramels marshmallow icing dessert candy canes I love soufflé I love toffee.
                                    Marshmallow pie sweet sweet roll sesame snaps tiramisu jelly bear claw. Bonbon
                                    muffin I love carrot cake sugar plum dessert bonbon.</p>
                            </div>

                            <ul class="brand-list">
                                <li>
                                    <div class="brand-box">
                                        <h5>Brand Name:</h5>
                                        <h6>Black Forest</h6>
                                    </div>
                                </li>

                                <li>
                                    <div class="brand-box">
                                        <h5>Product Code:</h5>
                                        <h6>W0690034</h6>
                                    </div>
                                </li>

                                <li>
                                    <div class="brand-box">
                                        <h5>Product Type:</h5>
                                        <h6>White Cream Cake</h6>
                                    </div>
                                </li>
                            </ul>

                            <div class="select-size">
                                <h4>Cake Size :</h4>
                                <select class="form-select select-form-size">
                                    <option selected>Select Size</option>
                                    <option value="1.2">1/2 KG</option>
                                    <option value="0">1 KG</option>
                                    <option value="1.5">1/5 KG</option>
                                    <option value="red">Red Roses</option>
                                    <option value="pink">With Pink Roses</option>
                                </select>
                            </div>

                            <div class="modal-button">
                                <button onclick="location.href = 'cart.html';"
                                        class="btn btn-md add-cart-button icon">Add
                                    To Cart</button>
                                <button onclick="location.href = 'product-left.html';"
                                        class="btn theme-bg-color view-button icon text-white fw-bold btn-md">
                                    View More Details</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Quick View Modal Box End -->

<!-- Location Modal Start -->
<div class="modal location-modal fade theme-modal" id="locationModal" tabindex="-1"
     aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Choose your Delivery Location</h5>
                <p class="mt-1 text-content">Enter your address and we will specify the offer for your area.</p>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="location-list">
                    <div class="search-input">
                        <input type="search" class="form-control" placeholder="Search Your Area">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>

                    <div class="disabled-box">
                        <h6>Select a Location</h6>
                    </div>

                    <ul class="location-select custom-height">
                        <li>
                            <a href="">
                                <h6>Alabama</h6>
                                <span>Min: $130</span>
                            </a>
                        </li>

                        <li>
                            <a href="">
                                <h6>Arizona</h6>
                                <span>Min: $150</span>
                            </a>
                        </li>

                        <li>
                            <a href="">
                                <h6>California</h6>
                                <span>Min: $110</span>
                            </a>
                        </li>

                        <li>
                            <a href="">
                                <h6>Colorado</h6>
                                <span>Min: $140</span>
                            </a>
                        </li>

                        <li>
                            <a href="">
                                <h6>Florida</h6>
                                <span>Min: $160</span>
                            </a>
                        </li>

                        <li>
                            <a href="">
                                <h6>Georgia</h6>
                                <span>Min: $120</span>
                            </a>
                        </li>

                        <li>
                            <a href="">
                                <h6>Kansas</h6>
                                <span>Min: $170</span>
                            </a>
                        </li>

                        <li>
                            <a href="">
                                <h6>Minnesota</h6>
                                <span>Min: $120</span>
                            </a>
                        </li>

                        <li>
                            <a href="">
                                <h6>New York</h6>
                                <span>Min: $110</span>
                            </a>
                        </li>

                        <li>
                            <a href="">
                                <h6>Washington</h6>
                                <span>Min: $130</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Location Modal End -->

<!-- Deal Box Modal Start -->
<div class="modal fade theme-modal deal-modal" id="deal-box" tabindex="-1" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
        <div class="modal-content">
            <div class="modal-header">
                <div>
                    <h5 class="modal-title w-100" id="deal_today">Deal Today</h5>
                    <p class="mt-1 text-content">Recommended deals for you.</p>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="deal-offer-box">
                    <ul class="deal-offer-list">
                        <li class="list-1">
                            <div class="deal-offer-contain">
                                <a href="shop-left-sidebar.html" class="deal-image">
                                    <img src="<?=_WEB_ROOT?>assets/client/images/vegetable/product/10.png" class="blur-up lazyload"
                                         alt="">
                                </a>

                                <a href="shop-left-sidebar.html" class="deal-contain">
                                    <h5>Blended Instant Coffee 50 g Buy 1 Get 1 Free</h5>
                                    <h6>$52.57 <del>57.62</del> <span>500 G</span></h6>
                                </a>
                            </div>
                        </li>

                        <li class="list-2">
                            <div class="deal-offer-contain">
                                <a href="shop-left-sidebar.html" class="deal-image">
                                    <img src="<?=_WEB_ROOT?>assets/client/images/vegetable/product/11.png" class="blur-up lazyload"
                                         alt="">
                                </a>

                                <a href="shop-left-sidebar.html" class="deal-contain">
                                    <h5>Blended Instant Coffee 50 g Buy 1 Get 1 Free</h5>
                                    <h6>$52.57 <del>57.62</del> <span>500 G</span></h6>
                                </a>
                            </div>
                        </li>

                        <li class="list-3">
                            <div class="deal-offer-contain">
                                <a href="shop-left-sidebar.html" class="deal-image">
                                    <img src="<?=_WEB_ROOT?>assets/client/images/vegetable/product/12.png" class="blur-up lazyload"
                                         alt="">
                                </a>

                                <a href="shop-left-sidebar.html" class="deal-contain">
                                    <h5>Blended Instant Coffee 50 g Buy 1 Get 1 Free</h5>
                                    <h6>$52.57 <del>57.62</del> <span>500 G</span></h6>
                                </a>
                            </div>
                        </li>

                        <li class="list-1">
                            <div class="deal-offer-contain">
                                <a href="shop-left-sidebar.html" class="deal-image">
                                    <img src="<?=_WEB_ROOT?>assets/client/images/vegetable/product/13.png" class="blur-up lazyload"
                                         alt="">
                                </a>

                                <a href="shop-left-sidebar.html" class="deal-contain">
                                    <h5>Blended Instant Coffee 50 g Buy 1 Get 1 Free</h5>
                                    <h6>$52.57 <del>57.62</del> <span>500 G</span></h6>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Deal Box Modal End -->

<!-- Add to cart Modal Start -->
<div class="add-cart-box">
    <div class="add-iamge">
        <img src="<?=_WEB_ROOT?>assets/client/images/cake/pro/1.jpg" class="img-fluid" alt="">
    </div>

    <div class="add-contain">
        <h6>Added to Cart</h6>
    </div>
</div>
<!-- Add to cart Modal End -->

<!-- Tap to top start -->
<div class="theme-option theme-option-2">
    <div class="setting-box">
        <button class="btn setting-button">
            <i class="fa-solid fa-gear"></i>
        </button>

        <div class="theme-setting-2">
            <div class="theme-box">
                <ul>
                    <li>
                        <div class="setting-name">
                            <h4>Color</h4>
                        </div>
                        <div class="theme-setting-button color-picker">
                            <form class="form-control">
                                <label for="colorPick" class="form-label mb-0">Theme Color</label>
                                <input type="color" class="form-control form-control-color" id="colorPick"
                                       value="#0da487" title="Choose your color">
                            </form>
                        </div>
                    </li>

                    <li>
                        <div class="setting-name">
                            <h4>Dark</h4>
                        </div>
                        <div class="theme-setting-button">
                            <button class="btn btn-2 outline" id="darkButton">Dark</button>
                            <button class="btn btn-2 unline" id="lightButton">Light</button>
                        </div>
                    </li>

                    <li>
                        <div class="setting-name">
                            <h4>RTL</h4>
                        </div>
                        <div class="theme-setting-button rtl">
                            <button class="btn btn-2 rtl-unline">LTR</button>
                            <button class="btn btn-2 rtl-outline">RTL</button>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="back-to-top">
        <a id="back-to-top" href="#">
            <i class="fas fa-chevron-up"></i>
        </a>
    </div>
</div>
<!-- Tap to top end -->

<!-- Sticky Cart Box Start -->
<div class="sticky-bottom-cart">
    <div class="container-fluid-lg">
        <div class="row">
            <div class="col-12">
                <div class="cart-content">
                    <div class="product-image">
                        <img src="<?=_WEB_ROOT?>assets/client/images/product/category/1.jpg" class="img-fluid blur-up lazyload"
                             alt="">
                        <div class="content">
                            <h5>Creamy Chocolate Cake</h5>
                            <h6>$32.96<del class="text-danger">$96.00</del><span>55% off</span></h6>
                        </div>
                    </div>
                    <div class="selection-section">
                        <div class="form-group mb-0">
                            <select id="input-state" class="form-control form-select">
                                <option selected disabled>Choose Weight...</option>
                                <option>1/2 KG</option>
                                <option>1 KG</option>
                                <option>1.5 KG</option>
                            </select>
                        </div>
                        <div class="cart_qty qty-box product-qty m-0">
                            <div class="input-group h-100">
                                <button type="button" class="qty-left-minus" data-type="minus" data-field="">
                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                </button>
                                <input class="form-control input-number qty-input" type="text" name="quantity"
                                       value="1">
                                <button type="button" class="qty-right-plus" data-type="plus" data-field="">
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="add-btn">
                        <a class="btn theme-bg-color text-white wishlist-btn" href="wishlist.html"><i
                                class="fa fa-bookmark"></i> Wishlist</a>
                        <a class="btn theme-bg-color text-white" href="cart.html"><i
                                class="fas fa-shopping-cart"></i> Add To Cart</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
