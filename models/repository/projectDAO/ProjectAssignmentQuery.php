<?php
class ProjectAssignmentQuery{
    const SELECT_BY_PROJECT_ID = "SELECT student_id, teacher_id FROM project_assignment WHERE project_id = '%s'";
    const INSERT = "INSERT INTO project_assignment (project_id, student_id, teacher_id) VALUE ('%u', '%u', '%u')";
    const SELECT_PROJECT_ASSIGNMENT = "SELECT * FROM project_assignment WHERE '%s'";
	const INSERT_PROJECT_ASSIGNMENT = "INSERT INTO project_assignment(id,project_id,student_id,teacher_id,day of protection) VALUES ('%s','%s','%s','%s','%s')";										
	const UPDATE_PROJECT_ASSIGNMENT = "UPDATE project_assignment SET id ='%s',project_id= '%s' ,student_id= '%s',teacher_id= '%s',day of protection= '%s'  WHERE '%s'";
	const DELETE_PROJECT_ASSIGNMENT = "DELETE FROM project_assignment WHERE '%s'";
}