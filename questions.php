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

//print_r($_SESSION);


?>
<!doctype html>
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
<div class="container-fluid">
    <div class="container d-flex flex-column justify-content-center h-100 text-black align-items-center  ">
        <?php if (!empty($question)): ?>
            <h1><?php print $question['question']; ?></h1>
            <div class=" p-5  col-md-4 col-xs-6 ">
                <?php foreach (range(1, 4) as $number): ?>
                    <a class="btn btn-primary" href="<?php print $nextQuestionUrl . $number; ?>"
                       class="<?php print $previousResponse == $number ? 'selected' : '' ?>"><?php print $number ?></a>
                <?php endforeach ?>
            </div>
        <?php else: ?>
            <h1>Página incorrecta! regresa atrás</h1>
        <?php endif; ?>
    </div>
</div>

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


</body>
</html>
