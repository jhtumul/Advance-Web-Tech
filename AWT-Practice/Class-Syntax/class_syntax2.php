<?php

    // class Greeting
    // {
    //     public static $course = "ADV. WEB";
    //     public static function welcome()
    //     {
    //         echo "Hello World";
    //     }
    // }

    // Greeting::welcome();
    // echo Greeting::$course;

    class Greeting
    {
        public static $course = "ADV. WEB";
        public static function welcome()
        {
            echo "Hello World";
        }
        public function __construct()
        {
            self::welcome();
            echo Greeting::$course;
        }
    }

    new Greeting();

?>