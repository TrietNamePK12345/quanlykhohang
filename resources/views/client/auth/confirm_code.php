
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

<!-- log in section start -->
<section class="log-in-section section-b-space forgot-section">
    <div class="container-fluid-lg w-100">
        <div class="row">
            <div class="col-xxl-6 col-xl-5 col-lg-6 d-lg-block d-none ms-auto">
                <div class="image-contain">
                    <img src="<?=_WEB_ROOT?>assets/client/images/inner-page/forgot.png" class="img-fluid" alt="">
                </div>
            </div>

            <div class="col-xxl-4 col-xl-5 col-lg-6 col-sm-8 mx-auto">
                <div class="d-flex align-items-center justify-content-center h-100">
                    <div class="log-in-box">
                        <div class="log-in-title">
                            <h3>Chào mừng đến FastKart</h3>
                            <h4>Khôi phục mật khẩu</h4>
                        </div>

                        <div class="input-box">
                            <form class="row g-4" action="" method="post">
                                <div class="col-12">
                                    <div class="form-floating theme-form-floating">
                                        <input type="email" name="email" class="form-control <?= (!empty($errors) && array_key_exists('email', $errors)) ? 'is-invalid' : (isset($old['email']) ? 'is-valid' : '') ?>" value="<?= !empty($old['email']) ? $old['email'] : false ?>" id="email" placeholder="Email" >
                                        <label>Mã Code</label>
                                        <div class="invalid-feedback">
                                            <?= (!empty($errors) && array_key_exists('email', $errors)) ? "<span style='color:red'>" . $errors['email'] . "</span>" : '' ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button class="btn btn-animation w-100" type="submit">Quên mật khẩu</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- log in section end -->

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

