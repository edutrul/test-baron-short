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

require_once 'list_questions.php';

print_r($questions);

print_r($_SESSION);

// @TODO: Better change `questions` to `answers` for better understanding.
print_r(getDirectScore($questions, $_SESSION['questions']));

function getDirectScore($questionsFromList, $answers) {
  $intrapersonal = getEmotionScore($questionsFromList, $answers, [2, 6, 16, 27, 42, 52]);
  $interpersonal = getEmotionScore($questionsFromList, $answers, [1, 4, 9, 13, 19, 23, 35, 40, 44, 50, 54, 58]);

  $directScore = [
    'intrapersonal' => $intrapersonal,
    'interpersonal' => $interpersonal,
    'manejo_del_estress' => 0,
    'adaptabilidad' => 0,
    'animo_general' => 0,
    'impresion_positiva' => 0,
  ];
  return $directScore;
}

function getEmotionScore($questionsFromList, $answers, $questionIds) {
  $sum = 0;
  foreach ($questionIds as $questionId) {
    // CUANDO ESTA CONVERTIDO LO RESTA
    if (!empty($questionsFromList[$questionId]['isConverted'])) {
      // @TODO: do "resta"
      $sum += (5 - $answers[$questionId]);
    }
    // CUANDO NO ES CONVERTIDO.
    else {
      $sum += $answers[$questionId];
    }
  }
  return $sum;
}

?>