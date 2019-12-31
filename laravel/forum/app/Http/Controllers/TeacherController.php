<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;

class TeacherController extends Controller
{
    public function store(Request $request)
    {
        Teacher::insert([
            'name'=>$request['nom'],
            'lastname'=>$request['prenom'],
            'UID'=>$request['sid'],
            'degree'=>$request['degree']
        ]);
        $id=Teacher::all()->last()->id;
        return response([
            'status'=>'success',
            'data'=>$id
        ]);

       

    }

    public function destroy(Request $request)
    {
       
        Teacher::where('id','=',$request['uiddelet'])->delete();
        return response([
            'status'=>'success',
            'data'=>"hsh"
        ]);
        
    }
    public function list()
    {
        $dteacher = Teacher::all();
        return response([
            'status'=>'success',
            'data'=>$dteacher
        ]);
        
    }
   
}
