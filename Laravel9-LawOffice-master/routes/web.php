<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;
use App\Http\Controllers\AdminPanel\CategoryController as AdminCategoryController;
use App\Http\Controllers\AdminPanel\AdminServicesController as AdminServicesController;
use App\Http\Controllers\AdminPanel\ImageController as AdminImageController;
use App\Http\Controllers\AdminPanel\MessageController as AdminMessageController;
use App\Http\Controllers\AdminPanel\FaqController as AdminFaqController;
use App\Http\Controllers\AdminPanel\CommentController as AdminCommentController;
use App\Http\Controllers\AdminPanel\AdminUserController as AdminUserController;
use App\Http\Controllers\AdminPanel\AdminAppointmentController as AdminAppointmentController;

use App\Http\Controllers\UserController;

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
// 1 do sometihng in route 

Route::get('/hello', function () {
    return 'Hello World';
});

//2 call view in route

Route::get('/welcome', function () {
    return view('welcome');
});

//*********************Home Pages Routes******************/
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/references', [HomeController::class, 'references'])->name('references');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/appointment', [HomeController::class, 'appointment'])->name('appointment');
Route::post('/storeappointment', [HomeController::class, 'storeappointment'])->name('storeappointment');
Route::post('/storemessage', [HomeController::class, 'storemessage'])->name('storemessage');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::post('/storecomment', [HomeController::class, 'storecomment'])->name('storecomment');
Route::view('/loginuser', 'home.login')->name('loginuser');
Route::view('/registeruser', 'home.register')->name('registeruser');
Route::get('/logoutuser', [HomeController::class, 'logout'])->name('logoutuser');
Route::view('/loginadmin', 'admin.login')->name('loginadmin');
Route::post('/loginadmincheck', [HomeController::class, 'loginadmincheck'])->name('loginadmincheck');



// 4 route -> controller -> view
Route::get('/test', [HomeController::class, 'test'])->name('test');

// 5 route with parameters 
Route::get('/param/{id}/{number}', [HomeController::class, 'param'])->name('param');

// 6 route with post
Route::post('/save', [HomeController::class, 'save'])->name('save');

// 7 route services detail
Route::get('/services/{id}', [HomeController::class, 'services'])->name('services');

