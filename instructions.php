<?php
require_once 'connect_db.php';

// insertar datos
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$select_sexo = $_POST['select_sexo'];
$date_age = $_POST['date'];
$select_grado = $_POST['select_grado'];
$colegio = $_POST['colegio'];
$fecha_test = date('d-m-Y');


$sql = "INSERT INTO   participante (nombres,apellidos,sexo,fecha_nacimiento,grado,colegio,fecha_creacion_test) 
VALUES ('$first_name','$last_name','$select_sexo','$date_age','$select_grado','$colegio','$fecha_test')";
$conn->query($sql);
// fin de insertar datos

if (!empty($_POST['first_name'])) {
    $first_name = $_POST['first_name'];
    if (!isset($_SESSION)) {
        // session isn't started
        session_start();
        $_SESSION['personal_data']['first_name'] = $first_name;
    } else {
        // @TODO: Maybe redirect to homepage if no session started?.
    }
}



?>


<!DOCTYPE HTML>


<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Test de Baron</title>
</head>

<body>
<div class="container-fluid instruccion">
    <div class="container d-flex flex-column justify-content-center h-200 text-black align-items-center  ">
        <?php if (!empty($_SESSION['personal_data'])): ?>
            <h1>INDICACIONES DEL TEST BARON</h1>
            <h2>Estimado <?php print $first_name; ?></h2>
            <p>Lee cada oración y elije una respuesta que mejor te describe, hay cuatro posibles respuestas:</p>
            <ul>
                <li>1. Muy rara vez</li>
                <li>2. Rara vez</li>
                <li>3. A menudo</li>
                <li>4. Muy a menudo</li>
            </ul>
            <p>
                Dinos cómo te sientes, piensas o actúas <strong>LA MAYOR PARTE DEL TIEMPO EN LA MAYORIA DE
                    LUGARES.</strong>
                Elige una, y Sólo <strong>UNA</strong> respuesta para cada oración.Esto no es un examen; no existen
                respuestas buenas o malas.
                Por favor selecciona la respuesta en cada oración
            </p>
            <div class="form-row text-center">
                <div class=" col-25 offset-sm-2 col-sm-10">
                    <a class="btn btn-primary" href="questions.php?question_id=1">Siguiente</a>
                </div>
            </div>


        <?php endif; ?>
    </div>
</div>

<footer class="page-footer font-small blue">

    <div class="footer-copyright text-center py-3">© 2018 Copyright: Autor Cristian Diaz , Mentor: Eduardo Telaya
        <a href="https://web.facebook.com/Innovua/?_rdc=1&_rdr"> Desarrollado en Innovua</a>
    </div>

</footer>

</body>

</html>








