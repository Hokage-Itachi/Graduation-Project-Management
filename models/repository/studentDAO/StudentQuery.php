<?php
class StudentQuery
{

    const SELECT_BY_ID = "SELECT * FROM student WHERE student_id = '%s'";
    const COUNT_ROW_NUM = "SELECT COUNT(*) AS row_num FROM student";
    const SELECT_ALL = "SELECT * FROM student";
    const SELECT_STUDENT = "SELECT * FROM student WHERE '%s'";
	const INSERT_STUDENT = "INSERT INTO student(user_id, class, student_id,Level, Program, faculty) VALUES ('%s','%s','%s','%s','%s','%s')";
	const UPDATE_STUDENT = "UPDATE student SET id = '%s',user_id='%s',class='%s',student_id='%s',Level='%s',Program='%s', faculty= '%s' WHERE  '%s'";
	const DELETE_STUDENT = "DELETE FROM student WHERE '%s'";
}
