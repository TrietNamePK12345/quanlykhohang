
<!-- page-wrapper Start -->
<div class="page-wrapper compact-wrapper" id="pageWrapper">
    <!-- Page Header Start -->
    <div class="page-header">
        <div class="header-wrapper m-0">
            <div class="header-logo-wrapper p-0">
                <div class="logo-wrapper">
                    <a href="">
                        <img class="img-fluid main-logo" src="assets/images/logo/1.png" alt="logo">
                        <img class="img-fluid white-logo" src="assets/images/logo/1-white.png" alt="logo">
                    </a>
                </div>
                <div class="toggle-sidebar">
                    <i class="status_toggle middle sidebar-toggle" data-feather="align-center"></i>
                    <a href="">
                        <img src="assets/images/logo/1.png" class="img-fluid" alt="">
                    </a>
                </div>
            </div>

            <div class="nav-right col-6 pull-right right-header p-0">
                <ul class="nav-menus">
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
    <!-- Page Header End -->

    <!-- Page Body Start -->
    <div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
        <div class="sidebar-wrapper">
            <div id="sidebarEffect"></div>
            <div>
                <div class="logo-wrapper logo-wrapper-center">
                    <a href="" data-bs-original-title="" title="">
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
                    <a href="">
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
                                <a class="sidebar-link sidebar-title link-nav" href="/dashboard">
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
                                        <a href="/chuyen-kho">Chuyển kho</a>
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
                <form action="/them-don-hang" method="post">
                    <input type="hidden" name="creator_id" value="<?= \App\Core\Session::get('user')['user_id']?>">
                    <div class="col-sm-12">
                        <div class="card card-table">
                            <h6> <a href="/danh-sach-nhap-hang"><i class="fa-solid fa-arrow-left"></i> Quay lại quản lí nhập hàng</a></h6>
                            <div class="title-header option-title d-sm-flex d-block ">
                                <h5>Tạo đơn nhập hàng</h5>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-8">
                            <!-- INFO SUPPLIERS -->
                            <div class="card card-table">
                                <div class="card-body">
                                    <div class="title-header option-title d-sm-flex d-block ">
                                        <h5>Thông tin nhà cung cấp</h5>
                                    </div>
                                    <div class="mb-4 row align-items-center mt-3">
                                        <div class="col-sm-12">
                                            <div class="form-control">{{$oneImport['name_supplier']}}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Table End -->



                            <!-- INFO PRODUCTS -->
                            <div class="card card-table">
                                <div class="card-body">
                                    <div class="title-header option-title d-sm-flex d-block ">
                                        <h5>Thông tin sản phẩm</h5>
                                    </div>
                                    <div class="mb-4 row align-items-center mt-3">
                                        <div class="col-sm-12" id="filter">
                                            <div class="form-control">{{$oneImport['name_product']}}</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="table-responsive">
                                    <table id="table_id" class="table role-table all-package theme-table">
                                        <thead>
                                        <tr>
                                            <th>Mã sản phẩm</th>
                                            <th>Ảnh sản phẩm</th>
                                            <th>Tên sản phẩm</th>
                                            <th>Số lượng</th>
                                            <th>Giá</th>
                                            <th>Tổng giá</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        <tr>
                                            <td>{{$oneImport['productId']}}</td>
                                            <td><div class="table-image">
                                                    <img src="<?=_WEB_ROOT?>{{$oneImport['imagePro']}}" class="img-fluid"
                                                         alt="">
                                                </div>
                                            </td>
                                            <td>{{$oneImport['name_product']}}</td>
                                            <td>{{number_format($oneImport['qty_buy'])}}</td>
                                            <td>{{number_format($oneImport['import_price'])}}</td>
                                            <td>{{number_format($oneImport['totalImport'])}} VNĐ</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- INFO PRODUCTS END -->
                        </div>

                        <div class="col-sm-4">
                            <!-- Table Start -->
                            <div class="card card-table">
                                <div class="card-body">
                                    <div class="title-header option-title d-sm-flex d-block ">
                                        <h5>Thông tin đơn hàng</h5>
                                    </div>
                                    <div class="mb-4 row align-items-center mt-3">
                                        <div class="col-sm-12">
                                            <label class="form-label-title">Mã nhập hàng</label>
                                            <div class="form-control">{{$oneImport['import_id']}}</div>
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center mt-3">
                                        <div class="col-sm-12">
                                            <label class="form-label-title">Nơi nhận</label>
                                            <div class="form-control">{{$oneImport['name_warehouse']}}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Table End -->


                            <!-- Table Start -->
                            <div class="card card-table">
                                <div class="card-body">
                                    <div class="title-header option-title d-sm-flex d-block ">
                                        <h5>Ghi chú</h5>
                                    </div>
                                    <div class="mb-4 row align-items-center mt-3">
                                        <div class="col-sm-12">
                                            <textarea disabled class="form-control" name="note" id="" cols="50" rows="8">{{$oneImport['note']}}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Table End -->
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

    <!-- footer start-->
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
<!-- Page Body End -->
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

