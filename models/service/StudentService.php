<?php
require_once('./models/repository/studentDAO/StudentDAO.php');
require_once('./models/entity/Student.php');

class StudentService
{
    private $studentDAO;

    public function __construct()
    {
        $this->studentDAO = new StudentDAO();
    }

    public function findByID($id): ?Student
    {
        $result = $this->studentDAO->findByID($id);
        // error_log("Call here");
        if ($result) {
            $student = new Student($result['student_id'], $result['class'], $result['year'], $result['user_id'], $result['email'], $result['pass_hashed'], $result['name'], $result['phone_number'], $result['role_id'], $result['active'], $result['branch_id'], $result['id']);
            $student->setAvatar($result['avatar']);
            return $student;
        } else {
            return null;
        }
    }
    public function findByStudentID($student_id): ?Student
    {
        $result = $this->studentDAO->findByStudentID($student_id);
        // error_log("Call here");
        if ($result) {
            $student = new Student($result['student_id'], $result['class'], $result['year'], $result['user_id'], $result['email'], $result['pass_hashed'], $result['name'], $result['phone_number'], $result['role_id'], $result['active'], $result['branch_id'], $result['id']);
            $student->setAvatar($result['avatar']);
            return $student;
        } else {
            return null;
        }
    }

    public function getStudentNumber()
    {
        $result = $this->studentDAO->getRowNumber();
        if ($result) {
            $std_number = $result['row_num'];
            return $std_number;
        } else {
            return null;
        }
    }

    public function getAllStudent()
    {
        $results = $this->studentDAO->getAll();
        $i = 0;
        if ($results) {
            $list_student = array();
            foreach ($results as $result) {
                $student = new Student($result['student_id'], $result['class'], $result['year'], $result['user_id'], $result['email'], $result['pass_hashed'], $result['name'], $result['phone_number'], $result['role_id'], $result['active'], $result['branch_id'], $result['id']);
                $student->setAvatar($result['avatar']);
                $list_student[$i] = $student;
                $i++;
            }
            return $list_student;
        } else {
            return null;
        }
    }

    public function deleteStudent($student_id)
    {
        $result = $this->studentDAO->delete($student_id);
//        error_log($result);
    }

    public function updateStudent($student_id, $class, $year, $branch_id, $user_id){
        $result = $this->studentDAO->updateStudent($student_id, $class, $year, $branch_id, $user_id);
        if($result == "Success"){
            error_log("Student ".$student_id." updated.");
        } else {
            error_log($result);
        }
    }
    public function insertStudent($student_id, $class, $year, $branch_id, $user_id){
        $result = $this->studentDAO->insert($user_id, $class, $student_id, $year, $branch_id);
//        error_log($result);
    }
    public function getByUserID($user_id){
        $result = $this->studentDAO->findByUserID($user_id);
        // error_log("Call here");
        if ($result) {
            $student = new Student($result['student_id'], $result['class'], $result['year'], $result['user_id'], $result['email'], $result['pass_hashed'], $result['name'], $result['phone_number'], $result['role_id'], $result['active'], $result['branch_id'], $result['id']);
            $student->setAvatar($result['avatar']);
            return $student;
        } else {
            return null;
        }
    }

}
