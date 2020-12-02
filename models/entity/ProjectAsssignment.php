<?php
class ProjectAssignment{
    private $project_id;
    private $student_id;
    private $teacher_id;

    /**
     * ProjectAssignment constructor.
     * @param $project_id
     * @param $student_id
     * @param $teacher_id
     */
    public function __construct($project_id, $student_id, $teacher_id)
    {
        $this->project_id = $project_id;
        $this->student_id = $student_id;
        $this->teacher_id = $teacher_id;
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