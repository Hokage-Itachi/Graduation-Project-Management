<?php
include_once('./models/service/ProjectService.php');
include_once('./models/service/StudentService.php');
include_once('./models/service/TeacherService.php');
include_once('./models/service/BranchService.php');
include_once('./models/service/UserService.php');
include_once('./controllers/base_controller.php');
class LibraryController extends BaseController
{
    private $projectService;
    private $studentService;
    private $teacherService;
    private $branchService;
    private $userService;
    private $data;


    public function __construct()
    {
        $this->file = "library.php";
        $this->projectService = new ProjectService();
        $this->studentService = new StudentService();
        $this->teacherService = new TeacherService();
        $this->branchService = new BranchService();
        $this->userService = new UserService();
        $this->data = array();
    }
    public function render($data)
    {
        $path = './views/' . $this->file;
        include_once($path);
    }
    public function test()
    {
        include_once('test.php');
    }

    public function getListProject()
    {

        $projects = $this->projectService->getAll();
        $project_data = array();
        for ($i = 0; $i < count($projects); $i++) {

            if($projects[$i]->getCompleted() == '1') {

                $student = $this->studentService->findByID($projects[$i]->getStudentId());
//                echo ($student->getName());
                $teacher = $this->teacherService->findByID(($projects[$i]->getTeacherId()));
                $branch = $this->branchService->findByID($projects[$i]->getBranchId());
                $data = array(
                    "project_name" => $projects[$i]->getName(),
                    "student" => $student->getName(),
                    "year" => $student->getYear(),
                    "teacher" => $teacher->getName(),
                    "branch" => $branch->getName(),
                    "content" => "Unknown",
                    "point" => $projects[$i]->getPoint()
                );
                $project_data[$i] = $data;
            }
        }
        return $project_data;
        // $this->render();
    }

    public function getListTeacher(): array
    {
        $teachers = $this->teacherService->getAll();
        $i = 0;
        $teacher_names = "[";
        $teacher_ids = "[";
        foreach ($teachers as $teacher) {
            $teacher_names = $teacher_names . "'" . $teacher->getName() . "'" . ", ";
            $teacher_ids = $teacher_ids . $teacher->getTeacherId() . ", ";
        }
        $teacher_names = $teacher_names . "]";
        $teacher_ids = $teacher_ids . "]";
        $teacher_data["names"] = $teacher_names;
        $teacher_data["ids"] = $teacher_ids;
        // error_log($teacher_data["ids"]);
        return $teacher_data;
    }
    public function getListBranch()
    {
        $branches = $this->branchService->getAll();
        // error_log($branches);
        $branch_names = "[";
        $branch_ids = "[";
        foreach ($branches as $branch) {
            $branch_names = $branch_names . "'" . $branch->getName() . "'" . ", ";
            $branch_ids = $branch_ids . $branch->getId() . ", ";
        }
        $branch_ids = $branch_ids  . "]";
        $branch_names = $branch_names . "]";
        $branch_data['names'] = $branch_names;
        $branch_data['ids'] = $branch_ids;
        // error_log($branch_names);
        return $branch_data;
    }

    public function search()
    {
        if (isset($_POST["name_string"])) {
            $name_string = $_POST['name_string'];
            $name_string = strip_tags($name_string);
            $name_string = addslashes($name_string);
            $projects = $this->projectService->findByName($name_string);
            $n = 0;
            if ($projects != null) {
                $n = count($projects);
            }
            $project_data = array();
            for ($i = 0; $i < $n; $i++) {
                $student = $this->studentService->findByID($projects[$i]->getStudentId());
                // error_log($student->getName());
                $teacher = $this->teacherService->findByID(($projects[$i]->getTeacherId()));
                $branch = $this->branchService->findByID($projects[$i]->getBranchId());
                $data = array(
                    "project_name" => $projects[$i]->getName(),
                    "student" => $student->getName(),
                    "year" => $student->getYear(),
                    "teacher" => $teacher->getName(),
                    "branch" => $branch->getName(),
                    "content" => "Unknown",
                    "point" => $projects[$i]->getPoint()
                );
                $project_data[$i] = $data;
            }
            $data['projects'] = $project_data;
            $data['branches'] = $this->getListBranch();
            $data['teachers'] = $this->getListTeacher();
            $data['user'] = $this->getUsername();
            return $data;
        } else {
            header("location: /library");
        }

        // $this->render();
    }

    public function getUsername()
    {
        if (isset($_SESSION['user'])) {
            error_log($_SESSION['user']['id']);
            $usr = $this->userService->findByID($_SESSION['user']['id']);
            return $usr->getName();
        } else
            return null;
    }

    public function getData()
    {
        $data['projects'] = $this->getListProject();
        $data['branches'] = $this->getListBranch();
        $data['teachers'] = $this->getListTeacher();
        $data['user'] = $this->getUsername();
        return $data;
    }
}
