<?php
include_once("./models/repository/phaseDAO/PhaseQuery.php");
include_once("./models/repository/phaseDAO/PhaseDAO.php");
include_once("./models/entity/Phase.php");
class PhaseService{
    private $phaseDAO;

    /**
     * PhaseService constructor.
     */
    public function __construct()
    {
        $this->phaseDAO = new PhaseDAO();
    }

    public function getByProjectID($project_id){
        $results = $this->phaseDAO->getByProjectID($project_id);
        $list_phase = array();
        $i = 0;
        if($results){
            foreach ($results as $result) {
                $phase = new Phase($result['id'], $result['project_id'], $result['name']);
                $list_phase[$i] = $phase;
                $i++;
            }
            return $list_phase;

        } else {
            return null;
        }

    }

    public function insert($project_id, $name){
        $result = $this->phaseDAO->insert($project_id, $name);
        return $result;
    }

}