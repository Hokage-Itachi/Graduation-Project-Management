<?php
class TaskQuery
{

    const SELECT_BY_ID = "SELECT * FROM task WHERE id = '%s'";
    const SELECT_TASK = "SELECT * FROM task WHERE '%s'";
	const INSERT_TASK = "INSERT INTO task(phase_id, name, description,deadline) VALUES ('%s','%s','%s','%s')";
	const UPDATE_TASK = "UPDATE task SET id='%s',phase_id='%s',name='%s',description='%s',deadline='%s' WHERE '%s'";
	const DELETE_TASK = "DELETE FROM task WHERE '%s'";
}
