<?php

class Router
{

    /* Routes array where we store the various routes defined. */
    private $routes;
    private $controller = "library";
    private $action = "render";
    private $param = [];
     const APP_PREFIX = "Graduation-Project-Management/";
//    const APP_PREFIX = "";

    /* The methods adds each route defined to the $routes array */
    function add_route($route, callable $closure)

    {
//        $route = self::APP_PREFIX.$route;
//        die($route);
        $this->routes[$route] = $closure;
    }

    /* Execute the specified route defined */
    function execute()
    {

        $path = substr($_SERVER['REQUEST_URI'], strlen(self::APP_PREFIX));
//        $path = substr($_SERVER['REQUEST_URI'], strlen("/"));;
        $arr = explode("/", filter_var(trim($path)));
        $param = "";

        if(count($arr) > 3){

            if($arr[1] == "teacher" && $arr[2] == "project"){
                $param = $arr[3] != "" ? $arr[3] : "0";
//                $path = substr("/teacher/project", strlen(self::APP_PREFIX));
                $path ="/teacher/project";


            }
        }
        if(count($arr) == 3){

            if($arr[1] == "teacher" && $arr[2] == "project"){
//                $path = substr("/teacher/project/", strlen(self::APP_PREFIX));
                $path ="/teacher/project/";
            }
        }

//        error_log($_SERVER['REQUEST_URI']);
        //        echo "<h1>$path<h1>";

        /* Check if the given route is defined,
        * or execute the error page.
        */
//        print_r($this->routes);

//        die($path);

        if (array_key_exists($path, $this->routes)) {

            if($param != ""){
                $this->routes[$path]($param);
            } else{

                $this->routes[$path]();

            }
        } else {
            // $this->routes['/']();
            include_once('./views/error_page/404.php');
        }
    }
}
