<?php

include_once("./models/entity/User.php");
class Student extends User
{
    private $student_id;
    private $class;
    private $grade;
    private $course;

    public function __construct($student_id, $class, $grade, $course, $user_id, $email, $pass_hashed, $name, $phone_number, $role_id)
    {
        parent::__construct($user_id, $email, $pass_hashed, $name, $phone_number, $role_id);
        $this->student_id = $student_id;
        $this->class = $class;
        $this->grade = $grade;
        $this->course = $course;
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
    public function getCourse()
    {
        return $this->course;
    }

    /**
     * @param mixed $course
     */
    public function setCourse($course)
    {
        $this->course = $course;
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
