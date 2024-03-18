<!-- Header Start -->
<header class="pb-md-4 pb-0">
    <div class="top-nav top-header sticky-header">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="navbar-top">
                        <button class="navbar-toggler d-xl-none d-inline navbar-menu-button" type="button"
                                data-bs-toggle="offcanvas" data-bs-target="#primaryMenu">
                                <span class="navbar-toggler-icon">
                                    <i class="fa-solid fa-bars"></i>
                                </span>
                        </button>
                        <a href="index.html" class="web-logo nav-logo">
                            <img src="<?= _WEB_ROOT ?>assets/client/images/logo/1.png"
                                 class="img-fluid blur-up lazyload" alt="">
                        </a>

                        <div class="middle-box">

                            <div class="search-box">
                                <div class="input-group">
                                    <input type="search" class="form-control" placeholder="Tìm kiếm..."
                                           aria-label="Recipient's username" aria-describedby="button-addon2">
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
                                                            <img src="<?= _WEB_ROOT ?>assets/client/images/vegetable/product/2.png"
                                                                 class="blur-up lazyload" alt="">
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
                                    <button class="btn-close lead" type="button" data-bs-dismiss="offcanvas"
                                            aria-label="Close"></button>
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
                    <h2>Về chúng tôi</h2>
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a href="">
                                    <i class="fa-solid fa-house"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Về chúng tôi</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Fresh Vegetable Section Start -->
<section class="fresh-vegetable-section section-lg-space">
    <div class="container-fluid-lg">
        <div class="row gx-xl-5 gy-xl-0 g-3 ratio_148_1">
            <div class="col-xl-6 col-12">
                <div class="row g-sm-4 g-2">
                    <div class="col-6">
                        <div class="fresh-image-2">
                            <div class="bg-size blur-up lazyloaded"
                                 style="background-image: url(&quot;/../assets/images/inner-page/about-us/1.jpg&quot;); background-size: cover; background-position: center; background-repeat: no-repeat; display: block;">
                                <img src="<?= _WEB_ROOT ?>assets/client/images/inner-page/about-us/1.jpg"
                                     class="bg-img blur-up lazyloaded" alt="" style="display: none;">
                            </div>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="fresh-image">
                            <div class="bg-size blur-up lazyloaded"
                                 style="background-image: url(&quot;/../assets/images/inner-page/about-us/2.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                <img src="<?= _WEB_ROOT ?>assets/client/images/inner-page/about-us/2.jpg"
                                     class="bg-img blur-up lazyloaded" alt="" style="display: none;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-12">
                <div class="fresh-contain p-center-left">
                    <div>
                        <div class="review-title">
                            <h4>Về chúng tôi</h4>
                            <h2>Chúng tôi sản xuất thực phẩm hữu cơ trên thị trường</h2>
                        </div>

                        <div class="delivery-list">
                            <p class="text-content">Chỉ cần vài giây để đo nhiệt độ cơ thể của bạn. Tối đa 5 người dùng!
                                Pin kéo dài đến 2 năm. Có rất nhiều biến thể của Lorem Ipsum. Chúng tôi bắt đầu vào năm
                                2019 và không ngừng phát triển nó kể từ đó. Là một thương hiệu toàn cầu không ngủ, chúng
                                tôi hoạt động 24/7 và luôn mang đến những điều mới mẻ với hơn 100 sản phẩm mới ra mắt
                                hàng tháng, mang đến cho bạn những diện mạo mới nhất với chi phí thấp hơn.</p>

                            <ul class="delivery-box">
                                <li>
                                    <div class="delivery-box">
                                        <div class="delivery-icon">
                                            <img src="<?= _WEB_ROOT ?>assets/client/svg/3/delivery.svg"
                                                 class="blur-up lazyloaded" alt="">
                                        </div>

                                        <div class="delivery-detail">
                                            <h5 class="text">Giao hàng miễn phí cho tất cả các đơn hàng</h5>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="delivery-box">
                                        <div class="delivery-icon">
                                            <img src="<?= _WEB_ROOT ?>assets/client/svg/3/leaf.svg"
                                                 class="blur-up lazyloaded" alt="">
                                        </div>

                                        <div class="delivery-detail">
                                            <h5 class="text">Chỉ có thực phẩm tươi sống</h5>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="delivery-box">
                                        <div class="delivery-icon">
                                            <img src="<?= _WEB_ROOT ?>assets/client/svg/3/delivery.svg"
                                                 class="blur-up lazyloaded" alt="">
                                        </div>

                                        <div class="delivery-detail">
                                            <h5 class="text">Giao hàng miễn phí cho tất cả các đơn hàng</h5>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="delivery-box">
                                        <div class="delivery-icon">
                                            <img src="<?= _WEB_ROOT ?>assets/client/svg/3/leaf.svg"
                                                 class="blur-up lazyloaded" alt="">
                                        </div>

                                        <div class="delivery-detail">
                                            <h5 class="text">Chỉ có thực phẩm tươi sống</h5>
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
</section>
<!-- Fresh Vegetable Section End -->

<!-- Client Section Start -->
<section class="client-section section-lg-space">
    <div class="container-fluid-lg">
        <div class="row">
            <div class="col-12">
                <div class="about-us-title text-center">
                    <h4>Chúng ta làm gì</h4>
                    <h2 class="center">Chúng tôi được khách hàng tin cậy</h2>
                </div>

                <div class="slider-3_1 product-wrapper slick-initialized slick-slider">
                    <div class="slick-list draggable">
                        <div class="slick-track"
                             style="opacity: 1; width: 1701px; transform: translate3d(0px, 0px, 0px);">
                            <div class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false"
                                 tabindex="0" style="width: 567px;">
                                <div class="clint-contain">
                                    <div class="client-icon">
                                        <img src="<?= _WEB_ROOT ?>assets/client/svg/3/work.svg"
                                             class="blur-up lazyloaded" alt="">
                                    </div>
                                    <h2>10</h2>
                                    <h4>Năm kinh doanh</h4>
                                    <p>Quán cà phê là một cơ sở kinh doanh nhỏ bán cà phê, bánh ngọt và các mặt hàng
                                        buổi sáng khác. Có rất nhiều loại quán cà phê khác nhau trên khắp thế giới.</p>
                                </div>
                            </div>
                            <div class="slick-slide slick-active" data-slick-index="1" aria-hidden="false" tabindex="0"
                                 style="width: 567px;">
                                <div class="clint-contain">
                                    <div class="client-icon">
                                        <img src="<?= _WEB_ROOT ?>assets/client/svg/3/buy.svg"
                                             class="blur-up lazyloaded" alt="">
                                    </div>
                                    <h2>80K+</h2>
                                    <h4>Sản phẩm bán hàng</h4>
                                    <p>Một số quán cà phê có khu vực ghế ngồi, trong khi một số chỉ có một chỗ để gọi
                                        món rồi đi chỗ khác ngồi. Quán cà phê mà tôi sắp tới.</p>
                                </div>
                            </div>
                            <div class="slick-slide slick-active" data-slick-index="2" aria-hidden="false" tabindex="0"
                                 style="width: 567px;">
                                <div class="clint-contain">
                                    <div class="client-icon">
                                        <img src="<?= _WEB_ROOT ?>assets/client/svg/3/user.svg"
                                             class="blur-up lazyloaded" alt="">
                                    </div>
                                    <h2>90%</h2>
                                    <h4>Khách hàng hạnh phúc</h4>
                                    <p>Mục tiêu của tôi đối với quán cà phê này là có thể uống cà phê và tiếp tục một
                                        ngày của mình. Đó là một buổi sáng thứ Năm và tôi đang vội vã giữa các cuộc
                                        họp.</p>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</section>
<!-- Client Section End -->

