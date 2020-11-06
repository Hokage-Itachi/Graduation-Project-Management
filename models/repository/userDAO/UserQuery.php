<?php
class UserQuery
{
    const SELECT_BY_EMAIL = "SELECT * FROM user WHERE email ='%s'";
    const UPDATE_PASSWORD = "UPDATE user SET pass_hashed = '%s' WHERE email = '%s'";
}
