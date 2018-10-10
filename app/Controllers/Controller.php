<?php
namespace App\Controllers;

/**
 * Base Controller
 */
class Controller
{
	// to include view
    public function view($file, $data = [])
    {
        if (file_exists("../app/views/$file.php")) {
        	// extract array $data
        	extract($data);
        	include_once("../app/views/$file.php");
        } else {
        	die("view /app/views/$file.php is not found!");
        }
    }
}