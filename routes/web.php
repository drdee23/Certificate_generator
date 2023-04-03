<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\ImageFileController;

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




Route::middleware('auth')->group(function () {

    Route::get('/', [\App\Http\Controllers\ContactController::class, 'index'])->name('contacts.index');
    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
    Route::post('/import_parse', [\App\Http\Controllers\ImportController::class, 'parseImport'])->name('import_parse');
    Route::post('/import_process', [\App\Http\Controllers\ImportController::class, 'processImport'])->name('import_process');
    Route::get('/csv_list', [\App\Http\Controllers\ContactController::class, 'index'])->name('contacts.index');
    Route::get('/generate-pdf', [PDFController::class, 'generatePDF'])->name('generate-pdf');
    Route::get('/view_pdf', [PDFController::class, 'view_pdf'])->name('view_pdf');
    Route::get('/all', [ImageFileController::class, 'index'])->name('all_certificates');
    Route::post('/add-watermark', [ImageFileController::class, 'imageFileUpload'])->name('image.watermark');
});


require __DIR__ . '/auth.php';
