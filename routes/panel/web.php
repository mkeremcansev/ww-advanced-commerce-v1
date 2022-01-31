<?php

use App\Http\Controllers\panel\ActiveAndPassiveReviewController;
use App\Http\Controllers\panel\AdminController;
use App\Http\Controllers\panel\BrandController;
use App\Http\Controllers\panel\CampaignController;
use App\Http\Controllers\panel\CategoryController;
use App\Http\Controllers\panel\MemberController;
use App\Http\Controllers\panel\PageController;
use App\Http\Controllers\panel\ProductController;
use App\Http\Controllers\panel\ProductImageController;
use App\Http\Controllers\panel\ProductStatusController;
use App\Http\Controllers\panel\SettingController;
use App\Http\Controllers\panel\TextImageController;
use App\Http\Controllers\panel\UserReviewController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Panel Routes
|--------------------------------------------------------------------------
*/

Route::prefix('/admin')->name('panel.')->group(function () {
    Route::view('/', 'panel.homepage.index')->name('index');
    Route::resource('/category', CategoryController::class);
    Route::resource('/product', ProductController::class);
    Route::resource('/brand', BrandController::class);
    Route::resource('/campaign', CampaignController::class);
    Route::resource('/page', PageController::class);
    Route::get('/product/image/delete/{id}', [ProductImageController::class, 'destroy'])->name('product.image.destroy');
    Route::view('/setting', 'panel.general.setting.index')->name('setting.index');
    Route::post('/setting/update', [SettingController::class, 'update'])->name('setting.update');
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
    Route::post('/text/image/store', [TextImageController::class, 'store'])->name('text.image.store');
    // Route::get('/xml', function () {
    //     $file = simplexml_load_file(public_path('panel/file.xml'));
    //     echo "Kategori -> " . $file->Category;
    //     echo "<br>";
    //     echo "Marka -> " . $file->Brand;
    //     echo "<br>";
    //     echo "Ürün adı ->" . $file->Attribute->Title;
    //     echo "<br>";
    //     echo "Ürün Açıklaması ->" . $file->Attribute->Description;
    //     echo "<br>";
    //     echo "Ürün Fiyat ->" . $file->Attribute->Price;
    //     echo "<br>";
    //     echo "Ürün İndirimli Fiyat ->" . $file->Attribute->Discount;
    //     echo "<br>";
    //     foreach ($file->Variant as $variant) {
    //         echo " --Varyasyon -> " . $variant->Title;
    //         echo "<br>";
    //         foreach ($variant->Attribute as $attribute) {
    //             echo "Değer -> " . $attribute->Title;
    //             echo "<br>";
    //             echo "Fiyat -> " . $attribute->Price;
    //             echo "<br>";
    //             echo "Stok -> " . $attribute->Title;
    //             echo "<br>";
    //         }
    //     }
    //     foreach ($file->Image as $image) {
    //         echo "Resim -> " . $image;
    //         echo "<br>";
    //     }
    // });
});
