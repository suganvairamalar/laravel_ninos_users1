<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('frontend.index');
});

 /*Route::get('/dashboard', function () {
    return view('admin.dashboard');
    });*/

Auth::routes();
/*Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');*/

//'isUser' is mentioned in Kernal.php go and check
Route::group(['middleware'=>['auth','isUser']],function(){

    Route::get('/user', function () {
    return view('layouts.user');
    });

    Route::get('/home', [App\Http\Controllers\User\UserRegisteredController::class,'user_dashboard'])->name('user_dashboard');


    Route::get('/user_dashboard',[App\Http\Controllers\User\UserRegisteredController::class,'user_dashboard'])->name('user_dashboard');


     Route::get('/users_index',[App\Http\Controllers\User\UserRegisteredController::class,'index'])->name('index');

     Route::get('/users_index/{user_id}/details',[App\Http\Controllers\User\UserRegisteredController::class,'addEditDetails'])->name('addEditDetails');

      Route::put('/users_index/{user_id}/updatedetail',[App\Http\Controllers\User\UserRegisteredController::class,'storeOrUpdateDetail'])->name('storeOrUpdateDetail');

     Route::get('/addresses',[App\Http\Controllers\User\UserRegisteredController::class,'address_index'])->name('address_index');
      Route::get('addresses/create',[App\Http\Controllers\User\UserRegisteredController::class,'create'])->name('create');
      Route::post('addresses/store',[App\Http\Controllers\User\UserRegisteredController::class,'store'])->name('store');
       Route::get('addresses/{address}/edit',[App\Http\Controllers\User\UserRegisteredController::class,'edit'])->name('edit');
      Route::put('addresses/{address}',[App\Http\Controllers\User\UserRegisteredController::class,'update'])->name('update');

});//END isUser Middleware


//'isAdmin' is mentioned in Kernal.php go and check
Route::group(['middleware'=>['auth','isAdmin']],function(){

    Route::get('/home', [App\Http\Controllers\Admin\RegisteredController::class,'dashboard'])->name('dashboard');

    Route::get('/dashboard', [App\Http\Controllers\Admin\RegisteredController::class,'dashboard'])->name('dashboard');
    
    /*Route::get('/index', [App\Http\Controllers\Admin\RegisteredController::class,'index'])->name('index');*/
    
    Route::get('/uaddress', [App\Http\Controllers\Admin\RegisteredController::class,'uaddress'])->name('uaddress');
   
    Route::get('/search',[App\Http\Controllers\Admin\RegisteredController::class,'search'])->name('search');

    });

    //END isAdmin Middleware

