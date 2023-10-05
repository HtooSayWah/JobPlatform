<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\Auth\LoginController;
use app\Http\Controllers\Admin\SpecializationController;
use App\Models\Job;
use App\Http\Controllers\TutorialController;

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

// Route::get('/', [LoginController::class,'_construct']);
// Route::get('/login', [LoginController::class,'_construct']);
// Route::get('login', array(
//     'uses' => 'MainController@showLogin'
//   ));
//   // route to process the form
//   Route::post('login', array(
//     'uses' => 'MainController@doLogin'
//   ));

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/specialization',[App\Http\Controllers\Admin\SpecializationController::class, 'index']);
Route::post('/specialization/create',[App\Http\Controllers\Admin\SpecializationController::class, 'create'])->name('specialization.create');
Route::get('/postJob',[App\Http\Controllers\Admin\JobController::class, 'index']);
Route::post('/postJob/create',[App\Http\Controllers\Admin\JobController::class, 'create'])->name('postJob.create');
Route::get('/home/jobsList', [App\Http\Controllers\SearchController::class, 'jobsList'])->name('home.jobsList');
Route::get('/home/jobsListwithSpec/{id}', [App\Http\Controllers\SearchController::class, 'jobsListwithSpec'])->name('home.jobsListwithSpec');
Route::get('/jobDetail/getDetail/{id}', [App\Http\Controllers\Admin\JobController::class, 'getDetail']);
Route::get('employer/add',[App\Http\Controllers\Admin\EmployerController::class, 'add']);
Route::post('employer/add', [App\Http\Controllers\Admin\EmployerController::class, 'create']);
//Route::get('/', [TutorialController::class,'index'])->name('index');
//Route::get("/search",[TutorialController::class,'search']);