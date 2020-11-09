<?php
class ProjectAssignmentQuery{
    const SELECT_BY_PROJECT_ID = "SELECT student_id, teacher_id FROM project_assignment WHERE project_id = '%s'";
    const INSERT = "INSERT INTO project_assignment (project_id, student_id, teacher_id) VALUE ('%u', '%u', '%u')";
}