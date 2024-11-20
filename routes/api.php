<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\ApointmentController;
use App\Http\Controllers\api\ChemistController;
use App\Http\Controllers\api\ConsultationController;
use App\Http\Controllers\api\DoctorController;
use App\Http\Controllers\api\HospitalController;
use App\Http\Controllers\api\LabController;
use App\Http\Controllers\api\LocationController;
use App\Http\Controllers\api\MedicalTestController;
use App\Http\Controllers\api\MessageController;
use App\Http\Controllers\api\PatientController;
use App\Http\Controllers\api\PrescriptionController;
use App\Http\Controllers\api\ProfileController;
use App\Http\Controllers\api\SpecialisityController;
use App\Http\Controllers\api\SymptomController;
use App\Http\Controllers\api\Auth\AuthController;
use App\Http\Controllers\api\admin\AdminController;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::middleware('SetAppLang')->prefix('{locale}')->group(function() {
Route::post('login',[AuthController::class,'login'])->name('login');
});


Route::middleware('auth:sanctum','SetAppLang')->prefix('{locale}')->group(function() {

   Route::middleware('role:Admin')->group(function(){ 
        //admin
    Route::apiResource('doctor',DoctorController::class);
    Route::apiResource('apointment',ApointmentController::class);
    Route::apiResource('chemist',ChemistController::class);
    Route::apiResource('consultation',ConsultationController::class);
    Route::apiResource('hospital',HospitalController::class);
    Route::apiResource('lab',LabController::class);
    Route::apiResource('location',LocationController::class);
    Route::apiResource('medical',MedicalTestController::class);
    Route::apiResource('message',MessageController::class);
    Route::apiResource('patient',PatientController::class);
    Route::apiResource('prescription',PrescriptionController::class);
    Route::apiResource('specialisity',SpecialisityController::class);
    Route::apiResource('symptom',SymptomController::class);
    Route::apiResource('profile',ProfileController::class);
    Route::apiResource('admin',AdminController::class);
    });
    Route::middleware('role:Doctor')->group(function(){
        Route::apiResource('doctor',DoctorController::class);

    });
});
