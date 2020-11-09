<?php
session_start();
require_once('includes/database.php');
require_once("routes.php");
$message = "";
/* Create a new router */
$router = new Router();

/* Add a Homepage route as a closure */
$router->add_route('/', function () {

    header('location: /home');
});

/* Add another route as a closure */
$router->add_route('/home', function () {
    echo "Hello Itachi";
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
    require_once("controllers/user_controller.php");
    $user_controller = new UserController();
    if ($_SERVER["REQUEST_METHOD"] == 'GET') {
        $user_controller->render();
    } else {
        $user_controller->login();
    }
});
$router->add_route('/test', function () {
    include_once("./test.php");
});

/* Execute the router */
$router->execute();
