<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ActivitieController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CvController;
use App\Http\Controllers\DirectorMsgController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OverseasJobsController;
use App\Http\Controllers\OverviewController;
use App\Http\Controllers\RecruitmentProcessController;
use App\Http\Controllers\VisionMissionController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('welcome');
Route::get('about', [AboutController::class, 'index'])->name('about.index');
Route::get('company', [CompanyController::class, 'index'])->name('company.index');
Route::get('directors', [DirectorMsgController::class, 'index'])->name('directormessage.index');
Route::get('ovrview', [OverviewController::class, 'index'])->name('companyoverview.index');
Route::get('visionmission', [VisionMissionController::class, 'index'])->name('visionmission.index');
Route::get('recruitmentprocess', [RecruitmentProcessController::class, 'index'])->name('recruitmentprocess.index');

Route::resource('contact', ContactController::class);
Route::resource('activitie', ActivitieController::class);
Route::resource('cv', CvController::class);
Route::resource('employer', EmployerController::class);
Route::resource('overseas_jobs', OverseasJobsController::class);
