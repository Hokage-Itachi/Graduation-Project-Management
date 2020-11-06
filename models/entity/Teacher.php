<?php
include_once("./models/entity/User.php");
class Teacher extends User
{
    private $teacher_id;
    private $degree;
    private $academic_rank;
    private $work_place;

    public function __construct($teacher_id, $degree, $academic_rank, $work_place, $user_id, $email, $pass_hashed, $name, $phone_number, $role_id)
    {
        parent::__construct($user_id, $email, $pass_hashed, $name, $phone_number, $role_id);
        $this->teacher_id = $teacher_id;
        $this->degree = $degree;
        $this->academic_rank = $academic_rank;
        $this->work_place = $work_place;
    }

    /**
     * @return mixed
     */
    public function getTeacherId()
    {
        return $this->teacher_id;
    }

    /**
     * @param mixed $teacher_id
     */
    public function setTeacherId($teacher_id)
    {
        $this->teacher_id = $teacher_id;
    }

    /**
     * @return mixed
     */
    public function getAcademicRank()
    {
        return $this->academic_rank;
    }

    /**
     * @param mixed $academic_rank
     */
    public function setAcademicRank($academic_rank)
    {
        $this->academic_rank = $academic_rank;
    }

    /**
     * @return mixed
     */
    public function getWorkPlace()
    {
        return $this->work_place;
    }

    /**
     * @param mixed $work_place
     */
    public function setWorkPlace($work_place)
    {
        $this->work_place = $work_place;
    }

    /**
     * @return mixed
     */
    public function getDegree()
    {
        return $this->degree;
    }

    /**
     * @param mixed $degree
     */
    public function setDegree($degree)
    {
        $this->degree = $degree;
    }
}
