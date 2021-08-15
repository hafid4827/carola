<?php
include('db.php');
session_start();
if (!(isset($_SESSION['email']) && isset($_SESSION['password']))) {
    header('location:login.php');
}
$sql = "DELETE FROM for_you WHERE id='" . $_GET["id"] . "'";
$base->exec($sql);
header("location:../admin.php");
?>

