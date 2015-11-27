<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GETTING DATA FROM A MYSQL DATABASE</title>
  </head>
  <body>
    <?php

      //CREATING THE CONNECTION
      $connection = new mysqli("localhost", "merino", "1234", "TalleresFaber");

      //TESTING IF THE CONNECTION WAS RIGHT
      if ($connection->connect_errno) {
          printf("Connection failed: %s\n", $mysqli->connect_error);
          exit();
      }

      //MAKING A SELECT QUERY
      /* Consultas de selección que devuelven un conjunto de resultados */
      if ($result = $connection->query("SELECT * FROM reparaciones;")) {

        //printf("<p>The select query returned %d rows.</p>", $result->num_rows);

      ?>

          <!-- PRINT THE TABLE AND THE HEADER -->
          <table style="border:1px solid black" border="1">
          <thead>

              <th>IdReparacion</th>
              <th>Matricula</th>
              <th>FechaEntrada</th>
              <th>Km</th>
              <th>Avería</th>
              <th>Fecha Salida</th>
              <th>Reparado</th>
              <th>Observaciones</th>

              <th>Editar</th>
              <th>Añadir Trabajador</th>
              <th>Añadir pieza</th>
              <th>Borrar</th>

          </thead>

      <?php

          //FETCHING OBJECTS FROM THE RESULT SET
          //THE LOOP CONTINUES WHILE WE HAVE ANY OBJECT (Query Row) LEFT
          while($obj = $result->fetch_object()) {
              //PRINTING EACH ROW
              echo "<tr>";
              echo "<td>".$obj->IdReparacion."</td>";
              echo "<td>".$obj->Matricula."</td>";
              echo "<td>".$obj->FechaEntrada."</td>";
              echo "<td>".$obj->Km."</td>";
              echo "<td>".$obj->Averia."</td>";
              echo "<td>".$obj->FechaSalida."</td>";
              echo "<td>".$obj->Reparado."</td>";
              echo "<td>".$obj->Observaciones."</td>";

              echo "<td>
                <a href='editar.php?id=$obj->IdReparacion&Matri=$obj->Matricula&
                FechaEn=$obj->FechaEntrada&Km=$obj->Km&Ave=$obj->Averia&FechaSa=$obj->FechaSalida&
                Repa=$obj->Reparado&Observa=$obj->Observaciones'>
                <img src='imagenes/editar.png' style='height:25px'>
                </a>
              </td>";

              echo "<td>
                <a href='asignar_trabajador.php?id=$obj->IdReparacion'>
                <img src='imagenes/añadir_trabajador.png' style='height:25px'>
                </a>
              </td>";

              echo "<td>
                <a href='asignar_pieza.php?id=$obj->IdReparacion'>
                  <img src='imagenes/añadir_pieza.png' style='height:25px'>
                </a>
              </td>";

              echo "<td>
                <a href='borrar.php?id=$obj->IdReparacion'>
                  <img src='imagenes/borrar.png' style='height:25px'>
                </a>
              </td>";
              echo "</tr>";

          }
              echo "</table>";
          echo "<a href='crear.php'>
                    <img src='imagenes/añadir_reparacion.png' style='height:25px'>
                </a>";

          //Free the result. Avoid High Memory Usages
          $result->close();
          unset($obj);
          unset($connection);

      } //END OF THE IF CHECKING IF THE QUERY WAS RIGHT

    ?>
  </body>
</html>
