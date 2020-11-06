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

    public function findByID($task_id)
    {
        $result = $this->taskDAO->findByID($task_id);
        if ($result) {
            $task = new Task($result['id'], $result['phase_id'], $result['name'], $result['description'], $result['deadline']);
            return $task;
        } else {
            return null;
        }
    }
}
