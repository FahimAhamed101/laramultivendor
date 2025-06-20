<?php
use App\Http\Controllers\Backend\AdminVendorProfileController;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ChildCategoryController;
use App\Http\Controllers\Backend\SubCategoryController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\ProductImageGalleryController;
use App\Http\Controllers\Backend\ProductVariantController;
use App\Http\Controllers\Backend\ProductVariantItemController;
use App\Http\Controllers\Backend\BrandController;



/** Admin Routes */

Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
// Profile route
Route::get('profile', [ProfileController::class, 'index'])->name('profile');
Route::post('profile/update', [ProfileController::class, 'updateProfile'])->name('profile.update');
Route::post('profile/update/password', [ProfileController::class, 'updatePassword'])->name('password.update');

// Category route
Route::put('change-status', [CategoryController::class, 'changeStatus'])->name('category.change-status');
Route::resource('category', CategoryController::class);

// Sub-category route
Route::put('sub-category/change-status', [SubCategoryController::class, 'changeStatus'])->name('sub-category.change-status');
Route::resource('sub-category', SubCategoryController::class);

// Child-category route
Route::put('child-category/change-status', [ChildCategoryController::class, 'changeStatus'])->name('child-category.change-status');
Route::get('get-sub-categories', [ChildCategoryController::class, 'getSubCategories'])->name('get-sub-categories');
Route::resource('child-category', ChildCategoryController::class);

// Brand route
Route::put('brand/change-status', [BrandController::class, 'changeStatus'])->name('brand.change-status');
Route::resource('brand', BrandController::class);

// Vendor Profile route
Route::resource('vendor-profile', AdminVendorProfileController::class);

// Products route
Route::get('product/get-sub-categories', [ProductController::class, 'getSubCategories'])->name('product.get-sub-categories');
Route::get('product/get-child-categories', [ProductController::class, 'getChildCategories'])->name('product.get-child-categories');
Route::put('product/change-status', [ProductController::class, 'changeStatus'])->name('product.change-status');
Route::resource('products', ProductController::class);

// Product Image Gallery route
Route::resource('products-image-gallery', ProductImageGalleryController::class);

// Product Variant route
Route::put('products-variant/change-status', [ProductVariantController::class, 'changeStatus'])->name('products-variant.change-status');
Route::resource('products-variant', ProductVariantController::class);

// Product Variant Item route
Route::get('products-variant-item/{product_id}/{variant_id}', [ProductVariantItemController::class, 'index'])->name('products-variant-item.index');
Route::get('products-variant-item/create/{product_id}/{variant_id}', [ProductVariantItemController::class, 'create'])->name('products-variant-item.create');
Route::post('products-variant-item', [ProductVariantItemController::class, 'store'])->name('products-variant-item.store');
Route::get('products-variant-item-edit/{variant_item_id}', [ProductVariantItemController::class, 'edit'])->name('products-variant-item.edit');
Route::put('products-variant-item-update/{variant_item_id}', [ProductVariantItemController::class, 'update'])->name('products-variant-item.update');
Route::delete('products-variant-item-delete/{variant_item_id}', [ProductVariantItemController::class, 'destroy'])->name('products-variant-item.destroy');
Route::put('products-variant-item-status', [ProductVariantItemController::class, 'changeStatus'])->name('products-variant-item.change_status');

