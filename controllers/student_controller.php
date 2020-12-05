<?php
include_once("./controllers/base_controller.php");
include_once("./models/service/StudentService.php");

class StudentController extends BaseController{
    private $studentService;

    public function __construct()
    {
        $this->file = "signup.php";
        $this->studentService = new StudentService();
    }

}