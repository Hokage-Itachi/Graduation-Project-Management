<?php
class CommentQuery{
    const SELECT_ALL = "SELECT * FROM comment";
    const SELECT_BY_ID = "SELECT * FROM comment WHERE id='%s'";
    const SELECT_BY_POST_ID = "SELECT * FROM comment WHERE post_id = '%s'";
    const INSERT = "INSERT INTO comment(content, created_at, post_id, user_id) VALUE ('%s', timestamp('%s'), '%s', '%s')";
}