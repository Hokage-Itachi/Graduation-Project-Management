<?php
include_once("./controllers/base_controller.php");
include_once("./models/service/StudentService.php");
include_once("./models/service/BranchService.php");
include_once("./models/service/TeacherService.php");
include_once("./models/service/ProjectService.php");
include_once("./models/service/UserService.php");
include_once("./models/entity/Project.php");

class StudentController extends BaseController{
    private $studentService;
    private $teacherService;
    private $projectService;
    private $branchService;
    private $userService;


    public function __construct()
    {
        $this->file = "signup.php";
        $this->studentService = new StudentService();
        $this->teacherService = new TeacherService();
        $this->projectService = new ProjectService();
        $this->userService = new UserService();
    }

    public function renderSignupPage($data){
        $this->file = 'signup.php';
        $path = "./view/".$this->file;
        include_once($path);
    }


    function addProject(){
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $name = $_POST['name'];
            $teacher = $_POST['teacher'];
            $branch = $_POST['branch'];

            $student = $this->studentService->getByUserID($_SESSION['user']['id']);


        }
    }

    public function getBranchData(){
        $branches = $this->branchService->getAll();
        $branch_data = array();
        for($i = 0 ; $i< count($branches); $i++){
            $data = array(
                "name"=>$branches[$i]->getName(),
                "id"=>$branches[$i]->getId()
            );
            $branch_data[$i] = $data;
        }
        return $branch_data;
    }

    public function getTeacherData(){
        $teachers = $this->teacherService->getAll();
        $teacher_data = array();
        for ($i = 0; $i < count($teachers); $i++){
            $data = array(
                "name" => $teachers[$i]->getName(),
                'email'=>$teachers[$i]->getEmail()
            );
            $teacher_data[$i] = $data;

        }
        return $teacher_data;
    }


}