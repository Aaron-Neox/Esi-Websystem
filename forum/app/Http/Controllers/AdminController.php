<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
/**
 * @group Admin management
 *
 * APIs for managing admins
 */
class AdminController extends Controller
{
     /**
	 * login an admin
	 *
     * @authenticated
     * 
     * @bodyParam Email String required The email of the admin. Example: admin@esi.dz
	 * @bodyParam Password String required The password of the admin to login. Example: admin
	 *
	 */
    public function login(Request $request){
        $user=Admin::whereEmailAndPassword($request['email'],$request['motpass'])->get();
        if(count($user)>0){
            return response([
                'status'=>'succus',
                'data'=>'connexion ressué'
            ]);
        }else{
            return response([
                'status'=>'succus',
                'data'=>null
            ]);
        }
        
    }
}
