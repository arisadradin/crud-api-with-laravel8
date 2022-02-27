<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::post('save' , [userController::class, 'save' ])->name('add');
Route::get('get',[userController::class , 'get'])->name('show');
Route::put('update/{id}',[userController::class , 'update'])->name('edit');
Route::delete('delete/{id}',[userController::class , 'delete'])->name('delete');

