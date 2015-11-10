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
  <?php if (!isset($_POST["Asignaturas"])) : ?>

  <div class="container">
  <form action="" method="post" class="matricula">
    <center>
    <table class='striped'>
      <tr>
        <th colspan="2" align="center">RELLENE CON SUS DATOS PERSONALES</th>
      </tr>
      <tr>
        <td>DNI:</td>
        <td><input type="text" name="DNI" maxlength="9" size="18" required></td>
      </tr>
      <tr>
        <td>Nombre:</td>
        <td><input type="text" name="Nombre" maxlength="25" size="18"  required></td>
      </tr>
      <tr>
        <td>Apellidos:</td>
        <td><input type="text" name="Apellidos" maxlength="25" size="18" required></td>
      </tr>
      <tr>
        <td>Dirección:</td>
        <td><input type="text" name="Dirección" maxlength="25" size="18" required></td>
      </tr>
      <tr>
        <td>Teléfono:</td>
        <td><input type="text" name="Teléfono" maxlength="9" size="18"required></td>
      </tr>
      <tr>
        <td>Correo Electrónico:</td>
        <td><input type="text" name="Correo_electrónico" maxlength="35" size="18" required></td>
      </tr>
      <tr>
        <td>Curso:</td>
        <td><Input type="radio" name="Curso" value="1º ASIR">1º ASIR<Input type="radio" name="Curso" value="2º ASIR">2º ASIR</td>
      </tr>
      <tr>
        <td colspan="2">Asignaturas:</td>
      </tr>
      <tr>
        <td>            LM<input type="checkbox" name="Asignaturas[]" value="LM" id="uno"><br>
                        FdH<input type="checkbox" name="Asignaturas[]" value="FdH" id="dos"><br>
                        PyAR<input type="checkbox" name="Asignaturas[]" value="PyAR" id="tres"><br>
        </td>
        <td>
                        IdOS<input type="checkbox" name="Asignaturas[]" value="IdOS" id="cuatro"><br>
                        GDB<input type="checkbox" name="Asignaturas[]" value="GDB" id="cinco"><br>
                        SAD<input type="checkbox" name="Asignaturas[]" value="SAD" id="seis"><br>
        </td>
        <td>
                        SRI<input type="checkbox" name="Asignaturas[]" value="SRI" id="siete"><br>
                        IAW<input type="checkbox" name="Asignaturas[]" value="IAW" id="ocho"><br>

        </td>
      </tr>
      <tr>
        <td>¿Desea usted Beca?</td>
        <td><Input type="radio" name="BECA" value="SI">Si<Input type="radio" name="BECA" value="NO">No</td>
      </tr>
      <tr>
        <td colspan="2">
          <input type="submit" value="Enviar" id="enviar"
          onclick="if(!this.form.uno.checked &&
                      !this.form.dos.checked &&
                      !this.form.tres.checked &&
                      !this.form.cuatro.checked &&
                      !this.form.cinco.checked &&
                      !this.form.seis.checked &&
                      !this.form.siete.checked &&
                      !this.form.ocho.checked)
                      {alert('Ninguna asignatura seleccionada.');}">
        </td>
      </tr>
    </table>
  </center>
  </form>
</div>

<?php else: ?>

  <?php
  $DNI=$_POST["DNI"];
  $Nombre=$_POST["Nombre"];
  $Apellidos=$_POST["Apellidos"];
  $Dirección=$_POST["Dirección"];
  $Teléfono=$_POST["Teléfono"];
  $Correo_electrónico=$_POST["Correo_electrónico"];
  $Curso=$_POST["Curso"];
  $Asignaturas=$_POST["Asignaturas"];
  $BECA=$_POST["BECA"];

  echo "<h3>DATOS DEL USUARIO</h3>";
  echo "DNI:"." $DNI";
  echo "<br>";
  echo "Nombre:"." $Nombre";
  echo "<br>";
  echo "Apellidos:"." $Apellidos";
  echo "<br>";
  echo "Dirección:"." $Dirección";
  echo "<br>";
  echo "Teléfono:"." $Teléfono";
  echo "<br>";
  echo "Correo_electrónico:"." $Correo_electrónico";
  echo "<br>";
  echo "Curso:"." $Curso";
  echo "<br>";

  for ($i=0;  $i<sizeof($Asignaturas);  $i++) {
  echo "Que Asignaturas tiene:"." $Asignaturas[$i]"."<br>";
  }
  echo "Quieres BECA:". $BECA;

   ?>
<?php endif ?>

  </body>
</html>
