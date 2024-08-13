<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function mealName (Request $customer){
        //types of parameter
        //query parameter: from the url
        //body parameter: API and postman
        //path parameter: default value from parameter
        return $customer -> all();
    }
}
