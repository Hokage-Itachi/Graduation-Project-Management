<?php

class Router
{

    /* Routes array where we store the various routes defined. */
    private $routes;
    private $controller = "library";
    private $action = "render";
    private $param = [];
    // const APP_PREFIX = "Graduation-Project-Management/";
    const APP_PREFIX = "";

    /* The methods adds each route defined to the $routes array */
    function add_route($route, callable $closure)

    {
        $this->routes[$route] = $closure;
    }

    /* Execute the specified route defined */
    function execute()
    {
        $path = substr($_SERVER['REQUEST_URI'], strlen(self::APP_PREFIX));

        //        echo "<h1>$path<h1>";

        /* Check if the given route is defined,
        * or execute the error page.
        */
        if (array_key_exists($path, $this->routes)) {
            if (isset($_SESSION['user'])) {
                if ($path == '/login') {
                    if ($_SESSION['user']['role'] == 1) {
                        header(('location: /admin'));
                        die();
                    } elseif ($_SESSION['user']['role'] == 2) {
                        header(('location: /teacher'));
                        die();
                    } else {
                        header(('location: /student'));
                        die();
                    }
                }
                $this->routes[$path]();
            } else {
                // error_log($path);
                if ($path != '/login' && $path != '/' && strpos($path, "library") === false) {
                    header('location: /login');
                    die();
                }
                $this->routes[$path]();
            }
        } else {
            // $this->routes['/']();
            include_once('./views/error_page/404.php');
        }
    }
}
