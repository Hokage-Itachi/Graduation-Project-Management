<?php
include_once('./models/service/ProjectService.php');
include_once('./models/service/StudentService.php');
include_once('./models/service/TeacherService.php');
include_once('./models/service/BranchService.php');
include_once('./controllers/base_controller.php');
class LibraryController extends BaseController
{
    private $projectService;
    private $studentService;
    private $teacherService;
    private $branchService;
    private $data;


    public function __construct()
    {
        $this->file = "library.php";
        $this->projectService = new ProjectService();
        $this->studentService = new StudentService();
        $this->teacherService = new TeacherService();
        $this->branchService = new BranchService();
        $this->data = array();
    }
    public function render()
    {
        $path = './views/' . $this->file;
        // error_log(self::$message);
        // $message = self::$message;
        $this->getListProject();
        $data = $this->data;
        include_once($path);
    }
    public function test()
    {
        include_once('test.php');
    }

    public function getListProject()
    {
        $res = $this->projectService->findByID(7);
        if ($res) {
            $this->data['project_name'] = $res->getName();
        } else {
            $this->data['project_name'] = "Not found";
        }
        // $this->render();

    }
}
