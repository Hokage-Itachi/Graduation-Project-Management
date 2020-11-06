<?php
include_once('./models/repository/branchDAO/BranchQuery.php');
class BranchDAO
{
    public function findByID($branch_id)
    {
        $db = DB::getInstance();
        $sql = sprintf(BranchQuery::SELECT_BY_ID, $branch_id);

        $result = $db->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                return $row;
            }
        } else {
            return null;
        }
    }
}
