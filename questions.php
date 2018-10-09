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
print_r($_SESSION);

error_reporting(E_ALL);
ini_set('display_errors', '1');

require_once 'list_questions.php';
$questionId = isset($_GET['question_id']) ? $_GET['question_id'] -1 : '';
// The next question to ask to user.
$nextQuestionId = $questionId + 2;
$previousQuestionId = $questionId;
$basePath = 'questions.php';
$nextQuestionUrl1 = $basePath . '?question_id=' . $nextQuestionId . '&previous_response=1';
$nextQuestionUrl2 = $basePath . '?question_id=' . $nextQuestionId . '&previous_response=2';
$nextQuestionUrl3 = $basePath . '?question_id=' . $nextQuestionId . '&previous_response=3';
$nextQuestionUrl4 = $basePath . '?question_id=' . $nextQuestionId . '&previous_response=4';
$nextQuestionUrl5 = $basePath . '?question_id=' . $nextQuestionId . '&previous_response=5';
// Get the question in array format
// Array
//    (
//      [question] => Me gusta divertirme
//      [ponderation] => 0
//    )
$question = !empty($questions[$questionId]) ? $questions[$questionId] : NULL;
// Here we store answers from previous question:
if (!empty($_GET['previous_response'])) {
  //$_SESSION['questions'][]
}

?>
<?php if (!empty($question)): ?>
  <h1><?php print $question['question']; ?></h1>
  <a href="<?php print $nextQuestionUrl1 ?>">1</a>
  <a href="<?php print $nextQuestionUrl2 ?>">2</a>
  <a href="<?php print $nextQuestionUrl3 ?>">3</a>
  <a href="<?php print $nextQuestionUrl4 ?>">4</a>
  <a href="<?php print $nextQuestionUrl5 ?>">5</a>
<?php else: ?>
  <h1>Página incorrecta! regresa atrás</h1>
<?php endif; ?>
