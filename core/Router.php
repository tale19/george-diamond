<?php  

/**
* 
*/
class Router
{
	protected $routes = [
	    'GET' => [],
        'POST' => []
    ];

	public static function load($file)
	{
		$router = new static;
		require $file;
		return $router;
	}

    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
	}

    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
	}

    # instead of returning just the value associated with the found key,
    # the direct() method now calls the callAction() method and passes it the
    # following arguments:*
        # Arg1: $controller (e.g. PagesController);
        # Arg2: method to call on the $controller Object (e.g. PagesController->shows())
    # * ('...' is "splat operator" - it splits the array elements created via
    # explode() method and passes them as callAction()'s arguments 1 and 2)
	public function direct($uri, $requestMethod)
	{
//        die(var_dump(explode('@', $this->routes[$requestMethod][$uri])));
        if(array_key_exists($uri, $this->routes[$requestMethod]))
        {
            return $this->callAction(
                ...explode('@', $this->routes[$requestMethod][$uri])
            );
		}
		throw new Exception("No path for this URI");
	}

	# callAction receives the arguments ($controller and action to perform).
    # It news up the $controller Object (e.g. PagesController) and calls the
    # $action method associated with it in the routes.php file.
        # e.g. $router->get('shows', 'PagesController@shows') in router.php
        # becomes PagesController->shows() method
        # and ultimately, that method performs a task and calls a view file
    # ** it is protected because it's always called from within the class **
    protected function callAction($controller, $action)
    {
        $controller = "App\Controllers\\{$controller}";
        $controller = new $controller;
        if(! method_exists($controller, $action)) {
            throw new Exception(
                "No {$action} method exists for the {$controller}."
            );
        }
        return $controller->$action();
    }
}