<!-- Team Section Start -->
<section class="team-section section-lg-space">
    <div class="container-fluid-lg">
        <div class="about-us-title text-center">
            <h4 class="text-content">Đội ngũ sáng tạo của chúng tôi</h4>
            <h2 class="center">thành viên nhóm fastkart</h2>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="slider-user product-wrapper slick-initialized slick-slider slick-dotted">
                    <div class="slick-list draggable">
                        <div class="slick-track"
                             style="opacity: 1; width: 5950px; transform: translate3d(-1700px, 0px, 0px);">
                            <div class="slick-slide slick-cloned" data-slick-index="-4" id="" aria-hidden="true"
                                 tabindex="-1" style="width: 425px;">
                                <div class="team-box">
                                    <div class="team-iamge">
                                        <img src="<?= _WEB_ROOT ?>assets/client/images/inner-page/user/2.jpg"
                                             class="img-fluid blur-up lazyload" alt="">
                                    </div>

                                    <div class="team-name">
                                        <h3>Anna Baranov</h3>
                                        <h5>Tiếp thị</h5>
                                        <p>phô mai trên bánh mì nướng mozzarella bavarian bergkase phô mai có mùi chân
                                            phô mai.</p>
                                        <ul class="team-media">
                                            <li>
                                                <a href="https://www.facebook.com/" class="fb-bg" tabindex="-1">
                                                    <i class="fa-brands fa-facebook-f"></i>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="https://in.pinterest.com/" class="pint-bg" tabindex="-1">
                                                    <i class="fa-brands fa-pinterest-p"></i>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="https://twitter.com/" class="twitter-bg" tabindex="-1">
                                                    <i class="fa-brands fa-twitter"></i>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="https://www.instagram.com/" class="insta-bg" tabindex="-1">
                                                    <i class="fa-brands fa-instagram"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="slick-slide slick-cloned" data-slick-index="-3" id="" aria-hidden="true"
                                 tabindex="-1" style="width: 425px;">
                                <div class="team-box">
                                    <div class="team-iamge">
                                        <img src="<?= _WEB_ROOT ?>assets/client/images/inner-page/user/3.jpg"
                                             class="img-fluid blur-up lazyload" alt="">
                                    </div>

                                    <div class="team-name">
                                        <h3>Anna Baranov</h3>
                                        <h5>Tiếp thị</h5>
                                        <p>camembert de Normandie. Phô mai cao su Bocconcini từ port-salut.</p>
                                        <ul class="team-media">
                                            <li>
                                                <a href="https://www.facebook.com/" class="fb-bg" tabindex="-1">
                                                    <i class="fa-brands fa-facebook-f"></i>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="https://in.pinterest.com/" class="pint-bg" tabindex="-1">
                                                    <i class="fa-brands fa-pinterest-p"></i>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="https://twitter.com/" class="twitter-bg" tabindex="-1">
                                                    <i class="fa-brands fa-twitter"></i>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="https://www.instagram.com/" class="insta-bg" tabindex="-1">
                                                    <i class="fa-brands fa-instagram"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="slick-slide slick-cloned" data-slick-index="-2" id="" aria-hidden="true"
                                 tabindex="-1" style="width: 425px;">
                                <div class="team-box">
                                    <div class="team-iamge">
                                        <img src="<?= _WEB_ROOT ?>assets/client/images/inner-page/user/4.jpg"
                                             class="img-fluid blur-up lazyloaded" alt="">
                                    </div>

                                    <div class="team-name">
                                        <h3>Anna Baranov</h3>
                                        <h5>Tiếp thị</h5>
                                        <p>Fondue dê giám mục hôi thối. Phô mai mì ống croque phô mai monsieur.</p>
                                        <ul class="team-media">
                                            <li>
                                                <a href="https://www.facebook.com/" class="fb-bg" tabindex="-1">
                                                    <i class="fa-brands fa-facebook-f"></i>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="https://in.pinterest.com/" class="pint-bg" tabindex="-1">
                                                    <i class="fa-brands fa-pinterest-p"></i>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="https://twitter.com/" class="twitter-bg" tabindex="-1">
                                                    <i class="fa-brands fa-twitter"></i>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="https://www.instagram.com/" class="insta-bg" tabindex="-1">
                                                    <i class="fa-brands fa-instagram"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="slick-slide slick-cloned" data-slick-index="-1" id="" aria-hidden="true"
                                 tabindex="-1" style="width: 425px;">
                                <div class="team-box">
                                    <div class="team-iamge">
                                        <img src="<?= _WEB_ROOT ?>assets/client/images/inner-page/user/1.jpg"
                                             class="img-fluid blur-up lazyloaded" alt="">
                                    </div>

                                    <div class="team-name">
                                        <h3>Anna Baranov</h3>
                                        <h5>Tiếp thị</h5>
                                        <p>phô mai squirty phô mai cheddar mì ống phô mai airedale hình tam giác phô
                                            mai.</p>
                                        <ul class="team-media">
                                            <li>
                                                <a href="https://www.facebook.com/" class="fb-bg" tabindex="-1">
                                                    <i class="fa-brands fa-facebook-f"></i>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="https://in.pinterest.com/" class="pint-bg" tabindex="-1">
                                                    <i class="fa-brands fa-pinterest-p"></i>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="https://twitter.com/" class="twitter-bg" tabindex="-1">
                                                    <i class="fa-brands fa-twitter"></i>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="https://www.instagram.com/" class="insta-bg" tabindex="-1">
                                                    <i class="fa-brands fa-instagram"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false"
                                 tabindex="0" role="tabpanel" id="slick-slide30"
                                 aria-describedby="slick-slide-control30" style="width: 425px;">
                                <div class="team-box">
                                    <div class="team-iamge">
                                        <img src="<?= _WEB_ROOT ?>assets/client/images/inner-page/user/1.jpg"
                                             class="img-fluid blur-up lazyloaded" alt="">
                                    </div>

                                    <div class="team-name">
                                        <h3>Anna Baranov</h3>
                                        <h5>Tiếp thị</h5>
                                        <p>bánh mì kẹp thịt phô mai airedale mozzarella nước xốt phô mai lớn.</p>
                                        <ul class="team-media">
                                            <li>
                                                <a href="https://www.facebook.com/" class="fb-bg" tabindex="0">
                                                    <i class="fa-brands fa-facebook-f"></i>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="https://in.pinterest.com/" class="pint-bg" tabindex="0">
                                                    <i class="fa-brands fa-pinterest-p"></i>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="https://twitter.com/" class="twitter-bg" tabindex="0">
                                                    <i class="fa-brands fa-twitter"></i>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="https://www.instagram.com/" class="insta-bg" tabindex="0">
                                                    <i class="fa-brands fa-instagram"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="slick-slide slick-active" data-slick-index="1" aria-hidden="false" tabindex="0"
                                 role="tabpanel" id="slick-slide31" aria-describedby="slick-slide-control31"
                                 style="width: 425px;">
                                <div class="team-box">
                                    <div class="team-iamge">
                                        <img src="<?= _WEB_ROOT ?>assets/client/images/inner-page/user/2.jpg"
                                             class="img-fluid blur-up lazyloaded" alt="">
                                    </div>

                                    <div class="team-name">
                                        <h3>Anna Baranov</h3>
                                        <h5>Tiếp thị</h5>
                                        <p>phô mai trên bánh mì nướng mozzarella bavarian bergkase phô mai có mùi chân
                                            phô mai.</p>
                                        <ul class="team-media">
                                            <li>
                                                <a href="https://www.facebook.com/" class="fb-bg" tabindex="0">
                                                    <i class="fa-brands fa-facebook-f"></i>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="https://in.pinterest.com/" class="pint-bg" tabindex="0">
                                                    <i class="fa-brands fa-pinterest-p"></i>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="https://twitter.com/" class="twitter-bg" tabindex="0">
                                                    <i class="fa-brands fa-twitter"></i>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="https://www.instagram.com/" class="insta-bg" tabindex="0">
                                                    <i class="fa-brands fa-instagram"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="slick-slide slick-active" data-slick-index="2" aria-hidden="false" tabindex="0"
                                 role="tabpanel" id="slick-slide32" aria-describedby="slick-slide-control32"
                                 style="width: 425px;">
                                <div class="team-box">
                                    <div class="team-iamge">
                                        <img src="<?= _WEB_ROOT ?>assets/client/images/inner-page/user/3.jpg"
                                             class="img-fluid blur-up lazyloaded" alt="">
                                    </div>

                                    <div class="team-name">
                                        <h3>Anna Baranov</h3>
                                        <h5>Tiếp thị</h5>
                                        <p>camembert de Normandie. Phô mai cao su Bocconcini từ port-salut.</p>
                                        <ul class="team-media">
                                            <li>
                                                <a href="https://www.facebook.com/" class="fb-bg" tabindex="0">
                                                    <i class="fa-brands fa-facebook-f"></i>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="https://in.pinterest.com/" class="pint-bg" tabindex="0">
                                                    <i class="fa-brands fa-pinterest-p"></i>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="https://twitter.com/" class="twitter-bg" tabindex="0">
                                                    <i class="fa-brands fa-twitter"></i>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="https://www.instagram.com/" class="insta-bg" tabindex="0">
                                                    <i class="fa-brands fa-instagram"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="slick-slide slick-active" data-slick-index="3" aria-hidden="false" tabindex="0"
                                 role="tabpanel" id="slick-slide33" aria-describedby="slick-slide-control33"
                                 style="width: 425px;">
                                <div class="team-box">
                                    <div class="team-iamge">
                                        <img src="<?= _WEB_ROOT ?>assets/client/images/inner-page/user/4.jpg"
                                             class="img-fluid blur-up lazyloaded" alt="">
                                    </div>

                                    <div class="team-name">
                                        <h3>Anna Baranov</h3>
                                        <h5>Tiếp thị</h5>
                                        <p>Fondue dê giám mục hôi thối. Phô mai mì ống croque phô mai monsieur.</p>
                                        <ul class="team-media">
                                            <li>
                                                <a href="https://www.facebook.com/" class="fb-bg" tabindex="0">
                                                    <i class="fa-brands fa-facebook-f"></i>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="https://in.pinterest.com/" class="pint-bg" tabindex="0">
                                                    <i class="fa-brands fa-pinterest-p"></i>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="https://twitter.com/" class="twitter-bg" tabindex="0">
                                                    <i class="fa-brands fa-twitter"></i>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="https://www.instagram.com/" class="insta-bg" tabindex="0">
                                                    <i class="fa-brands fa-instagram"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="slick-slide" data-slick-index="4" aria-hidden="true" tabindex="-1"
                                 role="tabpanel" id="slick-slide34" aria-describedby="slick-slide-control34"
                                 style="width: 425px;">
                                <div class="team-box">
                                    <div class="team-iamge">
                                        <img src="<?= _WEB_ROOT ?>assets/client/images/inner-page/user/1.jpg"
                                             class="img-fluid blur-up lazyloaded" alt="">
                                    </div>

                                    <div class="team-name">
                                        <h3>Anna Baranov</h3>
                                        <h5>Tiếp thị</h5>
                                        <p>phô mai squirty phô mai cheddar mì ống phô mai airedale hình tam giác phô
                                            mai.</p>
                                        <ul class="team-media">
                                            <li>
                                                <a href="https://www.facebook.com/" class="fb-bg" tabindex="-1">
                                                    <i class="fa-brands fa-facebook-f"></i>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="https://in.pinterest.com/" class="pint-bg" tabindex="-1">
                                                    <i class="fa-brands fa-pinterest-p"></i>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="https://twitter.com/" class="twitter-bg" tabindex="-1">
                                                    <i class="fa-brands fa-twitter"></i>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="https://www.instagram.com/" class="insta-bg" tabindex="-1">
                                                    <i class="fa-brands fa-instagram"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="slick-slide slick-cloned" data-slick-index="5" id="" aria-hidden="true"
                                 tabindex="-1" style="width: 425px;">
                                <div class="team-box">
                                    <div class="team-iamge">
                                        <img src="<?= _WEB_ROOT ?>assets/client/images/inner-page/user/1.jpg"
                                             class="img-fluid blur-up lazyloaded" alt="">
                                    </div>

                                    <div class="team-name">
                                        <h3>Anna Baranov</h3>
                                        <h5>Tiếp thị</h5>
                                        <p>bánh mì kẹp thịt phô mai airedale mozzarella nước xốt phô mai lớn.</p>
                                        <ul class="team-media">
                                            <li>
                                                <a href="https://www.facebook.com/" class="fb-bg" tabindex="-1">
                                                    <i class="fa-brands fa-facebook-f"></i>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="https://in.pinterest.com/" class="pint-bg" tabindex="-1">
                                                    <i class="fa-brands fa-pinterest-p"></i>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="https://twitter.com/" class="twitter-bg" tabindex="-1">
                                                    <i class="fa-brands fa-twitter"></i>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="https://www.instagram.com/" class="insta-bg" tabindex="-1">
                                                    <i class="fa-brands fa-instagram"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="slick-slide slick-cloned" data-slick-index="6" id="" aria-hidden="true"
                                 tabindex="-1" style="width: 425px;">
                                <div class="team-box">
                                    <div class="team-iamge">
                                        <img src="<?= _WEB_ROOT ?>assets/client/images/inner-page/user/2.jpg"
                                             class="img-fluid blur-up lazyload" alt="">
                                    </div>

                                    <div class="team-name">
                                        <h3>Anna Baranov</h3>
                                        <h5>Tiếp thị</h5>
                                        <p>phô mai trên bánh mì nướng mozzarella bavarian bergkase phô mai có mùi chân
                                            phô mai.</p>
                                        <ul class="team-media">
                                            <li>
                                                <a href="https://www.facebook.com/" class="fb-bg" tabindex="-1">
                                                    <i class="fa-brands fa-facebook-f"></i>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="https://in.pinterest.com/" class="pint-bg" tabindex="-1">
                                                    <i class="fa-brands fa-pinterest-p"></i>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="https://twitter.com/" class="twitter-bg" tabindex="-1">
                                                    <i class="fa-brands fa-twitter"></i>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="https://www.instagram.com/" class="insta-bg" tabindex="-1">
                                                    <i class="fa-brands fa-instagram"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="slick-slide slick-cloned" data-slick-index="7" id="" aria-hidden="true"
                                 tabindex="-1" style="width: 425px;">
                                <div class="team-box">
                                    <div class="team-iamge">
                                        <img src="<?= _WEB_ROOT ?>assets/client/images/inner-page/user/3.jpg"
                                             class="img-fluid blur-up lazyload" alt="">
                                    </div>

                                    <div class="team-name">
                                        <h3>Anna Baranov</h3>
                                        <h5>Tiếp thị</h5>
                                        <p>camembert de Normandie. Phô mai cao su Bocconcini từ port-salut.</p>
                                        <ul class="team-media">
                                            <li>
                                                <a href="https://www.facebook.com/" class="fb-bg" tabindex="-1">
                                                    <i class="fa-brands fa-facebook-f"></i>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="https://in.pinterest.com/" class="pint-bg" tabindex="-1">
                                                    <i class="fa-brands fa-pinterest-p"></i>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="https://twitter.com/" class="twitter-bg" tabindex="-1">
                                                    <i class="fa-brands fa-twitter"></i>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="https://www.instagram.com/" class="insta-bg" tabindex="-1">
                                                    <i class="fa-brands fa-instagram"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="slick-slide slick-cloned" data-slick-index="8" id="" aria-hidden="true"
                                 tabindex="-1" style="width: 425px;">
                                <div class="team-box">
                                    <div class="team-iamge">
                                        <img src="<?= _WEB_ROOT ?>assets/client/images/inner-page/user/4.jpg"
                                             class="img-fluid blur-up lazyload" alt="">
                                    </div>

                                    <div class="team-name">
                                        <h3>Anna Baranov</h3>
                                        <h5>Tiếp thị</h5>
                                        <p>Fondue dê giám mục hôi thối. Phô mai mì ống croque phô mai monsieur.</p>
                                        <ul class="team-media">
                                            <li>
                                                <a href="https://www.facebook.com/" class="fb-bg" tabindex="-1">
                                                    <i class="fa-brands fa-facebook-f"></i>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="https://in.pinterest.com/" class="pint-bg" tabindex="-1">
                                                    <i class="fa-brands fa-pinterest-p"></i>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="https://twitter.com/" class="twitter-bg" tabindex="-1">
                                                    <i class="fa-brands fa-twitter"></i>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="https://www.instagram.com/" class="insta-bg" tabindex="-1">
                                                    <i class="fa-brands fa-instagram"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="slick-slide slick-cloned" data-slick-index="9" id="" aria-hidden="true"
                                 tabindex="-1" style="width: 425px;">
                                <div class="team-box">
                                    <div class="team-iamge">
                                        <img src="<?= _WEB_ROOT ?>assets/client/images/inner-page/user/1.jpg"
                                             class="img-fluid blur-up lazyload" alt="">
                                    </div>

                                    <div class="team-name">
                                        <h3>Anna Baranov</h3>
                                        <h5>Tiếp thị</h5>
                                        <p>phô mai squirty phô mai cheddar mì ống phô mai airedale hình tam giác phô
                                            mai.</p>
                                        <ul class="team-media">
                                            <li>
                                                <a href="https://www.facebook.com/" class="fb-bg" tabindex="-1">
                                                    <i class="fa-brands fa-facebook-f"></i>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="https://in.pinterest.com/" class="pint-bg" tabindex="-1">
                                                    <i class="fa-brands fa-pinterest-p"></i>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="https://twitter.com/" class="twitter-bg" tabindex="-1">
                                                    <i class="fa-brands fa-twitter"></i>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="https://www.instagram.com/" class="insta-bg" tabindex="-1">
                                                    <i class="fa-brands fa-instagram"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <ul class="slick-dots" style="" role="tablist">
                        <li class="slick-active" role="presentation">
                            <button type="button" role="tab" id="slick-slide-control30" aria-controls="slick-slide30"
                                    aria-label="1 của 2" tabindex="0" aria-selected="true" fdprocessedid="okcua">1
                            </button>
                        </li>
                        <li role="presentation">
                            <button type="button" role="tab" id="slick-slide-control31" aria-controls="slick-slide31"
                                    aria-label="2 trên 2" tabindex="-1">2
                            </button>
                        </li>
                        <li role="presentation">
                            <button type="button" role="tab" id="slick-slide-control32" aria-controls="slick-slide32"
                                    aria-label="3 trên 2" tabindex="-1">3
                            </button>
                        </li>
                        <li role="presentation">
                            <button type="button" role="tab" id="slick-slide-control33" aria-controls="slick-slide33"
                                    aria-label="4 trên 2" tabindex="-1">4
                            </button>
                        </li>
                        <li role="presentation">
                            <button type="button" role="tab" id="slick-slide-control34" aria-controls="slick-slide34"
                                    aria-label="5 trên 2" tabindex="-1">5
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Team Section End -->

