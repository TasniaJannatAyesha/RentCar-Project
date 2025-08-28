<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\admin_content_controller;
use App\Http\Controllers\AdminSignupController;
use App\Http\Controllers\admin_login_controller;
use App\Http\Controllers\UserSignupController;

Route::get('product_details/{product_id}', [HomeController::class, 'product_details'])->name('product.details');
route::get('/all_catagories', [HomeController::class, 'all_catagories']);
Route::post("/add_cart/{product_id}", [HomeController::class, "add_cart"]);
Route::get("/show_cart", [HomeController::class, "show_cart"]);
route::get('/remove_cart/{id}', [HomeController::class, 'remove_cart']);
route::get('/cash_order', [HomeController::class, 'cash_order']);
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Route::get('/', [HomeController::class, 'index']);

Route::get('/', function () {
    return view('adminpanel.admin_dashboard');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/redirect', [HomeController::class, 'redirect']);

Route::get('/adminsignup', [AdminSignupController::class, 'index']);
Route::post('/adminsignup', [AdminSignupController::class, 'admin_data_store']);

Route::get('/adminlogin', [admin_login_controller::class, 'index']);
Route::post('/adminlogin', [admin_login_controller::class, 'admin_login']);



// Route::get('/logout', function () {
//     if (session()->has('admin')) {
//         session()->pull('admin');
//         return redirect('adminlogin');
//     }

// }); 


//Route::middleware(['admin.auth'])->group(function () {
Route::get('/admin_dashboard', [admin_content_controller::class, 'index']);
Route::get('/add_catagory', [admin_content_controller::class, 'view_catagory']);
Route::post('/add_catagory', [admin_content_controller::class, 'add_catagory']);
Route::get('/delete_catagory/{id}', [admin_content_controller::class, 'delete_catagory']);
Route::get('/add_brand', [admin_content_controller::class, 'view_brand']);
Route::post('/add_brand', [admin_content_controller::class, 'add_brand']);
Route::get('/delete_brand/{id}', [admin_content_controller::class, 'delete_brand']);

Route::get('/view_product', [admin_content_controller::class, 'view_product']);
Route::post('/add_product', [admin_content_controller::class, 'add_product']);
Route::get('/show_products', [admin_content_controller::class, 'show_products']);
// Add other routes handled by admin_content_controller here...
Route::get('/edit_product/{product_id}', [admin_content_controller::class, 'edit_product']);
Route::post('/update_product/{product_id}', [admin_content_controller::class, 'update_product']);
Route::get('/delete_product/{product_id}', [admin_content_controller::class, 'delete_product']);

Route::get('/Customer', [admin_content_controller::class, 'Customer']);
    Route::get('/delete_Customer/{cus_id}', [admin_content_controller::class, 'delete_Customer']);
//});

Route::get('/usersignup', [UserSignupController::class, 'index']);
Route::post('/usersignup', [UserSignupController::class, 'user_data_store']);

Route::get('/userlogin', [UserSignupController::class, 'get_login']);
Route::post('/userlogin', [UserSignupController::class, 'user_login']);


Route::get('/userpage', [UserSignupController::class, 'userpage'])->name('userpage');
