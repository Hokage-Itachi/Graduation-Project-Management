<?php
class TeacherQuery
{

    const SELECT_BY_ID = "SELECT teacher.*, user.email, user.pass_hashed, user.name, user.phone_number, user.role_id, user.avatar, user.active
						FROM teacher, user
						WHERE teacher.user_id = user.id and teacher.id = '%s'";
	const SELECT_ALL = "SELECT teacher.*, user.email, user.pass_hashed, user.name, user.phone_number, user.role_id, user.avatar, user.active
						FROM teacher, user
						WHERE teacher.user_id = user.id and user.active = '1'";
	const SELECT_BY_USER_ID = "SELECT teacher.*, user.email, user.pass_hashed, user.name, user.phone_number, user.role_id, user.avatar, user.active
						FROM teacher, user
						WHERE teacher.user_id = user.id and teacher.user_id = '%s'";
	const INSERT_TEACHER = "INSERT INTO teacher(user_id,degree, work_place, academic_rank, branch_id) VALUES ('%s','%s','%s','%s', '%s')";
	const UPDATE_TEACHER = "UPDATE teacher SET degree='%s',workplace='%s',academic_rank='%s', branch_id = '%s' WHERE user_id='%s'";
	const DELETE_TEACHER = "DELETE FROM teacher WHERE '%s'";
}
