<?php
/*
| Use Controller
|--------------------------------------------------------------------------
*/
use App\HTTP\Controllers\AdminController;
use App\HTTP\Controllers\AuthController;
use App\HTTP\Controllers\ClientController;
use App\HTTP\Controllers\ProductController;
use App\HTTP\Controllers\SuppliersController;
use App\HTTP\Controllers\CategoriesController;
use App\HTTP\Controllers\ProducerController;
use App\HTTP\Controllers\UnitController;
use App\HTTP\Controllers\ImportController;
use App\HTTP\Controllers\WarehouseController;
/*
|--------------------------------------------------------------------------
*/

use App\Core\Route;

/*
|--------------------- ADMIN ----------------------
*/
Route::get('/dashboard', [AdminController::class, 'dashboard']);


// =========================== Nhà Cung Cấp ============================== 
Route::get('/danh-sach-nha-cung-cap',[SuppliersController::class, 'listSuppliers']);
Route::get('/them-nha-cung-cap',[SuppliersController::class, 'addSuppliers']);
Route::get('/xoa-nha-cung-cap',[SuppliersController::class, 'deleteSupp']);
Route::post('/them-nha-cung-cap',[SuppliersController::class, 'insertSupp']);
Route::post('/cap-nhat-nha-cung-cap',[SuppliersController::class, 'updateSupp']);
// =========================== sản phẩm ==============================
Route::get('/danh-sach-san-pham', [AdminController::class, 'list_product']);
Route::get('/them-san-pham', [AdminController::class, 'add_product']);
Route::post('/them-san-pham',[AdminController::class, 'insertProduct']);
Route::get('/xoa-san-pham', [AdminController::class, 'deletePro']);
Route::post('/cap-nhat-san-pham',[AdminController::class, 'updatePro']);
Route::get('/tim-kiem', [AdminController::class, 'searchPro']);


// =========================== Nhà sản xuất ==============================
Route::post('/them-nha-san-xuat', [ProducerController::class, 'addProducer']);


// =========================== Danh mục ==============================
Route::post('/them-loai', [CategoriesController::class, 'addCate']);


// =========================== Đơn vị ==============================
Route::post('/them-don-vi', [UnitController::class, 'addUnit']);


// =========================== Nhập hàng ==============================
Route::get('/danh-sach-nhap-hang', [ImportController::class, 'listImport']);
Route::get('/tao-don', [ImportController::class, 'addImport']);
Route::get('/da-tao-don', [ImportController::class, 'addedImport']);
Route::post('/them-don-hang', [ImportController::class, 'insertImport']);
Route::post('/tim-san-pham', [ImportController::class, 'selectProduct']);

// =========================== Địa chỉ kho hàng ==============================
Route::get('/danh-sach-kho-hang', [WarehouseController::class, 'listWarehouse']);
Route::post('/them-kho', [WarehouseController::class, 'addW']);
Route::post('/sua-kho', [WarehouseController::class, 'updateW']);
Route::get('/xoa-kho', [WarehouseController::class, 'deleteW']);

/*
|--------------------- Client ----------------------
*/
Route::get('/trang-chu', [ClientController::class, 'home']);
Route::get('/gioi-thieu', [ClientController::class, 'about']);
Route::get('/lien-he', [ClientController::class, 'contact']);


Route::get('/cua-hang', [ProductController::class, 'shop']);
Route::get('/san-pham-chi-tiet', [ProductController::class, 'product_detail']);

// =========================== Đăng Kí & Đăng Nhập & Quên Mật Khẩu & Đăng Xuất ==============================
Route::get('/',[AuthController::class, 'login']);
Route::post('/dang-nhap',[AuthController::class, 'login']);

Route::get('/dang-ki',[AuthController::class, 'register']);
Route::post('/dang-ki',[AuthController::class, 'register']);

Route::get('/quen-mat-khau', [AuthController::class, 'forgot_password']);
Route::post('/quen-mat-khau', [AuthController::class,'forgot_password']);

Route::get('/ma-code', [AuthController::class, 'code']);


Route::get('/dang-xuat', [AuthController::class,'logout']);
