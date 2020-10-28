<?php

require_once("../../DataBase.php");

class BranchRepositoryImpl implements BranchRepository
{
    // Maybe use DI ? I don't know now!
    // TODO: check this
    private $db;

    public function __construct()
    {
        $db = DataBase::getInstance();
    }

    public function findBranchById($id)
    {
        // TODO: Implement findBranchById() method.
    }
}