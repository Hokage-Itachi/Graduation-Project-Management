<?php
include_once("./controllers/base_controller.php");
include_once("./models/service/StudentService.php");

class StudentController extends BaseController{
    private $studentService;

    public function __construct()
    {
        $this->file = "student_ui.php";
        $this->studentService = new StudentService();
    }

}