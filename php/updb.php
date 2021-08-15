<?php

session_start();
if (!(isset($_SESSION['email']) && isset($_SESSION['password']))) {
    header('location:login.php');
}
include('db.php');
if (isset($_POST['upgeneral'])) {
    $upimg = $_FILES['upimg']['name'];
    if (isset($upimg) && $upimg != "") {
        $tipo = $_FILES['upimg']['type'];
        $tamano = $_FILES['upimg']['size'];
        $temp = $_FILES['upimg']['tmp_name'];
        if (!((strpos($tipo, "gif") || strpos($tipo, "jpeg") || strpos($tipo, "jpg") || strpos($tipo, "png")) && ($tamano < 2000000))) {
            echo '<div><b>Error. La extensión o el tamaño de los upimgs no es correcta.<br/>
            - Se permiten upimgs .gif, .jpg, .png. y de 200 kb como máximo.</b></div>';
        } else {
            if (move_uploaded_file($temp, '../static/INDIVIDUALES NECESARIOS/' . $upimg)) {
                chmod('../static/INDIVIDUALES NECESARIOS/' . $upimg, 0777);
            } else {
                echo '<div><b>Ocurrió algún error al subir el fichero. No pudo guardarse.</b></div>';
                echo '<a href="admin"><b>Ocurrió algún error al subir el fichero. No pudo guardarse. De Click Aqui Para Volver</b></a>';
            }
        }
    }
    $img_url = $upimg;
    $title = $_POST['title'];
    $category = $_POST['category'];
    $description = $_POST['description'];
    $my_Insert_Statement = $base->prepare("INSERT INTO for_you (category, img_url, title, description) VALUES (:category, :img_url, :title, :description)");
    $my_Insert_Statement->bindParam(":category", $category);
    $my_Insert_Statement->bindParam(":img_url", $img_url);
    $my_Insert_Statement->bindParam(":title", $title);
    $my_Insert_Statement->bindParam(":description", $description);
    $my_Insert_Statement->execute();
    header('location:../admin.php');
}
?>