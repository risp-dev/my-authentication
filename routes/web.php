<?php

use App\Http\Controllers\ProfileController;
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

Route::redirect('/redirect-me', '/zombie/1');

Route::get('/json-response', function(){
    $data = [
        'name' => 'Some Zombie name',
        'strength' => 'Strong',
    ];
    return response()->json($data);
});

//cookie
Route::get('/set_cookie', function(){
    return response()->view('apocalypse')->cookie('name', 'value', 10);
});

Route::get('/apocalypse', function() {
    return 'This is the end of the World!';
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('profile', 'UserController@profile')->middleware('auth');

require __DIR__.'/auth.php';
