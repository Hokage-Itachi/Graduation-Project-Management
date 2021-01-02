<?php

include_once("./models/entity/User.php");
class Student extends User
{
    private $row_id;
    private $student_id;
    private $class;
    private $year;
    private $branch_id;

    public function __construct($student_id, $class,$year, $user_id, $email, $pass_hashed, $name, $phone_number, $role_id, $active, $branch_id, $row_id)
    {
        parent::__construct($user_id, $email, $pass_hashed, $name, $phone_number, $role_id, $active);
        $this->student_id = $student_id;
        $this->class = $class;
        $this->branch_id = $branch_id;
        $this->row_id = $row_id;
        $this->year = $year;
    }

    /**
     * @return mixed
     */
    public function getRowId()
    {
        return $this->row_id;
    }

    /**
     * @param mixed $row_id
     */
    public function setRowId($row_id): void
    {
        $this->row_id = $row_id;
    }

    /**
     * @return mixed
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * @param mixed $year
     */
    public function setYear($year): void
    {
        $this->year = $year;
    }

    /**
     * @return mixed
     */
    public function getBranchId()
    {
        return $this->branch_id;
    }

    /**
     * @param mixed $branch_id
     */
    public function setBranchId($branch_id): void
    {
        $this->branch_id = $branch_id;
    }

    /**
     * @return mixed
     */
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * @param mixed $grade
     */
    public function setGrade($grade)
    {
        $this->grade = $grade;
    }


    /**
     * @return mixed
     */
    public function getStudentId()
    {
        return $this->student_id;
    }

    /**
     * @param mixed $student_id
     */
    public function setStudentId($student_id)
    {
        $this->student_id = $student_id;
    }

    /**
     * @return mixed
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * @param mixed $class
     */
    public function setClass($class)
    {
        $this->class = $class;
    }
}
