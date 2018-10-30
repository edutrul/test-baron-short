<?php
/**
 * Here goes all questions from test baron.
 */

if (!isset($_SESSION)) {
  // session isn't started
  session_start();
}
define('SCORE_EXCELLENT', 'Capacidad emocional y social atipica. Excelentemente desarrollada.');
define('SCORE_VERY_GOOD', 'Capacidad emocional y social muy alta. Muy bien desarrollada.');
define('SCORE_GOOD', 'Capacidad emocional y social adecuada. Bien desarrollada.');
define('SCORE_AVERAGE', 'Capacidad emocional y social adecuada. Promedio.');
define('SCORE_LOW', 'Capacidad emocinoal y social baja.  Necesita mejorarse.');
define('SCORE_VERY_LOW', 'Capacidad emocinoal y social muy baja.  Necesita mejorarse considerablemente.');
define('SCORE_POOR', 'Capacidad emocional y social atipica y deficiente. Nivel de desarrollo marcadamente bajo.');

require_once 'list_questions.php';

// @TODO: Better change `questions` to `answers` for better understanding.
//print_r(getDirectScore($questions, $_SESSION['questions']));

$scores = getDirectScore($questions, $_SESSION['questions']);
$scoreICENA = getScoreBaronICENA($scores);
$scoreInterpretationICENA = getInterpretationFromScoreICENA($scoreICENA);

/**
 * Get direct score.
 *
 * @param $questionsFromList
 * @param $answers
 *
 * @return array
 */
function getDirectScore($questionsFromList, $answers) {
    $intrapersonal = getEmotionScore($questionsFromList, $answers, [2, 6, 16, 27, 42, 52]);
    $interpersonal = getEmotionScore($questionsFromList, $answers, [1, 4, 9, 13, 19, 23, 35, 40, 44, 50, 54, 58]);
    $estres = getEmotionScore($questionsFromList, $answers, [2, 5, 10, 14, 20, 25, 34, 38, 45, 48, 53, 57]);
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

/**
 * Get emotion score.
 *
 * @param $questionsFromList
 * @param $answers
 * @param $questionIds
 *
 * @return int
 */
function getEmotionScore($questionsFromList, $answers, $questionIds) {
    $sum = 0;
    foreach ($questionIds as $questionId) {
        // CUANDO ESTA CONVERTIDO LO RESTA
        if (!empty($questionsFromList[$questionId]['isConverted'])) {
            // @TODO: do "resta"
            $sum += (5 - $answers[$questionId]);
        } // CUANDO NO ES CONVERTIDO.
        else {
            $sum += $answers[$questionId];
        }
    }
    return $sum;
}

/**
 * Get score from TEST BARON SHORT ICENA
 *
 * where the score is for
 * INTERPERSONAL, INTRAPERSONAL, ADAPTABILIDAD Y MANEJO DE ESTRESS.
 *
 * @param array $scores
 */
function getScoreBaronICENA($scores) {
  return $scores['intrapersonal'] +
    $scores['interpersonal'] +
    $scores['manejo_del_estress'] +
    $scores['adaptabilidad'];
}

/**
 * Get interpretation from score ICENA.
 *
 * @param int $scoreICENA
 *   Score ICENA
 *
 * @return string
 *   The correct interpretation from the score ICENA.
 */
function getInterpretationFromScoreICENA($scoreICENA) {
  switch ($scoreICENA) {
    case $scoreICENA >= 130:
      return SCORE_EXCELLENT;
    case $scoreICENA >= 120 && $scoreICENA <= 129:
      return SCORE_VERY_GOOD;
    case $scoreICENA >= 110 && $scoreICENA <= 119:
      return SCORE_GOOD;
    case $scoreICENA >= 90 && $scoreICENA <= 109:
      return SCORE_AVERAGE;
    case $scoreICENA >= 80 && $scoreICENA <= 89:
      return SCORE_LOW;
    case $scoreICENA >= 70 && $scoreICENA <= 79:
      return SCORE_VERY_LOW;
    case $scoreICENA <= 69:
      return SCORE_POOR;
  }
}

/**
 * Get interpretation score scale.
 */
function getAllInterpretationScore() {
  return [
    '130 y más' => SCORE_EXCELLENT,
    '120 a 129' => SCORE_VERY_GOOD,
    '110 a 119' => SCORE_GOOD,
    '90 a 109' => SCORE_AVERAGE,
    '80 a 89' => SCORE_LOW,
    '70 a 79' => SCORE_VERY_LOW,
    '69 y menos' => SCORE_POOR,
  ];
}

?>