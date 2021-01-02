<?php
class Formatter{
    public static function format_date($date, string $pattern){
        $date = date_create($date);
        return date_format($date, $pattern);
    }
}