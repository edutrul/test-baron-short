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
  $estres = getEmotionScore($questionsFromList, $answers, [2, 5, 10, 14, 20, 25, 34, 38, 45, 48,53, 57]);
  $adaptabilidad = getEmotionScore($questionsFromList, $answers, [11, 15, 21, 24, 29, 33, 37, 43, 47, 56]);
  $animo = getEmotionScore($questionsFromList, $answers, [0, 3, 8, 12, 18, 22, 28, 31, 36, 39, 46, 49, 55, 59]);
  $impresion = getEmotionScore($questionsFromList, $answers, [7, 17, 26, 32, 41, 51]);

  $directScore = [
    'intrapersonal' => $intrapersonal,
    'interpersonal' => $interpersonal,
    'manejo_del_estress' => $estres,
    'adaptabilidad' => $adaptabilidad,
    'animo_general' => $animo,
    'impresion_positiva' => $impresion,
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