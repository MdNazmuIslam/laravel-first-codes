<?php

use App\Http\Controllers\CurdController;
use App\Http\Controllers\regdataController;
use App\Http\Controllers\studentController;
use App\Http\Controllers\EmailContoroller;
use App\Http\Controllers\resgisterController;
use App\Http\Middleware\validUser;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('Home');
})->name('Home');


route::controller(studentController::class)->group(function(){

    Route::get('/crud','showdata')->name('crud');
    Route::get("/addData",'addData')->name('addData');
    Route::post("/DataAdd",'DataAdd')->name('DataAdd');
    Route::post("/DataUpdate",'DataUpdate')->name('DataUpdate');
    Route::get("/updateData{id}",'updateData')->name('updateData');
    Route::get("/deleteData{id}",'deleteData')->name('deleteData');
    Route::get("/viewData{id}",'viewData')->name('viewData');
});


Route::get('/FromValidation', function(){
    return view('Pages/FromValidation/FromValidation');
})->name('FromValidation');



Route::post('/regdata',[regdataController::class,'regdata'])->name("regdata");

Route::resource('/EqCrud',CurdController::class);


Route::get('/Contact', function(){
    return view('Pages/contact');
})->name('Contact');


Route::post('/sendEmail',[EmailContoroller::class,'sendEmail'])->name('sendEmail');

route::controller(resgisterController::class)->group(function(){
    Route::get('/login','login')->name('login');
    Route::get('/resgister','resgister')->name('resgister');
    Route::post('/resgistersave','resgistersave')->name('resgistersave');
    Route::post('/loginConfirm','loginConfirm')->name('loginConfirm');

   
});

Route::middleware(validUser::class)->group(function(){

    
    route::controller(resgisterController::class)->group(function(){
       
        Route::get('/dashboard','dashboardPage')->name('dashboard');
        Route::get('/logout','logout')->name('logout');
       
    });


});

//  Route::get('/dashboard', function(){
//     return view('Pages/user/dashboard');
//  })->name('dashboard');