<!-- Review Section Start -->
<section class="review-section section-lg-space">
    <div class="container-fluid">
        <div class="about-us-title text-center">
            <h4 class="text-content">Lời chứng thực mới nhất</h4>
            <h2 class="center">Mọi người nói gì</h2>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="slider-4-half product-wrapper slick-initialized slick-slider slick-dotted">
                    <div class="slick-list draggable" style="padding: 0px 200px;">
                        <div class="slick-track"
                             style="opacity: 1; width: 10800px; transform: translate3d(-5400px, 0px, 0px);">
                            <div class="slick-slide slick-cloned" data-slick-index="-4" id="" aria-hidden="true"
                                 tabindex="-1" style="width: 540px;">
                                <div class="reviewer-box">
                                    <i class="fa-solid fa-quote-right"></i>
                                    <div class="product-rating">
                                        <ul class="rating">
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-star fill">
                                                    <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-star fill">
                                                    <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-star fill">
                                                    <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-star fill">
                                                    <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-star">
                                                    <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                            </li>
                                        </ul>
                                    </div>

                                    <h3>Chất lượng hàng đầu, Vị trí đẹp</h3>

                                    <p>"Lúc đầu, tôi nghi ngờ về SEO và tiếp thị nội dung, nhưng Công ty Lorem Ipsum
                                        không chỉ chứng tỏ được khả năng tài chính của mình mà phản hồi mà tôi nhận được
                                        từ khách hàng thật đáng kinh ngạc."</p>
                                    <div class="reviewer-profile">
                                        <div class="reviewer-image">
                                            <img src="<?= _WEB_ROOT ?>assets/client/images/inner-page/user/1.jpg"
                                                 class="blur-up lazyload" alt="">
                                        </div>

                                        <div class="reviewer-name">
                                            <h4>Gwen J. Geiger</h4>
                                            <h6>Nhà thiết kế</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slick-slide slick-cloned" data-slick-index="-3" id="" aria-hidden="true"
                                 tabindex="-1" style="width: 540px;">
                                <div class="reviewer-box">
                                    <i class="fa-solid fa-quote-right"></i>
                                    <div class="product-rating">
                                        <ul class="rating">
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-star fill">
                                                    <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-star fill">
                                                    <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-star fill">
                                                    <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-star fill">
                                                    <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-star">
                                                    <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                            </li>
                                        </ul>
                                    </div>

                                    <h3>Chất lượng hàng đầu, Vị trí đẹp</h3>

                                    <p>"Jeramy và nhóm của anh ấy tại Công ty Lorem Ipsum đã hoàn thiện trang web của
                                        tôi đúng vào mùa thuế. Tôi rất phấn khích trước kết quả và tự hào một lần nữa
                                        hướng khách hàng đến trang web của mình."</p>

                                    <div class="reviewer-profile">
                                        <div class="reviewer-image">
                                            <img src="<?= _WEB_ROOT ?>assets/client/images/inner-page/user/2.jpg"
                                                 class="blur-up lazyloaded" alt="">
                                        </div>

                                        <div class="reviewer-name">
                                            <h4>Constance K. Whang</h4>
                                            <h6>Giám đốc điều hành, Công ty</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slick-slide slick-cloned" data-slick-index="-2" id="" aria-hidden="true"
                                 tabindex="-1" style="width: 540px;">
                                <div class="reviewer-box">
                                    <i class="fa-solid fa-quote-right"></i>
                                    <div class="product-rating">
                                        <ul class="rating">
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-star fill">
                                                    <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-star fill">
                                                    <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-star fill">
                                                    <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-star fill">
                                                    <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-star">
                                                    <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                            </li>
                                        </ul>
                                    </div>

                                    <h3>Chất lượng hàng đầu, Vị trí đẹp</h3>

                                    <p>"Ừ, và nếu bạn là giáo hoàng thì tất cả họ sẽ nói, "Hãy chỉnh lại mũ giáo hoàng
                                        của bạn." Và "Hãy mặc bộ lễ phục đẹp vào." Tên của họ là gì? Đúng, tôi nhớ. Họ
                                        đứng cuối cùng tại Thế vận hội!"</p>
                                    <div class="reviewer-profile">
                                        <div class="reviewer-image">
                                            <img src="<?= _WEB_ROOT ?>assets/client/images/inner-page/user/3.jpg"
                                                 class="blur-up lazyloaded" alt="">
                                        </div>

                                        <div class="reviewer-name">
                                            <h4>Christopher R. Lee</h4>
                                            <h6>Giám đốc điều hành</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slick-slide slick-cloned slick-center" data-slick-index="-1" id=""
                                 aria-hidden="true" tabindex="-1" style="width: 540px;">
                                <div class="reviewer-box">
                                    <i class="fa-solid fa-quote-right"></i>
                                    <div class="product-rating">
                                        <ul class="rating">
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-star fill">
                                                    <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-star fill">
                                                    <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-star fill">
                                                    <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-star fill">
                                                    <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-star">
                                                    <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                            </li>
                                        </ul>
                                    </div>

                                    <h3>Chất lượng hàng đầu, Vị trí đẹp</h3>

                                    <p>"Người đàn ông tốt. Nixon ủng hộ chiến tranh và ủng hộ gia đình. Này, hãy nói cho
                                        tôi biết điều gì đi. Anh có tất cả số tiền này. Tại sao anh luôn ăn mặc như đang
                                        giặt đồ vậy? Thế còn họ Knicks thì sao? Loại nào? liệu tôi có trở thành một
                                        người cha nếu tôi nói không?"</p>
                                    <div class="reviewer-profile">
                                        <div class="reviewer-image">
                                            <img src="<?= _WEB_ROOT ?>assets/client/images/inner-page/user/4.jpg"
                                                 class="blur-up lazyloaded" alt="">
                                        </div>

                                        <div class="reviewer-name">
                                            <h4>Eileen R. Chu</h4>
                                            <h6>Giám đốc tiếp thị</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slick-slide" data-slick-index="0" aria-hidden="true" tabindex="-1"
                                 role="tabpanel" id="slick-slide10" aria-describedby="slick-slide-control10"
                                 style="width: 540px;">
                                <div class="reviewer-box">
                                    <i class="fa-solid fa-quote-right"></i>
                                    <div class="product-rating">
                                        <ul class="rating">
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-star fill">
                                                    <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-star fill">
                                                    <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-star fill">
                                                    <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-star fill">
                                                    <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-star">
                                                    <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                            </li>
                                        </ul>
                                    </div>

                                    <h3>Chất lượng hàng đầu, Vị trí đẹp</h3>

                                    <p>"Tôi thường cố gắng giấu nỗi buồn của mình vào bên trong, nơi nó có thể âm thầm
                                        mưng mủ như một căn bệnh tâm thần. Ở đó, giờ anh ấy bị mắc kẹt trong cuốn sách
                                        tôi viết: một thế giới tồi tàn với những lỗ hổng trong cốt truyện và lỗi chính
                                        tả! Như một ghi chú bên lề thú vị."</p>

                                    <div class="reviewer-profile">
                                        <div class="reviewer-image">
                                            <img src="<?= _WEB_ROOT ?>assets/client/images/inner-page/user/1.jpg"
                                                 class="blur-up lazyloaded" alt="">
                                        </div>

                                        <div class="reviewer-name">
                                            <h4>Betty J. Turner</h4>
                                            <h6>CTO, Công ty</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slick-slide" data-slick-index="1" aria-hidden="true" tabindex="-1"
                                 role="tabpanel" id="slick-slide11" aria-describedby="slick-slide-control11"
                                 style="width: 540px;">
                                <div class="reviewer-box">
                                    <i class="fa-solid fa-quote-right"></i>
                                    <div class="product-rating">
                                        <ul class="rating">
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-star fill">
                                                    <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-star fill">
                                                    <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-star fill">
                                                    <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-star fill">
                                                    <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-star">
                                                    <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                            </li>
                                        </ul>
                                    </div>

                                    <h3>Chất lượng hàng đầu, Vị trí đẹp</h3>

                                    <p>"Lịch trình bận rộn của tôi khiến tôi có rất ít thời gian dành cho việc viết blog
                                        và mạng xã hội. Công ty Lorem Ipsum đã đóng góp một phần rất lớn trong việc giúp
                                        tôi phát triển hoạt động kinh doanh của mình thông qua tiếp thị nội dung và tìm
                                        kiếm không phải trả tiền."</p>
                                    <div class="reviewer-profile">
                                        <div class="reviewer-image">
                                            <img src="<?= _WEB_ROOT ?>assets/client/images/inner-page/user/2.jpg"
                                                 class="blur-up lazyloaded" alt="">
                                        </div>

                                        <div class="reviewer-name">
                                            <h4>Alfredo S. Rocha</h4>
                                            <h6>Quản lý dự án</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slick-slide" data-slick-index="2" aria-hidden="true" tabindex="-1"
                                 role="tabpanel" id="slick-slide12" aria-describedby="slick-slide-control12"
                                 style="width: 540px;">
                                <div class="reviewer-box">
                                    <i class="fa-solid fa-quote-right"></i>
                                    <div class="product-rating">
                                        <ul class="rating">
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-star fill">
                                                    <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-star fill">
                                                    <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-star fill">
                                                    <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-star fill">
                                                    <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-star">
                                                    <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                            </li>
                                        </ul>
                                    </div>

                                    <h3>Chất lượng hàng đầu, Vị trí đẹp</h3>

                                    <p>"Chuyên nghiệp, nhạy bén và có thể theo kịp nhu cầu luôn thay đổi cũng như thời
                                        hạn chặt chẽ: Đó là cách tôi mô tả Jramy và nhóm của anh ấy tại The Lorem Ipsum
                                        Company. Khi nói đến tiếp thị nội dung."</p>
                                    <div class="reviewer-profile">
                                        <div class="reviewer-image">
                                            <img src="<?= _WEB_ROOT ?>assets/client/images/inner-page/user/3.jpg"
                                                 class="blur-up lazyloaded" alt="">
                                        </div>

                                        <div class="reviewer-name">
                                            <h4>Donald C. Spurr</h4>
                                            <h6>Đại lý bán hàng</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slick-slide" data-slick-index="3" aria-hidden="true" tabindex="-1"
                                 role="tabpanel" id="slick-slide13" aria-describedby="slick-slide-control13"
                                 style="width: 540px;">
                                <div class="reviewer-box">
                                    <i class="fa-solid fa-quote-right"></i>
                                    <div class="product-rating">
                                        <ul class="rating">
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-star fill">
                                                    <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-star fill">
                                                    <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-star fill">
                                                    <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-star fill">
                                                    <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-star">
                                                    <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                            </li>
                                        </ul>
                                    </div>

                                    <h3>Chất lượng hàng đầu, Vị trí đẹp</h3>

                                    <p>"Sau khi buộc phải chuyển đi hai lần trong vòng 5 năm, khách hàng gặp khó khăn
                                        trong việc tìm kiếm chúng tôi và doanh số bán hàng của chúng tôi sụt giảm. Công
                                        ty Lorem Ipsum không chỉ hồi sinh thương hiệu của chúng tôi."</p>
                                    <div class="reviewer-profile">
                                        <div class="reviewer-image">
                                            <img src="<?= _WEB_ROOT ?>assets/client/images/inner-page/user/4.jpg"
                                                 class="blur-up lazyloaded" alt="">
                                        </div>

                                        <div class="reviewer-name">
                                            <h4>Terry G. Fain</h4>
                                            <h6>Nhiếp ảnh gia</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slick-slide" data-slick-index="4" aria-hidden="true" tabindex="-1"
                                 role="tabpanel" id="slick-slide14" aria-describedby="slick-slide-control14"
                                 style="width: 540px;">
                                <div class="reviewer-box">
                                    <i class="fa-solid fa-quote-right"></i>
                                    <div class="product-rating">
                                        <ul class="rating">
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-star fill">
                                                    <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-star fill">
                                                    <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-star fill">
                                                    <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-star fill">
                                                    <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-star">
                                                    <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                            </li>
                                        </ul>
                                    </div>

                                    <h3>Chất lượng hàng đầu, Vị trí đẹp</h3>

                                    <p>"Lúc đầu, tôi nghi ngờ về SEO và tiếp thị nội dung, nhưng Công ty Lorem Ipsum
                                        không chỉ chứng tỏ được khả năng tài chính của mình mà phản hồi mà tôi nhận được
                                        từ khách hàng thật đáng kinh ngạc."</p>
                                    <div class="reviewer-profile">
                                        <div class="reviewer-image">
                                            <img src="<?= _WEB_ROOT ?>assets/client/images/inner-page/user/1.jpg"
                                                 class="blur-up lazyloaded" alt="">
                                        </div>

                                        <div class="reviewer-name">
                                            <h4>Gwen J. Geiger</h4>
                                            <h6>Nhà thiết kế</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slick-slide" data-slick-index="5" aria-hidden="true" tabindex="-1"
                                 role="tabpanel" id="slick-slide15" aria-describedby="slick-slide-control15"
                                 style="width: 540px;">
                                <div class="reviewer-box">
                                    <i class="fa-solid fa-quote-right"></i>
                                    <div class="product-rating">
                                        <ul class="rating">
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-star fill">
                                                    <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-star fill">
                                                    <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-star fill">
                                                    <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-star fill">
                                                    <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-star">
                                                    <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                            </li>
                                        </ul>
                                    </div>

                                    <h3>Chất lượng hàng đầu, Vị trí đẹp</h3>

                                    <p>"Jeramy và nhóm của anh ấy tại Công ty Lorem Ipsum đã hoàn thiện trang web của
                                        tôi đúng vào mùa thuế. Tôi rất phấn khích trước kết quả và tự hào một lần nữa
                                        hướng khách hàng đến trang web của mình."</p>

                                    <div class="reviewer-profile">
                                        <div class="reviewer-image">
                                            <img src="<?= _WEB_ROOT ?>assets/client/images/inner-page/user/2.jpg"
                                                 class="blur-up lazyloaded" alt="">
                                        </div>

                                        <div class="reviewer-name">
                                            <h4>Constance K. Whang</h4>
                                            <h6>Giám đốc điều hành, Công ty</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slick-slide slick-active" data-slick-index="6" aria-hidden="false" tabindex="-1"
                                 role="tabpanel" id="slick-slide16" aria-describedby="slick-slide-control16"
                                 style="width: 540px;">
                                <div class="reviewer-box">
                                    <i class="fa-solid fa-quote-right"></i>
                                    <div class="product-rating">
                                        <ul class="rating">
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-star fill">
                                                    <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-star fill">
                                                    <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-star fill">
                                                    <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-star fill">
                                                    <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-star">
                                                    <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                            </li>
                                        </ul>
                                    </div>

                                    <h3>Chất lượng hàng đầu, Vị trí đẹp</h3>

                                    <p>"Ừ, và nếu bạn là giáo hoàng thì tất cả họ sẽ nói, "Hãy chỉnh lại mũ giáo hoàng
                                        của bạn." Và "Hãy mặc bộ lễ phục đẹp vào." Tên của họ là gì? Đúng, tôi nhớ. Họ
                                        đứng cuối cùng tại Thế vận hội!"</p>
                                    <div class="reviewer-profile">
                                        <div class="reviewer-image">
                                            <img src="<?= _WEB_ROOT ?>assets/client/images/inner-page/user/3.jpg"
                                                 class="blur-up lazyloaded" alt="">
                                        </div>

                                        <div class="reviewer-name">
                                            <h4>Christopher R. Lee</h4>
                                            <h6>Giám đốc điều hành</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slick-slide slick-current slick-active slick-center" data-slick-index="7"
                                 aria-hidden="false" tabindex="0" role="tabpanel" id="slick-slide17"
                                 aria-describedby="slick-slide-control17" style="width: 540px;">
                                <div class="reviewer-box">
                                    <i class="fa-solid fa-quote-right"></i>
                                    <div class="product-rating">
                                        <ul class="rating">
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-star fill">
                                                    <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-star fill">
                                                    <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-star fill">
                                                    <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-star fill">
                                                    <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-star">
                                                    <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                            </li>
                                        </ul>
                                    </div>

                                    <h3>Chất lượng hàng đầu, Vị trí đẹp</h3>

                                    <p>"Người đàn ông tốt. Nixon ủng hộ chiến tranh và ủng hộ gia đình. Này, hãy nói cho
                                        tôi biết điều gì đi. Anh có tất cả số tiền này. Tại sao anh luôn ăn mặc như đang
                                        giặt đồ vậy? Thế còn họ Knicks thì sao? Loại nào? liệu tôi có trở thành một
                                        người cha nếu tôi nói không?"</p>
                                    <div class="reviewer-profile">
                                        <div class="reviewer-image">
                                            <img src="<?= _WEB_ROOT ?>assets/client/images/inner-page/user/4.jpg"
                                                 class="blur-up lazyloaded" alt="">
                                        </div>

                                        <div class="reviewer-name">
                                            <h4>Eileen R. Chu</h4>
                                            <h6>Giám đốc tiếp thị</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slick-slide slick-cloned slick-active" data-slick-index="8" id=""
                                 aria-hidden="false" tabindex="-1" style="width: 540px;">
                                <div class="reviewer-box">
                                    <i class="fa-solid fa-quote-right"></i>
                                    <div class="product-rating">
                                        <ul class="rating">
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-star fill">
                                                    <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-star fill">
                                                    <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-star fill">
                                                    <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-star fill">
                                                    <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-star">
                                                    <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                            </li>
                                        </ul>
                                    </div>

                                    <h3>Chất lượng hàng đầu, Vị trí đẹp</h3>

                                    <p>"Tôi thường cố gắng giấu nỗi buồn của mình vào bên trong, nơi nó có thể âm thầm
                                        mưng mủ như một căn bệnh tâm thần. Ở đó, giờ anh ấy bị mắc kẹt trong cuốn sách
                                        tôi viết: một thế giới tồi tàn với những lỗ hổng trong cốt truyện và lỗi chính
                                        tả! Như một ghi chú bên lề thú vị."</p>

                                    <div class="reviewer-profile">
                                        <div class="reviewer-image">
                                            <img src="<?= _WEB_ROOT ?>assets/client/images/inner-page/user/1.jpg"
                                                 class="blur-up lazyloaded" alt="">
                                        </div>

                                        <div class="reviewer-name">
                                            <h4>Betty J. Turner</h4>
                                            <h6>CTO, Công ty</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slick-slide slick-cloned" data-slick-index="9" id="" aria-hidden="true"
                                 tabindex="-1" style="width: 540px;">
                                <div class="reviewer-box">
                                    <i class="fa-solid fa-quote-right"></i>
                                    <div class="product-rating">
                                        <ul class="rating">
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-star fill">
                                                    <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-star fill">
                                                    <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-star fill">
                                                    <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-star fill">
                                                    <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-star">
                                                    <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                            </li>
                                        </ul>
                                    </div>

                                    <h3>Chất lượng hàng đầu, Vị trí đẹp</h3>

                                    <p>"Lịch trình bận rộn của tôi khiến tôi có rất ít thời gian dành cho việc viết blog
                                        và mạng xã hội. Công ty Lorem Ipsum đã đóng góp một phần rất lớn trong việc giúp
                                        tôi phát triển hoạt động kinh doanh của mình thông qua tiếp thị nội dung và tìm
                                        kiếm không phải trả tiền."</p>
                                    <div class="reviewer-profile">
                                        <div class="reviewer-image">
                                            <img src="<?= _WEB_ROOT ?>assets/client/images/inner-page/user/2.jpg"
                                                 class="blur-up lazyloaded" alt="">
                                        </div>

                                        <div class="reviewer-name">
                                            <h4>Alfredo S. Rocha</h4>
                                            <h6>Quản lý dự án</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slick-slide slick-cloned" data-slick-index="10" id="" aria-hidden="true"
                                 tabindex="-1" style="width: 540px;">
                                <div class="reviewer-box">
                                    <i class="fa-solid fa-quote-right"></i>
                                    <div class="product-rating">
                                        <ul class="rating">
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-star fill">
                                                    <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-star fill">
                                                    <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-star fill">
                                                    <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-star fill">
                                                    <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-star">
                                                    <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                            </li>
                                        </ul>
                                    </div>

                                    <h3>Chất lượng hàng đầu, Vị trí đẹp</h3>

                                    <p>"Chuyên nghiệp, nhạy bén và có thể theo kịp nhu cầu luôn thay đổi cũng như thời
                                        hạn chặt chẽ: Đó là cách tôi mô tả Jramy và nhóm của anh ấy tại The Lorem Ipsum
                                        Company. Khi nói đến tiếp thị nội dung."</p>
                                    <div class="reviewer-profile">
                                        <div class="reviewer-image">
                                            <img src="<?= _WEB_ROOT ?>assets/client/images/inner-page/user/3.jpg"
                                                 class="blur-up lazyloaded" alt="">
                                        </div>

                                        <div class="reviewer-name">
                                            <h4>Donald C. Spurr</h4>
                                            <h6>Đại lý bán hàng</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slick-slide slick-cloned" data-slick-index="11" id="" aria-hidden="true"
                                 tabindex="-1" style="width: 540px;">
                                <div class="reviewer-box">
                                    <i class="fa-solid fa-quote-right"></i>
                                    <div class="product-rating">
                                        <ul class="rating">
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-star fill">
                                                    <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-star fill">
                                                    <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-star fill">
                                                    <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-star fill">
                                                    <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-star">
                                                    <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                            </li>
                                        </ul>
                                    </div>

                                    <h3>Chất lượng hàng đầu, Vị trí đẹp</h3>

                                    <p>"Sau khi buộc phải chuyển đi hai lần trong vòng 5 năm, khách hàng gặp khó khăn
                                        trong việc tìm kiếm chúng tôi và doanh số bán hàng của chúng tôi sụt giảm. Công
                                        ty Lorem Ipsum không chỉ hồi sinh thương hiệu của chúng tôi."</p>
                                    <div class="reviewer-profile">
                                        <div class="reviewer-image">
                                            <img src="<?= _WEB_ROOT ?>assets/client/images/inner-page/user/4.jpg"
                                                 class="blur-up lazyload" alt="">
                                        </div>

                                        <div class="reviewer-name">
                                            <h4>Terry G. Fain</h4>
                                            <h6>Nhiếp ảnh gia</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slick-slide slick-cloned" data-slick-index="12" id="" aria-hidden="true"
                                 tabindex="-1" style="width: 540px;">
                                <div class="reviewer-box">
                                    <i class="fa-solid fa-quote-right"></i>
                                    <div class="product-rating">
                                        <ul class="rating">
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-star fill">
                                                    <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-star fill">
                                                    <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-star fill">
                                                    <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-star fill">
                                                    <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-star">
                                                    <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                            </li>
                                        </ul>
                                    </div>

                                    <h3>Chất lượng hàng đầu, Vị trí đẹp</h3>

                                    <p>"Lúc đầu, tôi nghi ngờ về SEO và tiếp thị nội dung, nhưng Công ty Lorem Ipsum
                                        không chỉ chứng tỏ được khả năng tài chính của mình mà phản hồi mà tôi nhận được
                                        từ khách hàng thật đáng kinh ngạc."</p>
                                    <div class="reviewer-profile">
                                        <div class="reviewer-image">
                                            <img src="<?= _WEB_ROOT ?>assets/client/images/inner-page/user/1.jpg"
                                                 class="blur-up lazyload" alt="">
                                        </div>

                                        <div class="reviewer-name">
                                            <h4>Gwen J. Geiger</h4>
                                            <h6>Nhà thiết kế</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slick-slide slick-cloned" data-slick-index="13" id="" aria-hidden="true"
                                 tabindex="-1" style="width: 540px;">
                                <div class="reviewer-box">
                                    <i class="fa-solid fa-quote-right"></i>
                                    <div class="product-rating">
                                        <ul class="rating">
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-star fill">
                                                    <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-star fill">
                                                    <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-star fill">
                                                    <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-star fill">
                                                    <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-star">
                                                    <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                            </li>
                                        </ul>
                                    </div>

                                    <h3>Chất lượng hàng đầu, Vị trí đẹp</h3>

                                    <p>"Jeramy và nhóm của anh ấy tại Công ty Lorem Ipsum đã hoàn thiện trang web của
                                        tôi đúng vào mùa thuế. Tôi rất phấn khích trước kết quả và tự hào một lần nữa
                                        hướng khách hàng đến trang web của mình."</p>

                                    <div class="reviewer-profile">
                                        <div class="reviewer-image">
                                            <img src="<?= _WEB_ROOT ?>assets/client/images/inner-page/user/2.jpg"
                                                 class="blur-up lazyload" alt="">
                                        </div>

                                        <div class="reviewer-name">
                                            <h4>Constance K. Whang</h4>
                                            <h6>Giám đốc điều hành, Công ty</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slick-slide slick-cloned" data-slick-index="14" id="" aria-hidden="true"
                                 tabindex="-1" style="width: 540px;">
                                <div class="reviewer-box">
                                    <i class="fa-solid fa-quote-right"></i>
                                    <div class="product-rating">
                                        <ul class="rating">
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-star fill">
                                                    <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-star fill">
                                                    <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-star fill">
                                                    <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-star fill">
                                                    <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-star">
                                                    <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                            </li>
                                        </ul>
                                    </div>

                                    <h3>Chất lượng hàng đầu, Vị trí đẹp</h3>

                                    <p>"Ừ, và nếu bạn là giáo hoàng thì tất cả họ sẽ nói, "Hãy chỉnh lại mũ giáo hoàng
                                        của bạn." Và "Hãy mặc bộ lễ phục đẹp vào." Tên của họ là gì? Đúng, tôi nhớ. Họ
                                        đứng cuối cùng tại Thế vận hội!"</p>
                                    <div class="reviewer-profile">
                                        <div class="reviewer-image">
                                            <img src="<?= _WEB_ROOT ?>assets/client/images/inner-page/user/3.jpg"
                                                 class="blur-up lazyload" alt="">
                                        </div>

                                        <div class="reviewer-name">
                                            <h4>Christopher R. Lee</h4>
                                            <h6>Giám đốc điều hành</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slick-slide slick-cloned" data-slick-index="15" id="" aria-hidden="true"
                                 tabindex="-1" style="width: 540px;">
                                <div class="reviewer-box">
                                    <i class="fa-solid fa-quote-right"></i>
                                    <div class="product-rating">
                                        <ul class="rating">
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-star fill">
                                                    <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-star fill">
                                                    <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-star fill">
                                                    <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-star fill">
                                                    <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-star">
                                                    <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                            </li>
                                        </ul>
                                    </div>

                                    <h3>Chất lượng hàng đầu, Vị trí đẹp</h3>

                                    <p>"Người đàn ông tốt. Nixon ủng hộ chiến tranh và ủng hộ gia đình. Này, hãy nói cho
                                        tôi biết điều gì đi. Anh có tất cả số tiền này. Tại sao anh luôn ăn mặc như đang
                                        giặt đồ vậy? Thế còn họ Knicks thì sao? Loại nào? liệu tôi có trở thành một
                                        người cha nếu tôi nói không?"</p>
                                    <div class="reviewer-profile">
                                        <div class="reviewer-image">
                                            <img src="<?= _WEB_ROOT ?>assets/client/images/inner-page/user/4.jpg"
                                                 class="blur-up lazyload" alt="">
                                        </div>

                                        <div class="reviewer-name">
                                            <h4>Eileen R. Chu</h4>
                                            <h6>Giám đốc tiếp thị</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <ul class="slick-dots" style="" role="tablist">
                        <li class="" role="presentation">
                            <button type="button" role="tab" id="slick-slide-control10" aria-controls="slick-slide10"
                                    aria-label="1 trong 3" tabindex="-1" fdprocessedid="uq5ldr">1
                            </button>
                        </li>
                        <li role="presentation" class="">
                            <button type="button" role="tab" id="slick-slide-control11" aria-controls="slick-slide11"
                                    aria-label="2 trên 3" tabindex="-1">2
                            </button>
                        </li>
                        <li role="presentation">
                            <button type="button" role="tab" id="slick-slide-control12" aria-controls="slick-slide12"
                                    aria-label="3 trên 3" tabindex="-1">3
                            </button>
                        </li>
                        <li role="presentation">
                            <button type="button" role="tab" id="slick-slide-control13" aria-controls="slick-slide13"
                                    aria-label="4 trên 3" tabindex="-1">4
                            </button>
                        </li>
                        <li role="presentation">
                            <button type="button" role="tab" id="slick-slide-control14" aria-controls="slick-slide14"
                                    aria-label="5 trên 3" tabindex="-1">5
                            </button>
                        </li>
                        <li role="presentation">
                            <button type="button" role="tab" id="slick-slide-control15" aria-controls="slick-slide15"
                                    aria-label="6 trên 3" tabindex="-1">6
                            </button>
                        </li>
                        <li role="presentation">
                            <button type="button" role="tab" id="slick-slide-control16" aria-controls="slick-slide16"
                                    aria-label="7 trên 3" tabindex="-1">7
                            </button>
                        </li>
                        <li role="presentation" class="slick-active">
                            <button type="button" role="tab" id="slick-slide-control17" aria-controls="slick-slide17"
                                    aria-label="8 trên 3" tabindex="0" aria-selected="true" fdprocessedid="fy0l2g">số 8
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Review Section End -->

