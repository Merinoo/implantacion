<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
  </head>
  <body>
    <?php if (!isset($_POST["Matri"])) : ?>

      <form method="post" action="#">

      <h1>Modo Edicion de los datos</h1>
        Matricula:

    <?php

        $connection = new mysqli("localhost","merino","1234","talleresfaber");
        if($connection->connect_errno){
          echo "<h1>Se produjo un error a la hora de conectarse a la base de datos: $connection->connect_errno</h1>";
           }

        $consulta_mysql='select Matricula from VEHICULOS';
        $result=$connection->query($consulta_mysql);

        $id= $_GET['id'];
        $Matricula = $_GET['Matri'];
        $FechaEntrada = $_GET['FechaEn'];
        $Km = $_GET['Km'];
        $Averia = $_GET['Ave'];
        $FechaSalida = $_GET['FechaSa'];
        $Reparado = $_GET['Repa'];
        $Observaciones = $_GET['Observa'];



      /*  <a href='editar.php?id=$obj->IdReparacion&Matri=$obj->Matricula&
        FechaEn=$obj->FechaEntrada&Km=$obj->Km&Ave=$obj->Averia&FechaSa=$obj->FechaSalida&
        Repa=$obj->Reparado&Observa=$obj->Observaciones'>   Este seria el enlace a esta pagina php */


        echo "<select name='Matri'>";

        while($obj=$result->fetch_object()){
          if($Matricula==$obj->Matricula){
          echo "<option value='$obj->Matricula' selected>$obj->Matricula</option>";
        }else {
              echo "<option value='$obj->Matricula'>$obj->Matricula</option>";
        }
      }

      echo "</select>";
      echo "<br>";

      $result->close();
      unset($obj);
      unset($connection);


      echo "Fecha de Entrada: <input type='date' name='FechaEn' value='".$FechaEntrada."' >";
      echo "<br>";
      echo "Km: <input type='number' name='Km' value='".$Km."' >";
      echo "<br>";
      echo "Fecha de Salida: <input type='date' name='FechaSa' value='".$FechaSalida."'>";
      echo "<br>";
      echo "Averia: <input type='text' name='Ave' value='".$Averia."'>";
      echo "<br>";
      echo "Reparado:";
              if($Reparado==1){
                    echo "<input  name='Repa' value='1' type='radio' id='rep1' checked />";
                    echo "<label for='Repa1'>Si</label>";
                    echo "<input  name='Repa' value='0' type='radio' id='rep2'/>";
                    echo "<label for='Repa2'>No</label>";
                }else{
                  echo "  <input  name='Repa' value='1' type='radio' id='rep1' />";
                  echo "  <label for='Repa1'>Si</label>";
                  echo "  <input  name='Repa' value='0' type='radio' id='rep2' checked/>";
                  echo "  <label for='Repa2'>No</label>";
                }
      echo "<br>";
      echo "Observaciones: <input type='text' name='Observa' value='".$Observaciones."'>";
      echo "<input type='hidden' name='id' value='".$id."'>";
      echo "<input type='submit' name='send' value='enviar'>";

    ?>

      </form>

      <?php else: ?>

        <?php
        $id= $_POST['id'];
        $Matricula = $_POST['Matri'];
        $FechaEntrada = $_POST['FechaEn'];
        $Km = $_POST['Km'];
        $Averia = $_POST['Ave'];
        $FechaSalida = $_POST['FechaSa'];
        $Reparado = $_POST['Repa'];
        $Observaciones = $_POST['Observa'];


        $connection = new mysqli ("localhost" ,"merino" ,"1234" , "talleresfaber");
                        if($connection->connect_errno){
                            echo "<h1>Se produjo un error a la hora de conectarse a la base de datos: $connection->connect_errno</h1>";
                            }

        $consulta="UPDATE REPARACIONES SET Matricula='$Matricula', FechaEntrada='".$FechaEntrada."',
        Km=".$Km.", Averia='".$Averia."' ,FechaSalida='".$FechaSalida."',Reparado=".$Reparado.",
        Observaciones='".$Observaciones."' WHERE IdReparacion=$id";



        if($connection->query($consulta)==true){
               echo "Correcto";
               header('Location: Tabla_conexion.php');
           }else{
              echo $consulta."<br>";
               echo $connection->error;

           }
           unset($connection);

       ?>

     <?php endif ?>
  </body>
</html>
