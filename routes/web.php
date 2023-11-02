<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\DetailTransactionController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

/**
 * NIM: 6706220043
 * NAMA: Amri Elyasa
 * KELAS: 46-04
 */

// User
Route::get('/user', [UserController::class, 'index'])->name('user.daftarPengguna')->middleware(['auth', 'verified']);
Route::get('/userRegistration', [UserController::class, 'create'])->name('user.registrasi');
Route::post('/userStore', [UserController::class, 'store'])->name('user.store');
Route::get('/userView/{user}', [UserController::class, 'show'])->name('user.infoPengguna');

// koleksi
Route::get('/koleksi', [CollectionController::class, 'index'])->name('koleksi.daftarKoleksi');
Route::get('/koleksiTambah', [CollectionController::class, 'create'])->name('koleksi.registrasi');
Route::post('/koleksiStore', [CollectionController::class, 'store'])->name('koleksi.store');
Route::get('/koleksiView/{collection}', [CollectionController::class, 'show'])->name('koleksi.infoKoleksi');

// transaksi
Route::get('/transaksi', [TransactionController::class, 'index'])->name('transaksi.daftarTransaksi');
Route::get('/transaksiTambah', [TransactionController::class, 'create'])->name('transaksi.transaksiTambah');
Route::post('/transaksiStore', [TransactionController::class, 'store'])->name('transaksi.store');
Route::get('/transaksiView/{transaction}', [TransactionController::class, 'show'])->name('transaksi.transaksiView');

// detail transaction
Route::get('/detailTransactionKembalikan/{detailTransaction}', [DetailTransactionController::class, 'detailTransactionKembalikan'])->name('detailKembalikan');
Route::post('/detailTransactionUpdate', [DetailTransactionController::class, 'update'])->name('detailUpdate');

// get all
Route::get('/getAllCollections', [CollectionController::class, 'getAllCollections'])->name('getAllCollections');
Route::get('/getAllUsers', [UserController::class, 'getAllUsers'])->name('getAllUsers');
Route::get('/getAllTransactions', [TransactionController::class, 'getAllTransactions'])->name('getAllTransactions');
Route::get('/getAllDetailTransactions/{transactionId}', [DetailTransactionController::class, 'getAllDetailTransactions'])->name('getAllDetailTransactions');