<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Collection;

use Illuminate\Pagination\Factory;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\CompaniesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::view('/admin', 'admin');
Route::view('/index', 'index');
Route::view('/delete', 'delete');
Route::view('/thankyou', 'auth.thankyou');

Route::post('/companies', CompaniesController::class . '@save')->name('manage.companies.save');
Route::post('/employees', EmployeesController::class . '@save')->name('manage.employees.save');
Route::post('/signup', LoginController::class . '@save')->name('auth.signup.save');


Route::post('/employees-list/edit-employees/{id}', EmployeesController::class . '@update')->name('manage.employees-list.update');
Route::get('/employees-list/edit-employees/{id}', EmployeesController::class . '@edit')->name('manage.employees-list.edit');


Route::post('/companies-list/{id}', CompaniesController::class . '@update')->name('manage.companies-list.update');
Route::get('/companies-list/{id}', CompaniesController::class . '@edit')->name('manage.companies-list.edit');

Route::view('/manage/logos/{id}', CompaniesController::class . '@logos')->name('manage.logos.logos');

Route::post('/companies-list/{id}', CompaniesController::class . '@destroy')->name('manage.companies-list.destroy');
Route::post('/employees-list/{id}', EmployeesController::class . '@destroy')->name('manage.employees-list.destroy');


Route::get('/companies', CompaniesController::class . '@create')->name('manage.companies');
Route::get('/employees', EmployeesController::class . '@create')->name('manage.employees');

Route::get('/signup', LoginController::class . '@create')->name('auth.signup');
Route::get('/login', LoginController::class . '@adminLogin');



Route::get('/employees-list', function() {
  $employees = DB::table('employees')->paginate(10);
  return view('manage.employees-list', ['employees' => $employees]);
});

Route::get('/companies-list', function() {
  $companies = DB::table('companies')->paginate(10);
  return view('manage.companies-list', ['companies' => $companies]);
});
