<?php
require_once('models/repository/roleDAO/RoleQuery.php');

class RoleDAO
{
    public function findByID($id)
    {
        $db = DB::getInstance();
        $sql = sprintf(RoleQuery::SELECT_BY_ID, $id);
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
