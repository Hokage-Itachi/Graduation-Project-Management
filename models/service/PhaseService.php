<?php
include_once("./models/repository/phaseDAO/PhaseQuery.php");
include_once("./models/repository/phaseDAO/PhaseDAO.php");
include_once("./models/entity/Phase.php");
class PhaseService{
    private $phaseDAO;

    /**
     * PhaseService constructor.
     * @param $phaseDAO
     */
    public function __construct($phaseDAO)
    {
        $this->phaseDAO = $phaseDAO;
    }

    public function getByProjectID($project_id){
        $result = $this->phaseDAO->getByID($project_id);
        if($result){
            $phase = new Phase($result['id'], $result['project_id'], $result['name'], $result['percent']);
            return $phase;
        } else {
            return null;
        }

    }

}