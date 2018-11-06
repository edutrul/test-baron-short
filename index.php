<?php
if (!isset($_SESSION)) {
    // session isn't started
    session_start();
    unset($_SESSION);
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
        <h1 class="text-uppercase mb-0">Bienvenido al Test de Baron</h1>
        <hr class="star-light">
        <h2 class="font-weight-light mb-0">El test cuenta con 60 preguntas</h2>
    </div>
</header>



<!-- Contact Section -->
<section id="contact">
    <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Datos Personales</h2>
        <hr class="star-dark mb-5">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                <form  id="contactForm" novalidate="novalidate" action="instructions.php" method="post">
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <p class=" lead">Nombre:</p>
                            <input class="form-control" name="first_name" type="text" placeholder="Nombre" required="required" data-validation-required-message="Por favor ingrese su nombre">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <p class=" lead">Apellido:</p>
                            <input class="form-control" id="last_name" name="last_name" type="text" placeholder="Apellido" required="required" data-validation-required-message="Por favor ingrese su apellido">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <p class=" lead">Colegio:</p>
                            <input class="form-control" id="colegio" type="text" name="colegio" placeholder="Colegio" required="required" data-validation-required-message="Ingrese su Colegio">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <p class=" lead">Sexo:</p>
                            <select class="form-control custom-select-lg" name="select_sexo"   required>
                                <option value="masculino">Masculino</option>
                                <option value="femenino">Femenino</option>
                            </select>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">

                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <p class=" lead">Grado:</p>
                            <select class="form-control custom-select-lg" name="select_grado"  required>
                                <option value="primero">Primero</option>
                                <option value="segundo">Segundo</option>
                                <option value="tercero">Tercero</option>
                                <option value="cuarto">Cuarto</option>
                                <option value="quinto">Quinto</option>
                            </select>
                        </div>
                    </div>

                    <div class="control-group">
                        <div class=" form-group floating-label-form-group controls mb-0 pb-2">
                            <p class=" lead">Fecha de Nacimiento:</p>
                            <input class="calendar form-control" type="date" name="date"  type="text" required/>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br>
                    <div id=""></div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-xl"  value="Siguiente">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

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

