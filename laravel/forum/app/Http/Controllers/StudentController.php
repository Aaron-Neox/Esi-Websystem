<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
   
    public function store(Request $request)
    {
        Student::insert([
            'name'=>$request['nom'],
            'lastname'=>$request['prenom'],
            'UID'=>$request['sid'],
            'degree'=>$request['degree']
        ]);
        $id=Student::all()->last()->id;
        return response([
            'status'=>'success',
            'data'=>$id
        ]);

       
    }

    
    public function destroy(Request $request)
    {
        
        Student::where('id','=',$request['uiddelet'])->delete();
        return response([
            'status'=>'success',
            'data'=>"delet was succefully realised"
        ]);
        
    }

    public function list()
    {
        $dstudent = Student::all();
        return response([
            'status'=>'success',
            'data'=>$dstudent
        ]);
        
    }
   
}
