<?php


class BranchQuery
{
    const SELECT_BY_ID = "SELECT * FROM branch WHERE id = '%s'";
    const DELETE_BRANCH = "DELETE FROM branch WHERE '%s'";
    const INSERT_BRANCH = "INSERT INTO branch(id, name) VALUES ('%s','%s')";
    const UPDATE_BRANCH = "UPDATE branch SET id='%s',name='%s' WHERE '%s'";
    
}