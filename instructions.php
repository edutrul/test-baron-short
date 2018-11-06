<?php
require_once 'connect_db.php';

// insertar datos
$names = $_POST['first_name'];
$last_name = $_POST['last_name'];
$select_sexo = $_POST['select_sexo'];
$date_age = strtotime($_POST['date']);
$select_grado = $_POST['select_grado'];
$colegio = $_POST['colegio'];
$date = date("d M Y H:i:s");
$fecha_test = strtotime($date);


$sql = "INSERT INTO   participante (nombres,apellidos,sexo,fecha_nacimiento,grado,colegio,fecha_creacion_test) 
VALUES ('$names','$last_name','$select_sexo','$date_age','$select_grado','$colegio','$fecha_test')";
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



<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Test de Baron</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/freelancer.min.css" rel="stylesheet">

</head>

<body id="page-top">

<!-- Navigation -->
<nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Test de Baron</a>
        <img  class="bg-white" src="img/logo.jpg" height="50" width="180">
    </div>
</nav>

<!-- Header -->
<header class="masthead bg-primary text-white text-center">
    <div class="container">
        <?php if (!empty($_SESSION['personal_data'])): ?>
            <h1 class="text-uppercase mb-0">INDICACIONES DEL TEST BARON</h1>
            <br>
            <h2 class="font-weight-light mb-0">Estimado(a) <?php print $first_name; ?></h2>
            <hr class="star-light">
            <p class="lead">Lee cada oración y elije una respuesta que mejor te describe, hay cuatro posibles respuestas:</p>
        <div class="row">
            <div class="col-lg-4 ml-auto">
                <p class="lead">1. Muy rara vez</p>
                <p class="lead">2. Rara vez</p>
            </div>
            <div class="col-lg-4 mr-auto">
                <p class="lead">3. A menudo</p>
                <p class="lead">4. Muy a menudo</p>
            </div>
            </div>
            <p class="lead">Dinos cómo te sientes, piensas o actúas <strong>LA MAYOR PARTE DEL TIEMPO O EN LA MAYORIA DE
                    LUGARES.</strong>
                Elige una, y Sólo <strong>UNA</strong> respuesta para cada oración.Esto no es un examen; no existen
                respuestas buenas o malas.
                Por favor selecciona la respuesta en cada oración
            </p>



        <?php endif; ?>

        <div class="form-group">
            <a class="btn btn-secondary btn-xl" href="questions.php?question_id=1">Siguiente</a>

        </div>
    </div>
</header>



<!-- Footer -->
<div class="copyright py-4 text-center text-white">
    <div class="container">
        <small>Desarrollado por : Cristian  Diaz <br>Asesores TI: Eduardo Telaya <br> Asesora Psicologia: Teresa </small>

    </div>
</div>

<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
<div class="scroll-to-top d-lg-none position-fixed ">
    <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
    </a>
</div>
<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

<!-- Contact Form JavaScript -->
<script src="js/jqBootstrapValidation.js"></script>
<script src="js/contact_me.js"></script>

<!-- Custom scripts for this template -->
<script src="js/freelancer.min.js"></script>

</body>

</html>






