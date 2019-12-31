<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function login(Request $request)
    {
        $user=new User;
        $user=User::whereEmailAndPassword($request['email'],sha1($request['motpass']))->get();
        if(count($user)>0){
            $admin=new Admin;
            $admin=Admin::whereEmailAndPassword($request['email'],sha1($request['motpass']))->get();
            if(count($admin)>0){
                return response([
                    'status'=>'succeslogin',
                    'data'=>[
                        'email'=>$request['email'],
                        'motpass'=>$request['motpass'],
                        'user_con'=>'a'
                    ]
                ]);
            }else{
                return response([
                    'status'=>'wronglogin',
                    'data'=>null 
                ]);
            }
        }

}
}