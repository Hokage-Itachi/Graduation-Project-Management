<?php
include_once("./controllers/base_controller.php");
include_once("./models/service/PostService.php");
include_once("./models/service/CommentService.php");

class MessageController{
    private $postService;
    private $commentService;

    public function __construct()
    {
        $this->postService = new PostService();
        $this->commentService = new CommentService();

    }

    public function addPost(){
        $content = $_POST['content'];
        $project_id = $_POST['project_id'];
        $created_at = date('Y-m-d H:i:s');
        $user_id = $_SESSION['user']['id'];

        $result = $this->postService->insert($content, $created_at, $user_id, $project_id);
        if($_SESSION['user']['role'] == 2){
            if($result == "Success"){
                header('location: /Graduation-Project-Management/teacher/project/'.$project_id);
                die();
            } else {
                echo $result;
            }
        } else {
            if($result == "Success"){
                header('location: /Graduation-Project-Management/student');
                die();
            } else {
                echo $result;
            }
        }
    }

    public function addComment(){
        $content = $_POST['content'];
        $post_id = $_POST['post_id'];
        $project_id = $_POST['project_id'];
        $created_at = date('Y-m-d H:i:s');
        $user_id = $_SESSION['user']['id'];

        $result = $this->commentService->insert($content, $created_at, $post_id, $user_id);
        if($_SESSION['user']['role'] == 2){
            if($result == "Success"){
                header('location: /Graduation-Project-Management/teacher/project/'.$project_id);
                die();
            } else {
                echo $result;
            }
        } else {
            if($result == "Success"){
                header('location: /Graduation-Project-Management/student');
                die();
            } else {
                echo $result;
            }
        }
    }
}
