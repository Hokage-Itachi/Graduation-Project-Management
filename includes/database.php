<?php

class DB
{
    private static $instance = null;

    public static function getInstance()
    {
        self::$instance = new mysqli("localhost", 'gpms', 'gpms', 'gpms_schema');
        if (self::$instance) {
            return self::$instance;
        } else {
            die("Connection failed: " . self::$instance->connect_error);
        }
    }
}
