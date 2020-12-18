<?php
require_once('./models/repository/phaseDAO/PhaseQuery.php');
class PhaseDAO{

    public function getByID($id){
        $db = DB::getInstance();
        $sql = sprintf(PhaseQuery::SELECT_BY_ID, $id);
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

    public function getByProjectID($project_id){
        $db = DB::getInstance();
        $sql = sprintf(PhaseQuery::SELECT_BY_PROJECT_ID, $project_id);
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

    public function getAll(){
        $db = DB::getInstance();
        $rows = array();
        $sql = sprintf(PhaseQuery::SELECT_ALL);
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

}