<?php
require_once("./models/repository/studentDAO/StudentQuery.php");
class StudentDAO
{
    public function findByID($id)
    {
        $db = DB::getInstance();
        $sql = sprintf(StudentQuery::SELECT_BY_ID, $id);
        error_log($sql);
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
    public function findByStudentID($student_id){
        $db = DB::getInstance();
        $sql = sprintf(StudentQuery::SELECT_BY_STUDENT_ID, $student_id);
        // error_log($sql);
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

    public function getAll(): ?array
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
                $i++;
            }
            return $rows;
        } else {
//            error_log($db->error);
            return null;
        }
    }

    public function delete($id)
    {
        $db = DB::getInstance();
        $sql = sprintf(StudentQuery::DELETE_STUDENT, $id);
        // error_log($sql);
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

    public function updateStudent( $student_id, $class, $grade, $year, $branch_id, $user_id){
        $db = DB::getInstance();
        $sql = sprintf(StudentQuery::UPDATE_STUDENT, $student_id, $class, $grade, $year, $branch_id, $user_id );
        // error_log($sql);
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
    public function insert($user_id, $class, $student_id, $grade, $year, $branch_id){
        $db = DB::getInstance();
        $sql = sprintf(StudentQuery::INSERT_STUDENT, $user_id,$class, $student_id, $grade, $year, $branch_id );
        // error_log($sql);
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

    public function findByUserID($user_id){
        $db = DB::getInstance();
        $sql = sprintf(StudentQuery::SELECT_BY_USER_ID, $user_id);
        // error_log($sql);
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
