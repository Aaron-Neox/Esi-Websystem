<?php

namespace Tests\Feature;

//use Illuminate\Foundation\Testing\RefreshDatabase;
//use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HomeTest extends TestCase
{
    
    public function testStudentPage()
    {
        $response = $this->get('/student');

        $response->assertStatus(200);
    }
    public function testTeacherPage()
    {
        $response = $this->get('/teacher');

        $response->assertStatus(200);
    }
    public function testLoginPage()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }
    public function testHomePage()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
   
    
}
