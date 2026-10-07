<?php

use App\Http\Controllers\MedicalFilesController;
use App\Http\Controllers\StudentsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::prefix('students')->group(function(){

Route::post('/',[StudentsController::class,'store']);
Route::get('/',[StudentsController::class,'index']);
Route::get('/{id}',[StudentsController::class,'show']);


});


Route::prefix('/medicalFiles')->group(function(){

Route::get('/{student_id}',[MedicalFilesController::class,'show']);
Route::post('/',[MedicalFilesController::class,'store']);
Route::put('/{id}',[MedicalFilesController::class,'update']);

});
