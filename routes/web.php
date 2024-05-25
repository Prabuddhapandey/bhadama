<?php


use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CarListController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\RecommendationController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

use App\Http\Controllers\MyCartController;


Route::middleware(['auth','admin'])->group(function () 
{
    Route::get('/admin/home', [Admincontroller::class, 'index'])->name('admin.home');
    Route::get('/admin/logout', [Admincontroller::class, 'logout'])->name('admin.logout');
    Route::get('/admin/tables', [Admincontroller::class, 'table'])->name('admin.tables');
    Route::get('/admin/bookings/list', [Admincontroller::class, 'BookingTable'])->name('admin.bookings.table');

    //car
    Route::resource('AdminCar', CarListController::class);
});


// Route::resource('service', ServiceController::class);


Route::middleware(['guest', 'web'])->group(function () {
Route::get('/registers',[Homecontroller::class,'register']);	
});

Route::get('/',[Homecontroller::class,'index']);
Route::get('/index',[Homecontroller::class,'index']);



Route::get('/service',[Homecontroller::class,'service']);
Route::get('/about',[Homecontroller::class,'about']);
Route::get('/car',[Homecontroller::class,'cars'])->name('post.cars');
// Route::get('/find/your/car',[Homecontroller::class,'findcars']);
Route::get('/page',[Homecontroller::class,'pages']);
Route::get('/contact',[Homecontroller::class,'contact']);
Route::get('/team',[Homecontroller::class,'team']);
Route::get('/testimonial',[Homecontroller::class,'testimonial']);
Route::get('/detail',[Homecontroller::class,'detail']);
Route::get('/detail/{id}',[Homecontroller::class,'detail']);
Route::get('/booking/{id}',[Homecontroller::class,'booking']);
Route::get('/search', [SearchController::class, 'search']);

Route::get('/search-cars', [SearchController::class, 'searchCars'])->name('search.cars');

Route::post('/store/user',[Homecontroller::class,'StoreUser'])->name('store.user');
Route::post('/booking/store/',[BookingController::class,'bookStore'])->name('booking.store');


Route::middleware(['auth'])->group(function () 
{
    Route::get('/booking/{id}',[Homecontroller::class,'booking']);
    Route::get('/find/your/car',[Homecontroller::class,'findcars'])->name('find.cars');
    Route::get('/searchs',[SearchController::class, 'postsearch'])->name('search');
    
    Route::get('/rating/{id}',[RatingController::class, 'index']);
    Route::post('/store/rating',[RatingController::class, 'ratingStore'])->name('rating.store');
    
    // Route::get('/my/cart',[MyCartController::class, 'myCart'])->name('my.cart');
    // Route::delete('/delete/booking/{id}',[MyCartController::class, 'delete']);
    // Route::get('/edit/booking/{id}',[MyCartController::class, 'edit'])->name('edit.booking');
    // Route::put('/update/booking',[MyCartController::class, 'update'])->name('update.booking');
    // Route::delete('/products/delete/{id}',[MyCartController::class,'destroy'])->name('product.destroy');

    Route::resource('myCart',MyCartController::class);

    Route::get('echo', [UserController::class, 'echo']);
    Route::get('echo/{id}', [UserController::class, 'echoDetail']);
Route::get('user/logout', [UserController::class, 'userLogout']);
Route::post('/list/car',[UserController::class,'listCar']);
Route::get('/recommendations/{userId}',[RecommendationController::class,'recommendCars']);

Route::post('/khalti/payment/verify',[PaymentController::class,'verifyPayment'])->name('khalti.verifyPayment');
Route::post('/khalti/payment/store',[PaymentController::class,'storePayment'])->name('khalti.storePayment');

Route::get('stripe/payment',[PaymentController::class,'stripePayment'])->name('stripe.payment');
Route::post('stripe/payment',[PaymentController::class,'postStripePayment'])->name('stripe.charge');

Route::get('/cars/ajax', [HomeController::class,'getCars'])->name('cars.ajax');
});


require __DIR__.'/auth.php';
