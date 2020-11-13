<?php
require_once("./models/repository/projectDAO/ProjectAssignmentQuery.php");
class ProjectAssignmentDAO
{
    public function findByProjectID($project_id)
    {
        $db = DB::getInstance();
        $sql = sprintf(ProjectAssignmentQuery::SELECT_BY_PROJECT_ID, $project_id);
        $result = $db->query($sql);
        $db->close();
        if ($result) {
            while ($row = $result->fetch_assoc()) {
                return $row;
            }
        } else {
            return null;
        }
    }

    public function insert($project_id, $student_id, $teacher_id)
    {
        $db = DB::getInstance();
        $sql = sprintf(ProjectAssignmentQuery::SELECT_BY_PROJECT_ID, $project_id, $student_id, $teacher_id);
        $result = $db->query(($sql));
        if ($result) {
            $db->close();
            return "Success";
        } else {
            $error = $db->connect_error;
            $db->close();
            return "Error:" . $error;
        }
        $db->close();
    }

    public function getAll()
    {
        $db = DB::getInstance();
        $sql = sprintf(ProjectAssignmentQuery::SELECT_PROJECT_ASSIGNMENT);
        $result = $db->query($sql);
        $db->close();
        $rows = array();
        $i=0;
        if ($result) {
            while ($row = $result->fetch_assoc()) {
                $rows[$i] = $row;
            }
            return $rows;
        } else {
            return null;
        }
    }
}
