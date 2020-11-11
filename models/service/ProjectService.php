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
            $project = new Project($result['id'], $result['name'], $result['completed'], $result['branch_id'], $result['point'], $result['curriculum'], $result['faculty'], $result['presentation_day']);
            return $project;
        } else {
            return null;
        }
    }

    public function findByName($name)
    {
        $result = $this->projectDAO->findByName($name);
        if ($result) {
            // $project = new Project($result['id'], $result['name'], $result['completed'], $result['branch_id'], $result['point'], $result['curriculum'], $result['faculty'], $result['presentation_day'], $result['student_id'], $result['teacher_id']);
            $project = new Project($result['id'], $result['name'], $result['completed'], $result['branch_id'], $result['point'], $result['curriculum'], $result['faculty'], $result['presentation_day']);
            return $project;
        } else {
            return null;
        }
    }

    public function findByStatus($status)
    {
        $result = $this->projectDAO->findByStatus($status);
        $list_project = array();
        if ($result) {
            for ($i = 0; $i < count($result); $i++) {
                // $project = new Project($result[$i]['id'], $result[$i]['name'], $result[$i]['completed'], $result[$i]['branch_id'], $result[$i]['point'], $result[$i]['curriculum'], $result[$i]['faculty'], $result[$i]['presentation_day'], $result[$i]['student_id'], $result[$i]['teacher_id']);
                $project = new Project($result[$i]['id'], $result[$i]['name'], $result[$i]['completed'], $result[$i]['branch_id'], $result[$i]['point'], $result[$i]['curriculum'], $result[$i]['faculty'], $result[$i]['presentation_day']);

                $list_project[$i] = $project;
            }
            return $list_project;
        } else {
            return null;
        }
    }

    public function findByBranch($branch)
    {
        $result = $this->projectDAO->findByStatus($branch);
        $list_project = array();
        if ($result) {
            for ($i = 0; $i < count($result); $i++) {
                // $project = new Project($result[$i]['id'], $result[$i]['name'], $result[$i]['completed'], $result[$i]['branch_id'], $result[$i]['point'], $result[$i]['curriculum'], $result[$i]['faculty'], $result[$i]['presentation_day'], $result[$i]['student_id'], $result[$i]['teacher_id']);
                $project = new Project($result[$i]['id'], $result[$i]['name'], $result[$i]['completed'], $result[$i]['branch_id'], $result[$i]['point'], $result[$i]['curriculum'], $result[$i]['faculty'], $result[$i]['presentation_day']);

                $list_project[$i] = $project;
            }
            return $list_project;
        } else {
            return null;
        }
    }

    public function getAll()
    {
        $result = $this->projectDAO->getAll();
        $list_project = array();
        if ($result) {
            for ($i = 0; $i < count($result); $i++) {
                $project = new Project($result[$i]['id'], $result[$i]['name'], $result[$i]['completed'], $result[$i]['branch_id'], $result[$i]['point'], $result[$i]['curriculum'], $result[$i]['faculty'], $result[$i]['presentation_day']);
                $list_project[$i] = $project;
            }
            return $list_project;
        } else {
            return null;
        }
    }

    public function getProjectNumber()
    {
        $result = $this->projectDAO->getAll();
        if ($result) {
            $row_num = $result['row_num'];
            return $row_num;
        } else {
            return null;
        }
    }
}