//8 Category tree home dosyasında
Route::get('/categoryservices/{id}/{slug}', [HomeController::class, 'categoryservices'])->name('categoryservices');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//*********************User Auth Control******************/
Route::middleware('auth')->group(function () {

    //*********************User panel Routes******************/
    Route::prefix('userpanel')->name('userpanel.')->controller(UserController::class)->group(function () {
        Route::get(uri: '/', action: 'index')->name(name: 'index');
        Route::get(uri: '/reviews', action: 'reviews')->name(name: 'reviews');
        Route::get(uri: '/saveprofile', action: 'saveprofile')->name(name: 'saveprofile');
        Route::get(uri: '/reviewdestroy/{id}', action: 'reviewdestroy')->name(name: 'reviewdestroy');
        Route::get(uri: '/cancelappointment/{id}', action: 'cancelappointment')->name(name: 'cancelappointment');
    });

    //*********************Admin Panel Routes******************/
    Route::middleware('admin')->prefix('admin')->name('admin.')->group(function () {
        Route::get(uri: '/', action: [AdminHomeController::class, 'index'])->name(name: 'index');
        //*********************General Routes******************/
        Route::get(uri: '/setting', action: [AdminHomeController::class, 'setting'])->name(name: 'setting');
        Route::post(uri: '/setting', action: [AdminHomeController::class, 'settingUpdate'])->name(name: 'setting.update');
        //*********************Admin Category Routes******************/
        Route::prefix('/category')->name('category.')->controller(AdminCategoryController::class)->group(function () {
            Route::get(uri: '/', action: 'index')->name(name: 'index');
            Route::get(uri: '/create', action: 'create')->name(name: 'create');
            Route::post(uri: '/store', action: 'store')->name(name: 'store');
            Route::get(uri: '/edit/{id}', action: 'edit')->name(name: 'edit');
            Route::post(uri: '/update/{id}', action: 'update')->name(name: 'update');
            Route::get(uri: '/destroy/{id}', action: 'destroy')->name(name: 'destroy');
            Route::get(uri: '/show/{id}', action: 'show')->name(name: 'show');
        });

        //*********************Admin Services Routes******************/
        Route::prefix('/services')->name('services.')->controller(AdminServicesController::class)->group(function () {
            Route::get(uri: '/', action: 'index')->name(name: 'index');
            Route::get(uri: '/create', action: 'create')->name(name: 'create');
            Route::post(uri: '/store', action: 'store')->name(name: 'store');
            Route::get(uri: '/edit/{id}', action: 'edit')->name(name: 'edit');
            Route::post(uri: '/update/{id}', action: 'update')->name(name: 'update');
            Route::get(uri: '/destroy/{id}', action: 'destroy')->name(name: 'destroy');
            Route::get(uri: '/show/{id}', action: 'show')->name(name: 'show');
        });

        //*********************Admin Image Routes******************/
        Route::prefix('/image')->name('image.')->controller(AdminImageController::class)->group(function () {
            Route::get(uri: '/{sid}', action: 'index')->name(name: 'index');
            Route::post(uri: '/store/{sid}', action: 'store')->name(name: 'store');
            Route::get(uri: '/destroy/{sid}/{id}', action: 'destroy')->name(name: 'destroy');
        });

        //*********************Admin Message Routes******************/
        Route::prefix('/message')->name('message.')->controller(AdminMessageController::class)->group(function () {
            Route::get(uri: '/', action: 'index')->name(name: 'index');
            Route::get(uri: '/show/{id}', action: 'show')->name(name: 'show');
            Route::post(uri: '/update/{id}', action: 'update')->name(name: 'update');
            Route::get(uri: '/destroy/{id}', action: 'destroy')->name(name: 'destroy');
        });

        //*********************Admin Faq Routes******************/
        Route::prefix('/faq')->name('faq.')->controller(AdminFaqController::class)->group(function () {
            Route::get(uri: '/', action: 'index')->name(name: 'index');
            Route::get(uri: '/create', action: 'create')->name(name: 'create');
            Route::post(uri: '/store', action: 'store')->name(name: 'store');
            Route::get(uri: '/edit/{id}', action: 'edit')->name(name: 'edit');
            Route::post(uri: '/update/{id}', action: 'update')->name(name: 'update');
            Route::get(uri: '/destroy/{id}', action: 'destroy')->name(name: 'destroy');
            Route::get(uri: '/show/{id}', action: 'show')->name(name: 'show');
        });

        //*********************Admin comment Routes******************/
        Route::prefix('/comment')->name('comment.')->controller(AdminCommentController::class)->group(function () {
            Route::get(uri: '/', action: 'index')->name(name: 'index');
            Route::get(uri: '/show/{id}', action: 'show')->name(name: 'show');
            Route::post(uri: '/update/{id}', action: 'update')->name(name: 'update');
            Route::get(uri: '/destroy/{id}', action: 'destroy')->name(name: 'destroy');
        });

        //*********************Admin user Routes******************/
        Route::prefix('/user')->name('user.')->controller(AdminUserController::class)->group(function () {
            Route::get(uri: '/', action: 'index')->name(name: 'index');
            Route::get(uri: '/edit/{id}', action: 'edit')->name(name: 'edit');
            Route::get(uri: '/show/{id}', action: 'show')->name(name: 'show');
            Route::post(uri: '/update/{id}', action: 'update')->name(name: 'update');
            Route::get(uri: '/destroy/{id}', action: 'destroy')->name(name: 'destroy');
            Route::post(uri: '/addrole/{id}', action: 'addrole')->name(name: 'addrole');
            Route::get(uri: '/destroyrole/{uid}/{rid}', action: 'destroyrole')->name(name: 'destroyrole');
        });

        //*********************Admin Faq Routes******************/
        Route::prefix('/appointment')->name('appointment.')->controller(AdminAppointmentController::class)->group(function () {
            Route::get(uri: '/{status}', action: 'index')->name(name: 'index');
            Route::get(uri: '/show/{id}', action: 'show')->name(name: 'show');
            Route::get(uri: '/destroy/{status}/{id}', action: 'destroy')->name(name: 'destroy');
            Route::post(uri: '/update/{id}', action: 'update')->name(name: 'update');
        });

    });
});
