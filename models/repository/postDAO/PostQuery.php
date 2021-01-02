<?php
class PostQuery
{

    const SELECT_BY_ID = "SELECT * FROM post WHERE id = '%s'";
    const SELECT_ALL = "SELECT * FROM post WHERE '%s'";
    const SELECT_BY_PROJECT_ID = "SELECT * FROM post WHERE project_id = '%s'";
	const INSERT_POST = "INSERT INTO post(content, created_at, user_id, project_id) VALUES ('%s',timestamp('%s'),'%s','%s')";
	const UPDATE_POST = "UPDATE post SET content='%s',created_at=timestamp('%s'),user_id='%s',project_id='%s',title = '%s' WHERE '%s'";
	const DELETE_POST = "DELETE FROM post WHERE '%s'";
}
