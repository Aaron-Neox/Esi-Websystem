<?php

namespace Tests\Unit;
use App\Http\Controllers\StudentController;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Http\Request;

class StudentTest extends TestCase
{
    use WithFaker;
    use RefreshDatabase;
    /**@test*/
    public function testExample()
    {
        $request=new Request();

        $request['nom']=$this->faker->name;
        $request['prenom']=$this->faker->lastname;
        $request['sid']=$this->faker->randomNumber();
        $request['degree']=$this->faker->word;
        $studentcntr = new StudentController();
        $students = $studentcntr->store($request);


        $this->assertDatabaseHas('students',['name'=>$request['nom']]);
        $this->assertDatabaseHas('students',['lastname'=>$request['prenom']]);
        $this->assertDatabaseHas('students',['UID'=>$request['sid'],]);
        $this->assertDatabaseHas('students',['degree'=>$request['degree']]);
    }
}
