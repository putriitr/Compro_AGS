<?php

use App\Http\Controllers\Admin\MasterData\BidangPerusahaanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Admin\Member\MemberController;


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

Route::get('/about', function () {
    return view('Customer.About.about');
});

Route::get('/product', function () {
    return view('Customer.Product.product');
});

Route::get('/category', function () {
    return view('Customer.Category-Product.category');
});

Route::get('/detail', function () {
    return view('Customer.Category-Product.detail');
});

Route::get('/contact', function () {
    return view('Customer.Contact.contact');
});

Route::get('/portal', function () {
    return view('Member.Portal.portal');
});

Route::get('/catalog', function () {
    return view('Member.Portal.catalog');
});

Route::get('/doc', function () {
    return view('Member.Portal.document');
});

Route::get('/cg', function () {
    return view('Member.Portal.controller-generations');
});

Route::get('/qna', function () {
    return view('Member.Portal.qna');
});

Route::get('/video', function () {
    return view('Member.Portal.tutorials');
});

Route::get('/photos', function () {
    return view('Member.Portal.photos');
});

Route::get('/instructions', function () {
    return view('Member.Portal.instructions');
});

Route::get('/', [HomeController::class, 'index'])->name('home');

Auth::routes();

//Normal Users Routes List
Route::middleware(['auth', 'user-access:member'])->group(function () {
    });

    //Admin Routes List
    Route::middleware(['auth', 'user-access:admin'])->group(function () {

    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
    Route::resource('members', MemberController::class);

    //masterdata
    Route::resource('bidangperusahaan', BidangPerusahaanController::class);

});


