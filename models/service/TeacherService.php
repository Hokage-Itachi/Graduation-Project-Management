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
            $teacher = new Teacher($result['id'], $result["degree"], $result["academic_rank"], $result["work_place"], $result["user_id"], $result["email"], $result["pass_hashed"], $result["name"], $result["phone_number"], $result["role_id"], $result['active'],$result['branch_id']);
            return $teacher;
        } else {
            return null;
        }
    }

    public function getAll()
    {
        $results = $this->teacherDAO->getAll();
        $teachers = array();

        $i = 0;
        if ($results) {
            foreach ($results as $result){
                $teacher = new Teacher($result['id'], $result["degree"], $result["academic_rank"], $result["work_place"], $result["user_id"], $result["email"], $result["pass_hashed"], $result["name"], $result["phone_number"], $result["role_id"], $result['active'],$result['branch_id']);
                $teachers[$i] = $teacher;
                $i++;
            }
            return $teachers;
        } else {
            return null;
        }
    }

    public function update($user_id, $degree, $work_place, $academic_rank, $branch_id){
        $result= $this->teacherDAO->update($user_id, $degree, $work_place, $academic_rank, $branch_id);
    }

    public function insert($user_id, $degree, $work_place, $academic_rank, $branch_id){
        $result = $this->teacherDAO->insert($user_id, $degree, $work_place, $academic_rank, $branch_id);
        error_log($result);
    }

    public function getByUserID($user_id){
        $result = $this->teacherDAO->findByUserID($user_id);

        if ($result) {
            $teacher = new Teacher($result['id'], $result["degree"], $result["academic_rank"], $result["work_place"], $result["user_id"], $result["email"], $result["pass_hashed"], $result["name"], $result["phone_number"], $result["role_id"], $result['active'],$result['branch_id']);
            return $teacher;
        } else {
            return null;
        }
    }

}
