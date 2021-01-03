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

    header('location: /Graduation-Project-Management/library');
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
    if(!isset($_SESSION['user']) || $_SESSION['user']['role'] != '2'){
        include_once("./views/error_page/403.php");
    } else {
        require_once("controllers/teacher_controller.php");
        $teacher_controller = new TeacherController();
        $teacher_controller->render($teacher_controller->getTeacherHomeData());
    }
});
$router->add_route('/teacher/project', function ($id) {
    if(!isset($_SESSION['user']) || $_SESSION['user']['role'] != '2'){
        include_once("./views/error_page/403.php");
    } else {
        require_once("controllers/teacher_controller.php");
        $teacher_controller = new TeacherController();
        $teacher_controller->render($teacher_controller->getProjectData($id));
    }
});
$router->add_route('/teacher/profile', function () {
    if(!isset($_SESSION['user']) || $_SESSION['user']['role'] != '2'){
        include_once("./views/error_page/403.php");
    } else {
        require_once("controllers/teacher_controller.php");
        $teacher_controller = new TeacherController();
        $teacher_controller->render($teacher_controller->getProfileData());
    }

});
$router->add_route('/teacher/profile/update', function () {
    if(!isset($_SESSION['user']) || $_SESSION['user']['role'] != '2'){
        include_once("./views/error_page/403.php");
    } else {
        require_once("controllers/teacher_controller.php");
        $teacher_controller = new TeacherController();
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $teacher_controller->updateProfile();
        } else {
            header("location: /Graduation-Project-Management/teacher/profile");
        }

    }

});

// Student URLs
$router->add_route('/student', function () {

    if(!isset($_SESSION['user']) || $_SESSION['user']['role'] != '3'){
        include_once("./views/error_page/403.php");
    } else {
        require_once("controllers/student_controller.php");
        $student_controller = new StudentController();
        if($student_controller->canSignUp()){
            header("location: /Graduation-Project-Management/student/signup");
        } else {
            $student_controller->render(($student_controller->getProjectData()));
        }
    }


});

$router->add_route('/student/signup', function () {
    if(!isset($_SESSION['user']) || $_SESSION['user']['role'] != '3'){
        include_once("./views/error_page/403.php");
    } else {
        require_once("controllers/student_controller.php");
        $student_controller = new StudentController();
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $student_controller->addProject();
        } else{
            if($student_controller->canSignUp()){
                $student_controller->renderSignupPage(($student_controller->getSignUpData()));
            } else {
                header("location: /Graduation-Project-Management/student");
            }
        }
    }

});
$router->add_route('/student/project/upload', function () {
    if(!isset($_SESSION['user']) || $_SESSION['user']['role'] != '3'){
        include_once("./views/error_page/403.php");
    } else {
        require_once("controllers/student_controller.php");
        $student_controller = new StudentController();
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $student_controller->uploadDocument();
        } else {
            header("location: /Graduation-Project-Management/student/project");
        }

    }

});
$router->add_route('/student/profile', function () {
    if(!isset($_SESSION['user']) || $_SESSION['user']['role'] != '3'){
        include_once("./views/error_page/403.php");
    } else {
        require_once("controllers/student_controller.php");
        $student_controller = new StudentController();
        $student_controller->render($student_controller->getProfileData());
    }

});
$router->add_route('/student/project/complete', function () {
    if(!isset($_SESSION['user']) || $_SESSION['user']['role'] != '3'){
        include_once("./views/error_page/403.php");
    } else {
        require_once("controllers/student_controller.php");
        $student_controller = new StudentController();
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $student_controller->completeProject();
        } else {
            header("location: /Graduation-Project-Management/student/project");
        }
    }

});
$router->add_route('/student/profile/update', function () {
    if(!isset($_SESSION['user']) || $_SESSION['user']['role'] != '3'){
        include_once("./views/error_page/403.php");
    } else {
        require_once("controllers/student_controller.php");
        $student_controller = new StudentController();
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $student_controller->updateProfile();
        } else {
            header("location: /Graduation-Project-Management/student/profile");
        }
    }

});

// Message URLs
$router->add_route('/post/add', function () {
    require_once("controllers/message_controller.php");
    $message_controller = new MessageController();
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $message_controller->addPost();
    } else {
        include_once("./views/error_page/405.php");
    }
});

$router->add_route('/comment/add', function () {
    require_once("controllers/message_controller.php");
    $message_controller = new MessageController();
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $message_controller->addComment();
    } else {
        include_once("./views/error_page/405.php");
    }
});
// Task URLs
$router->add_route('/task/update', function () {
    require_once("controllers/task_controller.php");
    $task_controller = new TaskController();
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $task_controller->updateTask();
    } else {
        include_once("./views/error_page/405.php");
    }

});
$router->add_route('/task/add', function () {
    require_once("controllers/task_controller.php");
    $task_controller = new TaskController();
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $task_controller->addTask();
    } else {
        include_once("./views/error_page/405.php");
    }
});
$router->add_route('/task/delete', function () {
    require_once("controllers/task_controller.php");
    $task_controller = new TaskController();
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $task_controller->deleteTask();
    } else {
        include_once("./views/error_page/405.php");
    }
});
// Phase URLs
$router->add_route('/phase/add', function () {
    require_once("controllers/phase_controller.php");
    $phase_controller = new PhaseController();
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $phase_controller->addPhase();
    } else {
        include_once("./views/error_page/405.php");
    }
});
$router->add_route('/login', function () {
    if(isset($_SESSION['user'])){
        if($_SESSION['user']['role'] == '1'){
            header("location: /Graduation-Project-Management/admin");
        } else if($_SESSION['user']['role'] == '3'){
            header("location: /Graduation-Project-Management/student/profile");
        } else {
            header("location: /Graduation-Project-Management/teacher");
        }
    } else {
        require_once("controllers/user_controller.php");
        $user_controller = new UserController();
        if ($_SERVER["REQUEST_METHOD"] == 'GET') {
            $user_controller->render("");
        } else {
            $user_controller->login();
        }
    }
});
$router->add_route('/logout', function () {
    unset($_SESSION['user']);
    session_destroy();
    header('location: /Graduation-Project-Management/login');
});
$router->add_route('/forgot-password', function () {
    require_once("controllers/user_controller.php");
    $user_controller = new UserController();
    if ($_SERVER["REQUEST_METHOD"] == 'GET') {
        $user_controller->renderResetPasswordPage();
    } else {
        $user_controller->resetPassword();
    }
});
//$router->add_route('/test', function () {
//    include_once("./assets/user_document/Pr_8_Bao_cao_DAPM_1801087_VNPAY.pdf");
//});

