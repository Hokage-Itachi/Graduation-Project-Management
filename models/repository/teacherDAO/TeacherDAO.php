<?php
require_once("./models/repository/teacherDAO/TeacherQuery.php");
class TeacherDAO
{
    public function findByID($teacher_id)
    {
        $db = DB::getInstance();
        $sql = sprintf(TeacherQuery::SELECT_BY_ID, $teacher_id);

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

    public function getAll()
    {
        $db = DB::getInstance();
        $sql = sprintf(TeacherQuery::SELECT_ALL);
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
