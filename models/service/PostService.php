<?php
require_once('./models/repository/postDAO/PostDAO.php');
require_once('./models/entity/Post.php');

class PostService
{
    private $postDAO;

    public function __constructor()
    {
        $this->postDAO = new postDAO();
    }

    public function findByID($post_id)
    {
        $result = $this->postDAO->findByID($post_id);
        if ($result) {
            $post = new Post($result['id'], $result['content'], $result['created_at'], $result['user_id'], $result['project_id'], $result['title']);
            return $post;
        } else {
            return null;
        }
    }
}
