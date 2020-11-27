<?php
include_once('./models/repository/userDAO/UserQuery.php');
class UserDAO
{

    function findByEmail($email)
    {
        $db = DB::getInstance();
        $sql = sprintf(UserQuery::SELECT_BY_EMAIL, $email);
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

    public function findByID($id)
    {
        $db = DB::getInstance();
        $sql = sprintf(UserQuery::SELECT_BY_ID, $id);
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
    public function getAll()
    {
        $db = DB::getInstance();
        $sql = sprintf(UserQuery::SELECT_ALL);
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
