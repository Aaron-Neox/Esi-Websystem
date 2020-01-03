<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
/**
 * @group Student management
 *
 * APIs for managing students
 */

class StudentController extends Controller
{
    /**
	 * Store a student
	 *
     * @authenticated
     * 
     * @bodyParam name String required The name of the student. Example: Merbouh
	 * @bodyParam lastname String required The lastname of the student. Example: Ismail
     * @bodyParam UID String required The Unique identifiant of the student. Example: 17/266
     * @bodyParam degree String required The university year of the student. Example: 1CS
	 *
	 */
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

     /**
	 * Destroy a student
	 *
	 * [Insert optional longer description of the API endpoint here.]
	 *
	 */

    public function destroy(Request $request)
    {
        
        Student::where('id','=',$request['uiddelet'])->delete();
        return response([
            'status'=>'success',
            'data'=>"delet was succefully realised"
        ]);
        
    }

     /**
	 * Display a list of students 
	 *
     * @authenticated
     *  
	 * [Insert optional longer description of the API endpoint here.]
	 *
	 */

    public function list()
    {
        $dstudent = Student::all();
        return response([
            'status'=>'success',
            'data'=>$dstudent
        ]);
        
    }
   
}
