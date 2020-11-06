<?php
require_once('./models/repository/branchDAO/BranchDAO.php');
require_once('./models/entity/Branch.php');

class BranchService
{
    private $branchDAO;

    public function __constructor()
    {
        $this->branchDAO = new BranchDAO();
    }

    public function findByID($branch_id)
    {
        $result = $this->branchDAO->findByID($branch_id);
        $branch = new Branch($result['id'], $result['name']);
        return $branch;
    }
}