<!-- Blog Section Start -->
<section class="section-lg-space">
    <div class="container-fluid-lg">
        <div class="about-us-title text-center">
            <h4 class="text-content">Blog của chúng tôi</h4>
            <h2 class="center">Blog mới nhất của chúng tôi</h2>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="slider-5 ratio_87 slick-initialized slick-slider">
                    <div class="slick-list draggable">
                        <div class="slick-track"
                             style="opacity: 1; width: 1700px; transform: translate3d(0px, 0px, 0px);">
                            <div class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false"
                                 tabindex="0" style="width: 340px;">
                                <div class="blog-box">
                                    <div class="blog-box-image">
                                        <div class="blog-image">
                                            <a href="blog-detail.html" class="rounded-3 bg-size blur-up lazyloaded"
                                               tabindex="0"
                                               style="background-image: url(&quot;<?= _WEB_ROOT ?>assets/client/images/veg-2/blog/1.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                <img src="<?= _WEB_ROOT ?>assets/client/images/veg-2/blog/1.jpg"
                                                     class="bg-img blur-up lazyload" alt="" style="display: none;">
                                            </a>
                                        </div>
                                    </div>

                                    <a href="blog-detail.html" class="blog-detail d-block" tabindex="0">
                                        <h6>trang trại</h6>
                                        <h5>Xúc xích thịt tươi</h5>
                                    </a>
                                </div>
                            </div>
                            <div class="slick-slide slick-active" data-slick-index="1" aria-hidden="false" tabindex="0"
                                 style="width: 340px;">
                                <div class="blog-box">
                                    <div class="blog-box-image">
                                        <div class="blog-image">
                                            <a href="blog-detail.html" class="rounded-3 bg-size blur-up lazyloaded"
                                               tabindex="0"
                                               style="background-image: url(&quot;<?= _WEB_ROOT ?>assets/client/images/veg-2/blog/2.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                <img src="<?= _WEB_ROOT ?>assets/client/images/veg-2/blog/2.jpg"
                                                     class="bg-img blur-up lazyload" alt="" style="display: none;">
                                            </a>
                                        </div>
                                    </div>

                                    <a href="blog-detail.html" class="blog-detail d-block" tabindex="0">
                                        <h6>Thương hiệu nước ngọt</h6>
                                        <h5>Soda 500ml - GIẢM GIÁ 20%</h5>
                                    </a>
                                </div>
                            </div>
                            <div class="slick-slide slick-active" data-slick-index="2" aria-hidden="false" tabindex="0"
                                 style="width: 340px;">
                                <div class="blog-box">
                                    <div class="blog-box-image">
                                        <div class="blog-image">
                                            <a href="blog-detail.html" class="rounded-3 bg-size blur-up lazyloaded"
                                               tabindex="0"
                                               style="background-image: url(&quot;<?= _WEB_ROOT ?>assets/client/images/veg-2/blog/3.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                <img src="<?= _WEB_ROOT ?>assets/client/images/veg-2/blog/3.jpg"
                                                     class="bg-img blur-up lazyload" alt="" style="display: none;">
                                            </a>
                                        </div>
                                    </div>

                                    <a href="blog-detail.html" class="blog-detail d-block" tabindex="0">
                                        <h6>Thương hiệu bia</h6>
                                        <h5>Soda 500ml - GIẢM GIÁ 20%</h5>
                                    </a>
                                </div>
                            </div>
                            <div class="slick-slide slick-active" data-slick-index="3" aria-hidden="false" tabindex="0"
                                 style="width: 340px;">
                                <div class="blog-box">
                                    <div class="blog-box-image">
                                        <div class="blog-image">
                                            <a href="blog-detail.html" class="rounded-3 bg-size blur-up lazyloaded"
                                               tabindex="0"
                                               style="background-image: url(&quot;<?= _WEB_ROOT ?>assets/client/images/veg-2/blog/4.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                <img src="<?= _WEB_ROOT ?>assets/client/images/veg-2/blog/4.jpg"
                                                     class="bg-img blur-up lazyload" alt="" style="display: none;">
                                            </a>
                                        </div>
                                    </div>

                                    <a href="blog-detail.html" class="blog-detail d-block" tabindex="0">
                                        <h6>Thương hiệu bia</h6>
                                        <h5>Bia tươi - GIẢM GIÁ 30%</h5>
                                    </a>
                                </div>
                            </div>
                            <div class="slick-slide slick-active" data-slick-index="4" aria-hidden="false" tabindex="0"
                                 style="width: 340px;">
                                <div class="blog-box">
                                    <div class="blog-image">
                                        <a href="blog-detail.html" class="rounded-3 bg-size blur-up lazyloaded"
                                           tabindex="0"
                                           style="background-image: url(&quot;<?= _WEB_ROOT ?>assets/client/images/veg-2/blog/5.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                            <img src="<?= _WEB_ROOT ?>assets/client/images/veg-2/blog/5.jpg"
                                                 class="bg-img blur-up lazyload" alt="" style="display: none;">
                                        </a>
                                    </div>

                                    <a href="blog-detail.html" class="blog-detail d-block" tabindex="0">
                                        <h6>Thương hiệu sữa</h6>
                                        <h5>Sữa tươi</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Section End -->

