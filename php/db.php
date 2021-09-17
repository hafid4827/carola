<?php
    $DBusername = 'root';
    $DBpassword = '';
    $server = 'localhost';
    $database = 'carola';
    try{
        $base = new PDO("mysql:host=$server;dbname=$database;", $DBusername, $DBpassword);
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        die('conexion fallida:'.$e->getMessage());
    }
?>