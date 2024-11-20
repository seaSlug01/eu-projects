<?php

use App\Livewire\Home;
use App\Livewire\EuPosts;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Filament\Resources\UserResource\Pages\Registration;

Route::get('/', Home::class);

Route::get('/eu-posts/{id}', EuPosts::class)->name('eu-posts.show');

Route::get('/login', function () {
    return redirect(route('filament.admin.auth.login'));
})->name('login');

Route::get("/projects", [PostsController::class, 'getAll']);
Route::get("/projects/{id}", [PostsController::class, 'getSingle']);
Route::post("/projects", [PostsController::class, 'storeProject']);
Route::put("/projects/{id}", [PostsController::class, 'updateProject']);
Route::delete("/projects/{id}", [PostsController::class, 'deleteProject']);

Route::get('/register', Registration::class)->name('filament.pages.register');

// Route::get('/csrf-token', function () {
//     return response()->json(['csrf_token' => csrf_token()]);
// });