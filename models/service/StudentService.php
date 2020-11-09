<?php
require_once('./models/repository/studentDAO/StudentDAO.php');
require_once('./models/entity/Student.php');

class StudentService
{
    private $studentDAO;

    public function __constructor()
    {
        $this->studentDAO = new StudentDAO();
    }

    public function findByID($student_id)
    {
        $result = $this->studentDAO->findByID($student_id);
        if ($result) {
            $student = new Student($result['student_id'], $result['class'], $result['grade'], $result['course'], $result['user_id'], $result['email'], $result['pass_hashed'], $result['name'], $result['phone_number'], $result['role_id']);
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
        $result = $this->studentDAO->getAllStudent();
        if ($result) {
            $list_student = array();
            for ($i = 0; $i < count($list_student); $i++) {
                $student = new Student($result[$i]['student_id'], $result[$i]['class'], $result[$i]['grade'], $result[$i]['course'], $result[$i]['user_id'], $result[$i]['email'], $result[$i]['pass_hashed'], $result[$i]['name'], $result[$i]['phone_number'], $result[$i]['role_id']);
                $list_student[$i] = $student;
            }
            return $list_student;
        } else {
            return null;
        }
    }
}
