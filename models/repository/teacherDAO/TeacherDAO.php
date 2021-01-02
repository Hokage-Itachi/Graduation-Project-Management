<?php
require_once("./models/repository/teacherDAO/TeacherQuery.php");
class TeacherDAO
{
    public function findByID($teacher_id): ?array
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

    public function getAll(): ?array
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

    public function update($user_id, $degree, $work_place, $academic_rank, $branch_id): string
    {
        $db = DB::getInstance();
        $sql = sprintf(TeacherQuery::UPDATE_TEACHER, $user_id,$degree, $work_place, $academic_rank, $branch_id);
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

    public function insert($user_id, $degree, $work_place, $academic_rank, $branch_id): string
    {
        $db = DB::getInstance();
        $sql = sprintf(TeacherQuery::INSERT_TEACHER, $user_id ,$degree, $work_place, $academic_rank, $branch_id);
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

    public function findByUserID($user_id): ?array
    {
        $db = DB::getInstance();
        $sql = sprintf(TeacherQuery::SELECT_BY_USER_ID, $user_id);

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

    public function getByEmail($email){
        $db = DB::getInstance();
        $sql = sprintf(TeacherQuery::SELECT_BY_EMAIL, $email);

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
