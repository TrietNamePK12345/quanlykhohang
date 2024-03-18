<!-- page-wrapper Start-->
<div class="page-wrapper compact-wrapper" id="pageWrapper">
    <!-- Page Header Start-->
    <div class="page-header">
        <div class="header-wrapper m-0">
            <div class="header-logo-wrapper p-0">
                <div class="logo-wrapper">
                    <a href="index.html">
                        <img class="img-fluid main-logo" src="<?=_WEB_ROOT?>assets/admin/images/logo/1.png" alt="logo">
                        <img class="img-fluid white-logo" src="<?=_WEB_ROOT?>assets/admin/images/logo/1-white.png" alt="logo">
                    </a>
                </div>
                <div class="toggle-sidebar">
                    <i class="status_toggle middle sidebar-toggle" data-feather="align-center"></i>
                    <a href="index.html">
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
                        <img class="img-fluid main-logo main-white" src="<?=_WEB_ROOT?>assets/admin/images/logo/logo.png" alt="logo">
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
                                    <span>Tổng Quan</span>
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
                                        <a href="danh-sach-nha-cung-cap">Nhà cung cấp</a>
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

        <!-- index body start -->
        <div class="page-body">
            <div class="container-fluid">
                <div class="row">
                    <!-- chart caard section start -->
                    <div class="col-sm-6 col-xxl-3 col-lg-6">
                        <div class="main-tiles border-5 border-0  card-hover card o-hidden">
                            <div class="custome-1-bg b-r-4 card-body">
                                <div class="media align-items-center static-top-widget">
                                    <div class="media-body p-0">
                                        <span class="m-0">Số sản phẩm</span>
                                        <h4 class="mb-0 counter">
                                            @foreach($countPro as $count)
                                            @if($count['countPro'] == 0)
                                            0
                                            @else
                                            {{$count['countPro']}}
                                            @endif
                                            @endforeach
                                        </h4>
                                    </div>
                                    <div class="align-self-center text-center">
                                        <i class="ri-database-2-line"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xxl-3 col-lg-6">
                        <div class="main-tiles border-5 card-hover border-0 card o-hidden">
                            <div class="custome-2-bg b-r-4 card-body">
                                <div class="media static-top-widget">
                                    <div class="media-body p-0">
                                        <span class="m-0">Số đơn hàng</span>
                                        <h4 class="mb-0 counter">
                                            @foreach($countImport as $countIm)
                                            @if($countIm['countImport'] == 0)
                                            0
                                            @else
                                            {{$countIm['countImport']}}
                                            @endif
                                            @endforeach
                                            <span class="badge badge-light-danger grow">
                                                    <i data-feather="trending-down"></i>8.5%</span>
                                        </h4>
                                    </div>
                                    <div class="align-self-center text-center">
                                        <i class="ri-shopping-bag-3-line"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xxl-3 col-lg-6">
                        <div class="main-tiles border-5 card-hover border-0  card o-hidden">
                            <div class="custome-3-bg b-r-4 card-body">
                                <div class="media static-top-widget">
                                    <div class="media-body p-0">
                                        <span class="m-0">Hết hàng</span>
                                        <h4 class="mb-0 counter">
                                                 @foreach($outStoking as $out)
                                                    @if($out['outStoking'] == 0)
                                                        0
                                                    @else
                                                        {{$out['outStoking']}}
                                                    @endif
                                                @endforeach
                                        </h4>
                                    </div>

                                    <div class="align-self-center text-center">
                                        <i class="ri-chat-3-line"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xxl-3 col-lg-6">
                        <div class="main-tiles border-5 card-hover border-0 card o-hidden">
                            <div class="custome-4-bg b-r-4 card-body">
                                <div class="media static-top-widget">
                                    <div class="media-body p-0">
                                        <span class="m-0">Sắp hết hàng</span>
                                        <h4 class="mb-0 counter">
                                            @foreach($stokingPro as $stoking)
                                            @if($stoking['stoking'] == 0)
                                            0
                                            @else
                                            {{$stoking['stoking']}}
                                            @endif

                                            @endforeach
                                            <span class="badge badge-light-success grow">
                                                    <i data-feather="trending-down"></i>8.5%</span>
                                        </h4>
                                    </div>

                                    <div class="align-self-center text-center">
                                        <i class="ri-user-add-line"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="card card-table">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table all-package theme-table table-product" id="table_id">
                                        <thead>
                                        <tr>
                                            <th>Ảnh sản phẩm</th>
                                            <th>Tên sản phẩm</th>
                                            <th>Số lượng</th>
                                            <th>Giá bán</th>
                                            <th>Trạng thái</th>
                                            <th>Xem chi tiết</th>
                                        </tr>
                                        </thead>
                                        @foreach($listProduct as $lProduct)
                                        <tbody>
                                        <tr>
                                            <td>
                                                <div class="table-image">
                                                    <img src="<?=_WEB_ROOT?>{{$lProduct['image']}}" class="img-fluid"
                                                         alt="">
                                                </div>
                                            </td>

                                            <td>{{$lProduct['name']}}</td>

                                            <td>{{$lProduct['qty']}}</td>

                                            <td class="td-price">{{number_format($lProduct['selling_price'])}} đ</td>

                                            @if($lProduct['status'] == "Ngưng bán")
                                            <td class="status-danger">
                                                <span>{{$lProduct['status']}}</span>
                                            </td>
                                            @elseif($lProduct['status'] == "Đang bán")
                                            <td class="status-success">
                                                <span>{{$lProduct['status']}}</span>
                                            </td>
                                            @endif

                                            <td>
                                                <ul>
                                                    <li>
                                                        <a href="" data-bs-toggle="modal"
                                                           data-bs-target="#ModalDetail{{$lProduct['product_id']}}">
                                                            <i class="ri-eye-line"></i>
                                                        </a>
                                                        <!-- See Detail Supplier -->
                                                        <div class=" modal fade theme-modal"
                                                             id="ModalDetail{{$lProduct['product_id']}}" tabindex="-1" role="dialog"
                                                             aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header d-block text-center">
                                                                        <h5 class="modal-title w-100" id="exampleModalLabel22">Chi
                                                                            Tiết</h5>
                                                                        <button type="button" class="btn-close"
                                                                                data-bs-dismiss="modal" aria-label="Close">
                                                                            <i class="fas fa-times"></i>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="card-body mb-3">
                                                                            <div class="row">
                                                                                <div class="col-sm-6 m-b30">
                                                                                    <label class="form-label">Loại</label>
                                                                                    <input type="text" class="form-control"
                                                                                           value="{{$lProduct['name_category']}}" disabled>
                                                                                </div>
                                                                                <div class="col-sm-6 m-b30">
                                                                                    <label class="form-label">Nhà sản xuất</label>
                                                                                    <input type="text" class="form-control"
                                                                                           value="{{$lProduct['name_producer']}}" disabled>
                                                                                </div>
                                                                                <div class="col-sm-6 m-b30 mt-3 mb-5">
                                                                                    <label class="form-label">Tên đơn vị</label>
                                                                                    <input type="text" class="form-control"
                                                                                           value="{{$lProduct['name_unit']}}" disabled>
                                                                                </div>
                                                                                <div class="col-sm-6 m-b30 mt-3 mb-5">
                                                                                    <label class="form-label">Giá gốc</label>
                                                                                    <input type="text" class="form-control"
                                                                                           value="{{number_format($lProduct['orginPrice'])}} đ" disabled>
                                                                                </div>
                                                                                <hr>
                                                                                <div class="card-body mt-3">

                                                                                    <div class="col-sm-12 m-b30">
                                                                                        <label class="form-label">Mô tả sản phẩm</label>
                                                                                        <textarea class="form-control" name="person_contact" disabled>{{$lProduct['description']}}</textarea>

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button"
                                                                                class="btn btn-animation btn-md fw-bold"
                                                                                data-bs-dismiss="modal">Đóng</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>

                                                </ul>
                                            </td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
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
            <!-- footer End-->
        </div>
        <!-- index body end -->

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
