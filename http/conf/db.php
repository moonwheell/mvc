<?php

echo 'DB.php';

class DB
{
    const USER = "admin";
    const PASS = "admin";
    const HOST = "mysql";
    const DB = "mvc";

    public static function cnnnToDB()
    {
        $user = self::USER;
        $pass = self::PASS;
        $host = self::HOST;
        $db = self::DB;

        $conn = new PDO("mysql:dbname=$db;host=$host", $user, $pass);
        return $conn;

    }
}