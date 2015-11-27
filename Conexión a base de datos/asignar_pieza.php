<!DOCTYPE html>
<html lang="">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
</head>

<body>
  <?php if (!isset($_POST["reca"])) : ?>
       <form method="post" action="#">

          <h1>Recambio y unidades segun Idreparacion</h1>

          Recambio:
                   <?php
                       $id = $_GET["id"];

                      $connection = new mysqli ("localhost" ,"merino" ,"1234" , "talleresfaber");

                       if($connection->connect_errno){
                           echo "<h1>Se produjo un error a la hora de conectarse a la base de datos: $connection->connect_errno</h1>";
                       }
                      $consulta_mysql='select * from RECAMBIOS';
                      $result=$connection->query($consulta_mysql);

                      echo "<select name='reca'>";
                      while($obj=$result->fetch_object()){
                           echo "<option value='".$obj->IdRecambio."'>".$obj->Descripcion."</option>";
                       }
                       echo "</select>";
                       $result->close();
                       unset($obj);
                       echo 'Unidades: <input type="number" name="unidades" >';
                       echo '<input type="hidden" name="id" value="'.$id.'">';
                       unset($connection);
       ?>

           <input type="submit" name="send" value="enviar">
       </form>
       <?php else: ?>

       <?php

           $connection = new mysqli ("localhost" ,"merino" ,"1234" , "talleresfaber");

           $idrec = $_POST["reca"];
           $unidad = $_POST["unidades"];
           $idRep = $_POST["id"];

           echo $idrec;

           $consulta='INSERT INTO INCLUYEN VALUES("'.$idrec.'",'.$idRep.','.$unidad.')';
           echo $consulta;
           $consulta2='UPDATE INTERVIENEN SET IdRecambio='.$idrec.' WHERE IdReparacion = '.$idRep.' AND Unidades='.$unidad;

           if($connection->query($consulta)){
               echo "Correcto";
               header('Location: Tabla_conexion.php');
           }else{
                //EN CASO DE ERROR EN EL INSERT PORQUE YA EXISTE UNA FILA CON ESOS IDS, HACES LA CONSULTA DEL UPDATE PARA MODIFICAR
                //LA QUE YA EXISTE
               $connection->query($consulta2);
               header('Location: Tabla_conexion.php');
           }

       ?>

     <?php endif ?>
</body>
</html>
