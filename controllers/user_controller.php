<?php
include_once("./controllers/base_controller.php");
include_once('./models/service/UserService.php');
class UserController extends BaseController
{
    private $userService;
    public function __construct()
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
                $_SESSION['user'] = $email;
                if ($user->getRoleId() == 2) {
                    header("location: /teacher");
                    die();
                } elseif ($user->getRoleId() == 3) {
                    header("location: /student");
                    die();
                } else {
                    header('location: /home');
                    die();
                }
            }
            // echo "Fail password";
        }
        header(("location: /login"));
        // echo "Fail email";

    }
}
