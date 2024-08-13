<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class auth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    //request check request info
    //closure : function to complete end point -> request
    public function handle(Request $request, Closure $next): Response
    {
       $getTheName= $request->route('names');
       if($getTheName != "Mousa"){
           return response()->json(["error"=>"user not authenticated"],401);
       }else {
           echo "Welcome ";
           return $next($request);
       }
//       if($getTheName == "Mousa"){
//           echo "Welcome ".$getTheName;
//       }else{
//           echo "user not authenticated" ;
//       }

    }
}
