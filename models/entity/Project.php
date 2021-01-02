<?php
class Project
{
    private $project_id;
    private $name;
    private $completed;
    private $branch_id;
    private $content;
    private $point;
    private $curriculum;
    private $faculty;
    private $presentation_day;
     private $student_id;
     private $teacher_id;

    /**
     * Project constructor.
     * @param $project_id
     * @param $name
     * @param $completed
     * @param $branch_id
     * @param $point
     * @param $curriculum
     * @param $faculty
     * @param $presentation_day
     * @param $student_id
     * @param $teacher_id
     */
    public function __construct($project_id, $name, $completed, $branch_id, $point, $curriculum, $faculty, $presentation_day, $student_id, $teacher_id)
    {
        $this->project_id = $project_id;
        $this->name = $name;
        $this->completed = $completed;
        $this->branch_id = $branch_id;
        $this->point = $point;
        $this->curriculum = $curriculum;
        $this->faculty = $faculty;
        $this->presentation_day = $presentation_day;
        $this->student_id = $student_id;
        $this->teacher_id = $teacher_id;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content): void
    {
        $this->content = $content;
    }

    /**
     * @return mixed
     */
    public function getPoint()
    {
        return $this->point;
    }

    /**
     * @param mixed $point
     */
    public function setPoint($point)
    {
        $this->point = $point;
    }

    /**
     * @return mixed
     */
    public function getCurriculum()
    {
        return $this->curriculum;
    }

    /**
     * @param mixed $curriculum
     */
    public function setCurriculum($curriculum)
    {
        $this->curriculum = $curriculum;
    }

    /**
     * @return mixed
     */
    public function getFaculty()
    {
        return $this->faculty;
    }

    /**
     * @param mixed $faculty
     */
    public function setFaculty($faculty)
    {
        $this->faculty = $faculty;
    }

    /**
     * @return mixed
     */
    public function getPresentationDay()
    {
        return $this->presentation_day;
    }

    /**
     * @param mixed $presentation_day
     */
    public function setPresentationDay($presentation_day)
    {
        $this->presentation_day = $presentation_day;
    }


    /**
     * @return mixed
     */
    public function getProjectId()
    {
        return $this->project_id;
    }

    /**
     * @param mixed $project_id
     */
    public function setProjectId($project_id)
    {
        $this->project_id = $project_id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getCompleted()
    {
        return $this->completed;
    }

    /**
     * @param mixed $completed
     */
    public function setCompleted($completed)
    {
        $this->completed = $completed;
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
    public function setBranchId($branch_id)
    {
        $this->branch_id = $branch_id;
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

}
