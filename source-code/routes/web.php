<?php

use App\Http\Controllers\Admin\MasterData\BidangPerusahaanController;
use App\Http\Controllers\Admin\MasterData\KategoriController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Admin\Member\MemberController;
use App\Http\Controllers\Admin\FAQ\FAQController;
use App\Http\Controllers\Admin\Produk\ProdukController;
use App\Http\Controllers\Member\Portal\PortalController;
use App\Http\Controllers\Member\Produk\ProdukMemberController;
use App\Http\Controllers\Admin\Slider\SliderController;

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
    return view('customer.About.about');
});

Route::get('/product', function () {
    return view('Customer.Product.product');
});

Route::get('/category', function () {
    return view('member.Category-Product.category');
});

Route::get('/detail', function () {
    return view('member.Category-Product.detail');
});

Route::get('/activity', function () {
    return view('member.Activity.activity');
})->name('activity');

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
Route::get('/product', [ProdukMemberController::class, 'index'])->name('product');
Route::get('/product/category/{id}', [ProdukMemberController::class, 'productByCategory'])->name('product.by_category');
Route::get('/product/{id}', [ProdukMemberController::class, 'show'])->name('product.show');
Route::get('/portal', [PortalController::class, 'index'])->name('portal');
Route::get('/portal/catalog', [PortalController::class, 'catalog'])->name('portal.catalog');
Route::get('/portal/photos', [PortalController::class, 'photos'])->name('portal.photos');
Route::get('/portal/instructions', [PortalController::class, 'instructions'])->name('portal.instructions');
Route::get('/portal/tutorials', [PortalController::class, 'videos'])->name('portal.tutorials');
Route::get('/portal/controlgenerations', [PortalController::class, 'ControllerGenerations'])->name('portal.controlgenerations');
Route::get('/portal/document', [PortalController::class, 'Document'])->name('portal.document');
Route::get('/portal/qna', [PortalController::class, 'Faq'])->name('portal.qna');



Route::get('/about', [HomeController::class, 'about'])->name('about');
Auth::routes();

//Normal Users Routes List
Route::middleware(['auth', 'user-access:member'])->group(function () {
    });

    //Admin Routes List
    Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
    Route::resource('admin/members', MemberController::class);
    Route::get('members/{id}/add-products', [MemberController::class, 'addProducts'])->name('members.add-products');
    Route::post('members/{id}/store-products', [MemberController::class, 'storeProducts'])->name('members.store-products');
    Route::get('members/{id}/edit-products', [MemberController::class, 'editProducts'])->name('members.edit-products');
    Route::put('members/{id}/update-products', [MemberController::class, 'updateProducts'])->name('members.update-products');
    Route::post('/members/{id}/update-password', [MemberController::class, 'updatePassword'])->name('members.updatePassword');
    Route::post('/admin/validate-password', [MemberController::class, 'validatePassword'])->name('admin.validatePassword');


    Route::get('admin/monitoring', [MonitoringController::class, 'index'])->name('admin.monitoring.index');
    Route::get('admin/monitoring/{id}', [MonitoringController::class, 'show'])->name('admin.monitoring.show');
    Route::get('monitoring/{id}', [MonitoringController::class, 'monitoringDetail'])->name('monitoring.detail');
    Route::get('admin/monitoring/create/{userProdukId}', [MonitoringController::class, 'create'])->name('admin.monitoring.create');
    Route::post('admin/monitoring/store', [MonitoringController::class, 'store'])->name('admin.monitoring.store');
    // Route for editing monitoring data
Route::get('admin/monitoring/{id}/edit', [MonitoringController::class, 'edit'])->name('admin.monitoring.edit');

// Route for updating monitoring data
Route::put('admin/monitoring/{id}', [MonitoringController::class, 'update'])->name('admin.monitoring.update');


    //masterdata
    Route::resource('admin/bidangperusahaan', BidangPerusahaanController::class);
    Route::resource('admin/kategori', KategoriController::class)->names('admin.kategori');

    //Produk
    Route::resource('admin/produk', ProdukController::class)->names('admin.produk');

    //FAQ
    Route::resource('admin/faq', FAQController::class)->names('admin.faq');

    //Slider
    Route::resource('admin/slider', SliderController::class)->names('admin.slider');

});


use App\Http\Controllers\LocationController;

Route::get('/locations', [LocationController::class, 'index']);




    
    