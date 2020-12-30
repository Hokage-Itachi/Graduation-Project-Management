<?php
require_once('./models/repository/userDAO/UserDAO.php');
require_once('./models/entity/User.php');
class UserService
{
    private $userDAO;

    public function __construct()
    {
        $this->userDAO = new UserDAO();
    }
    public function findByEmail($email)
    {
        $result = $this->userDAO->findByEmail($email);
        if ($result) {
            $user = new User($result['id'], $result["email"], $result["pass_hashed"], $result["name"], $result["phone_number"], $result["role_id"], $result["active"]);
            return $user;
        } else {
            return null;
        }
    }

    public function findByID($user_id)
    {
        $result = $this->userDAO->findByID($user_id);
        if ($result) {
            $user = new User($result['id'], $result["email"], $result["pass_hashed"], $result["name"], $result["phone_number"], $result["role_id"], $result["active"]);

            return $user;
        } else {
            return null;
        }
    }
    public function getAllUser()
    {
        $results = $this->userDAO->getAll();
        $users = array();
        $i = 0;
        if ($results) {
            foreach ($results as $result) {
                $user = new User($result['id'], $result["email"], $result["pass_hashed"], $result["name"], $result["phone_number"], $result["role_id"], $result["active"]);
                $users[$i] = $user;
                $i++;
            }
            return $users;
        } else {
            return null;
        }
    }

    public function updateUser($id, $email, $name, $pass_hashed)
    {
        $result = $this->userDAO->update($id, $email, $name, $pass_hashed);
        error_log($result);
    }

    public function deleteUser($id)
    {
        $result = $this->userDAO->delete($id);
        error_log($result);
    }

    public function insertUser($email, $pass_hashed, $name, $phone_number, $role_id)
    {
        $result = $this->userDAO->insert($email, $pass_hashed, $name, $phone_number, $role_id);
        error_log($result);
    }

    public function getInActiveUser(){
        $result = $this->userDAO->getInactiveUser();
        if ($result) {
            $user = new User($result['id'], $result["email"], $result["pass_hashed"], $result["name"], $result["phone_number"], $result["role_id"], $result["active"]);

            return $user;
        } else {
            return null;
        }
    }

    public function activeUser($id){
        $result = $this->userDAO->activeUser($id);
    }
}
