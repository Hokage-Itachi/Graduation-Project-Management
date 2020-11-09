<?php
class Test
{
    private static $ins;
    static $a = "abc";
    private final function __construct()
    {
        echo __CLASS__ . "initialized\n";
        error_log("Created");

    }

    public static function getInstance()
    {
        if (!isset(self::$ins)) {
            // error_log("Here");
            self::$ins = new Test();
        }
        return self::$ins;
    }

    public static function setA($a)
    {
        self::$a = $a;
    }
}

$o1 = Test::getInstance();
Test::setA("Hello");
$v = Test::$a;
echo "$v \n";
$o2 = Test::getInstance();
$v = Test::$a;
echo "$v \n";
echo ($o1 === $o2);
