<?php
session_start();
if (!(isset($_SESSION['email']) && isset($_SESSION['password']))) {
    header('location:login.php');
}

echo "hola mundo";
include('db.php');
if (isset($_POST['update_text_content_submit'])) {

    $array_post = [
        "header" => $_POST['header'],
        "who_I_am_title" => $_POST['who_I_am_title'],
        "who_I_am_paraph_one" => $_POST['who_I_am_paraph_one'],
        "who_I_am_paraph_two" => $_POST['who_I_am_paraph_two'],
        "who_I_am_paraph_cite" => $_POST['who_I_am_paraph_cite'],
        "who_I_am_paraph_cite_small" => $_POST['who_I_am_paraph_cite_small'],
        "who_I_am_paraph_cite_name" => $_POST['who_I_am_paraph_cite_name'],

        "my_services_title_one" => $_POST['my_services_title_one'],
        "my_services_title_two" => $_POST['my_services_title_two'],
        "my_services_title_three" => $_POST['my_services_title_three'],
        "my_services_description_one" => $_POST['my_services_description_one'],
        "my_services_description_two" => $_POST['my_services_description_two'],
        "my_services_description_three" => $_POST['my_services_description_three'],

        "title_section_recommend_you" => $_POST['title_section_recommend_you'],
        "title_section_my_services" => $_POST['title_section_my_services'],
        "title_section_I_am" => $_POST['title_section_I_am'],

        "title_recommended_one" => $_POST['title_recommended_one'],
        "title_recommended_two" => $_POST['title_recommended_two'],
        "title_recomended_three" => $_POST['title_recomended_three'],
    ];

    // print_r(array_keys($array_post));
    foreach (array_keys($array_post) as $i) {
        if ($array_post[$i] != '') {
            $_ = $array_post[$i];
            $string_prepare = "UPDATE text_general SET $i =  '$_' WHERE id = 1;";
            $update = $base->prepare($string_prepare);
            $update->bindParam(":$i", $i);
            $update->execute();
        }
    }
    header("location:../admin.php");
}
