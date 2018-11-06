<?php
/**
 * Page for resultados
 */
?>
<?php
require_once 'diagnostic.php';
if (!isset($_SESSION)) {
  // session isn't started
  session_start();
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
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet"
          type="text/css">

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

<section id="contact">
               <div class="container">
            <br>
            <h2 class="text-center text-uppercase text-secondary mb-0">Página de resultados</h2>
            <br>
            <h2 class="text-center font-weight-light text-secondary mb-0">Este es tu score:</h2><br>
            <h3 class="text-center font-weight-light mb-0">SCORE ICE - NA : <?php print $scoreICENA ?> <br></h3><br>
            <table class="table table-responsive table-bordered table-hover table-active " >
                <td>
            <h4 class="text-center  mb-0 text-success" >INTERPRETACIÓN Test Baron ICE - NA: <?php print $scoreInterpretationICENA; ?></h4></table>
            </td>
            <br>
            <table class="table table-borderless table-responsive   font-weight-light">
                <th>Rangos</th>
                <th>Pautas de Interpretación</th>
                <?php foreach(getAllInterpretationScore() as $range => $interpretationScore): ?>
                    <tr>
                        <td><?php print $range ?></td>
                        <td><?php print $interpretationScore ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>

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





