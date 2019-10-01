<?php 
namespace App\Controllers;

class Welcome extends Controller
{
    public function index()
    {
    	$data['title'] = 'Halo';
    	$this->view('welcome', $data);
    }
    // this method for print Hello Agus Supriyatna
    public function hello($name = "Agus Supriyatna")
    {
    	echo "Hello $name";
    }
}
