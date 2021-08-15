<?php
include('db.php');
try {
    $array_post_email = $_POST["email"];
    $array_post_pass = hash('sha3-256', $_POST["password"]);
    $sql = "SELECT * FROM admin WHERE email = :email AND password = :password";
    $result = $base->prepare($sql);
    $email = htmlentities(addslashes($array_post_email));
    $password = htmlentities(addslashes($array_post_pass));
    $result->bindValue(":email", $email);
    $result->bindValue(":password", $password);
    $result->execute();
    $number_register = $result->rowCount();
    if ($number_register != 0) {
        // inicia session
        session_start();
        // super global session
        $_SESSION["email"] = $array_post_email;
        $_SESSION["password"] = $array_post_pass;
        // redirige al admin de ser a si
        header("location:../admin.php");
    } else {
        header("location:../login.php");
    }
} catch (PDOException $e) {
    die('Conexion Fallida:' . $e->getMessage());
}
