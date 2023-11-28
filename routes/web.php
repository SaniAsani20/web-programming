<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use \App\Models\User;

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
Route::get('/test', function () {
    return Response('<h1>Testttt</h1>',200);
});
Route::get('/listings', function () {
    return view('listings',['title'=>"This is a test"]);
});

Route::get('/users/{id?}',function (?int $id = 1){

    $users = \Illuminate\Support\Facades\DB::table('users')->get();
    $user = \Illuminate\Support\Facades\DB::table('users')->get()->where('id','==',$id)->first();
    return view('users', ['users'=>$users, 'sani'=>$user]);
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
