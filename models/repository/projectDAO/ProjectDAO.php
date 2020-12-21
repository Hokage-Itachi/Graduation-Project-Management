<?php
require_once('./models/repository/projectDAO/ProjectQuery.php');
require_once('./models/repository/projectDAO/ProjectAssignmentQuery.php');
class ProjectDAO
{

    function findByID($project_id): ?array
    {
        $db = DB::getInstance();
        $sql = sprintf(ProjectQuery::SELECT_BY_ID, $project_id);
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

    public function findByName($name): ?array
    {
        $db = DB::getInstance();
        $sql = sprintf(ProjectQuery::SELECT_BY_NAME, "%", $name, "%");
        // error_log($sql);
        $result = $db->query($sql);
        $db->close();
        $rows = array();
        $i = 0;
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $rows[$i] = $row;
                $i++;
            }
            return $rows;
        } else {
            return null;
        }
    }

    public function findByStatus($status): ?array
    {
        $db = DB::getInstance();
        $rows = array();
        $sql = sprintf(ProjectQuery::SELECT_BY_STATUS, $status);
        $result = $db->query($sql);
        $db->close();
        $i = 0;
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $rows[$i] = $row;
                $i += 1;
            }
            return $rows;
        } else {
            return null;
        }
    }

    public function findByBranch($branch_id): ?array
    {
        $db = DB::getInstance();
        $rows = array();
        $sql = sprintf(ProjectQuery::SELECT_BY_BRANCH, $branch_id);
        $result = $db->query($sql);
        $db->close();
        $i = 0;
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $rows[$i] = $row;
                $i += 1;
            }
            return $rows;
        } else {
            return null;
        }
    }

    public function insert($name, $completed, $branch_id, $point, $curriculum, $faculty, $student_id, $teacher_id): string
    {
        $db = DB::getInstance();
        $sql = sprintf(ProjectQuery::INSERT, $name, $completed, $branch_id, $point, $curriculum, $faculty);

        $result = $db->query($sql);
        if ($result) {
            $project_id = $this->findProjectByName($name)[0]['id'];
            // TODO: fix project select by name query
            $sql = sprintf(ProjectAssignmentQuery::INSERT, $project_id, $student_id, $teacher_id);
            $result = $db->query($sql);
            error_log($sql);
            if ($result) {
                $db->close();
                return "Success";
            }
            else{
                $error = $db->connect_error;
                $db->close();
                return "Error: " . $error;
            }
        } else{
            $error = $db->connect_error;
            $db->close();
            return "Error: " . $error;
        }


    }

    public function getAll(): ?array
    {
        $db = DB::getInstance();
        $rows = array();
        $sql = sprintf(ProjectQuery::SELECT_ALL);
        $result = $db->query($sql);
        $db->close();
        $i = 0;
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $rows[$i] = $row;
                $i += 1;
            }
            return $rows;
        } else {
            return null;
        }
    }

    public function getRowNumber(): ?array
    {
        $db = DB::getInstance();
        $sql = sprintf(ProjectQuery::COUNT_ROW_NUM);
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

    public function findProjectByName($name){
        $db = DB::getInstance();
        $sql = sprintf(ProjectQuery::SELECT_PROJECT_BY_NAME, "%", $name, "%");
        // error_log($sql);
        $result = $db->query($sql);
        $db->close();
        $rows = array();
        $i = 0;
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $rows[$i] = $row;
                $i++;
            }
            return $rows;
        } else {
            return null;
        }
    }
}
