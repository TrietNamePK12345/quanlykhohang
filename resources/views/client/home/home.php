<body class="bg-effect">
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
                                            <?php if(\App\Core\Session::getFlash('user')): ?>
                                                <li class="product-box-contain">
                                                    <a href="trang-ca-nhan"><?= \App\Core\Session::getFlash('user')['name'] ?></a>
                                                </li>

                                                <li class="product-box-contain">
                                                    <a href="/dang-xuat">Đăng xuất</a>
                                                </li>

                                            <?php else: ?>
                                            <li class="product-box-contain">
                                                <a href="dang-nhap">Đăng nhập</a>
                                            </li>

                                            <li class="product-box-contain">
                                                <a href="dang-ki">Đăng kí</a>
                                            </li>

                                            <li class="product-box-contain">
                                                <a href="quen-mat-khau">Quên mật khẩu</a>
                                            </li>
                                            <?php endif ?>
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

<!-- Home Section Start -->
<section class="home-section pt-2">
    <div class="container-fluid-lg">
        <div class="row g-4">
            <div class="col-xl-8 ratio_65">
                <div class="home-contain h-100">
                    <div class="h-100">
                        <img src="<?= _WEB_ROOT ?>assets/client/images/vegetable/banner/1.jpg" class="bg-img blur-up lazyload" alt="">
                    </div>
                    <div class="home-detail p-center-left w-75">
                        <div>
                            <h6>Ưu đãi <span>Giảm giá 30%</span></h6>
                            <h1 class="text-uppercase">Ở nhà và cung cấp nhu cầu <span class="daily">hàng ngày
                                        của bạn</span></h1>
                            <p class="w-75 d-none d-sm-block">Rau củ chứa nhiều vitamin và khoáng chất tốt cho sức khỏe.</p>
                            <button onclick="location.href = '/';" class="btn btn-animation mt-xxl-4 mt-2 home-button mend-auto">Đến cửa hàng <i class="fa-solid fa-right-long icon"></i></button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 ratio_65">
                <div class="row g-4">
                    <div class="col-xl-12 col-md-6">
                        <div class="home-contain">
                            <img src="<?= _WEB_ROOT ?>assets/client/images/vegetable/banner/2.jpg" class="bg-img blur-up lazyload" alt="">
                            <div class="home-detail p-center-left home-p-sm w-75">
                                <div>
                                    <h2 class="mt-0 text-danger">Giảm giá <span class="discount text-title">45%</span>
                                    </h2>
                                    <h3 class="theme-color">Bộ sưu tập hạt</h3>
                                    <p class="w-75">Chúng tôi cung cấp rau và trái cây hữu cơ</p>
                                    <a href="/" class="shop-button">Đến cửa hàng <i class="fa-solid fa-right-long"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-12 col-md-6">
                        <div class="home-contain">
                            <img src="<?= _WEB_ROOT ?>assets/client/images/vegetable/banner/3.jpg" class="bg-img blur-up lazyload" alt="">
                            <div class="home-detail p-center-left home-p-sm w-75">
                                <div>
                                    <h3 class="mt-0 theme-color fw-bold">Thực phẩm tốt cho sức khỏe</h3>
                                    <h4 class="text-danger">Thị trường hữu cơ</h4>
                                    <p class="organic">Bắt đầu mua sắm hàng ngày của bạn với một số thực phẩm hữu cơ</p>
                                    <a href="/" class="shop-button">Đến cửa hàng  <i class="fa-solid fa-right-long"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Home Section End -->

