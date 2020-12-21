<?php
session_start(['cookie_lifetime' => 1800]);
require_once('includes/database.php');
require_once("routes.php");
header("Access-Control-Allow-Origin: *");
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
$router->add_route('/student/signup', function () {
    require_once("controllers/student_controller.php");
    $student_controller = new StudentController();
    $student_controller->renderSignupPage($student_controller->getSignUpData());
});
$router->add_route('/student/addproject', function () {
    require_once("controllers/student_controller.php");
    $student_controller = new StudentController();
    $student_controller->addProject();
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
$router->add_route('/logout', function () {
    unset($_SESSION['user']);
    session_destroy();
    header('location: /login');
});
$router->add_route('/test', function () {
    include_once("./test.php");
});

$router->add_route("/admin", function () {
    require_once("controllers/admin_controller.php");
    $admin_controller = new AdminController();
    $admin_controller->render($admin_controller->getDashBoardData());
});
$router->add_route("/admin/students", function () {
    require_once("controllers/admin_controller.php");
    $admin_controller = new AdminController();
    $admin_controller->renderStudentPage($admin_controller->getStudentData());
});

$router->add_route("/admin/students/add", function () {
    require_once("controllers/admin_controller.php");
    $admin_controller = new AdminController();
    $admin_controller->addStudent();

    // TODO: redirect or re-render page!
    //    http_redirect("/admin/students");
    //    $admin_controller->renderStudentPage($admin_controller->getStudentData());
});

$router->add_route("/admin/students/update", function () {
    require_once("controllers/admin_controller.php");
    $admin_controller = new AdminController();
    $admin_controller->updateStudent();


    // TODO:
});

$router->add_route("/admin/students/delete", function () {
    require_once("controllers/admin_controller.php");
    $admin_controller = new AdminController();
    $admin_controller->deleteStudent();

    // TODO:
});

$router->add_route("/admin/teachers", function () {
    require_once("controllers/admin_controller.php");
    $admin_controller = new AdminController();
    $admin_controller->renderTeacherPage($admin_controller->getTeacherData());
});

$router->add_route("/admin/teachers/add", function () {
    require_once("controllers/admin_controller.php");
    $admin_controller = new AdminController();
    $admin_controller->addTeacher();

    // TODO:
});

$router->add_route("/admin/teachers/update", function () {
    require_once("controllers/admin_controller.php");
    $admin_controller = new AdminController();
    $admin_controller->updateTeacher();

    // TODO:
});

$router->add_route("/admin/teachers/delete", function () {
    require_once("controllers/admin_controller.php");
    $admin_controller = new AdminController();
     $admin_controller->deleteTeacher();
});

$router->add_route("/admin/projects", function () {
    require_once("controllers/admin_controller.php");
    $admin_controller = new AdminController();

    $admin_controller->renderProjectPage(4);
    // TODO:
});

/* Execute the router */
$router->execute();
