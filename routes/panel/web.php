<?php

use App\Http\Controllers\panel\BrandController;
use App\Http\Controllers\panel\CampaignController;
use App\Http\Controllers\panel\CategoryController;
use App\Http\Controllers\panel\ProductController;
use App\Http\Controllers\panel\ProductImageController;
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
    Route::get('/product/image/delete/{id}', [ProductImageController::class, 'destroy'])->name('product.image.destroy');
    // Route::get('/xml', function () {
    //     $file = simplexml_load_file(public_path('panel/file.xml'));
    //     echo "Kategori -> " . $file->Category;
    //     echo "<br>";
    //     echo "Marka -> " . $file->Category;
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
