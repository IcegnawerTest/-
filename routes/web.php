<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', [CourseController::class, "index"]);

Route::get('/login', [UserController::class, "signin"]);
Route::get('/signin', [CourseController::class, "signin_valid"]);
Route::get('/signout', [UserController::class, "signout"]);

Route::get('/account', [UserController::class, "account"]);

Route::get('/registration', [UserController::class, "signup"]);
Route::post('/signup', [UserController::class, "signup_valid"]);

Route::post("/enroll",[ApplicationController::class, "create_application"]);

Route::get("/admin",[AdminController::class,"index"]);
Route::post("/cours",[CourseController::class,"create_course"]);
Route::post("/category",[CourseController::class,"create_categories"]);


Route::get("/application/{id_application}/confirm",[ApplicationController::class,"confirm"]);
