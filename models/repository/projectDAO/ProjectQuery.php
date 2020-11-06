<?php
class ProjectQuery
{

    const SELECT_BY_ID = "SELECT * FROM project WHERE id = '%s'";
    const SELECT_BY_NAME = "SELECT * FROM project WHERE name = '%s'";
    const SELECT_BY_STATUS = "SELECT * FROM project WHERE completed = '%s'";
    const SELECT_BY_BRANCH = "SELECT * FROM project WHERE branch_id = '%s'";
    const INSERT = "INSERT INTO project (name, completed, branch_id, point, curriculum, faculty, presentation_day) VALUE('%s', '%s', '%s', '%f', '%s', '%s','%s')";
    const SELECT_ALL = "SELECT project.*, project_assignment.student_id
                        AS student_id, project_assignment.teacher_id
                        AS teacher_id
                        FROM project, project_assignment
                        WHERE project.id = project_assignment.project_id";
    const COUNT_ROW_NUM = "SELECT COUNT(*) AS row_num FROM project";
}
