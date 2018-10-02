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
  }
  else {
    // @TODO: Maybe redirect to homepage if no session started?.
  }
}
?>

<?php if (!empty($_SESSION['personal_data'])): ?>
  <h1>INDICACIONES DEL TEST BARON</h1>
  <h2>Estimado <?php print $first_name; ?></h2>

  <p>Tenga en cuenta lo siguiente...</p>

  <a href="questions.php?question_id=1">Siguiente</a>
<?php endif; ?>
