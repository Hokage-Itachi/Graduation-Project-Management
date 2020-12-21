<?php
class Phase{
    private $id;
    private $project_id;
    private $name;
    private $percent;

    /**
     * Phase constructor.
     * @param $id
     * @param $project_id
     * @param $name
     * @param $percent
     */
    public function __construct($id, $project_id, $name, $percent)
    {
        $this->id = $id;
        $this->project_id = $project_id;
        $this->name = $name;
        $this->percent = $percent;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
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
    public function setProjectId($project_id): void
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
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getPercent()
    {
        return $this->percent;
    }

    /**
     * @param mixed $percent
     */
    public function setPercent($percent): void
    {
        $this->percent = $percent;
    }


}