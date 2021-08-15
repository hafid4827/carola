<?php 
include('db.php');
$conexion = $base->query("SELECT * FROM text_general");
$edit_text = $conexion->fetchAll(PDO::FETCH_OBJ);
?>
 