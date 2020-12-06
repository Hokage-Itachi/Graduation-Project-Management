<?php
include_once("./controllers/base_controller.php");
include_once("./models/service/StudentService.php");
include_once("./models/service/BranchService.php");
include_once("./models/service/TeacherService.php");
include_once("./models/service/ProjectService.php");
include_once("./models/entity/Project.php");

class StudentController extends BaseController{
    private $studentService;
    private $teacherService;
    private $projectService;
    private $branchService;

    public function __construct()
    {
        $this->file = "signup.php";
        $this->studentService = new StudentService();
        $this->teacherService = new TeacherService();
        $this->projectService = new ProjectService();
    }


    function addProject(){
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $name = $_POST['name'];
            $student_id = $_POST['student_id'];
            $year = $_POST['year'];
            $project = $_POST['project'];
            $teacher = $_POST['teacher'];
            $branch = $_POST['branch'];

            $student_row_id = $this->studentService->findByID($student_id);



        }
    }
}