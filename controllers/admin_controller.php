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
                    'class'=>$student->getClass(),
                    'year'=>$student->getYear(),
                    'phone'=>$student->getPhoneNumber(),
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
                    "id"=>$teacher->getTeacherId(),
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
//        error_log($password);
        $pass_hashed = password_hash($password, PASSWORD_DEFAULT);
//        error_log($pass_hashed);

//        $inactive_user = $this->userService->getInActiveUser();
//        if($inactive_user){
//            $this->userService->updateUser($inactive_user->getUserId(), $email, $name,"0", $pass_hashed);
//            $this->userService->activeUser($inactive_user->getUserId());
//            $this->userService->updateAvatar("", $inactive_user->getUserId());
//            $this->studentService->updateStudent($student_id, $class, $year, $branch_id, $inactive_user->getUserId());
//        } else{
        if($this->userService->findByEmail($email)){
            die("Account exist");
        }
        $this->userService->insertUser($email, $pass_hashed, $name, '0', '3');
        $user = $this->userService->findByEmail($email);
        $this->studentService->insertStudent($student_id, $class, $year, $branch_id, $user->getUserId());
//        }
        header('location: /Graduation-Project-Management/admin/students');




    }

    public function updateStudent()
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $student_id = $_POST['student_id'];
        $phone = $_POST['phone'];
        $class = $_POST['class'];
        $year = $_POST['year'];
        $branch = $_POST['branch'];
        $student = $this->studentService->findByStudentID($student_id);
        if($this->userService->findByEmail($email) && $student->getEmail() != $email){
            die("Account exist");
        }
        $this->studentService->updateStudent($student_id,$class, $year,$branch, $student->getUserId());
        $this->userService->updateUser($student->getUserId(), $email, $name,$phone, $student->getPassHashed());


        header("location: /Graduation-Project-Management/admin/students");
    }

    public function deleteStudent()
    {
        $student_id = $_POST['student_id'];
        $student = $this->studentService->findByStudentID($student_id);
        $user_id = $student->getUserId();
        
//        $this->studentService->deleteStudent($student_id);
        $this->userService->deleteUser($user_id);

        header("location: /Graduation-Project-Management/admin/students");
    }

    public function updateTeacher(){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $work_place = $_POST['work_place'];
        $degree = $_POST['degree'];
        $academic_rank = $_POST['academic_rank'];
        $id = $_POST['id'];
        $teacher = $this->teacherService->findByID($id);
//        $branch_id = $_POST['branch'];

        $user = $this->userService->findByID($teacher->getUserId());
        if($this->userService->findByEmail($email) && $user->getEmail() != $email){
            die($email." has exist on this system");
        }
//        $teacher = $this->teacherService->getByUserID($user->getUserId());
        $this->userService->updateUser($user->getUserId(), $email, $name,$user->getPhoneNumber(), $user->getPassHashed());
        $this->teacherService->update($user->getUserId(),$degree, $work_place, $academic_rank, $teacher->getBranchId());
//        error_log("HEre");
        header('location: /Graduation-Project-Management/admin/teachers');

    }

    public function deleteTeacher(){
        $id = $_POST['id'];
        $teacher = $this->teacherService->findByID($id);
        $this->userService->deleteUser($teacher->getUserId());
        header('location: /Graduation-Project-Management/admin/teachers');
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

//        $inactive_user = $this->userService->getInActiveUser();
//        if($inactive_user){
//            $this->userService->updateUser($inactive_user->getUserId(), $email, $name,"0", $pass_hashed);
//            $this->userService->updateAvatar("", $inactive_user->getUserId());
//            $this->userService->activeUser($inactive_user->getUserId());
//            $this->teacherService->update($inactive_user->getUserId(), $degree,$work_place, $academic_rank, $branch_id);
//        } else{
        if($this->userService->findByEmail($email)){
            die("Account exist");
        }
            $this->userService->insertUser($email, $pass_hashed, $name, '0', '2');
            $user = $this->userService->findByEmail($email);
            $this->teacherService->insert($user->getUserId(), $degree,$work_place, $academic_rank, $branch_id);
//        }
        header('location: /Graduation-Project-Management/admin/teachers');
    }

    public function getProjectData(){
        $projects = $this->projectService->getAll();
        $project_data = array();
        $i = 0;
        foreach ($projects as $project){
            $data['id'] = $project->getProjectId();
            $data['name'] = $project->getName();
            $student = $this->studentService->findByID($project->getStudentId());
            $data['student'] = $student->getName();
            $teacher = $this->teacherService->findByID($project->getTeacherId());
            $data['teacher'] = $teacher->getName();
            $branch = $this->branchService->findByID($project->getBranchId());
            $data['branch'] = $branch->getName();
            $data['point'] = $project->getPoint();
            if($project->getCompleted() == '0'){
                $data['status'] = "Processing";
            } else if($project->getCompleted() == '3'){
                $data['status'] = "Reviewing";
            } else if($project->getCompleted() == '4'){
                $data['status'] = "Private";
            } else {
                $data['status'] = "Public";
            }
            $data['content'] = $project->getContent();
            $project_data[$i] = $data;
            $i++;

        }
        $this->data['projects'] = $project_data;
        $this->data['branches'] = $this->getBranchData();
        return $this->data;
    }

    public function updateProject(){
        $project_id = $_POST['project_id'];
        $project = $this->projectService->findByID($project_id);
        $point = $_POST['point'];
        $status = isset($_POST['status']) ? $_POST['status'] : "4";
        $file = isset($_FILES['content']) ? $_FILES['content'] : "";
        print_r($file);
        $document =  $project->getContent();
        $allowType = "application/pdf";

        if($file != ""){
            if($file['type'] != $allowType){
                die("Not PDF document");
            }
            $document = "Pr_".$project_id."_".$file['name'];
            move_uploaded_file($file['tmp_name'], "assets/user_document/".$document);
        }




        $this->projectService->updatePoint($project_id, $point);
        $this->projectService->updateComplete($project_id, $status);
        $this->projectService->updateContent($document, $project_id);

        header("location: /Graduation-Project-Management/admin/projects");


    }

    public function addProject(){
        $project_name = $_POST['project_name'];
        $student_id = $_POST['student_id'];
        $teacher_id = $_POST['teacher_id'];
        $branch = $_POST['branch'];
        $point = $_POST['point'];
        $presentation_day = Formatter::format_date($_POST['presentation_day'], "Y-m-d");
        $file = $_FILES['content'];

        if($file['type'] != "application/pdf"){
            die("Not PDF document");
        }

        if($this->projectService->findByName($project_name)){
            die("Project exist.");
        }

        if(!$this->teacherService->findByID($teacher_id)){
            die("Teacher ID: ".$teacher_id." not exist.");
        }
        $student = $this->studentService->findByStudentID($student_id);
        if(!$student){
            die("Student ID: ".$student_id." not exist.");
        }

        $this->projectService->insert($project_name, "4", $branch, $point, "", "", $student->getRowId(), $teacher_id);
        $project = $this->projectService->findByName($project_name)[0];
        $document = "Pr_".$project->getProjectId()."_".$file['name'];

        if(!move_uploaded_file($file['tmp_name'], "./assets/user_document/".$document)){
            die("Upload Project Failed");
        }

        $this->projectService->updateContent($document, $project->getProjectId());

        header("location: /Graduation-Project-Management/admin/projects");


    }
}
