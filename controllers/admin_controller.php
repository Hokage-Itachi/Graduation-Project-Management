<?php

class AdminController extends BaseController
{
    public function __construct()
    {
    }

    public function renderStudentPage()
    {
        $this->file = "admin/admin_student.html";
        $path = './views/' . $this->file;
        include_once($path);
    }

    public function renderTeacherPage()
    {
        $this->file = "admin/admin_teacher.html";
        $path = './views/' . $this->file;
        include_once($path);
    }
}