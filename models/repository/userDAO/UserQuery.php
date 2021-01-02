<?php
class UserQuery
{
	//user
	const SELECT_ALL = "SELECT * FROM user where role_id != '1'";
	const SELECT_BY_ID = "SELECT * FROM user WHERE id = '%s'";
	const SELECT_INACTIVE_USER = "SELECT * FROM user where active = '0'";
	const INSERT_USER = "INSERT INTO user(email, pass_hashed, name, phone_number, role_id, active) VALUES ('%s','%s','%s','%s','%s', '1')";
	const UPDATE_USER = "UPDATE user SET name = '%s',email = '%s',phone_number= '%s', pass_hashed = '%s' where id = '%s'";
	const DELETE_USER = "UPDATE user SET active = '0' WHERE id = %s";
	const SELECT_BY_EMAIL = "SELECT * FROM user WHERE email ='%s'";
	const UPDATE_PASSWORD = "UPDATE user SET pass_hashed = '%s' WHERE id = '%s'";
	const ACTIVE_USER = "UPDATE user set active = '1' WHERE id ='%s'";
    const UPDATE_AVATAR = "UPDATE user SET avatar = '%s' WHERE id = '%s'";
}