<!-- Banner Section Start -->
<section class="banner-section ratio_60 wow fadeInUp">
    <div class="container-fluid-lg">
        <div class="banner-slider">
            <div>
                <div class="banner-contain hover-effect">
                    <img src="<?= _WEB_ROOT ?>assets/client/images/vegetable/banner/4.jpg" class="bg-img blur-up lazyload" alt="">
                    <div class="banner-details">
                        <div class="banner-box">
                            <h6 class="text-danger">Giảm gi 5%</h6>
                            <h5>Ưu đãi hấp dẫn cho các mặt hàng mới</h5>
                            <h6 class="text-content">Nhu yếu phẩm hàng ngày Trứng & Sữa</h6>
                        </div>
                        <a href="/" class="banner-button text-white">Đến cửa hàng  <i class="fa-solid fa-right-long ms-2"></i></a>
                    </div>
                </div>
            </div>

            <div>
                <div class="banner-contain hover-effect">
                    <img src="<?= _WEB_ROOT ?>assets/client/images/vegetable/banner/5.jpg" class="bg-img blur-up lazyload" alt="">
                    <div class="banner-details">
                        <div class="banner-box">
                            <h6 class="text-danger">Giảm gi 5%</h6>
                            <h5>Mua nhiều hơn tiết kiệm nhiều hơn</h5>
                            <h6 class="text-content">Rau sạch</h6>
                        </div>
                        <a href="/" class="banner-button text-white">Đến cửa hàng  <i class="fa-solid fa-right-long ms-2"></i></a>
                    </div>
                </div>
            </div>

            <div>
                <div class="banner-contain hover-effect">
                    <img src="<?= _WEB_ROOT ?>assets/client/images/vegetable/banner/6.jpg" class="bg-img blur-up lazyload" alt="">
                    <div class="banner-details">
                        <div class="banner-box">
                            <h6 class="text-danger">Giảm gi 5%</h6>
                            <h5>Thịt hữu cơ đã chế biến</h5>
                            <h6 class="text-content">Giao đến nhà bạn</h6>
                        </div>
                        <a href="/" class="banner-button text-white">Đến cửa hàng  <i class="fa-solid fa-right-long ms-2"></i></a>
                    </div>
                </div>
            </div>

            <div>
                <div class="banner-contain hover-effect">
                    <img src="<?= _WEB_ROOT ?>assets/client/images/vegetable/banner/7.jpg" class="bg-img blur-up lazyload" alt="">
                    <div class="banner-details">
                        <div class="banner-box">
                            <h6 class="text-danger">Giảm gi 5%</h6>
                            <h5>Mua nhiều hơn tiết kiệm nhiều hơn</h5>
                            <h6 class="text-content">Quả hạch & Đồ ăn nhẹ</h6>
                        </div>
                        <a href="/" class="banner-button text-white">Đến cửa hàng  <i class="fa-solid fa-right-long ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section End -->

