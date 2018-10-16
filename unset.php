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
unset($_SESSION['questions']);
unset($_SESSION['personal_data']);
print_r($_SESSION);



?>