<?php

    session_start();

    header('Content-Type: text/html; charset=utf-8');

    $hostname = "localhost";
    $username = "root";
    $password = "210709";
    $dbname = "mariatestdb";
    $db = new mysqli($hostname, $username, $password, $dbname);
    $db -> set_charset("utf8");

    function query($query)
    {
        global $db;
        return $db->query($query);
    }

?>