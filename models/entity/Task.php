<?php
class Task{
    private $task_id;
    private $phase_id;
    private $name;
    private $description;
    private $deadline;

    /**
     * Task constructor.
     * @param $task_id
     * @param $phase_id
     * @param $name
     * @param $description
     * @param $deadline
     */
    public function __construct($task_id, $phase_id, $name, $description, $deadline)
    {
        $this->task_id = $task_id;
        $this->phase_id = $phase_id;
        $this->name = $name;
        $this->description = $description;
        $this->deadline = $deadline;
    }

    /**
     * @return mixed
     */
    public function getTaskId()
    {
        return $this->task_id;
    }

    /**
     * @param mixed $task_id
     */
    public function setTaskId($task_id)
    {
        $this->task_id = $task_id;
    }

    /**
     * @return mixed
     */
    public function getPhaseId()
    {
        return $this->phase_id;
    }

    /**
     * @param mixed $phase_id
     */
    public function setPhaseId($phase_id)
    {
        $this->phase_id = $phase_id;
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
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getDeadline()
    {
        return $this->deadline;
    }

    /**
     * @param mixed $deadline
     */
    public function setDeadline($deadline)
    {
        $this->deadline = $deadline;
    }




}