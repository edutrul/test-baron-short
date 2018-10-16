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


<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <title>Test de Baron</title>
</head>
<body>
<div class="container-fluid fondo">


    <div class="container d-flex flex-column justify-content-center h-100 text-white align-items-center col-md-6 col-xs-8 ">


        <h1>Bienvenido al TEST BARON</h1>
        <p>Test creado por la Universidad Autónoma del Perú en el área de innovación</p>
        <p>el test es la versión corta del BARON (60 preguntas)</p>

    </div>
    <div class="container col-md-6 col-xs-8 ">

        <form id="data" action="instructions.php" method="post">
            <div class="form-group row">
                <label class="col-sm-2 col-form-label"> Nombre</label>
                <div class="col-sm-4">
                    <input class="form-control" placeholder="Nombre" name="first_name" type="text"/>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label"> Apellido</label>
                <div class="col-sm-4">
                    <input class="form-control" placeholder="Apellidos" name="last_name" type="text"/>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label"> Sexo</label>
                <div class="col-sm-4">
                    <input class="form-control" placeholder="Sexo" name="sex" type="text"/>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label"> Edad</label>
                <div class="col-sm-4">
                    <input class="form-control" placeholder="Edad" name="age" type="text"/>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label"> Grado</label>
                <div class="col-sm-4">
                    <input class="form-control" placeholder="Grado" name="grade" type="text"/>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label"> Colegio</label>
                <div class="col-sm-4">
                    <input class="form-control" placeholder="Colegio" name="colegio" type="text"/>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label"> Fecha</label>
                <div class="col-sm-4">
                    <input class="form-control" type="date" name="date" type="text"/>
                </div>
            </div>
            <div class="form-group row">

                <div class=" offset-sm-2 col-sm-10">
                    <button class="btn btn-primary" type="submit" value="Siguiente">Submit</button>
                </div>
            </div>

        </form>


    </div>

    <footer class="page-footer font-small blue">

        <div class="footer-copyright text-center py-3">© 2018 Copyright: Autor Cristian Diaz , Mentor: Eduardo Telaya
            <a href="https://web.facebook.com/Innovua/?_rdc=1&_rdr"> Desarrollado en Innovua</a>
        </div>

    </footer>


</body>
</html>


