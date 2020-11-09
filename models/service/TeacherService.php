<?php
require_once('./models/repository/teacherDAO/TeacherDAO.php');
require_once('./models/entity/Teacher.php');
class TeacherService
{
    private $teacherDAO;

    public function __construct()
    {
        $this->teacherDAO = new TeacherDAO();
    }
    public function findByID($teacher_id)
    {
        $result = $this->teacherDAO->findByID($teacher_id);
        if ($result) {
            $teacher = new Teacher($result['id'], $result["degree"], $result["academic_rank"], $result["work_place"], $result["user_id"], $result["email"], $result["pass_hashed"], $result["name"], $result["phone_number"], $result["role_id"]);
            return $teacher;
        } else {
            return null;
        }
    }
}
