<?php

use App\Http\Controllers\UserController;
use App\Models\Post;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $roles = Role::all();
    dd($roles);

    return view('welcome');
});

Route::get('admin/usuarios', [UserController::class, 'index'])->name('users.index');
Route::get('admin/usuarios/cadastrar', [UserController::class, 'create'])->name('users.create');
Route::post('admin/usuarios/cadastrar', [UserController::class, 'store'])->name('users.store');
Route::get('admin/usuarios/{user}', [UserController::class, 'show']);
