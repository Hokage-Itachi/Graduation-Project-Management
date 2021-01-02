<?php
class Post{
    private $post_id;
    private $content;
    private $created_at;
    private $user_id;
    private $project_id;


    /**
     * Post constructor.
     * @param $post_id
     * @param $content
     * @param $created_at
     * @param $user_id
     * @param $project_id
     * @param $title
     */
    public function __construct($post_id, $content, $created_at, $user_id, $project_id)
    {
        $this->post_id = $post_id;
        $this->content = $content;
        $this->created_at = $created_at;
        $this->user_id = $user_id;
        $this->project_id = $project_id;

    }


    /**
     * @return mixed
     */
    public function getPostId()
    {
        return $this->post_id;
    }

    /**
     * @param mixed $post_id
     */
    public function setPostId($post_id)
    {
        $this->post_id = $post_id;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * @param mixed $created_at
     */
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * @param mixed $user_id
     */
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
    }

    /**
     * @return mixed
     */
    public function getProjectId()
    {
        return $this->project_id;
    }

    /**
     * @param mixed $project_id
     */
    public function setProjectId($project_id)
    {
        $this->project_id = $project_id;
    }



}