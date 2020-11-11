<?php
class UserQuery 
{
	//user
	const SELECT_USER= "SELECT * FROM user WHERE '%s'";
	const INSER_USER = "INSERT INTO user(email, pass_hashed, name, phone_number, role_id) VALUES (%s','%s','%s','%s','%s')";
	const UPDATE_USER= "UPDATE user SET id='%s',email='%s',pass_hashed='%s',name='%s',phone_number='%s',role_id='%s' WHERE '%s'";
	const DELETE_USER= "DELETE FROM user WHERE '%s'";
    const SELECT_BY_EMAIL = "SELECT * FROM user WHERE email ='%s'";
    const UPDATE_PASSWORD = "UPDATE user SET pass_hashed = '%s' WHERE email = '%s'";
	// student
	// const SELECT_STUDENT = "SELECT * FROM student WHERE '%s'";
	// const INSERT_STUDENT = "INSERT INTO student(id, user_id, class, student_id,Level, Program, faculty) VALUES ('%s','%s','%s','%s','%s','%s','%s')";
	// const UPDATE_STUDENT = "UPDATE student SET id = '%s',user_id='%s',class='%s',student_id='%s',Level='%s',Program='%s', faculty= '%s' WHERE  '%s'";
	// const DELETE_STUDENT = "DELETE FROM student WHERE '%s'";
	// //teacher
	// const SELECT_TEACHER = "SELECT * FROM teacher WHERE '%s'";
	// const INSERT_TEACHER = "INSERT INTO teacher(id, user_id,introduction, Level, Workplace) VALUES ('%s','%s','%s','%s','%s')";
	// const UPDATE_TEACHER = "UPDATE teacher SET id = '%s',user_id='%s',introduction='%s',Level='%s',Workplace='%s' WHERE  '%s'";
	// const DELETE_TEACHER = "DELETE FROM teacher WHERE '%s'";
	// //teacher_branch
	// const SELECT_TEACHER_BRANCH = "SELECT * FROM teacher_branch WHERE '%s'";
	// const INSERT_TEACHER_BRANCH = "INSERT INTO teacher_branch(id,branch_id,teacher_id) VALUES ('%s','%s','%s')";
	// const UPDATE_TEACHER_BRANCH = "UPDATE teacher_branch SET id = '%s',branch_id = '%s' , teacher_id ='%s'";
	// const DELETE_TEACHER_BRANCH = "DELETE FROM teacher_branch WHERE '%s'";
	//user
	// const SELECT_USER= "SELECT * FROM user WHERE '%s'";
	// const INSER_USER = "INSERT INTO user(id, email, pass_hashed, name, phone_number, role_id) VALUES ('%s','%s','%s','%s','%s','%s')";
	// const UPDATE_USER= "UPDATE user SET id='%s',email='%s',pass_hashed='%s',name='%s',phone_number='%s',role_id='%s' WHERE '%s'";
	// const DELETE_USER= "DELETE FROM user WHERE '%s'";
	//task
	// const SELECT_TASK = "SELECT * FROM task WHERE '%s'";
	// const INSERT_TASK = "INSERT INTO task(id, phase_id, name, description,deadline) VALUES ('%s','%s','%s','%s','%s')";
	// const UPDATE_TASK = "UPDATE task SET id='%s',phae_id='%s',name='%s',description='%s',deadline='%s' WHERE '%s'";
	// const DELETE_TASK = "DELETE FROM task WHERE '%s'";
	// //role
	// const SELECT_ROLE = "SELECT * FROM `role` WHERE '%s'";
	// const INSERT_ROLE = "INSERT INTO role(id, name) VALUES ('%s','%s')";
	// const UPDATE_ROLE = "UPDATE role SET id='%s',name='%s' WHERE '%s'";
	// const DELETE_ROLE = "DELETE FROM role WHERE '%s'";
	// //project
	// const SELECT_PROJECT = "SELECT * FROM project WHERE '%s'";
	// const INSERT_PROJECT = "INSERT INTO project(id, name, completed, branch_id, result, point) VALUES ('%s','%s','%s','%s','%s','%s')";
	// const UPDATE_PROJECT = "UPDATE project SET id ='%s',name= '%s' ,completed= '%s',branch_id= '%s',result= '%s',point= '%s'  WHERE '%s'";
	// const DELETE_PROJECT = "DELETE FROM project WHERE '%s'";
	
	// //project_assignment
	// const SELECT_PROJECT_ASSIGNMENT = "SELECT * FROM project_assignment WHERE '%s'";
	// const INSERT_PROJECT_ASSIGNMENT = "INSERT INTO project_assignment(id,project_id,student_id,teacher_id,day of protection) VALUES ('%s','%s','%s','%s','%s')";										
	// const UPDATE_PROJECT_ASSIGNMENT = "UPDATE project_assignment SET id ='%s',project_id= '%s' ,student_id= '%s',teacher_id= '%s',day of protection= '%s'  WHERE '%s'";
	// const DELETE_PROJECT_ASSIGNMENT = "DELETE FROM project_assignment WHERE '%s'";
	
	// //post
	// const SELECT_POST = "SELECT * FROM post WHERE '%s'";
	// const INSERT_POST = "INSERT INTO post(id, content, created_at, user_id, project_id, title) VALUES ('%s','%s','%s','%s','%s','%s')";
	// const UPDATE_POST = "UPDATE post SET id='%s',content='%s',created_at='%s',user_id='%s',project_id='%s',title = '%s' WHERE '%s'";
	// const DELETE_POST = "DELETE FROM post WHERE '%s'";
	
	// //phase
	// const SELECT_PHASE = "SELECT * FROM phase WHERE '%s'";
	// const INSERT_PHASE = "INSERT INTO phase(id, project_id, name, percent) VALUES ('%s','%s','%s','%s')";
	// const UPDATE_PHASE = "UPDATE phase SET id='%s',project_id='%s',name='%s',percent='%s' WHERE '%s'";
	// const DELETE_PHASE = "DELETE FROM phase WHERE '%s'";
	
}