<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Models\Project;
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

    $projects = Project::all();

    return view('welcome', compact('projects'));
})->name('home');

Route::get('/dashboard', function () {

    $projects = Project::all();

    return view('admin.dashboard', compact('projects'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/project/edit/{project}', [ProjectController::class, 'edit'])->name('edit');
    Route::post('/project/edit/{project}', [ProjectController::class, 'update'])->name('update');
    Route::delete('/project/delete/{project}', [ProjectController::class, 'delete'])->name('destroy');
    Route::get('/project/create', [ProjectController::class, 'create'])->name('create');
    Route::post('/project/create', [ProjectController::class, 'store'])->name('store');
});


Route::get('/project/{project}', [ProjectController::class, 'show'])->name('project');


require __DIR__ . '/auth.php';
