<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    function greeting(Request $request,$name){
    return "nice to meet you MR." .$name ;
    }
    function sayHello($myName){
        return "welcome you are authenticated" ;
        $isAuthenticated = true;
        $tryname = "Khaled kashmeri";
//        if($myName == "Mousa"){
//            $isAuthenticated = true;
//        }else{
//            $isAuthenticated = false;
//        }
//        if ($isAuthenticated) {
//            return response()->json(['$data' =>["names"=>$myName]]);
//        }else{
//            //json return data and status code
//            //401 status code error if the use is not authenticated
//            //redirect to change the page to other one
//            //back to get back to last visited page
//            return response()-> json(["data"=>"notAuthenticated"],401);
//        }
//        return view("SayHello")->with('requestedName',$name);
    }
}
