<?php

require_once("routes.php");

/* Create a new router */
$router = new Router();

/* Add a Homepage route as a closure */
$router->add_route('/', function () {
    echo 'Hello World';
});

/* Add another route as a closure */
$router->add_route('/home', function () {
    echo 'Greetings, my fellow men.';
});

$router->add_route('/teacher', function () {
    require_once ("controllers/UserController.php");
    $user_controller = new UserController();
    $user_controller->render();
});
$router->add_route('/login', function(){
    include("views/login_ui.php");
});
/* Execute the router */
$router->execute();