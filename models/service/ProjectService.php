<?php
require_once('./models/repository/projectDAO/ProjectDAO.php');
require_once('./models/entity/Project.php');

class ProjectService
{
    private $projectDAO;

    public function __construct()
    {
        $this->projectDAO = new ProjectDAO();
    }

    public function findByID($project_id)
    {
        $result = $this->projectDAO->findByID($project_id);
        if ($result) {
            $project = new Project($result['id'], $result['name'], $result['completed'], $result['branch_id'], $result['point'], $result['curriculum'], $result['faculty'], $result['presentation_day'], $result['student_id'], $result['teacher_id']);
            $project->setContent($result['content']);
            return $project;
        } else {
            return null;
        }
    }

    public function findByName($name): ?array
    {
        $result = $this->projectDAO->findByName($name);
        $list_project = array();
        if ($result) {
            for ($i = 0; $i < count($result); $i++) {
                $project = new Project($result[$i]['id'], $result[$i]['name'], $result[$i]['completed'], $result[$i]['branch_id'], $result[$i]['point'], $result[$i]['curriculum'], $result[$i]['faculty'], $result[$i]['presentation_day'], $result[$i]['student_id'], $result[$i]['teacher_id']);
                // $project = new Project($result[$i]['id'], $result[$i]['name'], $result[$i]['completed'], $result[$i]['branch_id'], $result[$i]['point'], $result[$i]['curriculum'], $result[$i]['faculty'], $result[$i]['presentation_day']);
                $project->setContent($result[$i]['content']);
                $list_project[$i] = $project;
            }
            return $list_project;
        } else {
            return null;
        }
    }

    public function findByStatus($status): ?array
    {
        $result = $this->projectDAO->findByStatus($status);
        $list_project = array();
        if ($result) {
            for ($i = 0; $i < count($result); $i++) {
                $project = new Project($result[$i]['id'], $result[$i]['name'], $result[$i]['completed'], $result[$i]['branch_id'], $result[$i]['point'], $result[$i]['curriculum'], $result[$i]['faculty'], $result[$i]['presentation_day'], $result[$i]['student_id'], $result[$i]['teacher_id']);
                // $project = new Project($result[$i]['id'], $result[$i]['name'], $result[$i]['completed'], $result[$i]['branch_id'], $result[$i]['point'], $result[$i]['curriculum'], $result[$i]['faculty'], $result[$i]['presentation_day']);
                $project->setContent($result[$i]['content']);
                $list_project[$i] = $project;
            }
            return $list_project;
        } else {
            return null;
        }
    }

    public function findByBranch($branch): ?array
    {
        $result = $this->projectDAO->findByBranch($branch);
        $list_project = array();
        if ($result) {
            for ($i = 0; $i < count($result); $i++) {
                // $project = new Project($result[$i]['id'], $result[$i]['name'], $result[$i]['completed'], $result[$i]['branch_id'], $result[$i]['point'], $result[$i]['curriculum'], $result[$i]['faculty'], $result[$i]['presentation_day'], $result[$i]['student_id'], $result[$i]['teacher_id']);
                $project = new Project($result[$i]['id'], $result[$i]['name'], $result[$i]['completed'], $result[$i]['branch_id'], $result[$i]['point'], $result[$i]['curriculum'], $result[$i]['faculty'], $result[$i]['presentation_day'], $result[$i]['student_id'], $result[$i]['teacher_id']);
                $project->setContent($result[$i]['content']);
                $list_project[$i] = $project;
            }
            return $list_project;
        } else {
            return null;
        }
    }

    public function getAll(): ?array
    {
        $result = $this->projectDAO->getAll();
        $list_project = array();
        if ($result) {
            for ($i = 0; $i < count($result); $i++) {
                $project = new Project($result[$i]['id'], $result[$i]['name'], $result[$i]['completed'], $result[$i]['branch_id'], $result[$i]['point'], $result[$i]['curriculum'], $result[$i]['faculty'], $result[$i]['presentation_day'], $result[$i]['student_id'], $result[$i]['teacher_id']);
                $project->setContent($result[$i]['content']);
                $list_project[$i] = $project;

            }
            return $list_project;
        } else {
            return null;
        }
    }



    public function getProjectNumber()
    {
        $result = $this->projectDAO->getRowNumber();
        if ($result) {
            $row_num = $result['row_num'];
            return $row_num;
        } else {
            return null;
        }
    }

    public function insert($name, $completed, $branch_id, $point, $curriculum, $faculty, $student_id, $teacher_id)
    {
        $result = $this->projectDAO->insert($name, $completed, $branch_id,$point, $curriculum, $faculty, $student_id, $teacher_id);
//        error_log($result);
    }

    public function updateContent($content, $id){
        return $result = $this->projectDAO->updateContent($content, $id);
    }

    public function updateComplete($id, $status){
        $result = $this->projectDAO->updateComplete($id, $status);
        if($result == "Success"){
            error_log("Project ".$id." completed");
        } else {
            error_log($result);
        }
    }

    public function updatePoint($id, $point){
        $result = $this->projectDAO->updatePoint($id, $point);
        if($result == "Success"){
            error_log("Project ".$id." completed");
        } else {
            error_log($result);
        }
    }


}
