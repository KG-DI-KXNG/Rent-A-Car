<?php

use App\Http\Controllers\CarDetailController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomersController;
use App\Models\Vehicles;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('/index');
});

route::get('home', function(){
    return redirect('/index');
});

Route::get('/dashboard', function () {
    return view('dashboard', ['page'=>'Dashboard']);
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::get('index', function () {
    $vehicle = Vehicles::with(['image', 'category'])->inRandomOrder()->get()->take(6);
    return view('index', compact('vehicle'));
})->name("index");

Route::get('about-us', function () {
    return view('about-us');
});

Route::get('contact', function () {
    return view('contact');
});

Route::view('reservation', 'booknow')->name('booknow');

Route::get('adminlogin', function () {
    return view('admin/index');
});

Route::get('cardetail/{id}', [CarDetailController::class, 'show']);
Route::get('car-listing', [CarDetailController::class, 'index']);


Route::middleware('auth')->group(function () {

        Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users');
        Route::post('new-user', [CustomersController::class, 'updateUser'])->name('new_user');
        Route::get('category', [CategoryController::class, 'index'])->name('add-category');
        Route::post('add-vehicle', [CategoryController::class, 'store'])->name('add-vehicle');
        Route::post('remove-vehicle/{id}', [CategoryController::class, 'destroy'])->name('del-vehicle');


});