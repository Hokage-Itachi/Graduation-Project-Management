<?php

class DB
{
    private static $instance = null;

    public static function getInstance()
    {
        self::$instance = new mysqli("localhost", 'root', 'thanh123', 'gpms_schema');
        if (self::$instance) {
            return self::$instance;
        } else {
            die("Connection failed: " . self::$instance->connect_error);
        }
    }
}
