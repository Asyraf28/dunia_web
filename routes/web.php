<?php

use Illuminate\Support\Facades\Route;

// route game controller
use App\Http\Controllers\GameController;

Route::post('/update-score', [GameController::class, 'updateScore'])->name('update.score');


Route::get('/player-menu', function () {
    return view('player-menu');
})->name('player.menu')->middleware('auth');

// route auth controller
use App\Http\Controllers\AuthController;

Route::get('/adminDashboard', [AuthController::class, 'dashboard'])->name('adminDashboard');
Route::post('/admin/reset-score/{id}', [AuthController::class, 'resetScore'])->name('admin.reset.score');
Route::get('/admin/user/{id}/edit', [AuthController::class, 'editUser'])->name('admin.edit.user');
Route::put('/admin/user/{id}', [AuthController::class, 'updateUser'])->name('admin.update.user');
Route::delete('/admin/user/{id}', [AuthController::class, 'deleteUser'])->name('admin.delete.user');

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::post('/register', [AuthController::class, 'register'])->name('register');

// Route Soal Controller
use App\Http\Controllers\SoalController;

Route::get('/soal', [SoalController::class, 'index']);
Route::get('/soal/{id}', [SoalController::class, 'show']);


// routing
Route::get('/Player Login', function () {
    return view('Player Login');
});

Route::get('/Admin Login', function () {
    return view('Admin Login');
});

Route::get('/Player Menu', function () {
    return view('Player Menu');
});

Route::get('/Level Menu', function () {
    return view('Level Menu');
});

Route::get('/Menu Materi', function () {
    return view('Menu Materi');
});

Route::get('/Menu Settings', function () {
    return view('Menu Settings');
});


// Routing Materi
Route::get('/materi1', function () {
    return view('Materi/materi1');
});
Route::get('/materi2', function () {
    return view('Materi/materi2');
});
Route::get('/materi3', function () {
    return view('Materi/materi3');
});
Route::get('/materi4', function () {
    return view('Materi/materi4');
});
Route::get('/materi5', function () {
    return view('Materi/materi5');
});
Route::get('/materi6', function () {
    return view('Materi/materi6');
});
Route::get('/materi7', function () {
    return view('Materi/materi7');
});


// Routing Level 1
Route::get('/Level1 awal', function () {
    return view('Level 1/Level1 awal');
});

Route::get('/Level1 1', function () {
    return view('Level 1/Level1 1');
});

Route::get('/Level1 2', function () {
    return view('Level 1/Level1 2');
});

Route::get('/Level1 3', function () {
    return view('Level 1/Level1 3');
});

Route::get('/Level1 4', function () {
    return view('Level 1/Level1 4');
});

Route::get('/Level1 5', function () {
    return view('Level 1/Level1 5');
});

Route::get('/Level1 6', function () {
    return view('Level 1/Level1 6');
});

Route::get('/Level1 7', function () {
    return view('Level 1/Level1 7');
});

Route::get('/Level1 8', function () {
    return view('Level 1/Level1 8');
});

Route::get('/Level1 9', function () {
    return view('Level 1/Level1 9');
});

Route::get('/Level1 10', function () {
    return view('Level 1/Level1 10');
});

Route::get('/Level1 done', function () {
    return view('Level 1/Level1 done');
});


// Routing Level 2
Route::get('/Level2 awal', function () {
    return view('Level 2/Level2 awal');
});

Route::get('/Level2 1', function () {
    return view('Level 2/Level2 1');
});

Route::get('/Level2 2', function () {
    return view('Level 2/Level2 2');
});

Route::get('/Level2 3', function () {
    return view('Level 2/Level2 3');
});

Route::get('/Level2 4', function () {
    return view('Level 2/Level2 4');
});

Route::get('/Level2 5', function () {
    return view('Level 2/Level2 5');
});

Route::get('/Level2 6', function () {
    return view('Level 2/Level2 6');
});

Route::get('/Level2 7', function () {
    return view('Level 2/Level2 7');
});

Route::get('/Level2 8', function () {
    return view('Level 2/Level2 8');
});

Route::get('/Level2 done', function () {
    return view('Level 2/Level2 done');
});


// Routing Level 3
Route::get('/Level3 awal', function () {
    return view('Level 3/Level3 awal');
});

Route::get('/Level3 1', function () {
    return view('Level 3/Level3 1');
});

Route::get('/Level3 2', function () {
    return view('Level 3/Level3 2');
});

Route::get('/Level3 3', function () {
    return view('Level 3/Level3 3');
});

Route::get('/Level3 4', function () {
    return view('Level 3/Level3 4');
});

Route::get('/Level3 5', function () {
    return view('Level 3/Level3 5');
});

Route::get('/Level3 6', function () {
    return view('Level 3/Level3 6');
});

Route::get('/Level3 done', function () {
    return view('Level 3/Level3 done');
});


// Routing Level 4
Route::get('/Level4 awal', function () {
    return view('Level 4/Level4 awal');
});

Route::get('/Level4 1', function () {
    return view('Level 4/Level4 1');
});

Route::get('/Level4 2', function () {
    return view('Level 4/Level4 2');
});

Route::get('/Level4 3', function () {
    return view('Level 4/Level4 3');
});

Route::get('/Level4 4', function () {
    return view('Level 4/Level4 4');
});

Route::get('/Level4 5', function () {
    return view('Level 4/Level4 5');
});

Route::get('/Level4 6', function () {
    return view('Level 4/Level4 6');
});

Route::get('/Level4 7', function () {
    return view('Level 4/Level4 7');
});

Route::get('/Level4 8', function () {
    return view('Level 4/Level4 8');
});

Route::get('/Level4 9', function () {
    return view('Level 4/Level4 9');
});

Route::get('/Level4 10', function () {
    return view('Level 4/Level4 10');
});

Route::get('/Level4 done', function () {
    return view('Level 4/Level4 done');
});


// Routing Level 5
Route::get('/Level5 awal', function () {
    return view('Level 5/Level5 awal');
});

Route::get('/Level5 1', function () {
    return view('Level 5/Level5 1');
});

Route::get('/Level5 2', function () {
    return view('Level 5/Level5 2');
});

Route::get('/Level5 3', function () {
    return view('Level 5/Level5 3');
});

Route::get('/Level5 4', function () {
    return view('Level 5/Level5 4');
});

Route::get('/Level5 5', function () {
    return view('Level 5/Level5 5');
});

Route::get('/Level5 6', function () {
    return view('Level 5/Level5 6');
});

Route::get('/Level5 done', function () {
    return view('Level 5/Level5 done');
});


// Routing Level 6
Route::get('/Level6 awal', function () {
    return view('Level 6/Level6 awal');
});

Route::get('/Level6 1', function () {
    return view('Level 6/Level6 1');
});


//test
Route::get('/test', function () {
    return view('Level 1/test');
});
