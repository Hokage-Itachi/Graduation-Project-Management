<?php
include_once('models/repository/roleDAO/RoleDAO.php');
include_once('models/entity/Role.php');

class RoleService
{
    private $roleDAO;

    public function __construct()
    {
        $this->roleDAO = new RoleDAO();
    }

    public function findByID($id)
    {
        $result = $this->roleDAO->findByID($id);
        if ($result) {
            $role = new Role($result['id'], $result['name']);
            return $role;
        } else {
            return null;
        }
    }
}
