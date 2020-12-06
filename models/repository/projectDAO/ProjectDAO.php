<?php
require_once('./models/repository/projectDAO/ProjectQuery.php');
require_once('./models/repository/projectDAO/ProjectAssigmentQuery.php');
class ProjectDAO
{

    function findByID($project_id)
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

    public function findByName($name)
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

    public function findByStatus($status)
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

    public function findByBranch($branch_id)
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

    public function insert($name, $completed, $branch_id, $point, $curriculum, $faculty, $presentation_day, $student_id, $teacher_id)
    {
        $db = DB::getInstance();
        $sql = sprintf(ProjectQuery::INSERT, $name, $completed, $branch_id, $point, $curriculum, $faculty, $presentation_day);

        $result = $db->query($sql);
        if ($result) {
            $project_id = $this->findByName($name)[0]['id'];
            $sql = sprintf(ProjectAssignmentQuery::INSERT, $project_id, $student_id, $teacher_id);
            $result = $db->query($sql);
            if ($result) {
                $db->close();
                return "Success";
            }
        } else {
            $error = $db->connect_error;
            $db->close();
            return "Error: " . $error;
        }
    }

    public function getAll()
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

    public function getRowNumber()
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
}
