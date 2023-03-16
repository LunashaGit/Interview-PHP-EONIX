<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeopleController;
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

Route::get('/', [PeopleController::class, 'index'])->name('people.index');
Route::get('/people/create', [PeopleController::class, 'create_view'])->name('people.create');
Route::post('/people/create', [PeopleController::class, 'create']);
Route::get('/people/{uuid}', [PeopleController::class, 'person_view'])->name('people.person');
Route::put('/people/edit/{uuid}', [PeopleController::class, 'edit']);
Route::get('/people/{uuid}/edit', [PeopleController::class, 'edit_view'])->name('people.edit');
Route::delete('/people/{uuid}/delete', [PeopleController::class, 'delete']);