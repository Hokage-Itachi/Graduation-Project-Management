<?php
include_once("./controllers/base_controller.php");
include_once("./models/service/TeacherService.php");
include_once("./models/service/ProjectService.php");
include_once("./models/service/TaskService.php");
include_once("./models/service/StudentService.php");
include_once("./models/service/PhaseService.php");
include_once("./models/service/BranchService.php");
include_once("./models/service/PostService.php");
include_once("./models/service/CommentService.php");
include_once("./models/service/UserService.php");


class TeacherController extends BaseController{
    private $teacherService;
    private $studentService;
    private $projectService;
    private $phaseService;
    private $taskService;
    private $branchService;
    private $postService;
    private $commentService;
    private $userService;
    public function __construct()
    {
        $this->file = "teacher/teacher_ui.php";
        $this->teacherService = new TeacherService();
        $this->studentService = new StudentService();
        $this->taskService = new TaskService();
        $this->phaseService = new PhaseService();
        $this->projectService = new ProjectService();
        $this->branchService = new BranchService();
        $this->postService = new PostService();
        $this->commentService = new CommentService();
        $this->userService = new UserService();
    }


    public function getProjectData($id){
        $project = $this->projectService->findByID($id);
        if(!$project){
            include_once ('./views/error_page/404.php');
            die();
        }
        $this->file = "teacher/teacher_project_ui.php";
        $data = array(
            "id"=>$id,
            "name"=>$project->getName(),
            'phases'=>$this->getPhaseData($id),
            'posts'=>$this->getPostData($id)
        );

        $project_data['project'] = $data;
        $teacher = $this->teacherService->getByUserID($_SESSION['user']['id']);
        $avatar = $teacher->getAvatar();
//        error_log("avatar: ". $avatar);
        if(!$avatar){
            $project_data['avatar'] = "default_avatar/img_avatar2.png";
        } else{
            $project_data['avatar'] = "user_avatar/".$avatar;
        }
        return $project_data;
    }

    public function getPhaseData($project_id){
        $phases = $this->phaseService->getByProjectID($project_id);
//        error_log($phases[0]->getId());
        $phases_data = array();
        if($phases){
            for ($i = 0; $i<count($phases); $i++){
                $data = array(
                    "id"=> $phases[$i]->getId(),
                    "project_id"=>$project_id,
                    "name"=>$phases[$i]->getName(),
                    "tasks"=>$this->getTaskData($phases[$i]->getId()),
                    "completed_tasks"=>$this->getCompletedTaskNumber($phases[$i]->getId()),
                );
                if(count($this->getTaskData($phases[$i]->getId())) == 0){
                    $data['uncompleted_tasks'] = 0;
                } else {
                    $data['uncompleted_tasks'] = count($this->getTaskData($phases[$i]->getId())) - $this->getCompletedTaskNumber($phases[$i]->getId());
                }

                if(count($this->getTaskData($phases[$i]->getId())) == 0){
                    $data['percent'] = 0;
                } else {
                    $data['percent'] = round(($data['completed_tasks'] / count($this->getTaskData($phases[$i]->getId()))) * 100, 2);
                }

                $phases_data[$i] = $data;
            }
        }
        return $phases_data;

    }

    public function getTaskData($phase_id){
        $tasks_data = array();

        $tasks = $this->taskService->getByPhaseID($phase_id);
        if($tasks){
            for($i = 0; $i < count($tasks); $i++){
//                error_log("deadline: ".$tasks[$i]->getName());
                $data = array(
                    "id"=>$tasks[$i]->getTaskId(),
                    "phase_id"=> $phase_id,
                    "name"=>$tasks[$i]->getName(),
                    "description"=>$tasks[$i]->getDescription(),
                    "deadline"=>Formatter::format_date($tasks[$i]->getDeadline(), 'Y-d-m'),
                    "status"=>$tasks[$i]->getStatus()
                );
                $tasks_data[$i] = $data;
            }
        }
        return $tasks_data;
    }

    private function getCompletedTaskNumber($phase_id){
        $tasks = $this->taskService->getByPhaseID($phase_id);
        $completed = 0;
        if($tasks){
            for($i = 0; $i < count($tasks); $i++){
                if($tasks[$i]->getStatus() == '1'){
                    $completed++;
                }
            }
        }
        return $completed;
    }

    public function getPostData($project_id){
        $posts = $this->postService->getByProjectID($project_id);
        $post_data = array();
        if($posts){
            for($i = 0; $i < count($posts); $i++){
                $user = $this->userService->findByID($posts[$i]->getUserId());
                $data = array(
                    "id"=> $posts[$i]->getPostId(),
                    "content"=> $posts[$i]->getContent(),
                    "created_at"=>Formatter::format_date($posts[$i]->getCreatedAt(), "m-d-Y H:i:s"),
                    "user"=>$user->getName()
                );
                $comments = $this->getCommentData($posts[$i]->getPostId());
                if($comments){
                    $data["comments"] =$comments;
                } else {
                    $data['comments'] = array();
                }
                $avatar = $user->getAvatar();
//        error_log("avatar: ". $avatar);
                if(!$avatar){
                    $data['avatar'] = "default_avatar/img_avatar2.png";
                } else{
                    $data['avatar'] = "user_avatar/".$avatar;
                }
                $post_data[$i] = $data;
            }
        }
        return $post_data;
    }

