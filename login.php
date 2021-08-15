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
    <a href="index.php" class="fixed position-top-left btn btn-color-1">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
            <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z" />
        </svg>
        salir
    </a>
    <div class="father-login">
        <div class="login-cont shadowNumberTen">
            <h3 class="login-title">login</h3>
            <div class="center-auto">
                <img class="login-img" src="static//INDIVIDUALES NECESARIOS/LOGOS/LOGO CAROLA.png" alt="">
            </div>
            <form action="php/Logiclogin.php" method="post" class="form-login-panel">
                <label for="mail">correo:</label>
                <input type="mail" id="mail" name="email">
                <label for="pass">contraseña:</label>
                <input type="password" id="pass" name="password">
                <div class="cont-center">
                    <button class="btn btn-color-1">ingresar</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>