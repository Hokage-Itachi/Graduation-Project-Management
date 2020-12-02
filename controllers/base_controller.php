<?php
class BaseController
{

    protected $file;
    // protected static $message = "Not set";
    public function render($data)
    {
        $path = 'views/' . $this->file;
        // error_log(self::$message);
        // $message = self::$message;
        include_once($path);
    }

    // public static function setMessage($message)
    // {
    //     self::$message = $message;
    //     // error_log("Message is set");
    // }
    // public static function getMessage()
    // {
    //     return self::$message;
    // }
}