// admin URLs
$router->add_route("/admin", function () {
    if(!isset($_SESSION['user']) || $_SESSION['user']['role'] != '1'){
        include_once("./views/error_page/403.php");
    } else {
        require_once("controllers/admin_controller.php");
        $admin_controller = new AdminController();
        $admin_controller->render($admin_controller->getDashBoardData());
    }

});
$router->add_route("/admin/students", function () {
    if(!isset($_SESSION['user']) || $_SESSION['user']['role'] != '1'){
        include_once("./views/error_page/403.php");
    } else {
        require_once("controllers/admin_controller.php");
        $admin_controller = new AdminController();
        $admin_controller->renderStudentPage($admin_controller->getStudentData());
    }

});

$router->add_route("/admin/students/add", function () {
    if(!isset($_SESSION['user']) || $_SESSION['user']['role'] != '1'){
        include_once("./views/error_page/403.php");
    } else {
        require_once("controllers/admin_controller.php");
        $admin_controller = new AdminController();
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $admin_controller->addStudent();
        } else {
            header("location: /Graduation-Project-Management/admin/students");
        }
    }

});

$router->add_route("/admin/students/update", function () {
    if(!isset($_SESSION['user']) || $_SESSION['user']['role'] != '1'){
        include_once("./views/error_page/403.php");
    } else {
        require_once("controllers/admin_controller.php");
        $admin_controller = new AdminController();
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $admin_controller->updateStudent();
        } else {
            header("location: /Graduation-Project-Management/admin/students");
        }
    }
});

$router->add_route("/admin/students/delete", function () {
    if(!isset($_SESSION['user']) || $_SESSION['user']['role'] != '1'){
        include_once("./views/error_page/403.php");
    } else {
        require_once("controllers/admin_controller.php");
        $admin_controller = new AdminController();
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $admin_controller->deleteStudent();
        } else {
            header("location: /Graduation-Project-Management/admin/students");
        }
    }
});

$router->add_route("/admin/teachers", function () {
    if(!isset($_SESSION['user']) || $_SESSION['user']['role'] != '1'){
        include_once("./views/error_page/403.php");
    } else {
        require_once("controllers/admin_controller.php");
        $admin_controller = new AdminController();
        $admin_controller->renderTeacherPage($admin_controller->getTeacherData());
    }

});

$router->add_route("/admin/teachers/add", function () {
    if(!isset($_SESSION['user']) || $_SESSION['user']['role'] != '1'){
        include_once("./views/error_page/403.php");
    } else {
        require_once("controllers/admin_controller.php");
        $admin_controller = new AdminController();
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $admin_controller->addTeacher();
        } else {
            header("location: /Graduation-Project-Management/admin/teachers");
        }
    }
});

$router->add_route("/admin/teachers/update", function () {
    if(!isset($_SESSION['user']) || $_SESSION['user']['role'] != '1'){
        include_once("./views/error_page/403.php");
    } else {
        require_once("controllers/admin_controller.php");
        $admin_controller = new AdminController();
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $admin_controller->updateTeacher();
        } else {
            header("location: /Graduation-Project-Management/admin/teachers");
        }
    }
});

$router->add_route("/admin/teachers/delete", function () {
    if(!isset($_SESSION['user']) || $_SESSION['user']['role'] != '1'){
        include_once("./views/error_page/403.php");
    } else {
        require_once("controllers/admin_controller.php");
        $admin_controller = new AdminController();
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $admin_controller->deleteTeacher();
        } else {
            header("location: /Graduation-Project-Management/admin/teachers");
        }
    }
});

$router->add_route("/admin/projects", function () {
    if(!isset($_SESSION['user']) || $_SESSION['user']['role'] != '1'){
        include_once("./views/error_page/403.php");
    } else {
        require_once("controllers/admin_controller.php");
        $admin_controller = new AdminController();
        $admin_controller->renderProjectPage($admin_controller->getProjectData());
    }

});
$router->add_route("/admin/projects/update", function () {
    if(!isset($_SESSION['user']) || $_SESSION['user']['role'] != '1'){
        include_once("./views/error_page/403.php");
    } else {
        require_once("controllers/admin_controller.php");
        $admin_controller = new AdminController();
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $admin_controller->updateProject();
        } else {
            header("location: /Graduation-Project-Management/admin/projects");
        }
    }
});
$router->add_route("/admin/projects/add", function () {
    if(!isset($_SESSION['user']) || $_SESSION['user']['role'] != '1'){
        include_once("./views/error_page/403.php");
    } else {
        require_once("controllers/admin_controller.php");
        $admin_controller = new AdminController();
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $admin_controller->addProject();
        } else {
            header("location: /Graduation-Project-Management/admin/projects");
        }
    }
});

/* Execute the router */
$router->execute();
