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

                                <div class="title-header option-title d-sm-flex d-block mb-5">
                                    <h5>Danh sách sản phẩm</h5>

                                    <div class="right-options">
                                        <ul>
                                            <li>
                                                <a class="btn btn-solid" href="/them-san-pham">Thêm sản phẩm</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                    <div class="table-responsive">
                                        <table class="table all-package theme-table table-product" id="table_id">
                                            <thead>
                                            <tr>
                                                <th>Ảnh sản phẩm</th>
                                                <th>Tên sản phẩm</th>
                                                <th>Số lượng</th>
                                                <th>Giá bán</th>
                                                <th>Trạng thái</th>
                                                <th>Hành động</th>
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
                                                                                            <textarea class="form-control" name="person_contact">{{$lProduct['description']}}</textarea>

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

                                                        <li>
                                                            <a href="" data-bs-toggle="modal"
                                                               data-bs-target="#updateProduct{{$lProduct['product_id']}}">
                                                                <i class=" ri-pencil-line"></i>
                                                            </a>

                                                            <!-- Update Supplier -->
                                                            <div class=" modal fade theme-modal"
                                                                 id="updateProduct{{$lProduct['product_id']}}" tabindex="-1"
                                                                 role="dialog" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header d-block text-center">
                                                                            <h5 class="modal-title w-100" id="exampleModalLabel22">Cập
                                                                                Nhật Sản Phẩm
                                                                            </h5>
                                                                            <button type="button" class="btn-close"
                                                                                    data-bs-dismiss="modal" aria-label="Close">
                                                                                <i class="fas fa-times"></i>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <form class="profile-form" method="post"
                                                                                  action="/cap-nhat-san-pham" enctype="multipart/form-data">
                                                                                <div class="card-body mb-3">
                                                                                    <div class="row">
                                                                                        <div class="col-sm-6 m-b30">
                                                                                            <input type="hidden" name="product_id"
                                                                                                   value="{{$lProduct['product_id']}}">
                                                                                            <label class="form-label">Tên sản phẩm</label>
                                                                                            <input type="text" class="form-control"
                                                                                                   name="name"
                                                                                                   value="{{$lProduct['name']}}">
                                                                                        </div>
                                                                                        <div class="col-sm-6 m-b30">
                                                                                            <label class="form-label">Đơn vị</label>
                                                                                            <select class="form-control" name="unit_id">
                                                                                                <option value="{{$lProduct['unit_id']}}" selected hidden>{{$lProduct['name_unit']}}</option>
                                                                                                @foreach($listUnit as $lunit)
                                                                                                <option value="{{$lunit['unit_id']}}">{{$lunit['name']}}</option>
                                                                                                @endforeach
                                                                                            </select>
                                                                                        </div>
                                                                                        <div class="col-sm-6 m-b30 mt-3">
                                                                                            <label class="form-label">Danh mục</label>
                                                                                            <select class="form-control" name="category_id">
                                                                                                <option value="{{$lProduct['category_id']}}" selected hidden>{{$lProduct['name_category']}}</option>
                                                                                                @foreach($listCate as $lcate)
                                                                                                <option value="{{$lcate['category_id']}}" name="category_name">{{$lcate['name']}}</option>
                                                                                                @endforeach
                                                                                            </select>
                                                                                        </div>
                                                                                        <div class="col-sm-6 m-b30 mt-3">
                                                                                            <label class="form-label">Nhà sản xuất</label>
                                                                                            <select class="form-control" name="producer_id">
                                                                                                <option value="{{$lProduct['producer_id']}}" selected hidden>{{$lProduct['name_producer']}}</option>
                                                                                                @foreach($listProducer as $lproducer)
                                                                                                <option value="{{$lproducer['producer_id']}}" name="producer_name">{{$lproducer['name']}}</option>
                                                                                                @endforeach
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <hr>
                                                                                <div class="card-body mt-3">

                                                                                    <div class="col-sm-12 m-b30">
                                                                                        <label class="form-label">Ảnh</label>
                                                                                        <!-- Hiển thị hình ảnh từ cơ sở dữ liệu -->
                                                                                        <div class="table-image mb-3">
                                                                                            <img src="<?= _WEB_ROOT ?>{{ $lProduct['image'] }}" class="img-fluid" alt="">
                                                                                        </div>
                                                                                        <!-- Trường input cho việc tải lên ảnh mới -->
                                                                                        <input type="hidden" name="image1" value="{{$lProduct['image']}}">
                                                                                        <input class="form-control form-choose" name='image' type="file" id="imageUpload">
                                                                                    </div>


                                                                                </div>
                                                                                <hr>
                                                                                <div class="card-body mb-3">
                                                                                    <div class="row">
                                                                                        <div class="col-sm-6 m-b30">
                                                                                            <input type="hidden" name="product_id"
                                                                                                   value="{{$lProduct['product_id']}}">
                                                                                            <label class="form-label">Giá gốc</label>
                                                                                            <input type="text" class="form-control"
                                                                                                   name="orginPrice"
                                                                                                   value="{{$lProduct['orginPrice']}}">
                                                                                        </div>

                                                                                        <div class="col-sm-6 m-b30">
                                                                                            <label class="form-label">Giá bán</label>
                                                                                            <input type="text" class="form-control"
                                                                                                   name="selling_price"
                                                                                                   value="{{$lProduct['selling_price']}}">
                                                                                        </div>

                                                                                        <div class="col-sm-6 m-b30">
                                                                                            <label class="form-label">Trạng thái</label>
                                                                                            <select class="form-control" name="status">
                                                                                                @if($lProduct['status'] == "Ngưng bán")
                                                                                                <option value="{{$lProduct['status']}}" selected hidden>{{$lProduct['status']}}</option>
                                                                                                <option value="Đang bán">Đang bán</option>
                                                                                                @elseif($lProduct['status'] == "Đang bán")
                                                                                                <option value="{{$lProduct['status']}}" selected hidden>{{$lProduct['status']}}</option>
                                                                                                <option value="Ngưng bán">Ngưng Bán</option>
                                                                                                @endif
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <hr>
                                                                                <div class="card-body mt-3">

                                                                                    <div class="col-sm-12 m-b30">
                                                                                        <label class="form-label">Mô tả sản phẩm</label>
                                                                                        <textarea class="form-control" name="description">{{$lProduct['description']}}</textarea>

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
                                                        </li>

                                                        <li>
                                                            <a href="" data-bs-toggle="modal"
                                                               data-bs-target="#deleteProduct{{$lProduct['product_id']}}">
                                                                <i class="ri-delete-bin-line"></i>
                                                            </a>

                                                            <!-- Delete Supplier -->
                                                            <div class="modal fade theme-modal"
                                                                 id="deleteProduct{{$lProduct['product_id']}}" tabindex="-1"
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
                                                                            <h4>Bạn muốn xóa sản phẩm này ?</h4>
                                                                        </div>

                                                                        <div class="modal-footer">
                                                                            <button type="submit"
                                                                                    class="btn btn-animation btn-md fw-bold"
                                                                                    data-bs-dismiss="modal">Hủy bỏ</button>
                                                                            <a href="xoa-san-pham?id={{$lProduct['product_id']}}"
                                                                               class="btn btn-animation btn-danger btn-md fw-bold">Xóa</a>
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

            <div class="container-fluid">
                <!-- footer start-->
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
