<?php
class PostQuery
{

    const SELECT_BY_ID = "SELECT * FROM post WHERE id = '%s'";
    const SELECT_POST = "SELECT * FROM post WHERE '%s'";
	const INSERT_POST = "INSERT INTO post(content, created_at, user_id, project_id, title) VALUES ('%s','%s','%s','%s','%s')";
	const UPDATE_POST = "UPDATE post SET id='%s',content='%s',created_at='%s',user_id='%s',project_id='%s',title = '%s' WHERE '%s'";
	const DELETE_POST = "DELETE FROM post WHERE '%s'";
}
