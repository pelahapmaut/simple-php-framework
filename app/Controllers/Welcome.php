<?php 
namespace App\Controllers;

class Welcome extends Controller
{
    public function index()
    {
    	$data['title'] = 'Halo';
    	$this->view('welcome', $data);
    }

    public function hello($name = "Agus Supriyatna")
    {
    	echo "Hello $name";
    }
}