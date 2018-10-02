<?php
/**
 * Here goes all questions from test baron.
 */
?>


<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

require_once 'list_questions.php';
$questionId = isset($_GET['question_id']) ? $_GET['question_id'] -1 : '';
// The next question to ask to user.
$nextQuestionId = $questionId + 1;
// Get the question in array format
// Array
//    (
//      [question] => Me gusta divertirme
//      [ponderation] => 0
//    )
$question = !empty($questions[$questionId]) ? $questions[$questionId] : NULL;

?>
<?php if (!empty($question)): ?>
  <h1><?php print $question['question']; ?></h1>
  <form action="questions.php?question_id=<?php print $nextQuestionId ?>" method="get">
    <button>0</button>
  </form>
<?php else: ?>
  <h1>Página incorrecta! regresa atrás</h1>
<?php endif; ?>
