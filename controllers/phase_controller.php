<?php
include_once("./controllers/base_controller.php");
include_once("./models/service/PhaseService.php");

class PhaseController
{

    private $phaseService;

    public function __construct()
    {
        $this->phaseService = new PhaseService();
    }

    public function addPhase(){
        $phase_name = $_POST['name'];
        $project_id = $_POST['project_id'];

        $result = $this->phaseService->insert($project_id, $phase_name);
        if($_SESSION['user']['role'] == 2){
            if($result == "Success"){
                header('location: /teacher/project/'.$project_id);
                die();
            } else {
                echo $result;
            }
        } else {
            if($result == "Success"){
                header('location: /student');
                die();
            } else {
                echo $result;
            }
        }
    }

}