<!-- Product Section Start -->
<section class="product-section">
    <div class="container-fluid-lg">
        <div class="row g-sm-4 g-3">
            <div class="col-xxl-3 col-xl-4 d-none d-xl-block">
                <div class="p-sticky">
                    <div class="category-menu">
                        <h3>Loại sản phẩm</h3>
                        <ul>
                            <li>
                                <div class="category-list">
                                    <img src="<?= _WEB_ROOT ?>assets/client/svg/1/vegetable.svg" class="blur-up lazyload" alt="">
                                    <h5>
                                        <a href="/">Rau & Trái cây</a>
                                    </h5>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="ratio_156 section-t-space">
                        <div class="home-contain hover-effect">
                            <img src="<?= _WEB_ROOT ?>assets/client/images/vegetable/banner/8.jpg" class="bg-img blur-up lazyload" alt="">
                            <div class="home-detail p-top-left home-p-medium">
                                <div>
                                    <h6 class="text-yellow home-banner">Hải sản</h6>
                                    <h3 class="text-uppercase fw-normal"><span class="theme-color fw-bold">Tươi</span> Các sản phẩm</h3>
                                    <h3 class="fw-light">mỗi tiếng</h3>
                                    <button onclick="location.href = '/';" class="btn btn-animation btn-md mend-auto">Đến cửa hàng  <i class="fa-solid fa-arrow-right icon"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="ratio_medium section-t-space">
                        <div class="home-contain hover-effect">
                            <img src="<?= _WEB_ROOT ?>assets/client/images/vegetable/banner/11.jpg" class="img-fluid blur-up lazyload" alt="">
                            <div class="home-detail p-top-left home-p-medium">
                                <div>
                                    <h4 class="text-yellow text-exo home-banner">Hữu cơ</h4>
                                    <h2 class="text-uppercase fw-normal mb-0 text-russo theme-color">Tươi</h2>
                                    <h2 class="text-uppercase fw-normal text-title">Rau</h2>
                                    <p class="mb-3">Siêu ưu đãi giảm giá 50%</p>
                                    <button onclick="location.href = '/';" class="btn btn-animation btn-md mend-auto">Đến cửa hàng  <i class="fa-solid fa-arrow-right icon"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="section-t-space">
                        <div class="category-menu">
                            <h3>Sản phẩm thịnh hành</h3>

                            <ul class="product-list border-0 p-0 d-block">
                                <li>
                                    <div class="offer-product">
                                        <a href="product-left-thumbnail.html" class="offer-image">
                                            <img src="<?= _WEB_ROOT ?>assets/client/images/vegetable/product/23.png" class="blur-up lazyload" alt="">
                                        </a>

                                        <div class="offer-detail">
                                            <div>
                                                <a href="product-left-thumbnail.html" class="text-title">
                                                    <h6 class="name">Cà ri dê cao cấp Meatigo</h6>
                                                </a>
                                                <span>450 g</span>
                                                <h6 class="price theme-color">350.000 đ</h6>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="offer-product">
                                        <a href="product-left-thumbnail.html" class="offer-image">
                                            <img src="<?= _WEB_ROOT ?>assets/client/images/vegetable/product/24.png" class="blur-up lazyload" alt="">
                                        </a>

                                        <div class="offer-detail">
                                            <div>
                                                <a href="product-left-thumbnail.html" class="text-title">
                                                    <h6 class="name">Ngày Medjoul Premium nhập khẩu</h6>
                                                </a>
                                                <span>450 G</span>
                                                <h6 class="price theme-color">300.00 đ</h6>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="offer-product">
                                        <a href="product-left-thumbnail.html" class="offer-image">
                                            <img src="<?= _WEB_ROOT ?>assets/client/images/vegetable/product/25.png" class="blur-up lazyload" alt="">
                                        </a>

                                        <div class="offer-detail">
                                            <div>
                                                <a href="product-left-thumbnail.html" class="text-title">
                                                    <h6 class="name">Hạt óc chó Good Life</h6>
                                                </a>
                                                <span>200 G</span>
                                                <h6 class="price theme-color">40.000 đ</h6>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="mb-0">
                                    <div class="offer-product">
                                        <a href="product-left-thumbnail.html" class="offer-image">
                                            <img src="<?= _WEB_ROOT ?>assets/client/images/vegetable/product/26.png" class="blur-up lazyload" alt="">
                                        </a>

                                        <div class="offer-detail">
                                            <div>
                                                <a href="product-left-thumbnail.html" class="text-title">
                                                    <h6 class="name">Tảo Đỏ Nhập Khẩu</h6>
                                                </a>
                                                <span>1 KG</span>
                                                <h6 class="price theme-color">$ 100.000 đ</h6>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="section-t-space">
                        <div class="category-menu">
                            <h3>Nhận xét của khách hàng</h3>

                            <div class="review-box">
                                <div class="review-contain">
                                    <h5 class="w-75">Chúng tôi quan tâm đến trải nghiệm của khách hàng</h5>
                                    <p>Trong xuất bản và thiết kế đồ họa, Là một văn bản giữ chỗ thường được sử dụng
                                        được sử dụng để thể hiện hình thức trực quan của một tài liệu hoặc một kiểu chữ mà không có
                                        dựa vào nội dung có ý nghĩa.</p>
                                </div>

                                <div class="review-profile">
                                    <div class="review-image">
                                        <img src="<?= _WEB_ROOT ?>assets/client/images/vegetable/review/1.jpg" class="img-fluid blur-up lazyload" alt="">
                                    </div>
                                    <div class="review-detail">
                                        <h5>Chị đẹp</h5>
                                        <h6>Quản lí kinh tế</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xxl-9 col-xl-8">
                <div class="title title-flex">
                    <div>
                        <h2>Tiết kiệm hàng đầu ngay hôm nay</h2>
                        <span class="title-leaf">
                                <svg class="icon-width">
                                    <use xlink:href="../assets/svg/leaf.svg#leaf"></use>
                                </svg>
                            </span>
                        <p>Đừng bỏ lỡ cơ hội giảm giá đặc biệt chỉ trong tuần này.</p>
                    </div>
                    <div class="timing-box">
                        <div class="timing">
                            <i data-feather="clock"></i>
                            <h6 class="name">Hết hạn vào :</h6>
                            <div class="time" id="clockdiv-1" data-hours="1" data-minutes="2" data-seconds="3">
                                <ul>
                                    <li>
                                        <div class="counter">
                                            <div class="days">
                                                <h6></h6>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="counter">
                                            <div class="hours">
                                                <h6></h6>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="counter">
                                            <div class="minutes">
                                                <h6></h6>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="counter">
                                            <div class="seconds">
                                                <h6></h6>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="section-b-space">
                    <div class="product-border border-row overflow-hidden">
                        <div class="product-box-slider no-arrow">
                            @foreach($listProduct as $lPro)
                            @if($lPro['status'] == 'Ngừng bán')

                            @elseif($lPro['status'] == 'Đang bán')
                            <div>
                                <div class="row m-0">
                                    <div class="col-12 px-0">
                                        <div class="product-box">
                                            <div class="product-image">
                                                <a href="san-pham-chi-tiet">
                                                    <img src="<?= _WEB_ROOT ?>{{$lPro['image']}}" class="img-fluid blur-up lazyload" alt="">
                                                </a>
                                            </div>

                                            <div class="product-detail">
                                                <a href="san-pham-chi-tiet">
                                                    <h6 class="name">{{$lPro['name']}}</h6>
                                                </a>

                                                <h5 class="sold text-content">
                                                    <span class="theme-color price">{{number_format($lPro['selling_price'])}} đ</span>
                                                    <del>{{number_format($lPro['orginPrice'])}} đ</del>
                                                </h5>

                                                <div class="add-to-cart-box">
                                                    <button class="btn btn-add-cart add cart-button">Thêm
                                                        <span class="add-icon">
                                                                <i class="fa-solid fa-plus"></i>
                                                            </span>
                                                    </button>
                                                    <div class="cart_qty qty-box">
                                                        <div class="input-group">
                                                            <button type="button" class="qty-left-minus" data-type="minus" data-field="">
                                                                <i class="fa fa-minus" aria-hidden="true"></i>
                                                            </button>
                                                            <input class="form-control input-number qty-input" type="text" name="quantity" value="0">
                                                            <button type="button" class="qty-right-plus" data-type="plus" data-field="">
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
                            @endif
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="title">
                    <h2>Danh mục sản phẩm</h2>
                    <span class="title-leaf">
                            <svg class="icon-width">

                            </svg>
                        </span>
                    <p>Danh mục hàng đầu của tuần</p>
                </div>

                <div class="category-slider-2 product-wrapper no-arrow">
                    <div>
                        <a href="/" class="category-box category-dark">
                            <div>
                                <img src="<?= _WEB_ROOT ?>assets/client/svg/1/vegetable.svg" class="blur-up lazyload" alt="">
                                <h5>Rau & Trái cây</h5>
                            </div>
                        </a>
                    </div>

                    <div>
                        <a href="/" class="category-box category-dark">
                            <div>
                                <img src="<?= _WEB_ROOT ?>assets/client/svg/1/cup.svg" class="blur-up lazyload" alt="">
                                <h5>Đồ uống</h5>
                            </div>
                        </a>
                    </div>

                    <div>
                        <a href="/" class="category-box category-dark">
                            <div>
                                <img src="<?= _WEB_ROOT ?>assets/client/svg/1/meats.svg" class="blur-up lazyload" alt="">
                                <h5>Thịt & Hải Sản</h5>
                            </div>
                        </a>
                    </div>

                    <div>
                        <a href="/" class="category-box category-dark">
                            <div>
                                <img src="<?= _WEB_ROOT ?>assets/client/svg/1/breakfast.svg" class="blur-up lazyload" alt="">
                                <h5>Breakfast</h5>
                            </div>
                        </a>
                    </div>

                    <div>
                        <a href="/" class="category-box category-dark">
                            <div>
                                <img src="<?= _WEB_ROOT ?>assets/client/svg/1/frozen.svg" class="blur-up lazyload" alt="">
                                <h5>Thực phẩm đông lạnh</h5>
                            </div>
                        </a>
                    </div>

                    <div>
                        <a href="/" class="category-box category-dark">
                            <div>
                                <img src="<?= _WEB_ROOT ?>assets/client/svg/1/milk.svg" class="blur-up lazyload" alt="">
                                <h5>Sữa & Sản phẩm từ sữa</h5>
                            </div>
                        </a>
                    </div>

                    <div>
                        <a href="/" class="category-box category-dark">
                            <div>
                                <img src="<?= _WEB_ROOT ?>assets/client/svg/1/pet.svg" class="blur-up lazyload" alt="">
                                <h5>Thức ăn cho thú cưng</h5>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="section-t-space section-b-space">
                    <div class="row g-md-4 g-3">
                        <div class="col-md-6">
                            <div class="banner-contain hover-effect">
                                <img src="<?= _WEB_ROOT ?>assets/client/images/vegetable/banner/9.jpg" class="bg-img blur-up lazyload" alt="">
                                <div class="banner-details p-center-left p-4">
                                    <div>
                                        <h3 class="text-exo">50% offer</h3>
                                        <h4 class="text-russo fw-normal theme-color mb-2">Nấm thử nghiệm</h4>
                                        <button onclick="location.href = '/';" class="btn btn-animation btn-sm mend-auto">Đến cửa hàng  <i class="fa-solid fa-arrow-right icon"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="banner-contain hover-effect">
                                <img src="<?= _WEB_ROOT ?>assets/client/images/vegetable/banner/10.jpg" class="bg-img blur-up lazyload" alt="">
                                <div class="banner-details p-center-left p-4">
                                    <div>
                                        <h3 class="text-exo">50% offer</h3>
                                        <h4 class="text-russo fw-normal theme-color mb-2">Thịt tươi sống</h4>
                                        <button onclick="location.href = '/';" class="btn btn-animation btn-sm mend-auto">Đến cửa hàng  <i class="fa-solid fa-arrow-right icon"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="title d-block">
                    <h2>Tủ đựng thức ăn</h2>
                    <span class="title-leaf">
                            <svg class="icon-width">
                                <use xlink:href="../assets/svg/leaf.svg#leaf"></use>
                            </svg>
                        </span>
                    <p>Trợ lý ảo thu thập các sản phẩm từ danh sách của bạn</p>
                </div>

                <div class="product-border overflow-hidden wow fadeInUp">
                    <div class="product-box-slider no-arrow">
                        <div>
                            <div class="row m-0">
                                <div class="col-12 px-0">
                                    <div class="product-box">
                                        <div class="product-image">
                                            <a href="product-left-thumbnail.html">
                                                <img src="<?= _WEB_ROOT ?>assets/client/images/vegetable/product/1.png" class="img-fluid blur-up lazyload" alt="">
                                            </a>
                                            <ul class="product-option">
                                                <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                    <a href="" data-bs-toggle="modal" data-bs-target="#view">
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
                                        <div class="product-detail">
                                            <a href="product-left-thumbnail.html">
                                                <h6 class="name h-100">Bột sô cô la</h6>
                                            </a>

                                            <h5 class="sold text-content">
                                                <span class="theme-color price">26.000 đ</span>
                                                <del>30.000 đ</del>
                                            </h5>

                                            <div class="product-rating mt-sm-2 mt-1">
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

                                                <h6 class="theme-color">In Stock</h6>
                                            </div>

                                            <div class="add-to-cart-box">
                                                <button class="btn btn-add-cart addcart-button">Thêm
                                                    <span class="add-icon">
                                                            <i class="fa-solid fa-plus"></i>
                                                        </span>
                                                </button>
                                                <div class="cart_qty qty-box">
                                                    <div class="input-group">
                                                        <button type="button" class="qty-left-minus" data-type="minus" data-field="">
                                                            <i class="fa fa-minus" aria-hidden="true"></i>
                                                        </button>
                                                        <input class="form-control input-number qty-input" type="text" name="quantity" value="0">
                                                        <button type="button" class="qty-right-plus" data-type="plus" data-field="">
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

                <div class="section-t-space">
                    <div class="banner-contain">
                        <img src="<?= _WEB_ROOT ?>assets/client/images/vegetable/banner/15.jpg" class="bg-img blur-up lazyload" alt="">
                        <div class="banner-details p-center p-4 text-white text-center">
                            <div>
                                <h3 class="lh-base fw-bold offer-text">Nhận hoàn tiền $3! Đơn hàng tối thiểu $30</h3>
                                <h6 class="coupon-code">Mã sử ​​dụng : GROCERY1920</h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="section-t-space section-b-space">
                    <div class="row g-md-4 g-3">
                        <div class="col-xxl-8 col-xl-12 col-md-7">
                            <div class="banner-contain hover-effect">
                                <img src="<?= _WEB_ROOT ?>assets/client/images/vegetable/banner/12.jpg" class="bg-img blur-up lazyload" alt="">
                                <div class="banner-details p-center-left p-4">
                                    <div>
                                        <h2 class="text-kaushan fw-normal theme-color">Hãy sẵn sàng</h2>
                                        <h3 class="mt-2 mb-3">HÃY THAM GIA NGÀY!</h3>
                                        <p class="text-content banner-text">Trong lĩnh vực xuất bản và thiết kế đồ họa, Lorem
                                            ipsum là một văn bản giữ chỗ thường được sử dụng để minh họa.</p>
                                        <button onclick="location.href = '/';" class="btn btn-animation btn-sm mend-auto">Đến cửa hàng  <i class="fa-solid fa-arrow-right icon"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-4 col-xl-12 col-md-5">
                            <a href="/" class="banner-contain hover-effect h-100">
                                <img src="<?= _WEB_ROOT ?>assets/client/images/vegetable/banner/13.jpg" class="bg-img blur-up lazyload" alt="">
                                <div class="banner-details p-center-left p-4 h-100">
                                    <div>
                                        <h2 class="text-kaushan fw-normal text-danger">20% Off</h2>
                                        <h3 class="mt-2 mb-2 theme-color">TÓM TẮT</h3>
                                        <h3 class="fw-normal product-name text-title">Sản phẩm</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="title d-block">
                    <div>
                        <h2>Người bán hàng tốt nhất của chúng tôi</h2>
                        <span class="title-leaf">
                                <svg class="icon-width">
                                    <use xlink:href="../assets/svg/leaf.svg#leaf"></use>
                                </svg>
                            </span>
                        <p>Trợ lý ảo thu thập các sản phẩm từ danh sách của bạn</p>
                    </div>
                </div>

                <div class="best-selling-slider product-wrapper wow fadeInUp">
                    <div>
                        <ul class="product-list">
                            <li>
                                <div class="offer-product">
                                    <a href="product-left-thumbnail.html" class="offer-image">
                                        <img src="<?= _WEB_ROOT ?>assets/client/images/vegetable/product/11.png" class="blur-up lazyload" alt="">
                                    </a>

                                    <div class="offer-detail">
                                        <div>
                                            <a href="product-left-thumbnail.html" class="text-title">
                                                <h6 class="name">Bánh mỳ nguyên cám Tuffet</h6>
                                            </a>
                                            <span>500 G</span>
                                            <h6 class="price theme-color">10.000 đ</h6>
                                        </div>
                                    </div>
                                </div>
                            </li

                        </ul>
                    </div>
                </div>

                <div class="section-t-space">
                    <div class="banner-contain hover-effect">
                        <img src="<?= _WEB_ROOT ?>assets/client/images/vegetable/banner/14.jpg" class="bg-img blur-up lazyload" alt="">
                        <div class="banner-details p-center banner-b-space w-100 text-center">
                            <div>
                                <h6 class="ls-expanded theme-color mb-sm-3 mb-1">MÙA HÈ</h6>
                                <h2 class="banner-title">RAU QUẢ</h2>
                                <h5 class="lh-sm mx-auto mt-1 text-content">Tiết kiệm tới 5% GIẢM GIÁ</h5>
                                <button onclick="location.href = '/';" class="btn btn-animation btn-sm mx-auto mt-sm-3 mt-2">Đến cửa hàng  <i class="fa-solid fa-arrow-right icon"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="title section-t-space">
                    <h2>Blog nổi bật</h2>
                    <span class="title-leaf">
                            <svg class="icon-width">
                                <use xlink:href="../assets/svg/leaf.svg#leaf"></use>
                            </svg>
                        </span>
                    <p>Trợ lý ảo thu thập các sản phẩm từ danh sách của bạn</p>
                </div>

                <div class="slider-3-blog ratio_65 no-arrow product-wrapper">
                    <div>
                        <div class="blog-box">
                            <div class="blog-box-image">
                                <a href="" class="blog-image">
                                    <img src="<?= _WEB_ROOT ?>assets/client/images/vegetable/blog/1.jpg" class="bg-img blur-up lazyload" alt="">
                                </a>
                            </div>

                            <a href="" class="blog-detail">
                                <h6>Ngày 20 tháng 3 năm 2022</h6>
                                <h5>Rau tươi trực tuyến</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Product Section End -->

