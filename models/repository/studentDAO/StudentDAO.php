<?php
require_once("./models/repository/studentDAO/StudentQuery.php");
class StudentDAO
{
    public function findByID($id)
    {
        $db = DB::getInstance();
        $sql = sprintf(StudentQuery::SELECT_BY_ID, $id);

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

    public function getRowNumber()
    {
        $db = DB::getInstance();
        $sql = sprintf(StudentQuery::COUNT_ROW_NUM);

        $result = $db->query($sql);
        $db->close();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                return $row;
            }
        } else {
            return null;
        }
    }

    public function getAll()
    {
        $db = DB::getInstance();
        $sql = sprintf(StudentQuery::SELECT_ALL);
        $rows = array();
        $i = 0;
        $result = $db->query($sql);
        $db->close();
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $rows[$i] = $row;
            }
            return $row;
        } else {
            return null;
        }
    }
}
