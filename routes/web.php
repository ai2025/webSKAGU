<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HalamanController;

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

Route::get('/', [HalamanController::class, 'home']);
Route::get('/visiMisiTujuan', [HalamanController::class, 'visiMisiTujuan']);
Route::get('/identitasSekolah', [HalamanController::class, 'identitasSekolah']);
Route::get('/strukturOrg', [HalamanController::class, 'strukturOrg']);
Route::get('/jmlhSiswa', [HalamanController::class, 'jmlhSiswa']);
Route::get('/tntgBKK', [HalamanController::class, 'tntgBKK']);
Route::get('/orgnssBKK', [HalamanController::class, 'orgnssBKK']);
Route::get('/inputDataAlumni', [HalamanController::class, 'inputDataAlumni']);
Route::get('/tntgKrklm', [HalamanController::class, 'tntgKrklm']);
Route::get('/organisasi', [HalamanController::class, 'organisasi']);
Route::get('/klndrPmbljaran', [HalamanController::class, 'klndrPmbljaran']);
Route::get('/pmbljaran', [HalamanController::class, 'pmbljaran']);
Route::get('/penilaian', [HalamanController::class, 'penilaian']);
Route::get('/srtfkasi', [HalamanController::class, 'srtfkasi']);
Route::get('/tntgHum', [HalamanController::class, 'tntgHum']);
Route::get('/orgnssHum', [HalamanController::class, 'orgnssHum']);
Route::get('/prgrmkrjHum', [HalamanController::class, 'prgrmkrjHum']);
Route::get('/pkl', [HalamanController::class, 'pkl']);
Route::get('/tntgSis', [HalamanController::class, 'tntgSis']);
Route::get('/orgnssSis', [HalamanController::class, 'orgnssSis']);
Route::get('/prgrmkrjSis', [HalamanController::class, 'prgrmkrjSis']);
Route::get('/ekskul', [HalamanController::class, 'ekskul']);
Route::get('/kegOsis', [HalamanController::class, 'kegOsis']);
Route::get('/kegPram', [HalamanController::class, 'kegPram']);
Route::get('/dokKeg', [HalamanController::class, 'dokKeg']);
Route::get('/tntgSarpras', [HalamanController::class, 'tntgSarpras']);
Route::get('/orgnssSarpras', [HalamanController::class, 'orgnssSarpras']);
Route::get('/prgrmkrjSarpras', [HalamanController::class, 'prgrmkrjSarpras']);
Route::get('/fasSek', [HalamanController::class, 'fasSek']);
Route::get('/tntgPerpus', [HalamanController::class, 'tntgPerpus']);
Route::get('/orgnssPerpus', [HalamanController::class, 'orgnssPerpus']);
Route::get('/berita', [HalamanController::class, 'berita']);
Route::get('/inform', [HalamanController::class, 'inform']);
Route::get('/ppdb', [HalamanController::class, 'ppdb']);
Route::get('/kontak', [HalamanController::class, 'kontak']);