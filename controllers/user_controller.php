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
        if ($user) {
            if (password_verify($password, $user->getPassHashed())) {
                $_SESSION['user']['role'] = $user->getRoleId();
                $_SESSION['user']['id'] = $user->getUserId();
                if ($user->getRoleId() == 2) {
                    header("location: /teacher");
                    die();
                } elseif ($user->getRoleId() == 3) {
                    header("location: /student");
                    die();
                } else {
                    header('location: /library');
                    die();
                }
            }
            // $_SESSION['message'] = 'Invalid Password';
            // self::setMessage("Invalid Password");
            header(("location: /login"));
            die();
            // error_log(Message::PASSWD_ERROR);
        }
        // error_log(Message::EMAIL_ERROR);
        // self::setMessage("Invalid Email");
        // $_SESSION['message'] = 'Invalid Email';
        header(("location: /login"));
    }
}
