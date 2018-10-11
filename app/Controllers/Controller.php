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
    	if (file_exists("../app/views/$file.html")) {
    		$loader = new \Twig_Loader_Filesystem('../app/views');
	        $twig 	= new \Twig_Environment($loader, ['cache'=>'../cache/views']);

	        $template = $twig->load("$file.html");
	        echo $template->render($data);
    	} elseif (file_exists("../app/views/$file.php")) {
    		// extract array $data
        	extract($data);
        	include_once("../app/views/$file.php");
    	} else {
        	die("view /app/views/$file is not found!");
        }
       
    }
}