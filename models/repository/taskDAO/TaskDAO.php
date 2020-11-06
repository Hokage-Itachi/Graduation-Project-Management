<?php
require_once("./models/repository/taskDAO/TaskQuery.php");
class TaskDAO
{
    public function findByID($task_id)
    {
        $db = DB::getInstance();
        $sql = sprintf(TaskQuery::SELECT_BY_ID, $task_id);

        $result = $db->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                return $row;
            }
        } else {
            return null;
        }
    }
}
