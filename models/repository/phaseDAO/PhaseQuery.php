<?php
class PhaseQuery {
    const SELECT_ALL = "SELECT * FROM phase";
    const SELECT_BY_PROJECT_ID = "SELECT * FROM phase WHERE project_id = '%s'";
    const SELECT_BY_ID = "SELECT * FROM phase WHERE id = '%s'";
    const INSERT = "INSERT INTO phase (project_id, name) VALUE ('%s', '%s')";

}