<!-- Newsletter Section Start -->
<section class="newsletter-section section-b-space">
    <div class="container-fluid-lg">
        <div class="newsletter-box newsletter-box-2">
            <div class="newsletter-contain py-5">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xxl-4 col-lg-5 col-md-7 col-sm-9 offset-xxl-2 offset-md-1">
                            <div class="newsletter-detail">
                                <h2>Tham gia bản tin của chúng tôi và nhận được...</h2>
                                <h5>Giảm giá 400k cho đơn hàng đầu tiên của bạn</h5>
                                <div class="input-box">
                                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Nhập email của bạn">
                                    <i class="fa-solid fa-envelope arrow"></i>
                                    <button class="sub-btn  btn-animation">
                                        <span class="d-sm-block d-none">Đặt mua</span>
                                        <i class="fa-solid fa-arrow-right icon"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Newsletter Section End -->

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
<div class="modal fade theme-modal view-modal" id="view" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <img src="<?=_WEB_ROOT?>assets/client/images/product/category/1.jpg" class="img-fluid blur-up lazyload" alt="">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="right-sidebar-modal">
                            <h4 class="title-name">Bánh quy bơ đậu phộng Bite Premium 600 g</h4>
                            <h4 class="price">120.000 đ</h4>
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
                                <span class="ms-2">8 đánh giá</span>
                                <span class="ms-2 text-danger">6 đã bán trong 16 giờ qua</span>
                            </div>

                            <div class="product-detail">
                                <h4>Thông tin chi tiết sản phẩm :</h4>
                                <p>Kẹo mía đường mận tart kẹo bông chupa chups sô cô la mận đường tôi yêu thích.
                                    Caramels marshmallow đóng băng kẹo que tráng miệng Tôi yêu soufflé Tôi yêu kẹo bơ cứng.
                                    Bánh marshmallow ngọt ngào cuộn mè tiramisu thạch gấu vuốt. Bonbon
                                    bánh nướng xốp Tôi yêu bánh cà rốt đường mận tráng miệng bonbon.</p>
                            </div>

                            <ul class="brand-list">
                                <li>
                                    <div class="brand-box">
                                        <h5>Tên thương hiệu:</h5>
                                        <h6>Rừng đen</h6>
                                    </div>
                                </li>

                                <li>
                                    <div class="brand-box">
                                        <h5>Mã sản phẩm:</h5>
                                        <h6>W0690034</h6>
                                    </div>
                                </li>

                                <li>
                                    <div class="brand-box">
                                        <h5>Loại sản phẩm:</h5>
                                        <h6>Bánh Kem Trắng</h6>
                                    </div>
                                </li>
                            </ul>

                            <div class="select-size">
                                <h4>Kích thước bánh :</h4>
                                <select class="form-select select-form-size">
                                    <option selected>Chọn kích cỡ</option>
                                    <option value="1.2">1/2 KG</option>
                                    <option value="0">1 KG</option>
                                    <option value="1.5">1/5 KG</option>
                                    <option value="red">Những bông hồng đỏ</option>
                                    <option value="pink">Với hoa hồng màu hồng</option>
                                </select>
                            </div>

                            <div class="modal-button">
                                <button onclick="location.href = 'cart.html';" class="btn btn-md add-cart-button icon">Thêm vào
                                    Vào giỏ hàng</button>
                                <button onclick="location.href = 'product-left.html';" class="btn theme-bg-color view-button icon text-white fw-bold btn-md">
                                    Xem thêm chi tiết</button>
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
<div class="modal location-modal fade theme-modal" id="locationModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Chọn địa điểm giao hàng của bạn</h5>
                <p class="mt-1 text-content">Nhập địa chỉ của bạn và chúng tôi sẽ chỉ định ưu đãi cho khu vực của bạn.</p>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="location-list">
                    <div class="search-input">
                        <input type="search" class="form-control" placeholder="Tìm kiếm khu vực của bạn">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>

                    <div class="disabled-box">
                        <h6>Chọn một vị trí</h6>
                    </div>

                    <ul class="location-select custom-height">
                        <li>
                            <a href="">
                                <h6>Cần Giờ</h6>
                                <span>Giảm: $130</span>
                            </a>
                        </li>

                        <li>
                            <a href="">
                                <h6>Tiền Giang</h6>
                                <span>Giảm: $150</span>
                            </a>
                        </li>

                        <li>
                            <a href="">
                                <h6>Hậu Giang</h6>
                                <span>Giảm: $110</span>
                            </a>
                        </li>

                        <li>
                            <a href="">
                                <h6>Quảng Ninh</h6>
                                <span>Giảm: $140</span>
                            </a>
                        </li>

                        <li>
                            <a href="">
                                <h6>Tân Hồng</h6>
                                <span>Giảm: $160</span>
                            </a>
                        </li>

                        <li>
                            <a href="">
                                <h6>Rạch Giá</h6>
                                <span>Giảm: $120</span>
                            </a>
                        </li>

                        <li>
                            <a href="">
                                <h6>Phong Điền</h6>
                                <span>Giam: $170</span>
                            </a>
                        </li>

                        <li>
                            <a href="">
                                <h6>Sài Gòn</h6>
                                <span>Giảm: $120</span>
                            </a>
                        </li>

                        <li>
                            <a href="">
                                <h6>Cần Thơ</h6>
                                <span>Giảm: $110</span>
                            </a>
                        </li>

                        <li>
                            <a href="">
                                <h6>Sa Đéc</h6>
                                <span>Giảm: $130</span>
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
<div class="modal fade theme-modal deal-modal" id="deal-box" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
        <div class="modal-content">
            <div class="modal-header">
                <div>
                    <h5 class="modal-title w-100" id="deal_today">Giao dịch ngay hôm nay</h5>
                    <p class="mt-1 text-content">Ưu đãi được đề xuất cho bạn.</p>
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
                                <a href="/" class="deal-image">
                                    <img src="<?= _WEB_ROOT ?>assets/client/images/vegetable/product/10.png" class="blur-up lazyload" alt="">
                                </a>

                                <a href="/" class="deal-contain">
                                    <h5>Cà Phê Hòa Tan Pha Trộn 50 g Mua 1 Tặng 1</h5>
                                    <h6>$52.57 <del>57.62</del> <span>500 G</span></h6>
                                </a>
                            </div>
                        </li>

                        <li class="list-2">
                            <div class="deal-offer-contain">
                                <a href="/" class="deal-image">
                                    <img src="<?= _WEB_ROOT ?>assets/client/images/vegetable/product/11.png" class="blur-up lazyload" alt="">
                                </a>

                                <a href="/" class="deal-contain">
                                    <h5>Cà Phê Hòa Tan Pha Trộn 50 g Mua 1 Tặng 1</h5>
                                    <h6>$52.57 <del>57.62</del> <span>500 G</span></h6>
                                </a>
                            </div>
                        </li>

                        <li class="list-3">
                            <div class="deal-offer-contain">
                                <a href="/" class="deal-image">
                                    <img src="<?= _WEB_ROOT ?>assets/client/images/vegetable/product/12.png" class="blur-up lazyload" alt="">
                                </a>

                                <a href="/" class="deal-contain">
                                    <h5>Cà Phê Hòa Tan Pha Trộn 50 g Mua 1 Tặng 1</h5>
                                    <h6>$52.57 <del>57.62</del> <span>500 G</span></h6>
                                </a>
                            </div>
                        </li>

                        <li class="list-1">
                            <div class="deal-offer-contain">
                                <a href="/" class="deal-image">
                                    <img src="<?= _WEB_ROOT ?>assets/client/images/vegetable/product/13.png" class="blur-up lazyload" alt="">
                                </a>

                                <a href="/" class="deal-contain">
                                    <h5>Cà Phê Hòa Tan Pha Trộn 50 g Mua 1 Tặng 1</h5>
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
