<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Artical;
use Illuminate\Http\Request;

class new_artical extends Controller
{
    function newArtical()
    {
        $new_Artical = Artical::create([
            "title"=>"MousaTahasss",
        ]);
        return $new_Artical;
    }
}
