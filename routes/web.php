<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AdminAuth;


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
    return view('index');
});

Route::get('/admin-login', [App\Http\Controllers\Admin\AdminAuthController::class, 'login'])->name('admin-login');
Route::post('/admin/auth', [App\Http\Controllers\Admin\AdminAuthController::class, 'authLogin'])->name('auth.Login');






//Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about-us', [App\Http\Controllers\HomeController::class, 'about_us'])->name('about');
Route::get('/portfolio', [App\Http\Controllers\HomeController::class, 'portfolio'])->name('portfolio');
Route::get('/resume', [App\Http\Controllers\HomeController::class, 'resume'])->name('resume');
Route::get('/service', [App\Http\Controllers\HomeController::class, 'service'])->name('service');
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');


// Admin Main routes starts here
////Route::group(['middleware'=>'admin_auth'],function(){

    Route::get('/admin-dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');

Route::prefix('project-type')->group(function () {

    Route::get('/', 'App\Http\Controllers\Admin\ProjecttypeController@projecttype')->name('projecttypelist');

    Route::get('/', 'App\Http\Controllers\Admin\ProjecttypeController@index')->name('projecttypelist');
    Route::get('/add', 'App\Http\Controllers\Admin\ProjecttypeController@add')->name('projecttypeadd');

    Route::get('/edit/{id}', 'App\Http\Controllers\Admin\ProjecttypeController@edit')->name('projecttypeedit');
    
    Route::post('/update/{id}', 'App\Http\Controllers\Admin\ProjecttypeController@update')->name('projecttypeupdate');
    //------------
    Route::post('/destroy', 'App\Http\Controllers\Admin\ProjecttypeController@destroy')->name('projecttypedestroy');
//------------
});


Route::prefix('department')->group(function () {
    Route::get('/', 'App\Http\Controllers\Admin\Departmentcontroller@Department')->name('department');
    Route::get('/edit/{id}', 'App\Http\Controllers\Admin\Departmentcontroller@edit')->name('departmentedit');
    Route::post('/update/{id}', 'App\Http\Controllers\Admin\Departmentcontroller@update')->name('departmentupdate');
    Route::get('/insertdepp', 'App\Http\Controllers\Admin\Departmentcontroller@insertdepp')->name('insertdept');
    Route::post('/create', 'App\Http\Controllers\Admin\Departmentcontroller@create')->name('createdept');
    //Route::get('/delete/{id}', 'App\Http\Controllers\Admin\Departmentcontroller@destroy')->name('deletedept');
    Route::post('/newdelete', 'App\Http\Controllers\Admin\Departmentcontroller@newdestroy')->name('newdeletedept');

});

Route::prefix('employee')->group(function () {
    Route::get('/', [App\Http\Controllers\Admin\Employeecontroller::class, 'employee'])->name('employee');
    Route::get('/insertemployee', [App\Http\Controllers\Admin\Employeecontroller::class, 'insertemployee'])->name('insertemployee');
    Route::post('/createemployee', [App\Http\Controllers\Admin\Employeecontroller::class, 'createemployee'])->name('createemployee');
    Route::get('/editemp/{id}', [App\Http\Controllers\Admin\Employeecontroller::class, 'editemp'])->name('editemp');
    Route::post('/updateemp/{id}', [App\Http\Controllers\Admin\Employeecontroller::class, 'updateemp'])->name('updateemp');
    Route::post('/deleteemp', 'App\Http\Controllers\Admin\Employeecontroller@deleteemp')->name('deleteemp');

});

Route::prefix('designation')->group(function () { 
    Route::get('/', [App\Http\Controllers\Admin\Designationcontroller::class, 'designation'])->name('designation');
    Route::get('/insertposition', [App\Http\Controllers\Admin\Designationcontroller::class, 'insertposition'])->name('insertposition');
    Route::post('/createposition', [App\Http\Controllers\Admin\Designationcontroller::class, 'createposition'])->name('createposition');
    Route::get('/edipposition/{id}', [App\Http\Controllers\Admin\Designationcontroller::class, 'edipposition'])->name('edipposition');
    Route::post('/updateposition/{id}', [App\Http\Controllers\Admin\Designationcontroller::class, 'updateposition'])->name('updateposition');

    Route::post('/delete', [App\Http\Controllers\Admin\Designationcontroller::class, 'delete'])->name('delete');


    });

Route::prefix('projectmanagement')->group(function () {
        Route::get('/', [App\Http\Controllers\Admin\Projectmanagementcontroller::class, 'projectmanagement'])->name('projectmanagement');
        Route::get('/insert_projectmanagement', [App\Http\Controllers\Admin\Projectmanagementcontroller::class, 'insert_projectmanagement'])->name('insert_projectmanagement');
        Route::post('/create_projectmanagement', [App\Http\Controllers\Admin\Projectmanagementcontroller::class, 'create_projectmanagement'])->name('create_projectmanagement');
        Route::get('/edit_ProjectManagement/{id}', [App\Http\Controllers\Admin\Projectmanagementcontroller::class, 'edit_ProjectManagement'])->name('edit_ProjectManagement');
        Route::post('/update_ProjectManagement/{id}', [App\Http\Controllers\Admin\Projectmanagementcontroller::class, 'update_ProjectManagement'])->name('update_ProjectManagement');
        Route::post('/deletePM', [App\Http\Controllers\Admin\Projectmanagementcontroller::class, 'deletePM'])->name('deletePM');
        
        });

Route::prefix('projectdepertment')->group(function(){
       Route::get('/', [App\Http\Controllers\Admin\Projectdepartmentcontroller::class, 'projectdepertment'])->name('projectdepertment');
       Route::get('/add_projectdepertment', [App\Http\Controllers\Admin\Projectdepartmentcontroller::class, 'add_projectdepertment'])->name('add_projectdepertment');
       Route::post('/create_projectdepertment', [App\Http\Controllers\Admin\Projectdepartmentcontroller::class, 'create_projectdepertment'])->name('create_projectdepertment');

});

//});



// Admin Main routes ends here


//admin route start--

//Route::get('/admin-dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');
//Route::get('/admin-icon', [App\Http\Controllers\HomeController::class, 'icon'])->name('icon');
//Route::get('/admin-map', [App\Http\Controllers\HomeController::class, 'map'])->name('map');
//Route::get('/admin-notification', [App\Http\Controllers\HomeController::class, 'notification'])->name('notification');
//Route::get('/admin-userprofile', [App\Http\Controllers\HomeController::class, 'userprofile'])->name('userprofile');
Route::get('/admin-table-list', [App\Http\Controllers\HomeController::class, 'tablelist'])->name('table-list');
//Route::get('/admin-projectmanagement', [App\Http\Controllers\HomeController::class, 'projectmanagement'])->name('projectmanagement');
//Route::get('/admin-rtl', [App\Http\Controllers\HomeController::class, 'rtl'])->name('rtl');
//Route::get('/admin-login', [App\Http\Controllers\HomeController::class, 'login'])->name('login');
