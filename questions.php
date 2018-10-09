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
$questionId = isset($_GET['question_id']) ? $_GET['question_id'] -1 : '';
// The next question to ask to user.
$nextQuestionId = $questionId + 2;
$previousQuestionId = $questionId -1;
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
print $previousQuestionId;
print $previousResponse;
// Here we store answers from previous question:
if (!empty($_GET['previous_response']) && $previousQuestionId !== -1) {
  $_SESSION['questions'][$previousQuestionId] = $_GET['previous_response'];
  $previousResponse = $_GET['previous_response'];
}

print_r($_SESSION);


?>
<?php if (!empty($question)): ?>
  <h1><?php print $question['question']; ?></h1>
  <?php foreach(range(1, 4) as $number): ?>
    <a href="<?php print $nextQuestionUrl . $number; ?>"
       class="<?php print $previousResponse == $number ? 'selected' : '' ?>"><?php print $number ?></a>
  <?php endforeach ?>
<?php else: ?>
  <h1>Página incorrecta! regresa atrás</h1>
<?php endif; ?>
