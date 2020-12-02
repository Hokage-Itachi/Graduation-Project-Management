<?php
require_once("./models/repository/postDAO/PostQuery.php");
class PostDAO
{
    public function findByID($post_id)
    {
        $db = DB::getInstance();
        $sql = sprintf(PostQuery::SELECT_BY_ID, $post_id);

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
