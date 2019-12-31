<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
class AdminController extends Controller
{
    public function login(Request $request){
        $user=Admin::whereEmailAndPassword($request['email'],$request['motpass'])->get();
        if(count($user)>0){
            return response([
                'status'=>'succus',
                'data'=>'conexion ressué'
            ]);
        }else{
            return response([
                'status'=>'succus',
                'data'=>null
            ]);
        }
        
    }
}
