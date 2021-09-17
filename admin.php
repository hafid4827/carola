<?php
include('php/extract.php');
session_start();
if (!(isset($_SESSION['email']) && isset($_SESSION['password']))) {
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="static/css/index.css" />
    <link rel="stylesheet" href="static/INDIVIDUALES NECESARIOS/icons/css/fontello.css" />
    <link rel="stylesheet" href="static/css/AOS.css" />
    <link rel="shortcut icon" href="logo_carola_kah_icon.ico" type="image/x-icon">
</head>

<body>

    <a href="php/cierre.php" class="fixed position-top-left btn btn-color-1">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
            <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z" />
        </svg>
        salir
    </a>
    <div class="container120">
        <div class="container-form-admin">
            <div class="form-admin__items">
                <form action="php/updb.php" class="form-add-items" method="POST" enctype="multipart/form-data">
                    <label for="input-:file1" class="form-add__label-img">
                        <svg id="plusIcon" xmlns="http://www.w3.org/2000/svg" width="50" height="50" class="bi bi-plus-square" viewBox="0 0 16 16">
                            <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                        </svg>
                        <img id="visualizationIMG" src="" alt="">
                    </label>
                    <input name="upimg" accept="image/*" type="file" id="input-:file1" class="form-add__input-img">
                    <div class="form-section__two">
                        <label for="category" class="form-add__label-category">categoria</label>
                        <select name="category" id="category" class="form-add__category">
                            <option value="book">libros</option>
                            <option value="serie">series</option>
                            <option value="course">cursos</option>
                        </select>
                        <label for="title-element" class="form-add__label-title">titulo</label>
                        <input name="title" type="text" id="title-element" class="form-add__input-title">
                        <label for="form-add__label-textarea" class="form-add__label-textarea">informacion</label>
                        <textarea name="description" id="form-add__label-textarea" class="form-add__textarea"></textarea>
                        <input type="submit" name="upgeneral" class="btn btn-color-2" value="subir" style="border: none; cursor: pointer;">
                    </div>
                </form>
                <table class="table-add-items shadowNumberTen">


                    <thead class="table-row__thead">
                        <tr>
                            <th>titulo</th>
                            <th>categoria</th>
                            <th>eliminar</th>
                            <!-- <th>editar</th> -->
                        </tr>
                    </thead>
                    <tbody class="table-row__tbody">
                        <?php foreach ($contain as $containResult) : ?>
                            <tr>
                                <td><?php echo $containResult->title ?></td>
                                <td><?php echo $containResult->category ?></td>
                                <td id="" class="btn btn-color-2 btn-item__list"><a href="php/delete.php?id=<?php echo $containResult->id ?>">borrar</a></td>
                                <!-- <td class="btn btn-color-1 btn-item__list">editar</td> -->
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="container120">
        <div class="cont-heigth flex-general">
            <div class="cont-form-edit-admin">
                <form action="php/edit.php" method="post" class="">
                    <input class="camp-btn btn btn-color-1" type="submit" name="update_text_content_submit" value="Actualizar">
                    <div class="form-edit-admin">
                        <div class="">

                            <h4 class="">encabezado</h4>

                            <div class="camp-cont"><label class="camp-label" for="">encabezado</label><textarea class="camp-textarea" name="header" id="" cols="40" rows="3"></textarea></div>
                            <div class="camp-cont"><label class="camp-label" for="">quien soy titulo</label><textarea class="camp-textarea" name="who_I_am_title" id="" cols="40" rows="3"></textarea></div>
                            <div class="camp-cont"><label class="camp-label" for="">quien soy parrafo #1</label><textarea class="camp-textarea" name="who_I_am_paraph_one" id="" cols="40" rows="3"></textarea></div>
                            <div class="camp-cont"><label class="camp-label" for="">quien soy parrafo #2</label><textarea class="camp-textarea" name="who_I_am_paraph_two" id="" cols="40" rows="3"></textarea></div>
                            <div class="camp-cont"><label class="camp-label" for="">quien soy cita celebre</label><textarea class="camp-textarea" name="who_I_am_paraph_cite" id="" cols="40" rows="3"></textarea></div>
                            <div class="camp-cont"><label class="camp-label" for="">quien soy cita pequeña</label><textarea class="camp-textarea" name="who_I_am_paraph_cite_small" id="" cols="40" rows="3"></textarea></div>
                            <div class="camp-cont"><label class="camp-label" for="">quien soy nombre de la cita</label><textarea class="camp-textarea" name="who_I_am_paraph_cite_name" id="" cols="40" rows="3"></textarea></div>

                        </div>

                        <div class="">
                            <h4 class="">mis servicios</h4>

                            <div class="camp-cont"><label class="camp-label" for="">mis servicios titulo #1</label><textarea class="camp-textarea" name="my_services_title_one" id="" cols="40" rows="3"></textarea></div>
                            <div class="camp-cont"><label class="camp-label" for="">mis servicios descripcion #1</label><textarea class="camp-textarea" name="my_services_description_one" id="" cols="40" rows="3"></textarea></div>
                            <!-- <div class="camp-cont"><label class="camp-label" for="">mis servicios link #1</label><textarea class="camp-textarea" name="" id="" cols="40" rows="3"></textarea></div> -->

                            <div class="camp-cont"><label class="camp-label" for="">mis servicios titulo #2</label><textarea class="camp-textarea" name="my_services_title_two" id="" cols="40" rows="3"></textarea></div>
                            <div class="camp-cont"><label class="camp-label" for="">mis servicios descripcion #2</label><textarea class="camp-textarea" name="my_services_description_two" id="" cols="40" rows="3"></textarea></div>
                            <!-- <div class="camp-cont"><label class="camp-label" for="">mis servicios link #2</label><textarea class="camp-textarea" name="my_services_description_three" id="" cols="40" rows="3"></textarea></div> -->

                            <div class="camp-cont"><label class="camp-label" for="">mis servicios titulo #3</label><textarea class="camp-textarea" name="my_services_title_three" id="" cols="40" rows="3"></textarea></div>
                            <div class="camp-cont"><label class="camp-label" for="">mis servicios descripcion #3</label><textarea class="camp-textarea" name="my_services_description_three" id="" cols="40" rows="3"></textarea></div>
                            <!-- <div class="camp-cont"><label class="camp-label" for="">mis servicios link #3</label><textarea class="camp-textarea" name="" id="" cols="40" rows="3"></textarea></div> -->

                        </div>

                        <div class="">

                            <h4 class="">titulos de section</h4>

                            <div class="camp-cont"><label class="camp-label" for="">te lo recomiendo</label><textarea class="camp-textarea" name="title_section_recommend_you" id="" cols="40" rows="3"></textarea></div>
                            <div class="camp-cont"><label class="camp-label" for="">quien soy</label><textarea class="camp-textarea" name="title_section_my_services" id="" cols="40" rows="3"></textarea></div>
                            <div class="camp-cont"><label class="camp-label" for="">mis servicios</label><textarea class="camp-textarea" name="title_section_I_am" id="" cols="40" rows="3"></textarea></div>

                            <h4 class="">titulos te lo recomiendo</h4>

                            <div class="camp-cont">libros<label class="camp-label" for="">contacatame</label><textarea class="camp-textarea" name="title_recommended_one" id="" cols="40" rows="3"></textarea></div>
                            <div class="camp-cont">series<label class="camp-label" for="">contacatame</label><textarea class="camp-textarea" name="title_recommended_two" id="" cols="40" rows="3"></textarea></div>
                            <div class="camp-cont">cursos<label class="camp-label" for="">contacatame</label><textarea class="camp-textarea" name="title_recomended_three" id="" cols="40" rows="3"></textarea></div>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="static/js/visualimg.js"></script>
    <script src="static/js/AOS.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="static/js/home.js"></script>
</body>

</html>