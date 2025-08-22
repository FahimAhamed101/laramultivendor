<?php
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\VendorController;
use App\Http\Controllers\Frontend\UserDashboardController;
use App\Http\Controllers\Frontend\FrontendProductController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\CheckOutController;
use App\Http\Controllers\Frontend\UserOrderController;
#Route::get('/', function () {
 #   return view('welcome');
#});

Route::group(['middleware' =>['auth', 'verified'], 'prefix' => 'user', 'as' => 'user.'], function(){
    Route::get('dashboard', [UserDashboardController::class, 'index'])->name('dashboard');

});
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('product-detail/{slug}', [FrontendProductController::class, 'showProduct'])->name('product-detail');
// Cart routes
// Cart routes
Route::post('add-to-cart', [CartController::class, 'addToCart'])->name('add-to-cart');
Route::get('cart-details', [CartController::class, 'cartDetails'])->name('cart-details');
Route::post('cart/update-quantity', [CartController::class, 'updateProductQty'])->name('cart.update-quantity');
Route::get('clear-cart', [CartController::class, 'clearCart'])->name('clear.cart');
Route::get('cart/remove-product/{rowId}', [CartController::class, 'removeProduct'])->name('cart.remove-product');
Route::get('cart-count', [CartController::class, 'getCartCount'])->name('cart-count');
Route::get('cart-products', [CartController::class, 'getCartProducts'])->name('cart-products');
Route::post('cart/remove-sidebar-product', [CartController::class, 'removeSidebarProduct'])->name('cart.remove-sidebar-product');
Route::get('cart/sidebar-product-total', [CartController::class, 'cartTotal'])->name('cart.sidebar-product-total');

Route::get('apply-coupon', [CartController::class, 'applyCoupon'])->name('apply-coupon');
Route::get('coupon-calculation', [CartController::class, 'couponCalculation'])->name('coupon-calculation');

// User route
Route::group(['middleware' => ['auth', 'verified'], 'prefix' => 'user', 'as' => 'user.'], function () {
    Route::get('dashboard', [UserDashboardController::class, 'index'])->name('dashboard');
    Route::get('profile', [UserProfileController::class, 'index'])->name('profile');
    Route::put('profile', [UserProfileController::class, 'updateProfile'])->name('profile.update');
    Route::post('profile', [UserProfileController::class, 'updatePassword'])->name('profile.update.password');

    // User address routes
    Route::resource('address', UserAddressController::class);

    // Order routes
    Route::get('orders', [UserOrderController::class, 'index'])->name('orders.index');
    Route::get('orders/show/{id}', [UserOrderController::class, 'show'])->name('orders.show');

    // Checkout routes
    Route::get('checkout', [CheckoutController::class, 'index'])->name('checkout');
    Route::post('checkout/address-create', [CheckoutController::class, 'createAddress'])->name('checkout.address-create');
    Route::post('checkout/form-submit', [CheckoutController::class, 'checkOutFormSubmit'])->name('checkout.form-submit');

    // Payment routes
    Route::get('payment', [PaymentController::class, 'index'])->name('payment');
    Route::get('payment-success', [PaymentController::class, 'paymentSuccess'])->name('payment.success');

    // Paypal routes
    Route::get('paypal/payment', [PaymentController::class, 'payWithPaypal'])->name('paypal.payment');
    Route::get('paypal/success', [PaymentController::class, 'paypalSuccess'])->name('paypal.success');
    Route::get('paypal/cancel', [PaymentController::class, 'paypalCancel'])->name('paypal.cancel');

    // Stripe routes
    Route::post('stripe/payment', [PaymentController::class, 'payWithStripe'])->name('stripe.payment');

    // Razorpay routes
    Route::post('razorpay/payment', [PaymentController::class, 'payWithRazorPay'])->name('razorpay.payment');

});
require __DIR__.'/auth.php';

