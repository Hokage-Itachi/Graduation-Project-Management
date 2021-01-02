<?php
class TaskQuery
{

    const SELECT_BY_ID = "SELECT * FROM task WHERE id = '%s'";
	const INSERT_TASK = "INSERT INTO task(phase_id, name, description, deadline, status) VALUES ('%s','%s','%s',timestamp('%s'), '0')";
	const UPDATE_TASK = "UPDATE task SET name='%s',description='%s',deadline=timestamp('%s'), status='%s' WHERE id = '%s'";
	const DELETE_TASK = "DELETE FROM task WHERE id = '%s'";
	const SELECT_BY_PHASE_ID = "SELECT * FROM task WHERE phase_id = '%s'";
}
