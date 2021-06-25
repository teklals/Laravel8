<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pagecontroller;
use App\Http\Controllers\admincontroller;
use App\Http\Controllers\Basecontroller;
use App\Http\Controllers\DatatestController;

//https://www.youtube.com/watch?v=68ORnUuQBPQ&t=109s
//https://www.youtube.com/watch?v=fFD6qho_blY
//laravel 8 cms project part 7 | admin login form in laravel 8 | admin theme in laravel project
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
    return view('home');
});

Route::get('/home', [Basecontroller::class,'home']);
Route::get('/company', [Basecontroller::class,'company']);
Route::get('/services', [Basecontroller::class,'services']);
Route::get('/contact', [Basecontroller::class,'contact']);
Route::get('/admin', [admincontroller::class,'index'])->name('login');
Route::post('/admin', [admincontroller::class,'makeLogin']);

Route::group(['middleware'=>'auth:admin'], function(){

Route::get('/dashbord', [admincontroller::class,'dashbord']);
Route::get('//admin/home/addpage',[Pagecontroller::class,'AddPage'])->name('page-add');
Route::post('page-create',[Pagecontroller::class,'CreatePage'])->name('page-create');

});
Route::get('/admin/addcompany',[DatatestController::class,'AddCompany']);
Route::post('/admin/addcompany',[DatatestController::class,'AddCompanyData']);

Route::get('/admin/companymgmt',[DatatestController::class,'CompanyMgmt']);
Route::get('/admin/delete/{id}',[DatatestController::class,'DeleteCompany']);
Route::get('/admin/edit/{id}',[DatatestController::class,'UpdateCompany']);
Route::post('/admin/edit/',[DatatestController::class,'UpdateCompanyData']);
