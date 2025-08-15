<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::view('/', 'welcome')->name('home');

Route::view('/sobre-mi', 'sobre-mi')->name('sobre-mi');
Route::view('/servicios', 'servicios')->name('servicios');

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

Route::post('/contacto', [ContactController::class, 'send'])
    ->name('contact.send')
    ->middleware('throttle:5,1'); // máx 5 envíos por minuto

// Páginas legales
Route::view('/aviso-legal', 'legal.aviso-legal')->name('legal.aviso');
Route::view('/privacidad', 'legal.privacidad')->name('legal.privacidad');
Route::view('/cookies', 'legal.cookies')->name('legal.cookies');