<!-- Footer Section Start -->
<footer class="section-t-space">
    <div class="container-fluid-lg">
        <div class="service-section">
            <div class="row g-3">
                <div class="col-12">
                    <div class="service-contain">
                        <div class="service-box">
                            <div class="service-image">
                                <img src="<?= _WEB_ROOT ?>assets/client/svg/product.svg" class="blur-up lazyload"
                                     alt="">
                            </div>

                            <div class="service-detail">
                                <h5>Mỗi sản phẩm tươi sống</h5>
                            </div>
                        </div>

                        <div class="service-box">
                            <div class="service-image">
                                <img src="<?= _WEB_ROOT ?>assets/client/svg/delivery.svg" class="blur-up lazyload"
                                     alt="">
                            </div>

                            <div class="service-detail">
                                <h5>Giao hàng miễn phí cho đơn hàng trên 50K</h5>
                            </div>
                        </div>

                        <div class="service-box">
                            <div class="service-image">
                                <img src="<?= _WEB_ROOT ?>assets/client/svg/discount.svg" class="blur-up lazyload"
                                     alt="">
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
                                <img src="<?= _WEB_ROOT ?>assets/client/images/logo/1.png" class="blur-up lazyload"
                                     alt="">
                            </a>
                        </div>

                        <div class="footer-logo-contain">
                            <p>Chúng tôi là một quán bar thân thiện phục vụ nhiều loại cocktail, rượu vang và bia. Quán
                                bar của chúng tôi là nơi hoàn hảo cho một cặp đôi</p>

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
                                            <img src="<?= _WEB_ROOT ?>assets/client/images/playstore.svg"
                                                 class="blur-up lazyload" alt="">
                                        </a>
                                    </li>
                                    <li class="mb-0">
                                        <a href="https://www.apple.com/in/app-store/" target="_blank">
                                            <img src="<?= _WEB_ROOT ?>assets/client/images/appstore.svg"
                                                 class="blur-up lazyload" alt="">
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

