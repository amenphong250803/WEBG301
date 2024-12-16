<?php

use App\Http\Controllers\ScheduleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController;

use App\Http\Controllers\MajorController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;

// |--------------------------------------------------------------------------
// | Web Routes
// |--------------------------------------------------------------------------
// |
// | Here is where you can register web routes for your application. These
// | routes are loaded by the RouteServiceProvider and all of them will
// | be assigned to the "web" middleware group. Make something great!
// |

Route::resource('/class', ClassController::class);
Route::get('/', function () {
    return view('welcome');
});
Route::get('/index', function () {
    return view('layout.index');
});
Route::get('login', [AuthenticationController::class, 'loginIndex']);
Route::post('login', [AuthenticationController::class, 'login'])->name('login');
Route::get('register', [AuthenticationController::class, 'registerIndex']);
Route::post('register', [AuthenticationController::class, 'register']);
Route::get('logout', [AuthenticationController::class, 'logout']);
Route::resource('/major', MajorController::class);
Route::resource('/students', StudentController::class);
Route::resource('/courses', CourseController::class);
Route::resource('/schedules', ScheduleController::class);