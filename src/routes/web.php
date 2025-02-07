<?php
use Illuminate\Support\Facades\Route;
use Custom\HelloWorld\Livewire\HelloWorldIndex;

Route::middleware(['web'])->group(function () {
    Route::get('/hello', HelloWorldIndex::class)->name('hello.index');
});

