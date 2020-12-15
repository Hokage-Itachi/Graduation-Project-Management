<?php
include_once('./models/repository/branchDAO/BranchQuery.php');
class BranchDAO
{
    public function findByID($branch_id): ?array
    {
        $db = DB::getInstance();
        $sql = sprintf(BranchQuery::SELECT_BY_ID, $branch_id);

        $result = $db->query($sql);
        $db->close();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                return $row;
            }
        } else {
            return null;
        }
    }

    public function getAll(): ?array
    {
        $db = DB::getInstance();
        $sql = sprintf(BranchQuery::SELECT_ALL);
        $rows = array();
        $result = $db->query($sql);
        $i = 0;
        $db->close();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $rows[$i] = $row;
                $i++;
            }
            return $rows;
        } else {
            return null;
        }
    }
}
