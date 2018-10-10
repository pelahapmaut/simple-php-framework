<?php 
namespace App\Libraries;

/**
 * App Core Class
 * Create URL & load core controllers
 * URL FORMAT - /controller/method/params
 */
class Core
{
	protected $currentController;
	protected $currentMethod = 'index';
	protected $params;
	private $url;

    public function __construct()
    {
    	// call Controller
    	$this->call();
    }

    // to get URI
    private function setUrl()
    {
    	if (isset($_GET['page'])) {
    		$url = rtrim($_GET['page'], '/');
    		$url = explode('/', $url);

    		$this->url = $url;
    	}
    }

    // set Controller
    private function setController()
    {
		global $route;
		$this->currentController = ucfirst($route['default']);

    	if (!is_null($this->url[0])) {
    		// check if requested controller is exists
	        if (file_exists('../controllers/'.ucfirst($this->url[0]).'.php')) {
	        	$this->currentController = ucfirst($this->url[0]);
	        }
    	}

        // Instantiate the controller
        $currentController = 'App\Controllers\\'.$this->currentController;
        $this->currentController = new $currentController;
        unset($this->url[0]);
    }

    // set Method
    private function setMethod()
    {
    	if (isset($this->url[1])) {
    		if (method_exists($this->currentController, $this->url[1])) {
    			$this->currentMethod = $this->url[1];
    			unset($this->url[1]);
    		}
    	}
    }

    // Call the controller
    private function call()
    {
    	$this->setUrl(); // set Url
    	$this->setController(); // set Controller
    	$this->setMethod(); // set Method

    	// Check params url
    	$this->params = $this->url ? array_values($this->url) : [];

    	call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
    }
}