<?php
require_once("./models/repository/taskDAO/TaskQuery.php");
class TaskDAO
{
    public function getByID($task_id)
    {
        $db = DB::getInstance();
        $sql = sprintf(TaskQuery::SELECT_BY_ID, $task_id);

        $result = $db->query($sql);
        $db->close();
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                return $row;
            }
        } else {
            return null;
        }
    }

    public function update($name, $description, $deadline, $status, $phase_id){
        $db = DB::getInstance();
        $sql = sprintf(TaskQuery::UPDATE_TASK, $name, $description, $deadline, $status, $phase_id);

        $result = $db->query($sql);

        if ($result) {
            $db->close();
            return "Success";
        } else {
            $error = "Error:" . $db->error;
            $db->close();
            return $error;
        }
    }

    public function insert($name, $phase_id, $description, $deadline){
        $db = DB::getInstance();
        $sql = sprintf(TaskQuery::INSERT_TASK, $phase_id ,$name, $description, $deadline);

        $result = $db->query($sql);

        if ($result) {
            $db->close();
            return "Success";
        } else {
            $error = "Error:" . $db->error;
            $db->close();
            return $error;
        }
    }
}