    public function getCommentData($post_id){
        $comments = $this->commentService->getByPostID($post_id);
        $comment_data = array();
        if($comments){
            for($i = 0; $i < count($comments); $i++){
                $user = $this->userService->findByID($comments[$i]->getUserId());
                $data = array(
                    "content" => $comments[$i]->getContent(),
                    "created_at"=> Formatter::format_date($comments[$i]->getCreatedAt(), "m-d-Y H:i:s"),
                    "user"=>$user->getName()
                );
                $avatar = $user->getAvatar();
//        error_log("avatar: ". $avatar);
                if(!$avatar){
                    $data['avatar'] = "default_avatar/img_avatar2.png";
                } else{
                    $data['avatar'] = "user_avatar/".$avatar;
                }
                $comment_data[$i] = $data;
            }
        }
        return $comment_data;
    }

    public function getTeacherHomeData(){
        $teacher = $this->teacherService->getByUserID($_SESSION['user']['id']);
        $your_id = $teacher->getTeacherId();
        $joinedProject = $this->getJoinedProjectData($your_id);
        $data = array();
        if($joinedProject){
            $data['projects'] = $joinedProject;
        } else {
            $data['projects'] = array();
        }


        $avatar = $teacher->getAvatar();
//        error_log("avatar: ". $avatar);
        if(!$avatar){
            $data['avatar'] = "default_avatar/img_avatar2.png";
        } else{
            $data['avatar'] = "user_avatar/".$avatar;
        }
        return $data;

    }

    private function getJoinedProjectData($your_id){
        $list_project = $this->projectService->getAll();
        $projects_data = array();
        $i = 0;
        foreach ($list_project as $project) {
            if($project->getTeacherId() == $your_id){
                $data = array(
                    'id'=>$project->getProjectId(),
                    'name'=>$project->getName(),
                    'point'=>$project->getPoint(),
                    'presentation_day'=> Formatter::format_date($project->getPresentationDay(), 'd-m-Y')
                );
                if($project->getCompleted() == '1'){
                    $data['status']  = "Completed";
                } else {
                    $data['status']  = "Processing";
                }
                $branch = $this->branchService->findByID($project->getBranchId());
                if($branch){
                    $data['branch'] = $branch->getName();
                } else{
                    echo "Error";
                    die();
                }
                $student = $this->studentService->findByID($project->getStudentId());
                if($student){
                    $data['student'] = array(
                        'id' => $student->getStudentId(),
                        'name'=> $student->getName(),
                    );
                } else {
                    echo "Error";
                    die();
                }
                $projects_data[$i] = $data;
                $i++;
            }
        }
        return $projects_data;
    }

    public function getProfileData(){
        $this->file = "/teacher/teacher_profile_ui.php";

        $teacher = $this->teacherService->getByUserID($_SESSION['user']['id']);
        $teacher_data = array(
            'email'=>$teacher->getEmail(),
            'name'=>$teacher->getName(),
            'phone'=>$teacher->getPhoneNumber(),
            'work_place'=>$teacher->getWorkPlace(),
            'branch'=>$teacher->getBranchId(),
            'degree'=>$teacher->getDegree(),
            'academic_rank'=>$teacher->getAcademicRank()
        );

        $branch_data = $this->getBranchData();
        $profile_data = array(
            'teacher'=>$teacher_data,
            'branches'=>$branch_data
        );
        $avatar = $teacher->getAvatar();
//        error_log("avatar: ". $avatar);
        if(!$avatar){
            $profile_data['avatar'] = "default_avatar/img_avatar2.png";
        } else{
            $profile_data['avatar'] = "user_avatar/".$avatar;
        }


        return $profile_data;
    }

    public function updateProfile(){
        $teacher = $this->teacherService->getByUserID($_SESSION['user']['id']);
        $email = $_POST['email'];
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $branch = $_POST['branch'];
        $work_place = isset( $_POST['work_place']) ?  $_POST['work_place'] : $teacher->getWorkPlace();
        $degree = isset( $_POST['degree']) ?  $_POST['degree'] : $teacher->getDegree();
        $academic_rank = isset( $_POST['academic_rank']) ?  $_POST['academic_rank'] : $teacher->getAcademicRank();
        $new_password = isset( $_POST['new_password']) ?  $_POST['new_password'] : "";

        $this->teacherService->update($_SESSION['user']['id'], $degree, $work_place, $academic_rank, $branch);
        $pass_hashed = $new_password == "" ? $teacher->getPassHashed() : password_hash($new_password, PASSWORD_DEFAULT);
        $this->userService->updateUser($_SESSION['user']['id'], $email, $name, $phone, $pass_hashed);

        $new_avatar = $teacher->getAvatar();
        $avatar_img = isset($_FILES['avatar']) ? $_FILES['avatar']: "";
        $allow_type = ['image/png', 'image/jpg','image/jpeg','image/gif'];
        if($avatar_img != ""){
            if(in_array($avatar_img['type'], $allow_type)){
                $new_avatar = "Tec_".$teacher->getTeacherId()."_".$avatar_img['name'];
            }
        }
        $current_avatar = $teacher->getAvatar();
        if(file_exists("/assets/image/user_avatar/".$current_avatar)){
            unlink("/assets/image/user_avatar/".$current_avatar);
        }
//        die(getcwd());
        move_uploaded_file($avatar_img['tmp_name'], "assets/image/user_avatar/".$new_avatar);

        $this->userService->updateAvatar($new_avatar, $_SESSION['user']['id']);
        header("location: /teacher");


    }

    public function getBranchData(){
        $branches = $this->branchService->getAll();
        $branch_data = array();
        for ($i = 0; $i < count($branches); $i++){
            $data = array(
                'id'=>$branches[$i]->getId(),
                'name'=>$branches[$i]->getName()
            );
            $branch_data[$i] =  $data;

        }
        return $branch_data;
    }







}