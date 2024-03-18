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
                    <h2>Liên hệ chúng tôi</h2>
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a href="index.html">
                                    <i class="fa-solid fa-house"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Liên hệ chúng tôi</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Contact Box Section Start -->
<section class="contact-box-section">
    <div class="container-fluid-lg">
        <div class="row g-lg-5 g-3">
            <div class="col-lg-6">
                <div class="left-sidebar-box">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="contact-image">
                                <img src="<?=_WEB_ROOT?>assets/client/images/inner-page/contact-us.png" class="img-fluid blur-up lazyloaded" alt="">
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="contact-title">
                                <h3>Liên lạc</h3>
                            </div>

                            <div class="contact-detail">
                                <div class="row g-4">
                                    <div class="col-xxl-6 col-lg-12 col-sm-6">
                                        <div class="contact-detail-box">
                                            <div class="contact-icon">
                                                <i class="fa-solid fa-phone"></i>
                                            </div>
                                            <div class="contact-detail-title">
                                                <h4>Điện thoại</h4>
                                            </div>

                                            <div class="contact-detail-contain">
                                                <p>(+1) 618 190 496</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xxl-6 col-lg-12 col-sm-6">
                                        <div class="contact-detail-box">
                                            <div class="contact-icon">
                                                <i class="fa-solid fa-envelope"></i>
                                            </div>
                                            <div class="contact-detail-title">
                                                <h4>E-mail</h4>
                                            </div>

                                            <div class="contact-detail-contain">
                                                <p>geweto9420@chokxus.com</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xxl-6 col-lg-12 col-sm-6">
                                        <div class="contact-detail-box">
                                            <div class="contact-icon">
                                                <i class="fa-solid fa-location-dot"></i>
                                            </div>
                                            <div class="contact-detail-title">
                                                <h4>Văn phòng Luân Đôn</h4>
                                            </div>

                                            <div class="contact-detail-contain">
                                                <p>Cruce Casa de Postas 29</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xxl-6 col-lg-12 col-sm-6">
                                        <div class="contact-detail-box">
                                            <div class="contact-icon">
                                                <i class="fa-solid fa-building"></i>
                                            </div>
                                            <div class="contact-detail-title">
                                                <h4>Văn phòng Bournemouth</h4>
                                            </div>

                                            <div class="contact-detail-contain">
                                                <p>Chuyến thăm của Encina 22</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="title d-xxl-none d-block">
                    <h2>Liên hệ chúng tôi</h2>
                </div>
                <div class="right-sidebar-box">
                    <div class="row">
                        <div class="col-xxl-6 col-lg-12 col-sm-6">
                            <div class="mb-md-4 mb-3 custom-form">
                                <label for="exampleFormControlInput" class="form-label">Tên đầu tiên</label>
                                <div class="custom-input">
                                    <input type="text" class="form-control" id="exampleFormControlInput" placeholder="Nhập tên đầu tiên" fdprocessedid="yjgvcj">
                                    <i class="fa-solid fa-user"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-6 col-lg-12 col-sm-6">
                            <div class="mb-md-4 mb-3 custom-form">
                                <label for="exampleFormControlInput1" class="form-label">Họ</label>
                                <div class="custom-input">
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nhập họ" fdprocessedid="ikou2y">
                                    <i class="fa-solid fa-user"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-6 col-lg-12 col-sm-6">
                            <div class="mb-md-4 mb-3 custom-form">
                                <label for="exampleFormControlInput2" class="form-label">Địa chỉ email</label>
                                <div class="custom-input">
                                    <input type="email" class="form-control" id="exampleFormControlInput2" placeholder="Nhập địa chỉ email" fdprocessedid="80qeti">
                                    <i class="fa-solid fa-envelope"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-6 col-lg-12 col-sm-6">
                            <div class="mb-md-4 mb-3 custom-form">
                                <label for="exampleFormControlInput3" class="form-label">Số điện thoại</label>
                                <div class="custom-input">
                                    <input type="tel" class="form-control" id="exampleFormControlInput3" placeholder="Nhập số điện thoại của bạn" maxlength="10" oninput="javascript: if (this.value.length > this.maxLength) this.value =
                                            this.value.slice(0, this.maxLength);" fdprocessedid="8pkjw6">
                                    <i class="fa-solid fa-mobile-screen-button"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="mb-md-4 mb-3 custom-form">
                                <label for="exampleFormControlTextarea" class="form-label">Tin nhắn</label>
                                <div class="custom-textarea">
                                    <textarea class="form-control" id="exampleFormControlTextarea" placeholder="Nhập tin nhắn của bạn" rows="6"></textarea>
                                    <i class="fa-solid fa-message"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-animation btn-md fw-bold ms-auto" fdprocessedid="shahb">Gửi tin nhắn</button>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Box Section End -->

<!-- Map Section Start -->
<section class="map-section">
    <div class="container-fluid p-0">
        <div class="map-box">
            <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d2994.3803116994895!2d55.29773782339708!3d25.222534631321!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m5!1s0x3e5f43496ad9c645%3A0xbde66e5084295162!2sDubai%20-%20United%20Arab%20Emirates!3m2!1d25.2048493!2d55.2707828!4m0!5e1!3m2!1sen!2sin!4v1652217109535!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</section>
<!-- Map Section End -->

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


