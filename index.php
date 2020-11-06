<?php
session_start();
require_once('includes/database.php');
require_once("routes.php");

/* Create a new router */
$router = new Router();

/* Add a Homepage route as a closure */
$router->add_route('/', function () {
    if ($_SESSION['user']) {
        header('location: /home');
    } else {
        header('location: /login');
    }
});

/* Add another route as a closure */
$router->add_route('/home', function () {
    echo 'Greetings, my fellow men.';
});

$router->add_route('/teacher', function () {
    require_once("controllers/user_controller.php");
    $user_controller = new UserController();
    $user_controller->render();
});
$router->add_route('/login', function () {
    require_once("controllers/user_controller.php");
    $user_controller = new UserController();
    if ($_SERVER["REQUEST_METHOD"] == 'GET') {
        // if ($_SESSION['user']) {
        //     header('location: /home');
        // } else {
        $user_controller->render();
        // }
    } else {
        $user_controller->login();
    }
});
/* Execute the router */
$router->execute();
