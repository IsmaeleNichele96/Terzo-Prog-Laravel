<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ProductsController;

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

Route::get('/', [PublicController::class, 'welcome'])->name('/');

Route::get('/chisiamo', [TeamController::class, 'chisiamo'])->name('chisiamo');

Route::get('/chisiamo/dettaglio/{name}',  [TeamController::class, 'chisiamoDet'])->name('chisiamoDet');

Route::get('/prodotti', [ProductsController::class, 'prodotti'])->name('prodotti');

Route::get('/prodotti/dettaglio/{nome}', [ProductsController::class, 'prodottiDet'])->name('prodottiDet');
//metto {} nell'uri per renderlo dinamico