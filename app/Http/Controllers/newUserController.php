<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class newUserController extends Controller
{
    function createRandomUser(Request $request)
    {
        $new_user = User::create([
            "name" => "MousaTahasssdwad",
            "email" => "mosadwada@gmail.com",
          //  "verify_user_name" =>"MousaTahasssdwad",
            "password" => "123421342"
        ]);
        return $new_user;
    }

}
