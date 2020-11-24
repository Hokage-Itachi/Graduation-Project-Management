<?php
session_start();
require_once('includes/database.php');
require_once("routes.php");
$message = "";
/* Create a new router */
$router = new Router();

/* Add a Homepage route as a closure */
$router->add_route('/', function () {

    header('location: /library');
});

/* Add another route as a closure */
$router->add_route('/library', function () {
    require_once("controllers/library_controller.php");
    $library_controller = new LibraryController();
    $library_controller->render($library_controller->getData());
    // $library_controller->test();
});
$router->add_route('/library/search', function () {
    require_once("controllers/library_controller.php");
    $library_controller = new LibraryController();
    if ($_SERVER["REQUEST_METHOD"] == 'POST') {
        $library_controller->render($library_controller->search());
    } else {
        header("location: /library");
    }
});

$router->add_route('/teacher', function () {
    require_once("controllers/teacher_controller.php");
    $teacher_controller = new TeacherController();
    $teacher_controller->render("");
});
$router->add_route('/student', function () {
    require_once("controllers/student_controller.php");
    $student_controller = new StudentController();
    $student_controller->render("");
});
$router->add_route('/login', function () {
    require_once("controllers/user_controller.php");
    $user_controller = new UserController();
    if ($_SERVER["REQUEST_METHOD"] == 'GET') {
        $user_controller->render("");
    } else {
        $user_controller->login();
    }
});
$router->add_route('/test', function () {
    include_once("./test.php");
});

$router->add_route("/admin/students", function () {
    require_once("controllers/admin_controller.php");
    $admin_controller = new AdminController();
    $admin_controller->renderStudentPage();
});

$router->add_route("/admin/teachers", function () {
    require_once("controllers/admin_controller.php");
    $admin_controller = new AdminController();
    $admin_controller->renderTeacherPage();
});

/* Execute the router */
$router->execute();
