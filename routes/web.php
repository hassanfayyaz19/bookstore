<?php

use App\Http\Controllers\Admin\Auth\LoginController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    $recommended_books = \App\Models\Book::with('categories')->recommended()->get();
    $featured_books = \App\Models\Book::with('categories')->featured()->get();
    $banner_books = \App\Models\Book::with('categories')->banner()->get();
    $on_sale_books = \App\Models\Book::with('categories')->onSale()->get();
    $settings = \App\Models\ProjectSetting::first();
    return view('user.welcome', get_defined_vars());
})->name('welcome');


Route::prefix('admin')->as('admin.')->middleware(['guest:admin'])->group(function () {
    Route::get('/', [LoginController::class, 'showAdminLoginForm'])->name('login-view');
    Route::post('/', [LoginController::class, 'adminLogin'])->name('login');
});

Route::prefix('admin')->as('admin.')->middleware(['auth:admin'])->group(function () {
    Route::post('/logout', [LoginController::class, 'adminLogout'])->name('logout');
    Route::get('/dashboard', function () {
        return redirect()->route('admin.book.index');
    })->name('home');
    Route::resource('book', \App\Http\Controllers\Admin\BookController::class);
    Route::resource('recommended_book', \App\Http\Controllers\Admin\RecommendedBookController::class);
    Route::resource('featured_book', \App\Http\Controllers\Admin\FeaturedBookController::class);
    Route::resource('banner_book', \App\Http\Controllers\Admin\BannerBookController::class);
    Route::resource('category', \App\Http\Controllers\Admin\CategoryController::class);
    Route::resource('user', \App\Http\Controllers\Admin\UserController::class);
    Route::resource('author', \App\Http\Controllers\Admin\AuthorController::class);
    Route::resource('purchase', \App\Http\Controllers\Admin\PurchaseController::class);
    Route::resource('project_setting', \App\Http\Controllers\Admin\ProjectSettingController::class);
    Route::resource('book_review', \App\Http\Controllers\Admin\BookReviewController::class);
    Route::resource('blog_category', \App\Http\Controllers\Admin\BlogCategoryController::class);
    Route::resource('blog', \App\Http\Controllers\Admin\BlogController::class);
    Route::resource('blog.comment', \App\Http\Controllers\Admin\CommentController::class);
    Route::get('/project/home_setting', [App\Http\Controllers\Admin\ProjectSettingController::class, 'showHomeSettingPage'])->name('project_setting.home');

});
Auth::routes();


Route::middleware(['auth:web'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/book/download/{book}', [\App\Http\Controllers\User\BookController::class, 'downloadBook'])->name('book.download');
    Route::get('/book/purchased', [\App\Http\Controllers\User\BookController::class, 'purchasedBook'])->name('book.purchased');
    Route::get('checkout', [\App\Http\Controllers\User\BookController::class, 'showCheckoutPage'])->name('book.checkout');
    Route::resource('book_review', \App\Http\Controllers\User\BookReviewController::class);
    Route::resource('blog.comment', \App\Http\Controllers\User\CommentController::class);
    Route::resource('profile', \App\Http\Controllers\User\ProfileController::class);
});

Route::get('/about-us', function () {
    return view('user.about_us');
})->name('about_us');

Route::get('/contact-us', function () {
    return view('user.contact_us');
})->name('contact_us');

Route::get('/privacy-policy', function () {
    return view('user.contact_us');
})->name('privacy_policy');

Route::get('/faq', function () {
    return view('user.contact_us');
})->name('faq');

Route::get('/services', function () {
    return view('user.contact_us');
})->name('services');

Route::resource('book', \App\Http\Controllers\User\BookController::class);
Route::resource('contact_us', \App\Http\Controllers\User\ContactUsController::class);
Route::resource('blog', \App\Http\Controllers\User\BlogController::class);


Route::get('cart', [\App\Http\Controllers\User\BookController::class, 'showCartPage'])->name('book.cart');

Route::post('stripe', [\App\Http\Controllers\User\BookController::class, 'stripePost'])->name('stripe.post');
