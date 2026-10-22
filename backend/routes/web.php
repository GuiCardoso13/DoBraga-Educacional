<?php

use App\Http\Controllers\FormDataController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AprovadoController;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\NovidadeController;
use App\Http\Controllers\GaleriaController;
use App\Http\Controllers\NoticiaController;
use Illuminate\Support\Facades\Route;
use App\Models\Professor;
use App\Models\Noticia;
use App\Models\Aprovado;
use App\Models\Galeria;

// Rotas de páginas de acesso comum

Route::get('/', function () {
    $professores = Professor::all();
    $galerias = Galeria::all();
    return view('welcome', compact('professores', 'galerias'));
});

Route::get('/sobre', function () {
    return view('sobre');
});

Route::get('/institucional', function () {
    return view('institucional');
});

Route::get('/mural-de-noticias', function () {
    $noticias = Noticia::all();
    return view('mural-de-noticias', compact('noticias'));
})->name('noticias.public.index');

Route::get('/mural-de-noticias/load', [NoticiaController::class, 'loadMore']);
Route::get('/mural-de-noticias/{slug}', [NoticiaController::class, 'showPublic'])->name('noticias.public.show');

Route::get('/mural-dos-aprovados', function () {
    $aprovados = Aprovado::all();
    return view('mural-dos-aprovados', compact('aprovados'));
});

Route::get('/mural-dos-aprovados/load', [AprovadoController::class, 'loadMore']);

Route::get('/formulario-de-interesse', function () {
    return view('formulario-de-interesse');
});

Route::get('/simulados', function () {
    return view('simulados');
});

Route::get('/formulario', [FormDataController::class, 'index'])->name('formulario.index');
Route::post('/formulario/store', [FormDataController::class, 'store'])->name('formulario.store');
Route::get('/formulario/export', [FormDataController::class, 'export'])->name('formulario.export');

// Rotas de acesso restrito (admin)

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('aprovados', AprovadoController::class);
    Route::resource('professores', ProfessorController::class)->parameters([
        'professores' => 'professor'
    ]);
    Route::resource('novidades', NovidadeController::class);
    Route::resource('formulario', FormDataController::class);
    Route::resource('galerias', GaleriaController::class);
    Route::resource('noticias', NoticiaController::class);  // Rota para as notícias
    Route::resource('formularios', FormDataController::class);  // Rota para as notícias
});

require __DIR__.'/auth.php';
