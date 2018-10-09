<?php
/**
 * Here goes all questions from test baron.
 */
?>

<?php
if (!isset($_SESSION)) {
  // session isn't started
  session_start();
  unset($_SESSION);
}
?>

<!DOCTYPE HTML>

<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" href="css/main.css" type="text/css" media="all">
    <title>Test Baron</title>
</head>

<body>
<div class="container">
    <form id="data" action="instructions.php" method="post">
        <h1>Bienvenido al TEST BARON</h1>
        <p>Test creado por la Universidad Autónoma del Perú en el área de innovación</p>
        <p>el test es la versión corta del BARON (60 preguntas)</p>
        <fieldset>
            <input placeholder="Nombre" name="first_name" type="text"/>
        </fieldset>
        <fieldset>
            <input placeholder="Apellidos" name="last_name" type="text"/>
        </fieldset>
        <fieldset>
            <input placeholder="Sexo" name="sex" type="text"/>
        </fieldset>
        <fieldset>
            <input  placeholder="Edad" name="age" type="text"/>
        </fieldset>
        <fieldset>
            <input placeholder="Grado" name="grade" type="text"/>
        </fieldset>
        <fieldset>
            <input  placeholder="Colegio" name="age" type="text"/>
        </fieldset>
        <fieldset>
            <input  placeholder="Fecha" name="date" type="text"/>
        </fieldset>
        <fieldset>
            <button  type="submit" value="Siguiente">Submit</button>
        </fieldset>
    </form>


</div>

<footer>
    <p>Copyright 2018 UA</p>
</footer>

</body>

</html>


