<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Index;
use App\Livewire\View;
use App\Livewire\Acount;
use App\Livewire\Checkout;
use App\Livewire\Login;
use App\Livewire\Shop;
use App\Livewire\ProfilInfo;

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

Route::get('/index', Index::class)->name('index');
// Route::get('/view', View::class)->name('view');
// Route::get('/acount', Acount::class)->name('acount');
// Route::get('/checkout', Checkout::class)->name('checkout');
Route::get('/login', Login::class)->name('login');
// Route::get('/shop', Shop::class)->name('shop');
// Route::get('/profilinfo', ProfilInfo::class)->name('profilinfo');

// Route::get('/view', View::class);
