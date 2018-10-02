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
?>

<h1>Bienvenido al TEST BARON</h1>

<p>Test creado por la Universidad Autónoma del Perú en el área de innovación</p>
<p>el test es la versión corta del BARON (60 preguntas)</p>

<p>Por favor llene sus datos</p>
<form action="/instructions.php" method="post">
  Nombres<input name="first_name" type="textfield"/>
  Apellidos<input name="last_name" type="textfield"/>
  <input type="submit" value="Siguiente">
</form>
