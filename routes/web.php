<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
Route::get('/', function () {
    return "Hello anonymous 🙂";
});
Route::get('/Mousa',function(){
    return "Hello Mousa";
});
Route::get('/names',function (){
    $number_of_order = 1;

    return view('names') ->with("name1", "Khaled Taha")
        ->with("name2", "Mousa Taha")
        ->with("name3", "Abdulrahman")
        ->with("number_of_order", $number_of_order);
});
Route::get('/tags',function(){
    return '<h1 style="background-color: black; color: white">Hello guys</h1>';
});

Route::get('/greetings',function(){
    return view('welcome',['name' =>'Mousa Taha']);
});
Route::get('/list', function(){
    $Datanumber = ['Data1','Data2','Data3','Data4','Data5'];
    return view('listData')->with("datas",$Datanumber);
});
//controller
Route::get('/mealNames',[UserController::class,'mealName']);
Route::get('/welcome/{name}',[WelcomeController::class,'greeting']);
//using middle ware
Route::get('/hello/{names}',[WelcomeController::class,'sayHello'])->middleware(
    \App\Http\Middleware\auth::class
);
/*
 * IT'S BETTER TO NOT PUT API END POINT IN WEB.PHP FOLDER
 * it would be better in api.php folder
 * */
Route::get('/posting',function (){
   return "Hello from getting";
});
Route::post('/posting',function (){
    return "Hello from posting";
});
Route::delete('/posting',function (){
    return response()->json(["data"=>"delete success"]);
});

Route::get('/apiTest',function (){
    return \route('api');
});
