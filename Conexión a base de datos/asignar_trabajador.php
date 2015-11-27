<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
  </head>
  <body>
    <?php if (!isset($_POST["Empleado"])) : ?>
         <form method="post" action="#">

           <h1>Numero de Horas segun IdReparacion Trabajador</h1>

          Matricula:
                     <?php
                         $id = $_GET["id"];

                        $connection = new mysqli ("localhost" ,"merino" ,"1234" , "talleresfaber");

                         if($connection->connect_errno){
                             echo "<h1>Se produjo un error a la hora de conectarse a la base de datos: $connection->connect_errno</h1>";
                         }
                        $consulta_mysql='select * from EMPLEADOS';
                        $result=$connection->query($consulta_mysql);

                        echo "<select name='Empleado'>";
                        while($obj=$result->fetch_object()){
                             echo "<option value='".$obj->CodEmpleado."'>".$obj->Nombre."</option>";
                         }
                         echo "</select>";
                         $result->close();
                         unset($obj);
                         echo ' Horas: <input type="number" name="Horas" >';
                         echo '<input type="hidden" name="id" value="'.$id.'">';
                         unset($connection);
         ?>

             <input type="submit" name="send" value="enviar">
         </form>
         <?php else: ?>

         <?php

             $connection = new mysqli ("localhost" ,"merino" ,"1234" , "talleresfaber");

             $IdEmpleado = $_POST["Empleado"];
             $Horas = $_POST["horas"];
             $IdReparacion = $_POST["id"];

             $consulta='INSERT INTO INTERVIENEN VALUES('.$idEmple.','.$idRep.','.$horas.')';
             //CONSULTA PARA MODIFICAR
             $consulta2='UPDATE INTERVIENEN SET Horas='.$horas.' WHERE CodEmpleado = '.$idEmple.' AND IdReparacion='.$idRep;

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
