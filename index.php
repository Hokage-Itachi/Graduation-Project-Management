<?php
session_start();
require_once('includes/database.php');
require_once("routes.php");
require_once("includes/message.php");

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
    if ($_SESSION['user']) {
        echo 'Greetings, my fellow men.';
    } else {
        header('location: /login');
    }
});

$router->add_route('/teacher', function () {
    require_once("controllers/teacher_controller.php");
    $teacher_controller = new TeacherController();
    $teacher_controller->render();
});
$router->add_route('/student', function () {
    require_once("controllers/student_controller.php");
    $student_controller = new StudentController();
    $student_controller->render();
});
$router->add_route('/login', function () {
    if (isset($_SESSION['user'])) {
        header('location: /home');
        die();
    }
    require_once("controllers/user_controller.php");
    $user_controller = new UserController();
    if ($_SERVER["REQUEST_METHOD"] == 'GET') {

        // } else {
        $user_controller->render();
        // }
    } else {
        $user_controller->login();
    }
});
/* Execute the router */
$router->execute();
