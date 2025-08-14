<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::view('/', 'welcome')->name('home');

Route::view('/sobre-mi', 'sobre-mi')->name('sobre-mi');

Route::prefix('servicios')->name('servicios.')->group(function () {
    // Página general de servicios (si la usas)
    Route::view('/', 'servicios.index')->name('index');

    // Detalles de servicios
    Route::view('/acompanamiento-psicologico', 'servicios.acompanamiento-psicologico')->name('acompanamiento');
    Route::view('/bioneuroemocion', 'servicios.bioneuroemocion')->name('bioneuroemocion');

    // Packs
    Route::view('/pack-acompanamiento-psicologico', 'servicios.pack-acompanamiento-psicologico')->name('pack-acompanamiento');
    Route::view('/pack-bioneuroemocion', 'servicios.pack-bioneuroemocion')->name('pack-bioneuroemocion');
});

Route::get('/certificados/{file}', function (string $file) {
    // Seguridad básica
    abort_unless(preg_match('/^[A-Za-z0-9._-]+$/', $file), 404);
    abort_unless(str_ends_with(strtolower($file), '.pdf'), 404);

    $rel = "certificados/{$file}";
    $disk = Storage::disk('public');
    abort_unless($disk->exists($rel), 404);

    // Ruta absoluta del archivo y respuesta inline
    $path = $disk->path($rel);
    return response()->file($path, [
        'Content-Type' => 'application/pdf',
        'Content-Disposition' => 'inline; filename="'.$file.'"',
    ]);
})->name('certificados.show');

Route::view('/contacto', 'contacto')->name('contacto');

// Páginas legales
Route::view('/aviso-legal', 'legal.aviso-legal')->name('legal.aviso');
Route::view('/privacidad', 'legal.privacidad')->name('legal.privacidad');
Route::view('/cookies', 'legal.cookies')->name('legal.cookies');


