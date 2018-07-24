<?php 
class Index {

    private static $index = 0;
    public function __construct() {

    }

    public static function index() {
        return self::$index;
    }
}