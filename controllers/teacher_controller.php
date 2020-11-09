<?php
include_once("./controllers/base_controller.php");
include_once("./models/service/TeacherService.php");

class TeacherController extends BaseController{
    private $teacherService;

    public function __construct()
    {
        $this->file = "teacher_ui.php";
        $this->teacherService = new TeacherService();
    }


}