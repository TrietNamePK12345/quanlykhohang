
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

    <!-- Page Body Start -->
    <div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
        <div class="sidebar-wrapper">
            <div id="sidebarEffect"></div>
            <div>
                <div class="logo-wrapper logo-wrapper-center">
                    <a href="index.html" data-bs-original-title="" title="">
                        <img class="img-fluid for-white" src="<?= _WEB_ROOT?>assets/admin/images/logo/full-white.png" alt="logo">
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
                        <img class="img-fluid main-logo main-dark" src="<?=_WEB_ROOT?>assets/admin/images/logo/logo-white.png" alt="logo">
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
            <!-- All User Table Start -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card card-table">
                            <div class="card-body">
                                <div class="title-header option-title">
                                    <h5>Danh sách nhà cung cấp</h5>
                                    <form class="d-inline-flex">
                                        <a href="them-nha-cung-cap" class="align-items-center btn btn-theme d-flex">
                                            <i data-feather="plus"></i>Thêm nhà cung cấp
                                        </a>
                                    </form>
                                </div>

                                <div class="table-responsive table-product">
                                    <table class="table all-package theme-table" id="table_id">
                                        <thead>
                                            <tr>
                                                <th>Mã Nhà Cung Cấp</th>
                                                <th>Tên Nhà Cung Cấp</th>
                                                <th>Số Điện Thoại</th>
                                                <th>Email</th>
                                                <th>Tùy chỉnh</th>
                                            </tr>
                                        </thead>
                                        @foreach($list_suppliers as $supplier)
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="table-image">
                                                        {{$supplier['supplier_id']}}
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="user-name">
                                                        <span>{{$supplier['name']}}</span>
                                                    </div>
                                                </td>

                                                <td>{{$supplier['phone']}}</td>

                                                <td>{{$supplier['email']}}</td>

                                                <td>
                                                    <ul>
                                                        <li>
                                                            <a href="" data-bs-toggle="modal"
                                                                data-bs-target="#ModalDetail{{$supplier['supplier_id']}}">
                                                                <i class="ri-eye-line"></i>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="" data-bs-toggle="modal"
                                                                data-bs-target="#updateSupplier{{$supplier['supplier_id']}}">
                                                                <i class=" ri-pencil-line"></i>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="" data-bs-toggle="modal"
                                                                data-bs-target="#deleteSupplier{{$supplier['supplier_id']}}">
                                                                <i class="ri-delete-bin-line"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <!-- Delete Supplier -->
                                            <div class="modal fade theme-modal"
                                                id="deleteSupplier{{$supplier['supplier_id']}}" tabindex="-1"
                                                role="dialog" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header d-block text-center">
                                                            <h5 class="modal-title w-100" id="exampleModalLabel22">Xóa
                                                                Nhà Cung Cấp</h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close">
                                                                <i class="fas fa-times"></i>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h4>Bạn muốn xóa nhà cung cấp này ?</h4>
                                                        </div>

                                                        <div class="modal-footer">
                                                            <button type="submit"
                                                                class="btn btn-animation btn-md fw-bold"
                                                                data-bs-dismiss="modal">Hủy bỏ</button>
                                                            <a href="xoa-nha-cung-cap?id={{$supplier['supplier_id']}}"
                                                                class="btn btn-animation btn-danger btn-md fw-bold">Xóa</a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- See Detail Supplier -->
                                            <div class=" modal fade theme-modal"
                                                id="ModalDetail{{$supplier['supplier_id']}}" tabindex="-1" role="dialog"
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
                                                            <h5>Địa Chỉ</h5>
                                                            <p> {{$supplier['address']}}</p>
                                                            <hr>
                                                            <h5>Người Liên Hệ</h5>
                                                            <p>{{$supplier['person_contact']}}</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button"
                                                                class="btn btn-animation btn-md fw-bold"
                                                                data-bs-dismiss="modal">Đóng</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Update Supplier -->
                                            <div class=" modal fade theme-modal"
                                                id="updateSupplier{{$supplier['supplier_id']}}" tabindex="-1"
                                                role="dialog" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header d-block text-center">
                                                            <h5 class="modal-title w-100" id="exampleModalLabel22">Cập
                                                                Nhật Nhà Cung Cấp
                                                            </h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close">
                                                                <i class="fas fa-times"></i>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form class="profile-form" method="post"
                                                                action="cap-nhat-nha-cung-cap">
                                                                <div class="card-body mb-3">
                                                                    <div class="row">
                                                                        <div class="col-sm-6 m-b30">
                                                                            <input type="hidden" name="id"
                                                                                value="{{$supplier['supplier_id']}}">
                                                                            <label class="form-label">Tên nhà cung
                                                                                cấp</label>
                                                                            <input type="text" class="form-control"
                                                                                name="name"
                                                                                value="{{$supplier['name']}}">
                                                                        </div>
                                                                        <div class="col-sm-6 m-b30">
                                                                            <label class="form-label">Mã Nhà Cung
                                                                                Cấp</label>
                                                                            <input type="text" class="form-control"
                                                                                name="supplier_id"
                                                                                value="{{$supplier['supplier_id']}}">
                                                                        </div>
                                                                        <div class="col-sm-6 m-b30 mt-3">
                                                                            <label class="form-label">Email</label>
                                                                            <input type="text" class="form-control"
                                                                                name="email"
                                                                                value="{{$supplier['email']}}">
                                                                        </div>
                                                                        <div class="col-sm-6 m-b30 mt-3">
                                                                            <label class="form-label">Số điện
                                                                                thoại</label>
                                                                            <input type="text" class="form-control"
                                                                                name="phone"
                                                                                value="{{$supplier['phone']}}">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <hr>
                                                                <div class="card-body mt-3">

                                                                    <div class="col-sm-12 m-b30">
                                                                        <label class="form-label">Người liên hệ
                                                                            chính</label>
                                                                        <input type="text" class="form-control"
                                                                            name="person_contact"
                                                                            value="{{$supplier['person_contact']}}">
                                                                    </div>
                                                                </div>

                                                                <div class="card-body mt-3">

                                                                    <div class="col-sm-12 m-b30">
                                                                        <label class="form-label">Địa chỉ</label>
                                                                        <input type="text" class="form-control"
                                                                            name="address"
                                                                            value="{{$supplier['address']}}">

                                                                    </div>
                                                                </div>

                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button"
                                                                class="btn btn-animation btn-md fw-bold"
                                                                data-bs-dismiss="modal">Đóng</button>

                                                            <button type="submit"
                                                                class="btn btn-animation btn-md fw-bold"
                                                                data-bs-dismiss="modal">Cập Nhật</button>
                                                        </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- All User Table Ends-->

            <div class="container-fluid">
                <!-- footer start-->
                <footer class="footer">
                    <div class="row">
                        <div class="col-md-12 footer-copyright text-center">
                            <p class="mb-0">Nguyễn Minh Triết - PC06220 - PHP2</p>
                        </div>
                    </div>
                </footer>
                <!-- footer end-->
            </div>
        </div>
        <!-- Container-fluid end -->
    </div>
    <!-- Page Body End -->

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
</div>

