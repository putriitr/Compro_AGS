<?php

use App\Http\Controllers\Admin\MasterData\BidangPerusahaanController;
use App\Http\Controllers\Admin\MasterData\KategoriController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Admin\Member\MemberController;
use App\Http\Controllers\Admin\Produk\FAQController;
use App\Http\Controllers\Admin\Produk\ProdukController;
use App\Http\Controllers\Member\Portal\PortalController;
use App\Http\Controllers\Member\Produk\ProdukMemberController;

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
    return view('member.Category-Product.category');
});

Route::get('/detail', function () {
    return view('member.Category-Product.detail');
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
Route::get('/portal/qna', [PortalController::class, 'FaqProduk'])->name('portal.qna');


Auth::routes();

//Normal Users Routes List
Route::middleware(['auth', 'user-access:member'])->group(function () {
    });

    //Admin Routes List
    Route::middleware(['auth', 'user-access:admin'])->group(function () {

    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');

    Route::resource('admin/members', MemberController::class);
    Route::get('members/{id}/add-products', [MemberController::class, 'addProducts'])->name('members.add-products');
    Route::post('members/{id}/store-products', [MemberController::class, 'storeProducts'])->name('members.store-products');
    Route::get('members/{id}/edit-products', [MemberController::class, 'editProducts'])->name('members.edit-products');
    Route::put('members/{id}/update-products', [MemberController::class, 'updateProducts'])->name('members.update-products');



    //masterdata
    Route::resource('admin/bidangperusahaan', BidangPerusahaanController::class);
    Route::resource('admin/kategori', KategoriController::class)->names('admin.kategori');

    //Produk
    Route::resource('admin/produk', ProdukController::class)->names('admin.produk');

    //FAQ
    Route::prefix('produk/{produk_id}')->group(function () {
        Route::get('admin/faq', [FAQController::class, 'index'])->name('admin.faq.index');
        Route::get('admin/faq/create', [FAQController::class, 'create'])->name('admin.faq.create');
        Route::post('admin/faq', [FAQController::class, 'store'])->name('admin.faq.store');
        Route::get('admin/faq/{faq_id}', [FAQController::class, 'show'])->name('admin.faq.show');
        Route::get('admin/faq/{faq_id}/edit', [FAQController::class, 'edit'])->name('admin.faq.edit');
        Route::put('admin/faq/{faq_id}', [FAQController::class, 'update'])->name('admin.faq.update');
        Route::delete('admin/faq/{faq_id}', [FAQController::class, 'destroy'])->name('admin.faq.destroy');
    });
});


