<?php 
include('db.php');
$conexion = $base->query("SELECT * FROM for_you");
$contain = $conexion->fetchAll(PDO::FETCH_OBJ);
?>