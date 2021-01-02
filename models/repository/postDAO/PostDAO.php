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

    public function getByProjectID($project_id){
        $db = DB::getInstance();
        $sql = sprintf(PostQuery::SELECT_BY_PROJECT_ID, $project_id);
        $rows = array();
        $i = 0;
        $result = $db->query($sql);
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

    public function insert($content, $created_at, $user_id, $project_id){
        $db = DB::getInstance();
        $sql = sprintf(PostQuery::INSERT_POST,$content, $created_at, $user_id, $project_id);
        $result = $db->query($sql);
        if ($result) {
            $db->close();
            return "Success";
        }else{
            $error = $db->connect_error;
            $db->close();
            return "Error: " . $error;
        }
    }
}
