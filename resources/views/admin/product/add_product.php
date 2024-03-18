<!-- tap on top start-->
<div class="tap-top">
    <span class="lnr lnr-chevron-up"></span>
</div>
<!-- tap on tap end-->

<!-- page-wrapper Start-->
<div class="page-wrapper compact-wrapper" id="pageWrapper">
    <!-- Page Header Start-->
    <div class="page-header">
        <div class="header-wrapper m-0">
            <div class="header-logo-wrapper p-0">
                <div class="logo-wrapper">
                    <a href="/dashboard">
                        <img class="img-fluid main-logo" src="<?=_WEB_ROOT?>assets/admin/images/logo/1.png" alt="logo">
                        <img class="img-fluid white-logo" src="<?=_WEB_ROOT?>assets/admin/images/logo/1-white.png" alt="logo">
                    </a>
                </div>
                <div class="toggle-sidebar">
                    <i class="status_toggle middle sidebar-toggle" data-feather="align-center"></i>
                    <a href="/dashboard">
                        <img src="<?=_WEB_ROOT?>assets/admin/images/logo/1.png" class="img-fluid" alt="">
                    </a>
                </div>
            </div>
            <div class="nav-right col-6 pull-right right-header p-0">
                <ul class="nav-menus">
                    <li>
                            <span class="header-search">
                                <i class="ri-search-line"></i>
                            </span>
                    </li>
                    <li>
                        <div class="mode">
                            <i class="ri-moon-line"></i>
                        </div>
                    </li>
                    <li class="profile-nav onhover-dropdown pe-0 me-0">
                        <div class="media profile-media">
                            <img class="user-profile rounded-circle" src="<?= \App\Core\Session::get('user')['avatar']; ?>" alt="">
                            <div class="user-name-hide media-body">
                                <span>Chào, <?= \App\Core\Session::get('user')['name']; ?></span>
                                <p class="mb-0 font-roboto">Quản trị viên<i class="middle ri-arrow-down-s-line"></i></p>
                            </div>
                        </div>
                        <ul class="profile-dropdown onhover-show-div">
                            <li>
                                <a data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                                   href="/dang-xuat">
                                    <i data-feather="log-out"></i>
                                    <span>Đăng xuất</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Page Header Ends-->

    <!-- Page Body Start-->
    <div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
        <div class="sidebar-wrapper">
            <div id="sidebarEffect"></div>
            <div>
                <div class="logo-wrapper logo-wrapper-center">
                    <a href="index.html" data-bs-original-title="" title="">
                        <img class="img-fluid for-white" src="<?=_WEB_ROOT?>assets/admin/images/logo/full-white.png" alt="logo">
                    </a>
                    <div class="back-btn">
                        <i class="fa fa-angle-left"></i>
                    </div>
                    <div class="toggle-sidebar">
                        <i class="ri-apps-line status_toggle middle sidebar-toggle"></i>
                    </div>
                </div>
                <div class="logo-icon-wrapper">
                    <a href="index.html">
                        <img class="img-fluid main-logo main-white" src="<?=_WEB_ROOT?>assets/admin/images/logo/1-white.png" alt="logo">
                        <img class="img-fluid main-logo main-dark" src="<?=_WEB_ROOT?>assets/admin/images/logo/logo-white.png"
                             alt="logo">
                    </a>
                </div>
                <nav class="sidebar-main">
                    <div class="left-arrow" id="left-arrow">
                        <i data-feather="arrow-left"></i>
                    </div>

                    <div id="sidebar-menu">
                        <ul class="sidebar-links" id="simple-bar">
                            <li class="back-btn"></li>

                            <li class="sidebar-list">
                                <a class="sidebar-link sidebar-title link-nav" href="dashboard">
                                    <i class="ri-home-line"></i>
                                    <span>Tổng Quan Tồn Kho</span>
                                </a>
                            </li>

                            <li class="sidebar-list">
                                <a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
                                    <i class="ri-store-3-line"></i>
                                    <span>Quản lí kho hàng</span>
                                </a>
                                <ul class="sidebar-submenu">
                                    <li>
                                        <a href="/danh-sach-san-pham">Sản phẩm</a>
                                    </li>

                                    <li>
                                        <a href="/danh-sach-nhap-hang">Nhập kho</a>
                                    </li>

                                    <li>
                                        <a href="/danh-sach-nha-cung-cap">Nhà cung cấp</a>
                                    </li>

                                    <li>
                                        <a href="/danh-sach-kho-hang">Danh sách kho hàng</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                    <div class="right-arrow" id="right-arrow">
                        <i data-feather="arrow-right"></i>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Page Sidebar Ends-->

        <!-- Container-fluid starts-->
        <div class="page-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card card-table">
                            <div class="card-body">
                                <h6> <a href="/danh-sach-san-pham"><i class="fa-solid fa-arrow-left"></i> Quay lại danh sách sản phầm</a></h6>
                                <div class="title-header option-title d-sm-flex d-block mb-5">
                                    <h5>Thêm sản phẩm</h5>
                                    <div class="right-options">
                                        <ul>
                                            <li>
                                                <a class="btn btn-solid" data-bs-toggle="modal"
                                                   data-bs-target="#addCategory">Thêm danh mục</a>
                                                <!--Thêm danh mục-->
                                                <div class=" modal fade theme-modal"
                                                     id="addCategory" tabindex="-1"
                                                     role="dialog" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header d-block text-center">
                                                                <h5 class="modal-title w-100" id="exampleModalLabel22">
                                                                    Thêm danh mục
                                                                </h5>
                                                                <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal" aria-label="Close">
                                                                    <i class="fas fa-times"></i>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form class="profile-form" method="post"
                                                                      action="/them-loai">
                                                                    <div class="card-body mb-3">
                                                                        <div class="row">
                                                                            <div class="col-sm-6 m-b30">
                                                                                <label class="form-label">Mã loại</label>
                                                                                <input type="text" class="form-control"
                                                                                       name="category_id"
                                                                                       placeholder="Nhập mã loại" >
                                                                            </div>
                                                                            <div class="col-sm-6 m-b30">
                                                                                <label class="form-label">Tên loại</label>
                                                                                <input type="text" class="form-control"
                                                                                       name="name"
                                                                                       placeholder="Nhập tên loại" required>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button"
                                                                        class="btn btn-animation btn-md fw-bold"
                                                                        data-bs-dismiss="modal">Đóng</button>

                                                                <button type="submit"
                                                                        class="btn btn-animation btn-md fw-bold"
                                                                        >Thêm</button>
                                                            </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <li>
                                                <a class="btn btn-solid" data-bs-toggle="modal"
                                                   data-bs-target="#addProducer">Thêm nhà sản xuất</a>
                                                <!--Thêm danh mục-->
                                                <div class=" modal fade theme-modal"
                                                     id="addProducer" tabindex="-1"
                                                     role="dialog" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header d-block text-center">
                                                                <h5 class="modal-title w-100" id="exampleModalLabel22">Thêm nhà sản xuất
                                                                </h5>
                                                                <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal" aria-label="Close">
                                                                    <i class="fas fa-times"></i>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form class="profile-form" method="post"
                                                                      action="/them-nha-san-xuat">
                                                                    <div class="card-body mb-3">
                                                                        <div class="row">
                                                                            <div class="col-sm-6 m-b30">
                                                                                <label class="form-label">Mã nhà sản xuất</label>
                                                                                <input type="text" class="form-control"
                                                                                       name="producer_id"
                                                                                       value="" placeholder="Nhập mã nhà sản xuất" >
                                                                            </div>
                                                                            <div class="col-sm-6 m-b30">
                                                                                <label class="form-label">Tên nhà sản xuất</label>
                                                                                <input type="text" class="form-control"
                                                                                       name="name"
                                                                                       value="" placeholder="Nhập tên nhà sản xuất" required>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <hr>
                                                                    <div class="card-body mt-3">
                                                                        <div class="col-sm-12 m-b30">
                                                                            <label class="form-label">Địa chỉ</label>
                                                                            <input type="text" class="form-control"
                                                                                   name="address"
                                                                                   value="" placeholder="Địa chỉ nhà sản xuất" required>
                                                                        </div>
                                                                    </div>

                                                                    <div class="card-body mt-3">
                                                                        <div class="col-sm-12 m-b30">
                                                                            <label class="form-label"> Số điện thoại</label>
                                                                            <input type="text" class="form-control"
                                                                                   name="tel"
                                                                                   value="" placeholder="Nhập số điện thoại" required>
                                                                        </div>
                                                                    </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button"
                                                                        class="btn btn-animation btn-md fw-bold"
                                                                        data-bs-dismiss="modal">Đóng</button>

                                                                <button type="submit"
                                                                        class="btn btn-animation btn-md fw-bold">Thêm</button>
                                                            </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <li>
                                                <a class="btn btn-solid" data-bs-toggle="modal"
                                                   data-bs-target="#addUnit">Thêm đơn vị tính</a>
                                                <!--Thêm đơn vị tính-->
                                                <div class=" modal fade theme-modal"
                                                     id="addUnit" tabindex="-1"
                                                     role="dialog" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header d-block text-center">
                                                                <h5 class="modal-title w-100" id="exampleModalLabel22">
                                                                    Thêm đơn vị
                                                                </h5>
                                                                <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal" aria-label="Close">
                                                                    <i class="fas fa-times"></i>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form class="profile-form" method="post"
                                                                      action="/them-don-vi">
                                                                    <div class="card-body mb-3">
                                                                        <div class="row">
                                                                            <div class="col-sm-6 m-b30">
                                                                                <label class="form-label">Mã đơn vị</label>
                                                                                <input type="text" class="form-control"
                                                                                       name="unit_id"
                                                                                       value="" placeholder="Nhập mã đơn vị">
                                                                            </div>
                                                                            <div class="col-sm-6 m-b30">
                                                                                <label class="form-label">Tên đơn vị</label>
                                                                                <input type="text" class="form-control"
                                                                                       name="name"
                                                                                       value="" placeholder="Nhập tên đơn vị" required>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button"
                                                                        class="btn btn-animation btn-md fw-bold"
                                                                        data-bs-dismiss="modal">Đóng</button>

                                                                <button type="submit"
                                                                        class="btn btn-animation btn-md fw-bold"
                                                                        >Thêm</button>
                                                            </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                                <form class="theme-form theme-form-2 mega-form" action="/them-san-pham" enctype="multipart/form-data" method="post">

                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0"> Tên sản phẩm</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="name_product" type="text" placeholder="Nhập tên sản phẩm" required>
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">Mô tả sản phẩm</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" name="description" placeholder="Nhập mô tả sản phẩm"required>
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="col-sm-3 col-form-label form-label-title">Đơn vị tính</label>
                                        <div class="col-sm-9">
                                            <select class="js-example-basic-single w-100" required name="unit_id">
                                                <option selected hidden value="">Chọn đơn vị tính</option>
                                                @foreach($listUnit as $lunit)
                                                <option value="{{$lunit['unit_id']}}">{{$lunit['name']}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="col-sm-3 col-form-label form-label-title">Danh mục sản phẩm</label>
                                        <div class="col-sm-9">
                                            <select class="js-example-basic-single w-100" required name="category_id">
                                                <option value="" selected hidden>Chọn danh mục</option>
                                                @foreach($listCate as $lcate)
                                                <option value="{{$lcate['category_id']}}" name="category_name">{{$lcate['name']}}</option>
                                                @endforeach
                                            </select>

                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="col-sm-3 col-form-label form-label-title">Nhà sản xuất</label>
                                        <div class="col-sm-9">
                                            <select class="js-example-basic-single w-100" required name="producer_id">
                                                <option value="" selected hidden>Chọn nhà sản xuất</option>
                                                @foreach($listProducer as $lproducer)
                                                <option value="{{$lproducer['producer_id']}}" name="producer_name">{{$lproducer['name']}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="col-sm-3 col-form-label form-label-title">Trạng thái sản phẩm</label>
                                        <div class="col-sm-9">
                                            <select class="js-example-basic-single w-100" required name="status">
                                                <option value="" selected hidden>Chọn trạng thái</option>
                                                <option value="Đang bán">Đang bán</option>
                                                <option value="Ngưng bán">Ngưng bán</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label
                                                class="col-sm-3 col-form-label form-label-title">Ảnh</label>
                                        <div class="col-sm-9">
                                            <input class="form-control form-choose" name='image' type="file"
                                                   id="formFile" multiple required>
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="col-sm-3 form-label-title">Giá gốc</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="orginPrice" type="number" min="1000" placeholder="0" required>
                                        </div>
                                    </div>
                                    <div class="mb-4 row align-items-center">
                                        <label class="col-sm-3 form-label-title">Giá bán</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="selling_price" type="number" min="1000" placeholder="0" required>
                                        </div>
                                    </div>

                                    <div class="form-group row text-right mt-5">
                                            <button type="submit" class="btn btn-primary">Thêm sản phẩm</button>
                                    </div>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- New Product Add End -->

    <!-- footer Start -->
    <div class="container-fluid">
        <footer class="footer">
            <div class="row">
                <div class="col-md-12 footer-copyright text-center">
                    <p class="mb-0">Nguyễn Minh Triết - PC06220 - PHP2</p>
                </div>
            </div>
        </footer>
    </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->

        </div>
    </div>
</div>
<!-- page-wrapper End-->

<!-- Modal Start -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
     aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <h5 class="modal-title" id="staticBackdropLabel">Thoát ra</h5>
                <p>Bạn có chắc chắn bạn muốn thoát?</p>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="button-box">
                    <button type="button" class="btn btn--no" data-bs-dismiss="modal">Không</button>
                    <a class="btn btn-primary" href="/dang-xuat">Có</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal End -->
