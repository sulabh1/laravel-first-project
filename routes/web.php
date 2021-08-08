<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Support\Facades\DB;

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
    return view('welcome');
});
Route::get('/category/all', [CategoryController::class, 'AllCat'])->name('all.category');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    //eloquent orm
    // $users = User::all();
    //query builder diffForHumans methods will not work in query builder you have to wrap with Carbon\Carbon::parse
    $users = DB::table("users")->get();
    return view('dashboard', compact("users"));
})->name('dashboard');
