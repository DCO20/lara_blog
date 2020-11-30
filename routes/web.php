<?php
use App\Http\Livewire\AboutComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\PostComponent;
use App\Http\Livewire\ContactComponent;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeComponent::class)->name('home.index');
Route::get('/sobre', AboutComponent::class)->name('about.index');
Route::get('/post/{slug}', PostComponent::class)->name('post.index');
Route::get('/contato', ContactComponent::class)->name('contact.index');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
