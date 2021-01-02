<?php
include_once('./models/repository/userDAO/UserQuery.php');
class UserDAO
{

    function findByEmail($email): ?array
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

    public function findByID($id): ?array
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
    public function getAll(): ?array
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

    public function update($id, $email, $name,$phone_number, $pass_hashed): ?string
    {
        $db = DB::getInstance();
        $sql = sprintf(UserQuery::UPDATE_USER, $name, $email,$phone_number, $pass_hashed, $id);
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

    public function delete($id): string
    {
        $db = DB::getInstance();
        $sql = sprintf(UserQuery::DELETE_USER, $id);
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

    public function insert($email, $pass_hashed, $name, $phone_number, $role_id): string
    {
        $db = DB::getInstance();
        $sql = sprintf(UserQuery::INSERT_USER, $email, $pass_hashed, $name, $phone_number, $role_id);
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

    public function getInactiveUser(): ?array
    {
        $db = DB::getInstance();
        $sql = sprintf(UserQuery::SELECT_INACTIVE_USER);
        $result = $db->query($sql);
        $db->close();
//        $rows = array();
//        $i = 0;
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                return $row;
            }
//            return $rows;
        } else {
            return null;
        }
    }

    public function activeUser($id){
        $db = DB::getInstance();
        $sql = sprintf(UserQuery::ACTIVE_USER, $id);
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

    public function updateAvatar($avatar, $id){
        $db = DB::getInstance();
        $sql = sprintf(UserQuery::UPDATE_AVATAR, $avatar,$id);
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

}
