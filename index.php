<?php
session_start(['cookie_lifetime' => 18000]);
require_once('includes/database.php');
require_once('includes/formatter.php');
require_once("routes.php");
header("Access-Control-Allow-Origin: *");
date_default_timezone_set("Asia/Ho_Chi_Minh");
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
// Teacher URLs
$router->add_route('/teacher', function () {
    require_once("controllers/teacher_controller.php");
    $teacher_controller = new TeacherController();
    $teacher_controller->render($teacher_controller->getTeacherHomeData());
});
$router->add_route('/teacher/project', function ($id) {
    require_once("controllers/teacher_controller.php");
    $teacher_controller = new TeacherController();
    $teacher_controller->render($teacher_controller->getProjectData($id));
});
$router->add_route('/teacher/profile', function () {
    require_once("controllers/teacher_controller.php");
    $teacher_controller = new TeacherController();
    $teacher_controller->render($teacher_controller->getProfileData());
});
$router->add_route('/teacher/profile/update', function () {
    require_once("controllers/teacher_controller.php");
    $teacher_controller = new TeacherController();
    $teacher_controller->updateProfile();
});

// Student URLs
$router->add_route('/student', function () {
    require_once("controllers/student_controller.php");
    $student_controller = new StudentController();
    if($student_controller->canSignUp()){
        header("location: /student/signup");
    } else {
        $student_controller->render(($student_controller->getProjectData()));
    }

});

$router->add_route('/student/signup', function () {
    require_once("controllers/student_controller.php");
    $student_controller = new StudentController();
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $student_controller->addProject();
    } else{
        if($student_controller->canSignUp()){
            $student_controller->renderSignupPage(($student_controller->getSignUpData()));
        } else {
            header("location: /student");
        }
    }
});
$router->add_route('/student/project/upload', function () {
    require_once("controllers/student_controller.php");
    $student_controller = new StudentController();
    $student_controller->uploadDocument();
});
$router->add_route('/student/profile', function () {
    require_once("controllers/student_controller.php");
    $student_controller = new StudentController();
    $student_controller->render($student_controller->getProfileData());
});
$router->add_route('/student/project/complete', function () {
    require_once("controllers/student_controller.php");
    $student_controller = new StudentController();
    $student_controller->completeProject();
});
$router->add_route('/student/profile/update', function () {
    require_once("controllers/student_controller.php");
    $student_controller = new StudentController();
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $student_controller->updateProfile();
    } else {
        header("location: /student/profile");
    }
});

// Message URLs
$router->add_route('/post/add', function () {
    require_once("controllers/message_controller.php");
    $message_controller = new MessageController();
    $message_controller->addPost();
});

$router->add_route('/comment/add', function () {
    require_once("controllers/message_controller.php");
    $message_controller = new MessageController();
    $message_controller->addComment();
});
// Task URLs
$router->add_route('/task/update', function () {
    require_once("controllers/task_controller.php");
    $task_controller = new TaskController();
    $task_controller->updateTask();
});
$router->add_route('/task/add', function () {
    require_once("controllers/task_controller.php");
    $task_controller = new TaskController();
    $task_controller->addTask();
});
$router->add_route('/task/delete', function () {
    require_once("controllers/task_controller.php");
    $task_controller = new TaskController();
    $task_controller->deleteTask();
});
// Phase URLs
$router->add_route('/phase/add', function () {
    require_once("controllers/phase_controller.php");
    $phase_controller = new PhaseController();
    $phase_controller->addPhase();
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
// admin URLs
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

    $admin_controller->renderProjectPage($admin_controller->getProjectData());
    // TODO:
});
$router->add_route("/admin/projects/update", function () {
    require_once("controllers/admin_controller.php");
    $admin_controller = new AdminController();

    $admin_controller->updateProject();
    // TODO:
});
$router->add_route("/admin/projects/add", function () {
    require_once("controllers/admin_controller.php");
    $admin_controller = new AdminController();

    $admin_controller->addProject();
    // TODO:
});

/* Execute the router */
$router->execute();
