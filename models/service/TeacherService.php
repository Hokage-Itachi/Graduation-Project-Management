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

    public function getAll()
    {
        $result = $this->teacherDAO->getAll();
        $teachers = array();

        $i = 0;
        if ($result) {
            foreach ($result as $row){
                $teacher = new Teacher($row['id'], $row["degree"], $row["academic_rank"], $row["work_place"], $row["user_id"], $row["email"], $row["pass_hashed"], $row["name"], $row["phone_number"], $row["role_id"]);
                $teachers[$i] = $teacher;
                $i++;
            }
            return $teachers;
        } else {
            return null;
        }
    }
}
