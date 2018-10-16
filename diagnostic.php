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

?>