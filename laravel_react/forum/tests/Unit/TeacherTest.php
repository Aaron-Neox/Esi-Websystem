<?php

namespace Tests\Unit;
use App\Http\Controllers\TeacherController;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Http\Request;
class TeacherTest extends TestCase
{
    use WithFaker;
    use RefreshDatabase;
    /**@test     */
    public function testAddTeacher()
    {
        $request=new Request();

        $request['nom']=$this->faker->name;
        $request['prenom']=$this->faker->lastname;
        $request['sid']=$this->faker->randomNumber();
        $request['degree']=$this->faker->word;
        $teachercntr = new TeacherController();
        $teachers = $teachercntr->store($request);


        $this->assertDatabaseHas('teachers',['name'=>$request['nom']]);
        $this->assertDatabaseHas('teachers',['lastname'=>$request['prenom']]);
        $this->assertDatabaseHas('teachers',['UID'=>$request['sid'],]);
        $this->assertDatabaseHas('teachers',['degree'=>$request['degree']]);
    }
}