<!-- Location Modal Start -->
<div class="modal location-modal fade theme-modal" id="locationModal" tabindex="-1" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Chọn địa điểm giao hàng của bạn</h5>
                <p class="mt-1 text-content">Nhập địa chỉ của bạn và chúng tôi sẽ chỉ định ưu đãi cho khu vực của
                    bạn.</p>
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
<div class="modal fade theme-modal deal-modal" id="deal-box" tabindex="-1" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
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
                                    <img src="<?= _WEB_ROOT ?>assets/client/images/vegetable/product/10.png"
                                         class="blur-up lazyload" alt="">
                                </a>

                                <a href="/" class="deal-contain">
                                    <h5>Cà Phê Hòa Tan Pha Trộn 50 g Mua 1 Tặng 1</h5>
                                    <h6>$52.57
                                        <del>57.62</del>
                                        <span>500 G</span></h6>
                                </a>
                            </div>
                        </li>

                        <li class="list-2">
                            <div class="deal-offer-contain">
                                <a href="/" class="deal-image">
                                    <img src="<?= _WEB_ROOT ?>assets/client/images/vegetable/product/11.png"
                                         class="blur-up lazyload" alt="">
                                </a>

                                <a href="/" class="deal-contain">
                                    <h5>Cà Phê Hòa Tan Pha Trộn 50 g Mua 1 Tặng 1</h5>
                                    <h6>$52.57
                                        <del>57.62</del>
                                        <span>500 G</span></h6>
                                </a>
                            </div>
                        </li>

                        <li class="list-3">
                            <div class="deal-offer-contain">
                                <a href="/" class="deal-image">
                                    <img src="<?= _WEB_ROOT ?>assets/client/images/vegetable/product/12.png"
                                         class="blur-up lazyload" alt="">
                                </a>

                                <a href="/" class="deal-contain">
                                    <h5>Cà Phê Hòa Tan Pha Trộn 50 g Mua 1 Tặng 1</h5>
                                    <h6>$52.57
                                        <del>57.62</del>
                                        <span>500 G</span></h6>
                                </a>
                            </div>
                        </li>

                        <li class="list-1">
                            <div class="deal-offer-contain">
                                <a href="/" class="deal-image">
                                    <img src="<?= _WEB_ROOT ?>assets/client/images/vegetable/product/13.png"
                                         class="blur-up lazyload" alt="">
                                </a>

                                <a href="/" class="deal-contain">
                                    <h5>Cà Phê Hòa Tan Pha Trộn 50 g Mua 1 Tặng 1</h5>
                                    <h6>$52.57
                                        <del>57.62</del>
                                        <span>500 G</span></h6>
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
