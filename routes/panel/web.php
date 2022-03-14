<?php

use App\Http\Controllers\panel\ActiveAndPassiveReviewController;
use App\Http\Controllers\panel\AdminController;
use App\Http\Controllers\panel\BannerController;
use App\Http\Controllers\panel\BrandController;
use App\Http\Controllers\panel\CampaignController;
use App\Http\Controllers\panel\CategoryController;
use App\Http\Controllers\panel\CouponController;
use App\Http\Controllers\panel\CssController;
use App\Http\Controllers\panel\DesignController;
use App\Http\Controllers\panel\HomepageController;
use App\Http\Controllers\panel\MemberController;
use App\Http\Controllers\panel\OAuthController;
use App\Http\Controllers\panel\OrderCargoController;
use App\Http\Controllers\panel\OrderController;
use App\Http\Controllers\panel\PageController;
use App\Http\Controllers\panel\PayTRController;
use App\Http\Controllers\panel\ProductController;
use App\Http\Controllers\panel\ProductImageController;
use App\Http\Controllers\panel\ProductMultiplePriceController;
use App\Http\Controllers\panel\ProductStatusController;
use App\Http\Controllers\panel\SettingController;
use App\Http\Controllers\panel\ShowcaseController;
use App\Http\Controllers\panel\SliderController;
use App\Http\Controllers\panel\SMTPController;
use App\Http\Controllers\panel\TextImageController;
use App\Http\Controllers\panel\ThemeController;
use App\Http\Controllers\panel\UserReviewController;
use App\Http\Controllers\panel\XmlProductInsertController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Panel Routes
|--------------------------------------------------------------------------
*/

Route::prefix('/admin')->name('panel.')->middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/', [HomepageController::class, 'index'])->name('index');
    Route::resource('/category', CategoryController::class);
    Route::resource('/product', ProductController::class);
    Route::resource('/brand', BrandController::class);
    Route::resource('/campaign', CampaignController::class);
    Route::resource('/page', PageController::class);
    Route::resource('/coupon', CouponController::class);
    Route::resource('/slider', SliderController::class);
    Route::resource('/showcase', ShowcaseController::class);
    Route::get('/product/image/delete/{id}', [ProductImageController::class, 'destroy'])->name('product.image.destroy');
    Route::view('/setting', 'panel.general.setting.index')->name('setting.index');
    Route::post('/setting/update', [SettingController::class, 'update'])->name('setting.update');
    Route::view('/theme', 'panel.general.theme.index')->name('theme.index');
    Route::post('/theme/update', [ThemeController::class, 'update'])->name('theme.update');
    Route::view('/paytr', 'panel.general.paytr.index')->name('paytr.index');
    Route::post('/paytr/update', [PayTRController::class, 'update'])->name('paytr.update');
    Route::view('/css', 'panel.general.css.index')->name('css.index');
    Route::post('/css/update', [CssController::class, 'update'])->name('css.update');
    Route::view('/design', 'panel.general.design.index')->name('design.index');
    Route::post('/design/update', [DesignController::class, 'update'])->name('design.update');
    Route::view('/smtp', 'panel.general.smtp.index')->name('smtp.index');
    Route::post('/smtp/update', [SMTPController::class, 'update'])->name('smtp.update');
    Route::view('/oauth', 'panel.general.oauth.index')->name('oauth.index');
    Route::post('/oauth/update', [OAuthController::class, 'update'])->name('oauth.update');
    Route::view('/banner', 'panel.general.banner.index')->name('banner.index');
    Route::post('/banner/update', [BannerController::class, 'update'])->name('banner.update');
    Route::view('/multiple/product/price', 'panel.multiple.product.price.index')->name('multiple.product.price.index');
    Route::post('/multiple/product/price/update', [ProductMultiplePriceController::class, 'update'])->name('multiple.product.price.update');
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/admin/{id}/delete', [AdminController::class, 'destroy'])->name('admin.destroy');
    Route::get('/member', [MemberController::class, 'index'])->name('member.index');
    Route::get('/member/{id}/delete', [MemberController::class, 'destroy'])->name('member.destroy');
    Route::get('/user/review/{id}', [UserReviewController::class, 'show'])->name('user.review.show');
    Route::get('/user/review/{id}/{status}/update', [UserReviewController::class, 'update'])->name('user.review.update');
    Route::get('/user/review/{id}/delete', [UserReviewController::class, 'destroy'])->name('user.review.destroy');
    Route::post('/product/status/update', [ProductStatusController::class, 'update'])->name('product.status.update');
    Route::get('/review/active', [ActiveAndPassiveReviewController::class, 'active'])->name('review.active.index');
    Route::get('/review/passive', [ActiveAndPassiveReviewController::class, 'passive'])->name('review.passive.index');
    Route::get('/review/delete/{id}', [ActiveAndPassiveReviewController::class, 'destroy'])->name('review.destroy');
    Route::post('/review/status/update', [ActiveAndPassiveReviewController::class, 'update'])->name('review.status.update');
    Route::get('/order', [OrderController::class, 'index'])->name('order.index');
    Route::post('/order/status/update', [OrderController::class, 'update'])->name('order.status.update');
    Route::get('/order/{id}/detail', [OrderController::class, 'show'])->name('order.show');
    Route::post('/order/cargo/{id}/update', [OrderCargoController::class, 'update'])->name('order.cargo.update');
    Route::post('/text/image/store', [TextImageController::class, 'store'])->name('text.image.store');
    Route::get('/maintenance/down', [HomepageController::class, 'down'])->name('maintenance.on');
    Route::get('/maintenance/up', [HomepageController::class, 'up'])->name('maintenance.off');
    Route::view('/xml/product/insert', 'panel.xml.index')->name('xml.product.insert.index');
    Route::post('/xml/product/insert', [XmlProductInsertController::class, 'store'])->name('xml.product.insert.store');
    Route::get('/xml/sample/file/download', [XmlProductInsertController::class, 'download'])->name('xml.sample.file.download');
});
