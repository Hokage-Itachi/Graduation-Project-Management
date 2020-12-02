<?php
class TeacherQuery
{

    const SELECT_BY_ID = "SELECT teacher.*, user.*
						FROM teacher, user
						WHERE teacher.user_id = user.id and teacher.id = '%s'";
	const SELECT_ALL = "SELECT teacher.*, user.*
						FROM teacher, user
						WHERE teacher.user_id = user.id";
    const SELECT_TEACHER = "SELECT * FROM teacher WHERE '%s'";
	const INSERT_TEACHER = "INSERT INTO teacher(user_id,introduction, Level, Workplace) VALUES ('%s','%s','%s','%s')";
	const UPDATE_TEACHER = "UPDATE teacher SET id = '%s',user_id='%s',introduction='%s',Level='%s',Workplace='%s' WHERE  '%s'";
	const DELETE_TEACHER = "DELETE FROM teacher WHERE '%s'";
}
