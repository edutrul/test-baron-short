<?php
/**
 * Here goes all questions from test baron.
 */
?>

<?php

if (!isset($_SESSION)) {
    // session isn't started
    session_start();
}
//unset($_SESSION['questions']);
error_reporting(E_ALL);
ini_set('display_errors', '1');
require_once 'list_questions.php';


$questionId = isset($_GET['question_id']) ? $_GET['question_id'] - 1 : '';
// The next question to ask to user.
$nextQuestionId = $questionId + 2;
$previousQuestionId = $questionId - 1;
$basePath = 'questions.php';
$nextQuestionUrl = $basePath . '?question_id=' . $nextQuestionId . '&previous_response=';
// Get the question in array format
// Array
//    (
//      [question] => Me gusta divertirme
//      [ponderation] => 0
//    )
$question = !empty($questions[$questionId]) ? $questions[$questionId] : NULL;
$previousResponse = !empty($_SESSION['questions'][$questionId]) ? $_SESSION['questions'][$questionId] : NULL;
//print $previousQuestionId;
//print $previousResponse;
// Here we store answers from previous question:
if (!empty($_GET['previous_response']) && $previousQuestionId !== -1) {
    $_SESSION['questions'][$previousQuestionId] = $_GET['previous_response'];
    $previousResponse = $_GET['previous_response'];
}

if ($questionId == 60) {
    $url_diagnostic = 'resultados.php';
    header('Location: ' . $url_diagnostic);
}

//print_r($_SESSION);


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
        <<img  class="bg-white" src="img/logo.jpg" height="50" width="180">
    </div>
</nav>

<section id="contact">
    <div class="container">
        <br>
        <br>
        <?php if (!empty($question)): ?>
            <h2 class="text-center  text-secondary mb-0"><?php print $question['question']; ?></h2>
            <hr class="star-dark mb-5">
            <div class="text-center mt-4">

                <?php foreach (range(1, 4) as $number): ?>
                    <a class="btn btn-xl btn-primary" href="<?php print $nextQuestionUrl . $number; ?>"
                       class="<?php print $previousResponse == $number ? 'selected' : '' ?>"><?php print $number ?></a>
                <?php endforeach ?>
            </div>
        <?php else: ?>
            <h1>Página incorrecta! regresa atrás</h1>
        <?php endif; ?>

        <div class="container-fluid">
            <div class="container d-flex flex-column justify-content-center h-100 text-black align-items-center">
                <div class="p-5  col-md-4 col-xs-6">
                    <h5>1. Muy rara vez</h5>
                    <h5>2. Rara vez</h5>
                    <h5>3. A menudo</h5>
                    <h5>4. Muy a menudo</h5>
                </div>
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





