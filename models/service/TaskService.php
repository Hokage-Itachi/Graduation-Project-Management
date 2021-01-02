<?php
require_once('./models/repository/taskDAO/TaskDAO.php');
require_once('./models/entity/Task.php');

class TaskService
{
    private $taskDAO;

    public function __construct()
    {
        $this->taskDAO = new TaskDAO();
    }

    public function getByID($task_id)
    {
        $result = $this->taskDAO->getByID($task_id);
        if ($result) {
            $task = new Task($result['id'], $result['phase_id'], $result['name'], $result['description'], $result['deadline'], $result['status']);
            return $task;
        } else {
            return null;
        }
    }

    public function update($task_id, $name, $description, $deadline, $status){
        $result = $this->taskDAO->update($task_id, $name, $description, $deadline, $status);
        return $result;
    }

    public function insert($phase_id, $name, $description, $deadline){
        $result = $this->taskDAO->insert($phase_id, $name, $description, $deadline);
        return $result;
    }

    public function getByPhaseID($phase_id){

        $results = $this->taskDAO->getByPhaseID($phase_id);
        $tasks = array();
        $i = 0;
        if($results){
            foreach ($results as $result) {
                $task = new Task($result['id'], $phase_id, $result['name'], $result['description'], $result['deadline'], $result['status']);
                $tasks[$i] = $task;
                $i++;

            }
            return $tasks;
        }
        return null;
    }

    public function delete($task_id){
        return $this->taskDAO->delete($task_id);
    }





}
