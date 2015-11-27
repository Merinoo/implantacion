<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matricula</title>
    <style>
    #enviar {float:right;}
    #datos{margin-top:-230px;}
    </style>
  </head>
  <body>
  <?php if (!isset($_POST["Matricula"])) : ?>


  <form action="" method="post" class="matricula">

  <?php
  $connection = new mysqli("localhost", "merino", "1234", "TalleresFaber");

    echo '<h1>Añadir la Reparacion</h1>';
    echo ' Matricula: <select name="Matricula">'; //Creo select y le pongo nombre

    $result=$connection->query("select Matricula from vehiculos"); //Guardo la consulta con todas las matriculas de los vehiculos en $result
    while ($fila=$result->fetch_object()) {

    /*Guarda con fetch_object() para ir saltando de fila en fila hasta que no hay mas y se sale.
    Luego cada fila esta almacenada almacena dentro $obj*/


      echo  "<option value='$fila->Matricula'>$fila->Matricula</option>";
      //Muestre dentro de cada opcion el valor de la matricula segun la fila.
    }
    echo '</select>';
   ?>

  <?php
    echo "<br>";
    echo "FechaEntrada: <input type=date name='FechaEntrada' value='Introduce una fecha de entrada Ej:2015/08/14' size='42'>";
    //Guardo en un input tipo de dato la fecha
    echo "<br>";
    echo "KM: <input type=number name='KM' value=0 min=0 max=500000 >";
    //Guardo en un input el tipo de numero los kilometros poniendo como minimo 0 y maximo 500000.
    echo "<br>";
    echo "Averia:";
    echo "<br>";
    echo "<textarea rows='4' cols='50' name='Averia'>Esto es maxima fm</textarea>";
    //Creo un texarea donde se pueda escribi mucho.
    echo "<br>";
    echo "FechaSalida: <input type=date name='FechaSalida' value='Introduce una fecha de entrada Ej:2015/08/14' size='42'>";
    //Guardo en un input tipo de dato la fecha.
    echo "<br>";
    echo "Reparado: <input type=radio name='Reparado' value=0>NO <input type=radio name='Reparado' value=1>SI ";
    echo "<br>";
    echo "<textarea rows='4' cols='50' name='Observaciones'>Observaciones</textarea>";
    //Creo un texarea donde se pueda escribi muchas peticiones.
    echo "<br>";
    echo "<input type=submit value='ENVIAR' >";
    ?>

  </form>

<?php else: ?>

  <?php
  //Creamos la conexión 1=Localhost  2="usuario" 3="Contraseña" 4="Base_de_datos"
  $connection = new mysqli("localhost", "merino", "1234", "TalleresFaber");


  $Matricula=$_POST["Matricula"];
  $FechaEntrada=$_POST["FechaEntrada"];
  $KM=$_POST["KM"];
  $Averia=$_POST["Averia"];
  $FechaSalida=$_POST["FechaSalida"];
  $Reparado=$_POST["Reparado"];
  $Observaciones=$_POST["Observaciones"];


  echo "$Matricula";
  echo $FechaEntrada;
  echo $KM;
  echo $Averia;
  echo $FechaSalida;
  echo $Reparado;
  echo $Observaciones;

  $insert="INSERT INTO reparaciones VALUES (NULL, '$Matricula', '$FechaEntrada', $KM, '$Averia', '$FechaSalida',
                                              $Reparado, '$Observaciones' )";

  //
  $connection->query( $insert );
  header("refresh:0; url=Tabla_conexion.php");
  echo "$consulta";
   ?>
 <?php endif ?>

  </body>
</html>
