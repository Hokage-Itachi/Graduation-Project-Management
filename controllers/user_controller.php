<?php
include_once("./controllers/base_controller.php");
include_once('./models/service/UserService.php');
class UserController extends BaseController
{
    private $userService;

    // private static $userController;
    public final function __construct()
    {
        $this->file = "login_ui.php";
        $this->userService = new UserService();
    }

    public function login()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        // clear html tags and special symbols
        $email = strip_tags($email);
        $email = addslashes(($email));
        $password = strip_tags($password);
        $password = addslashes($password);

        $user = $this->userService->findByEmail($email);
        if ($user && $user-> getActive() == '1') {
            if (password_verify($password, $user->getPassHashed())) {
                $_SESSION['user']['role'] = $user->getRoleId();
                $_SESSION['user']['id'] = $user->getUserId();
                if ($user->getRoleId() == 2) {
                    header("location: /Graduation-Project-Management/teacher");
                    die();
                } elseif ($user->getRoleId() == 3) {
                    header("location: /Graduation-Project-Management/student/profile");
                    die();
                }
                elseif ($user->getRoleId() == 1){
                    header("location: /Graduation-Project-Management/admin");
                    die();
                } else {
                    header('location: /Graduation-Project-Management/library');
                    die();
                }
            }
            error_log("User: ".$user->getUserId().": Invalid Password");
            // self::setMessage("Invalid Password");
            header(("location: /Graduation-Project-Management/login"));
            die();
            // error_log(Message::PASSWD_ERROR);
        }
        // error_log(Message::EMAIL_ERROR);
        // self::setMessage("Invalid Email");
        // $_SESSION['message'] = 'Invalid Email';
        error_log("Invalid Email");
        header(("location: /Graduation-Project-Management/login"));
    }

    public function renderResetPasswordPage(){
        $this->file = "forgot_password.php";
        $this->render("");
    }

    public function resetPassword(){
        $email = $_POST['email'];
        $subject = "Password for Graduation Project Management Website";
        $data = "1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz";
        $password = substr(str_shuffle($data), 0, 8);
        $user = $this->userService->findByEmail($email);
        if($user == null || $user->getActive() == "0"){
            die("Email not found");
        }
        $headers = "From: Reset password email";
        $message ="Your new password: ".$password;
        $result = mail($email, $subject, $message, $headers);
        if(!$result){
            die("Mail failed");
        }
        $pass_hashed = password_hash($password, PASSWORD_DEFAULT);
        $this->userService->updateUser($user->getUserId(), $user->getEmail(),$user->getName(), $user->getPhoneNumber(), $pass_hashed);
        header("location: /Graduation-Project-Management/login");
    }
}
