<?php
/**
 * Here goes all questions from test baron.
 */
?>

<?php
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

<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <link rel="stylesheet" href="css/instructions.css" type="text/css" media="all">
    <title>Test Baron </title>
</head>

<body>
<div class="container">
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
            Dinos cómo te sientes, piensas o actúas <strong>LA MAYOR PARTE DEL TIEMPO EN LA MAYORIA DE LUGARES.</strong>
            Elige una, y Sólo <strong>UNA</strong> respuesta para cada oración.Esto no es un examen; no existen respuestas buenas o malas.
            Por favor selecciona la respuesta en cada oración
        </p>
        <a href="questions.php?question_id=1">Siguiente</a>
    <?php endif; ?>
</div>

<footer>
    <p>Copyright 2018 UA</p>
</footer>

</body>

</html>








