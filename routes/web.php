<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Management\CategoryController;
use App\Http\Controllers\Management\MenuController;
use App\Http\Controllers\Management\TableController;
use App\Http\Controllers\Cashier\CashierController;

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
    return view('welcome');
});

Route::get('/management', function () {
    return view('management.manage');
});

Route::get('/about', function () {
    return view('includes.about');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// all category route
Route::get('/management/category', [CategoryController::class, 'ManagementCategory']);
Route::post('/category/store', [CategoryController::class, 'CategoryStore'])->name('category.store');
Route::get('/edit/category/{id}', [CategoryController::class, 'EditCategory'])->name('edit.category');
Route::post('/category/update/{id}', [CategoryController::class, 'CategoryUpdate'])->name('category.update');
Route::get('/delete/category/{id}', [CategoryController::class, 'DeleteCategory'])->name('delete.category');
// end category route

// all Menu Route
Route::get('/management/menu', [MenuController::class, 'ManagementMenu']);
Route::get('/menu/create', [MenuController::class, 'MenuCreate'])->name('menu.create');
Route::post('/menu/store', [MenuController::class, 'MenuStore'])->name('menu.store');
Route::get('/edit/menu/{id}', [MenuController::class, 'EditMenu'])->name('edit.menu');
Route::post('/menu/update/{id}', [MenuController::class, 'MenuUpdate'])->name('menu.update');
Route::get('/delete/menu/{id}', [MenuController::class, 'DeleteMenu'])->name('delete.menu');
// end Menu Route

// All Table Route
Route::get('/management/table', [TableController::class, 'ManagementTable']);
Route::post('/table/store', [TableController::class, 'TableStore'])->name('table.store');
Route::get('/edit/table/{id}', [TableController::class, 'EditTable'])->name('edit.table');
Route::post('/table/update/{id}', [TableController::class, 'TableUpdate'])->name('table.update');
Route::get('/delete/table/{id}', [TableController::class, 'DeleteTable'])->name('delete.table');
// End Table Route

// All Cashier Route
Route::get('/cashier', [CashierController::class, 'Index']);
Route::get('/cashier/getTable',[CashierController::class, 'GetTables']);
// End Cashier Route

// All User Route
Route::get('/management/user', [TableController::class, 'ManagementUser']);

// End User Route


require __DIR__.'/auth.php';
