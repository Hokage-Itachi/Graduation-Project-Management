<?php
require_once("./models/repository/commentDAO/CommentQuery.php");
class CommentDAO{
    public function getByID($id){

        $db = DB::getInstance();
        $sql = sprintf(CommentQuery::SELECT_BY_ID, $id);

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

    public function getByPostID($post_id){

        $db = DB::getInstance();
        $sql = sprintf(CommentQuery::SELECT_BY_POST_ID, $post_id);
        $rows = array();
        $i = 0;
        $result = $db->query($sql);
        $db->close();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $rows[$i] = $row;
                $i++;
            }
            return $rows;
        } else {
            return null;
        }
    }

    public function insert($content, $created_at, $post_id, $user_id){
        $db = DB::getInstance();
        $sql = sprintf(CommentQuery::INSERT,$content, $created_at, $post_id, $user_id);
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