<?php
require_once('./models/repository/branchDAO/BranchDAO.php');
require_once('./models/entity/Branch.php');

class BranchService
{
    private $branchDAO;

    public function __construct()
    {
        $this->branchDAO = new BranchDAO();
    }

    public function findByID($branch_id): ?Branch
    {
        $result = $this->branchDAO->findByID($branch_id);
        if ($result) {
            $branch = new Branch($result['id'], $result['name']);
            return $branch;
        } else {
            return null;
        }
    }

    public function getAll(): ?array
    {
        $result = $this->branchDAO->getAll();
        $branches = array();
        $i = 0;
        if ($result) {
            foreach ($result as $row) {
                $branch = new Branch($row['id'], $row['name']);
                $branches[$i] = $branch;
                $i++;
            }
            return $branches;
        } else {
            return null;
        }
    }
}
