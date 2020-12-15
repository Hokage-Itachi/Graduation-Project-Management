<?php
include_once('./controllers/base_controller.php');
include_once('./models/service/UserService.php');
include_once('./models/service/StudentService.php');
include_once('./models/service/TeacherService.php');
include_once('./models/service/ProjectService.php');
include_once('./models/service/BranchService.php');


class AdminController extends BaseController
{

    private $userService;
    private $projectService;
    private $studentService;
    private $teacherService;
    private $branchService;
    private $data;

    public function __construct()
    {
        $this->userService = new UserService();
        $this->projectService = new ProjectService();
        $this->studentService = new StudentService();
        $this->teacherService = new TeacherService();
        $this->branchService = new BranchService();
        $this->file = 'admin/admin_dashboard.php';
        $this->data = array();
    }

    public function renderStudentPage($data)
    {
        $this->file = "admin/admin_student.php";
        $path = './views/' . $this->file;
        include_once($path);
    }

    public function renderTeacherPage($data)
    {
        $this->file = "admin/admin_teacher.php";
        $path = './views/' . $this->file;
        include_once($path);
    }

    public function renderProjectPage($data)
    {
        $this->file = "admin/admin_project.php";
        $path = './views/' . $this->file;
        include_once($path);
    }

    public function getDashBoardData()
    {
        $student_number = $this->studentService->getStudentNumber();
        $teachers = $this->teacherService->getAll();
        $project_number = $this->projectService->getProjectNumber();
        $this->data['dashboard']['student_number'] = $student_number;
        $this->data['dashboard']['teacher_number'] = count($teachers);
        $this->data['dashboard']['project_number'] = $project_number;

        return $this->data;
    }

    public function getStudentData(): array
    {
        $students = $this->studentService->getAllStudent();
        $student_data = array();
        $i = 0;
        // error_log($students[0]->getName());
        foreach ($students as $student) {
            if($student->getActive() == '1') {
                $branch = $this->branchService->findByID($student->getBranchId());
                $data = array(
                    'student_id' => $student->getStudentId(),
                    'email' => $student->getEmail(),
                    'name' => $student->getName(),
                    'branch' => $branch->getName()
                );

                $student_data[$i] = $data;
                $i++;
            }
        }
        $this->data['branches'] = $this->getBranchData();
        $this->data['students'] = $student_data;

        return $this->data;
    }

    private function getBranchData(){
        $branches = $this->branchService->getAll();
        $branches_data = array();
        for ($i = 0; $i<count($branches); $i++){
            $data = array(
                "branch_id"=>$branches[$i]->getId(),
                "branch_name"=>$branches[$i]->getName()
            );
            $branches_data[$i] = $data;

        }

        return $branches_data;
    }

    public function getTeacherData()
    {
        $teachers = $this->teacherService->getAll();
        $teacher_data = array();
        $i = 0;
        // error_log($teachers[0]->getName());
        foreach ($teachers as $teacher) {
            if($teacher->getActive() == '1'){
                $data = array(
                    'work_place' => $teacher->getWorkPlace(),
                    'email' => $teacher->getEmail(),
                    'name' => $teacher->getName(),
                    'degree'=> $teacher->getDegree(),
                    'academic_rank'=>$teacher->getAcademicRank()
                );
                $teacher_data[$i] = $data;
                $i++;
            }
        }
        $this->data['branches'] = $this->getBranchData();
        $this->data['teachers'] = $teacher_data;

        return $this->data;
    }

    public function addStudent()
    {
        $name = $_POST['name'];
        $student_id = $_POST['student_id'];
        $email = $_POST['email'];
        $year = $_POST['year'];
        $class = $_POST['class'];
        $branch_id = $_POST['branch'];
        $password = $_POST['password'];

        $pass_hashed = password_hash($password, PASSWORD_DEFAULT);

        $inactive_user = $this->userService->getInActiveUser();
        if($inactive_user){
            $this->userService->updateUser($inactive_user->getUserId(), $email, $name, $pass_hashed);
            $this->userService->activeUser($inactive_user->getUserId());
            $this->studentService->updateStudent($student_id, $class, "", $year, "", $inactive_user->getUserId());
        } else{
            $this->userService->insertUser($email, $pass_hashed, $name, '0', '3');
            $user = $this->userService->findByEmail($email);
            $this->studentService->insertStudent($student_id, $class,"", $year, $branch_id, $user->getUserId());
        }
        header('location: /admin/students');




    }

    public function updateStudent()
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $student_id = $_POST['student_id'];
        $student = $this->studentService->findByStudentID($student_id);
        $this->userService->updateUser($student->getUserId(), $email, $name, $student->getPassHashed());

        header("location: /admin/students");
    }

    public function deleteStudent()
    {
        $student_id = $_POST['student_id'];
        $student = $this->studentService->findByStudentID($student_id);
        $user_id = $student->getUserId();
        
//        $this->studentService->deleteStudent($student_id);
        $this->userService->deleteUser($user_id);

        header("location: /admin/students");
    }

    public function updateTeacher(){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $work_place = $_POST['work_place'];
        $degree = $_POST['degree'];
        $academic_rank = $_POST['academic_rank'];
//        $branch_id = $_POST['branch'];

        $user = $this->userService->findByEmail($email);
        $teacher = $this->teacherService->getByUserID($user->getUserId());
        $this->userService->updateUser($user->getUserId(), $email, $name, $user->getPassHashed());
        $this->teacherService->update($user->getUserId(),$degree, $work_place, $academic_rank, $teacher->getBranchId());
//        error_log("HEre");
        header('location: /admin/teachers');

    }

    public function deleteTeacher(){
        $email = $_POST['email'];

        $user = $this->userService->findByEmail($email);
        $this->userService->deleteUser($user->getUserId());
        header('location: /admin/teachers');
    }

    public function addTeacher(){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $work_place = $_POST['work_place'];
        $degree = $_POST['degree'];
        $academic_rank = $_POST['academic_rank'];
        $branch_id = $_POST['branch'];
        $password = $_POST['password'];

        $pass_hashed = password_hash($password, PASSWORD_DEFAULT);

        $inactive_user = $this->userService->getInActiveUser();
        if($inactive_user){
            $this->userService->updateUser($inactive_user->getUserId(), $email, $name, $pass_hashed);
            $this->userService->activeUser($inactive_user->getUserId());
            $this->teacherService->update($inactive_user->getUserId(), $degree,$work_place, $academic_rank, $branch_id);
        } else{
            $this->userService->insertUser($email, $pass_hashed, $name, '0', '2');
            $user = $this->userService->findByEmail($email);
            $this->teacherService->insert($user->getUserId(), $degree,$work_place, $academic_rank, $branch_id);
        }
        header('location: /admin/teachers');
    }
}
