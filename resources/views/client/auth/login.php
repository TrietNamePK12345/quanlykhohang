

<div class="container-fluid">
    <div class="row">
        <div class="col-12 vh-100 log-in-section background-image-2 section-b-space">
                        <div class="col-xxl-6 col-xl-5 col-lg-6 d-lg-block d-none ms-auto">
                            <div class="image-contain">
                                <img src="<?=_WEB_ROOT?>assets/client/images/inner-page/log-in.png" class="img-fluid" alt="">
                            </div>
                        </div>

                        <div class="col-xxl-4 col-xl-5 col-lg-6 col-sm-8 mx-auto">
                            <div class="log-in-box">
                                <div class="log-in-title">
                                    <h3>Chào mừng đến với Fastkart</h3>
                                    <h4>Đăng nhập tài khoản của bạn</h4>
                                </div>

                                <div class="input-box">
                                    <form class="row g-4" action="/dang-nhap" method="post">
                                        <div class="col-12">
                                            <div class="form-floating theme-form-floating">
                                                <input type="email" name="email" class="form-control <?= (!empty($errors) && array_key_exists('email', $errors)) ? 'is-invalid' : (isset($old['email']) ? 'is-valid' : '') ?>" value="<?= !empty($old['email']) ? $old['email'] : '' ?>" id="email" placeholder="Email">
                                                <label>Email</label>
                                                <div class="invalid-feedback">
                                                    <?= (!empty($errors) && array_key_exists('email', $errors)) ? "<span style='color:red'>" . $errors['email'] . "</span>" : '' ?>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-floating theme-form-floating">
                                                <input type="password" name="password" class="form-control <?= (!empty($errors) && array_key_exists('password', $errors)) ? 'is-invalid' : (isset($old['password']) ? 'is-valid' : '') ?>" id="password" placeholder="Mật khẩu">
                                                <label>Mật khẩu</label>
                                                <div class="invalid-feedback">
                                                    <?= (!empty($errors) && array_key_exists('password', $errors)) ? "<span style='color:red'>" . $errors['password'] . "</span>" : '' ?>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-12">
                                            <button class="btn btn-animation w-100 justify-content-center" type="submit">Đăng nhập</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
            <!-- log in section end -->
        </div>
    </div>
</div>


