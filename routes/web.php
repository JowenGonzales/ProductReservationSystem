<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});



Route::domain('productreservationsystem.com')->group(callback: function () {
    Auth::routes();

    //Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/', [App\Http\Controllers\WebpageController::class, 'index'])->name('webpage.index');
    Route::get('/home', [App\Http\Controllers\WebpageController::class, 'index'])->name('webpage.index');
    Route::get('/catalogue', [App\Http\Controllers\WebpageController::class, 'catalogues'])->name('webpage.catalogues');
    Route::get('/catalogue/view/{id}', [App\Http\Controllers\WebpageController::class, 'viewProduct'])->name('webpage.catalogues.viewproduct');
    Route::get('/catalogue/view/{size}/{product_id}', [App\Http\Controllers\WebpageController::class, 'getColorBySize'])->name('webpage.catalogues.getcolorbysize');
    Route::get('/catalogue/view/get-stock/{size}/{product_id}/{color_name}', [App\Http\Controllers\WebpageController::class, 'getStockByColor'])->name('webpage.catalogues.getcolorbysize');


    Route::get('/cart', [App\Http\Controllers\CartController::class, 'cart'])->name('webpage.cart');
    Route::get('/cart/reserve-items', [App\Http\Controllers\CartController::class, 'reserveItems'])->name('webpage.cart.reserveitems');

    Route::get('/reservations', [App\Http\Controllers\ReservationsController::class, 'reservations'])->name('webpage.reservations');
    Route::post('/reservations/upload-proof-of-payment/{id}', [App\Http\Controllers\ReservationsController::class, 'uploadProofOfPayment'])->name('webpage.reservations.uploadproofofpayment');

    Route::get('/cart/remove-item/{id}', [App\Http\Controllers\CartController::class, 'removeItem'])->name('webpage.cart.removeitem');
    Route::post('/cart/add-to-cart/{id}', [App\Http\Controllers\CartController::class, 'addToCart'])->name('webpage.cart.addtocart');

});


Route::domain('admin.productreservationsystem.com')->group(callback: function () {

    Route::group(['namespace' => 'Admin'], function () {
        Route::get('/', [App\Http\Controllers\Admin\AdminAuthController::class, 'getLogin'])->name('superadmin.login');
        Route::get('/login', [App\Http\Controllers\Admin\AdminAuthController::class, 'getLogin'])->name('superadmin.login');
        Route::post('/login', [App\Http\Controllers\Admin\AdminAuthController::class, 'postLogin'])->name('superadmin.postlogin');

        Route::group(['middleware' => 'admin.auth'], function () {
            Route::get('/dashboard', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admin.dashboard');
            Route::get('logout', [App\Http\Controllers\Admin\AdminAuthController::class, 'logout'])->name('admin.logout');



            Route::get('/products', [App\Http\Controllers\Admin\ProductsController::class, 'products'])->name('admin.products');
            Route::get('/products/add-form', [App\Http\Controllers\Admin\ProductsController::class, 'addProductForm'])->name('admin.products.addproductform');
            Route::post('/products/add-form/add-product', [App\Http\Controllers\Admin\ProductsController::class, 'addProduct'])->name('admin.products.addproductform.add');

            Route::get('/products/view-product/{id}', [App\Http\Controllers\Admin\ProductsController::class, 'viewProduct'])->name('admin.products.viewproduct');
            Route::post('/products/view-product/{id}/edit-variation', [App\Http\Controllers\Admin\ProductsController::class, 'editVariation'])->name('admin.products.viewproduct.editvariation');
            Route::post('/products/view-product/{id}/add-variation', [App\Http\Controllers\Admin\ProductsController::class, 'addVariation'])->name('admin.products.viewproduct.addvariation');

            Route::get('/orders', [App\Http\Controllers\Admin\OrdersController::class, 'orders'])->name('admin.orders');
            Route::get('/orders/view/{id}', [App\Http\Controllers\Admin\OrdersController::class, 'viewOrder'])->name('admin.orders.vieworder');
            Route::get('/orders/view/{id}/approve', [App\Http\Controllers\Admin\OrdersController::class, 'approve'])->name('admin.orders.vieworder.approve');
            Route::get('/orders/view/{id}/reject', [App\Http\Controllers\Admin\OrdersController::class, 'reject'])->name('admin.orders.vieworder.reject');



        });
    });
});
