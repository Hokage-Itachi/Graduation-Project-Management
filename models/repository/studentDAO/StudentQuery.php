<?php
class StudentQuery
{

    const SELECT_BY_ID = "SELECT * FROM student WHERE student_id = '%s'";
    const COUNT_ROW_NUM = "SELECT COUNT(*) AS row_num FROM student";
    const SELECT_ALL = "SELECT * FROM student";
}
