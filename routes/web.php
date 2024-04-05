<?php

use App\Http\Controllers\SiswaController;
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
    return view('welcome');
});
Route::get('coba', function () {
    return view('coba');
});

Route::get('hello', function () {
    return 'ini laravel saya';
});

Route::get('angka/{nilai}', function ($nilai) {
    return 'nilai saya adalah '. $nilai;
});

Route::get('tambah/{nilai}/{nilai2}', function ($nilai, $nilai2) {
    return 'Hasil dari penjumlahan adalah '. $nilai + $nilai2;
});

Route::get('kurang/{nilai}/{nilai2}', function ($nilai, $nilai2) {
    return 'Hasil dari pengurangan adalah '. $nilai - $nilai2;
});

Route::get('kali/{nilai}/{nilai2}', function ($nilai, $nilai2) {
    return 'Hasil dari bagi adalah '. $nilai * $nilai2;
});

Route::get('bagi/{nilai}/{nilai2}', function ($nilai, $nilai2) {
    return 'Hasil dari kali adalah '. $nilai / $nilai2;
});

// Route::post('users/{id}', function ($id) {});
// Route::put('users/{id}', function ($id) {});
// Route::delete('users/{id}', function ($id) {});

Route::get('template', function () {
    return view('template');
});

Route::get('tabel', function () {
    $data = ['meja', 'kursi', 'lampu', 'pensil', 'buku', 'pulpen'];
    return view('table', compact('data'));
});

// Route::get('siswa', [SiswaController::class, 'index']);
// Route::get('tambahsiswa', [SiswaController::class, 'create']);
// Route::get('tampilsiswa', [SiswaController::class, 'show']);
// Route::get('tampilsiswa', [SiswaController::class, 'show']);

Route::resource('siswa', SiswaController::class)->middleware(['auth', 'admin']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
