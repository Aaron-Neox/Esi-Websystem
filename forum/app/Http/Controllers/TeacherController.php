<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;
/**
 * @group Teacher management
 *
 * APIs for managing teachers
 */
class TeacherController extends Controller
{
    /**
	 * Store a teacher
	 *
     * @authenticated
     * 
     * @bodyParam fullname String required The fullname of the teacher. Example: Mostefai Med.amin
	 * @bodyParam Profession String required The Module taught by the teacher. Example: Introduction à génie logiciel
     * @bodyParam UID String required The Unique identifiant of the teacher. Example: Ens43
     * @bodyParam degree String required The grade of the teacher. Example: Docteur
	 *
	 */
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

    /**
	 * Destroy a teacher
	 *
	 * [Insert optional longer description of the API endpoint here.]
	 *
	 */

    public function destroy(Request $request)
    {
       
        Teacher::where('id','=',$request['uiddelet'])->delete();
        return response([
            'status'=>'success',
            'data'=>"hsh"
        ]);
        
    }

    /**
	 * Display a list of teachers 
	 *
     * @authenticated
     *  
	 * [Insert optional longer description of the API endpoint here.]
	 *
	 */
    public function list()
    {
        
        $dteacher = Teacher::all();
        return response([
            'status'=>'success',
            'data'=>$dteacher
        ]);
        
    }
   
}
