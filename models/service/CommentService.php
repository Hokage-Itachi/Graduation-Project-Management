<?php
require_once("./models/entity/Comment.php");
require_once("./models/repository/commentDAO/CommentDAO.php");
class CommentService{

    private $commentDAO;
    public function __construct()
    {
        $this->commentDAO = new CommentDAO();
    }

    public function getByID($id){
        $result = $this->commentDAO->getByID($id);
        if($result){
            $comment = new Comment($result['id'], $result['content'],$result['created_at'], $result['post_id'], $result['user_id']);
            return $comment;
        } else {
            return null;
        }
    }

    public function getByPostID($post_id){
        $results = $this->commentDAO->getByPostID($post_id);
        $list_comment = array();
        $i =0;
        if($results){
            foreach ($results as $result) {
                $comment = new Comment($result['id'], $result['content'],$result['created_at'], $result['post_id'], $result['user_id']);
                $list_comment[$i] = $comment;
                $i++;
            }
            return $list_comment;
        } else{
            return  null;
        }
    }

    public function insert($content, $created_at, $post_id, $user_id){
        $result = $this->commentDAO->insert($content, $created_at, $post_id, $user_id);
        return $result;
    }

}