<?php
include_once("./controllers/base_controller.php");
include_once("./models/service/TaskService.php");

class TaskController
{
    private $taskService;

    public function __construct()
    {
        $this->taskService = new TaskService();
    }

    public function addTask(){
        $phase_id = $_POST['phase_id'];
        $name = $_POST['name'];
        $description = $_POST['description'];
        $deadline = Formatter::format_date($_POST['deadline'], "Y-m-d");
        $project_id = $_POST['project_id'];

        $result = $this->taskService->insert($phase_id, $name, $description, $deadline);
        if($_SESSION['user']['role'] == 2){
            if($result == "Success"){
                header('location: /Graduation-Project-Management/teacher/project/'.$project_id);
                die();
            } else {
                echo $result;
            }
        } else {
            if($result == "Success"){
                header('location: /Graduation-Project-Management/student');
                die();
            } else {
                echo $result;
            }
        }
    }

    public function updateTask(){
        $task_id = $_POST['id'];
        $name = $_POST['name'];
        $description = $_POST['description'];
        $deadline = Formatter::format_date($_POST['deadline'], "Y-m-d");
        $status = '0';
        $project_id = $_POST['project_id'];
        if(isset($_POST['status'])){
            $status = '1';
        }


        $result = $this->taskService->update($task_id, $name, $description, $deadline, $status);
        if($_SESSION['user']['role'] == 2){
            if($result == "Success"){
                header('location: /Graduation-Project-Management/teacher/project/'.$project_id);
                die();
            } else {
                echo $result;
            }
        } else {
            if($result == "Success"){
                header('location: /Graduation-Project-Management/student');
                die();
            } else {
                echo $result;
            }
        }
    }

    public function deleteTask(){
        $task_id = $_POST['id'];
        $project_id = $_POST['project_id'];
        $result = $this->taskService->delete($task_id);
        if($_SESSION['user']['role'] == 2){
            if($result == "Success"){
                header('location: /Graduation-Project-Management/teacher/project/'.$project_id);
                die();
            } else {
                echo $result;
            }
        } else {
            if($result == "Success"){
                header('location: /Graduation-Project-Management/student');
                die();
            } else {
                echo $result;
            }
        }
    }
}