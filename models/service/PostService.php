<?php
require_once('./models/repository/postDAO/PostDAO.php');
require_once('./models/entity/Post.php');

class PostService
{
    private $postDAO;

    public function __construct()
    {
        $this->postDAO = new postDAO();
    }

    public function findByID($post_id)
    {
        $result = $this->postDAO->findByID($post_id);
        if ($result) {
            $post = new Post($result['id'], $result['content'], $result['created_at'], $result['user_id'], $result['project_id']);
            return $post;
        } else {
            return null;
        }
    }

    public function getByProjectID($project_id){
        $results = $this->postDAO->getByProjectID($project_id);
        $list_post = array();
        $i = 0;
        if($results){
            foreach ($results as $result) {
                $post = new Post($result['id'], $result['content'], $result['created_at'], $result['user_id'], $result['project_id']);
                $list_post[$i] = $post;
                $i++;
            }
            return $list_post;
        } else {
            return null;
        }
    }

    public function insert($content, $created_at, $user_id, $project_id){
        $result = $this->postDAO->insert($content, $created_at, $user_id, $project_id);
        return $result;
    }
}
