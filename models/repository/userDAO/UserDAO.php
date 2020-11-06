<?php
include_once('./models/repository/userDAO/UserQuery.php');
class UserDAO
{

    function findByEmail($email)
    {
        $db = DB::getInstance();
        // include('../../../includes/database.php');
        $sql = sprintf(UserQuery::SELECT_BY_EMAIL, $email);
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
