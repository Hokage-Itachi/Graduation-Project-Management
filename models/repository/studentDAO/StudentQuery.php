<?php
class StudentQuery
{

    const SELECT_BY_ID = "SELECT student.*, user.email, user.pass_hashed, user.name, user.phone_number, user.role_id, user.avatar, user.active
                        FROM student, user
                        WHERE student.user_id = user.id AND student.id = '%s'";
    const SELECT_BY_STUDENT_ID = "SELECT student.*, user.email, user.pass_hashed, user.name, user.phone_number, user.role_id, user.avatar, user.active
                        FROM student, user
                        WHERE student.user_id = user.id AND student_id = '%s'";
    const SELECT_BY_USER_ID = "SELECT student.*, user.email, user.pass_hashed, user.name, user.phone_number, user.role_id, user.avatar, user.active
                        FROM student, user
                        WHERE student.user_id = user.id AND student.user_id = '%s'";
    const COUNT_ROW_NUM = "SELECT COUNT(*) AS row_num FROM student";
    const SELECT_ROW_ID = "SELECT student.id
                        FROM student
                        WHERE student.user_id = '%s'";
    const SELECT_ALL = "SELECT student.*, user.email, user.pass_hashed, user.name, user.phone_number, user.role_id, user.avatar, user.active
                        FROM student, user
                        WHERE student.user_id = user.id";
    const INSERT_STUDENT = "INSERT INTO student(user_id, class, student_id, year, branch_id) VALUES ('%s','%s','%s','%s','%s')";
    const UPDATE_STUDENT = "UPDATE student SET student_id = '%s',class='%s',year='%s', branch_id= '%s' WHERE user_id = '%s'";
    const DELETE_STUDENT = "DELETE FROM student WHERE student_id = '%s'";
}
