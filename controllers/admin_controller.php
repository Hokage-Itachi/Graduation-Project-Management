<?php
include_once('./controllers/base_controller.php');
include_once('./models/service/UserService.php');
include_once('./models/service/StudentService.php');
include_once('./models/service/TeacherService.php');
include_once('./models/service/RoleService.php');


class AdminController extends BaseController
{

    private $userService;
    private $roleService;
    private $studentService;
    private $teacherService;
    private $data;
    public function __construct()
    {
        $this->userService = new UserService();
        $this->roleService = new RoleService();
        $this->studentService = new StudentService();
        $this->teacherService = new TeacherService();
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

    public function getUserData()
    {
        $users = $this->userService->getAllUser();
        $users_data = array();
        $i = 0;
        foreach ($users as $user) {
            $role_name = $this->roleService->findByID($user->getRoleId())->getName();
            $data = array(
                'email' => $user->getEmail(),
                'name' => $user->getName(),
                'role' => $role_name
            );
            $users_data[$i] = $data;
            $i++;
        }
        $this->data['users'] = $users_data;

        return $this->data;
    }

    public function getStudentData()
    {
        $students = $this->studentService->getAllStudent();
        $student_data = array();
        $i = 0;
        // error_log($students[0]->getName());
        foreach ($students as $student) {
            $data = array(
                'student_id'=> $student->getStudentId(),
                'email' => $student->getEmail(),
                'name' => $student->getName()
            );
            $student_data[$i] = $data;
            $i++;
        }
        $this->data['students'] = $student_data;

        return $this->data;
    }

    public function getTeacherData()
    {
        $teachers = $this->teacherService->getAll();
        $teacher_data = array();
        $i = 0;
        // error_log($teachers[0]->getName());
        foreach ($teachers as $teacher) {
            $data = array(
                'work_place'=> $teacher->getWorkPlace(),
                'email' => $teacher->getEmail(),
                'name' => $teacher->getName()
            );
            $teacher_data[$i] = $data;
            $i++;
        }
        $this->data['teachers'] = $teacher_data;

        return $this->data;
    }
}
