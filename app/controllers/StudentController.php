<?php

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    // Student Home Page
    public function index()
    {
       $this->call->view('student_home.php');
    }

    // Student Profile Page
    public function profile()
    {
    $student = [
    'student_id' => 'MCC2024-00137',
    'name' => 'Shaniah Cyrille Cay',
    'course' => 'BS in Yearning',
    'year' => '3rd Year',
    'section' => 'i miss you, classmate',
    'email' => 'naiyahbatakmagyearn@gmail.com'
    ];

        $this->call->view('student_profile', $student);
    }
}