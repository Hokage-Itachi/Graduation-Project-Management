<?php
require_once('./models/repository/taskDAO/TaskDAO.php');
require_once('./models/entity/Task.php');

class TaskService
{
    private $taskDAO;

    public function __constructor()
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

    public function update($name, $description, $deadline, $staus, $phase_id){
        $result = $this->taskDAO->update($name, $description, $deadline, $staus, $phase_id);
        return $result;
    }

    public function insert($name, $description, $deadline, $phase_id){
        $result = $this->taskDAO->insert($phase_id, $name, $description, $deadline);
        return $result;
    }


}
