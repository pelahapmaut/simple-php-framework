<?php 
namespace App\Controllers;

class Welcome
{
    public function index($nama = 'Agus')
    {
        echo 'Halo '.$nama;
    }
}