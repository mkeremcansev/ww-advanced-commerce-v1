<?php

use App\Http\Controllers\web\auth\AccountAdressController;
use App\Http\Controllers\web\auth\AccountAttributeController;
use App\Http\Controllers\web\auth\AccountPasswordController;
use App\Http\Controllers\web\auth\AccountPhoneController;
use App\Http\Controllers\web\auth\AccountReviewController;
use App\Http\Controllers\web\auth\AccountVerificationController;
use App\Http\Controllers\web\auth\CheckoutController;
use App\Http\Controllers\web\auth\CouponController;
use App\Http\Controllers\web\auth\ForgotPasswordController;
use App\Http\Controllers\web\auth\LoginController;
use App\Http\Controllers\web\auth\LogoutController;
use App\Http\Controllers\web\auth\OAuthFacebookController;
use App\Http\Controllers\web\auth\OAuthGoogleController;
use App\Http\Controllers\web\auth\PaymentController;
use App\Http\Controllers\web\auth\ProductReviewController;
use App\Http\Controllers\web\auth\RegisterController;
use App\Http\Controllers\web\CacheController;
use App\Http\Controllers\web\CampaignController;
use App\Http\Controllers\web\CategoryController;
use App\Http\Controllers\web\HomepageController;
use App\Http\Controllers\web\PageController;
use App\Http\Controllers\web\ProductController;
use App\Http\Controllers\web\SearchController;
use App\Http\Controllers\web\ShoppingCartController;
use App\Http\Controllers\web\WishlistController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::prefix('/email')->middleware('unverified')->group(function () {
    Route::view('/verify', 'vendor.notifications.unverified')->middleware(['auth', 'unverified'])->name('verification.notice');
    Route::get('/verification/{id}/{hash}', [AccountVerificationController::class, 'call'])->middleware(['auth', 'signed', 'unverified'])->name('verification.verify');
    Route::get('/notification/verification', [AccountVerificationController::class, 'store'])->middleware(['auth', 'unverified', 'throttle:6,1'])->name('verification.send');
});

Route::name('web.')->group(function () {
    Route::get('/', [HomepageController::class, 'index'])->name('index');
    Route::get('/product/{slug}', [ProductController::class, 'show'])->name('product.show');
    Route::post('/shopping/cart/store', [ShoppingCartController::class, 'store'])->name('shopping.cart.store');
    Route::post('/shopping/cart/update', [ShoppingCartController::class, 'update'])->name('shopping.cart.update');
    Route::get('/shopping/cart/delete/{rowId}', [ShoppingCartController::class, 'delete'])->name('shopping.cart.delete');
    Route::get('/shopping/cart/destroy', [ShoppingCartController::class, 'destroy'])->name('shopping.cart.destroy');
    Route::post('/wishlist/store', [WishlistController::class, 'store'])->name('wishlist.store');
    Route::get('/wishlist/delete/{rowId}', [WishlistController::class, 'delete'])->name('wishlist.delete');
    Route::get('/category/{slug}/products', [CategoryController::class, 'show'])->name('category.products.show');
    Route::get('/search/products', [SearchController::class, 'store'])->name('search.products.store');
    Route::get('/campaign/{slug}/products', [CampaignController::class, 'show'])->name('campaign.products.show');
    Route::get('/page/{slug}/info', [PageController::class, 'show'])->name('page.info.show');
    Route::post('/payment/update',[CheckoutController::class, 'update'])->name('payment.update');
    Route::get('/account/logout/store', [LogoutController::class, 'store'])->name('account.logout.store');
});
Route::name('web.')->middleware(setting('verification') ? ['auth', 'verified', 'role:admin|member'] : ['auth', 'role:admin|member'])->group(function () {
    Route::post('/product/review/store', [ProductReviewController::class, 'store'])->name('product.review.store');
    Route::view('/account', 'web.account.index')->name('account.index');
    Route::view('/account/order', 'web.account.order.index')->name('accout.order');
    Route::post('/account/password/change/update', [AccountPasswordController::class, 'update'])->name('account.password.change.update');
    Route::post('/account/phone/store', [AccountPhoneController::class, 'store'])->name('account.phone.store');
    Route::post('/account/adress/store', [AccountAdressController::class, 'store'])->name('account.adress.store');
    Route::post('/account/attribute/destroy', [AccountAttributeController::class, 'destroy'])->name('account.attribute.destroy');
    Route::post('/account/review/destroy', [AccountReviewController::class, 'destroy'])->name('account.review.destroy');
    Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout.index');
    Route::post('/coupon/store', [CouponController::class, 'store'])->name('coupon.store');
    Route::post('/checkout/store', [CheckoutController::class, 'store'])->name('checkout.store');
    Route::get('/payment/create', [PaymentController::class, 'index'])->name('payment.create');
});
Route::name('web.')->middleware('guest')->group(function () {
    Route::view('/login', 'web.login.index')->name('user.login.index');
    Route::post('/user/login/store', [LoginController::class, 'store'])->name('user.login.store');
    Route::view('/register', 'web.register.index')->name('user.register.index');
    Route::post('/user/register/store', [RegisterController::class, 'store'])->name('user.register.store');
    Route::get('/user/oauth/facebook/redirect', [OAuthFacebookController::class, 'index'])->name('user.oauth.facebook.index');
    Route::get('/user/oauth/google/callback', [OAuthGoogleController::class, 'store'])->name('user.oauth.facebook.store');
    Route::get('/user/oauth/google/redirect', [OAuthGoogleController::class, 'index'])->name('user.oauth.google.index');
    Route::get('/user/oauth/facebook/callback', [OAuthFacebookController::class, 'store'])->name('user.oauth.google.store');
    Route::view('/forgot/password', 'vendor.notifications.password.forgot')->name('forgot.password.index');
    Route::post('/forgot/password/store', [ForgotPasswordController::class, 'store'])->name('forgot.password.store');
    Route::get('/forgot/password/call/{token}', [ForgotPasswordController::class, 'call'])->name('forgot.password.call');
    Route::post('/forgot/password/update', [ForgotPasswordController::class, 'update'])->name('forgot.password.update');
});
Route::get('/cache', [CacheController::class, 'update']);
Route::get('/test', function(){
    return 0;
});
