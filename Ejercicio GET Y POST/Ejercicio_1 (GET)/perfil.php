<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href=" ">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <title></title>
    <style>
       #datos{
         margin-top:-230px;
       }
    </style>
</head>

<body>

  <div class="container">
    <?php

    $id=$_GET["id"];

    $alumnos = array(

        array(

              "DNI" => "53344470H",
              "Nombre" => "Son Goku",
              "Apellidos" => "Kakaroto",
              "Direccion" => "C/Tierra",
              "Telefono" => "679210535",
              "Correo_Electrónico" => "goku@gmail.com",
              "Foto" => "<img src='imagenes/0.png' />",
              ),

          array(

                "DNI" => "57894561A ",
                "Nombre" => "Vegeta",
                "Apellidos" => "Principe",
                "Direccion" => "C/Planeta_vegeta",
                "Telefono" => "679658935",
                "Correo_Electrónico" => "vegeta@gmail.com",
                "Foto" => "<img src='imagenes/1.png' />",
                ),

          array(

                "DNI" => "96325874J ",
                "Nombre" => "Son Gohan",
                "Apellidos" => "Ssj2",
                "Direccion" => "C/Sol",
                "Telefono" => "954394578",
                "Correo_Electrónico" => "gohan@gmail.com",
                "Foto" => "<img src='imagenes/2.png' />",
                ),

          array(

                "DNI" => "52156987S  ",
                "Nombre" => "Krilin",
                "Apellidos" => "Calvo",
                "Direccion" => "C/Tierra",
                "Telefono" => "678543216",
                "Correo_Electrónico" => "krilin@gmail.com",
                "Foto" => "<img src='imagenes/3.png' />",
                ),

          array(

                "DNI" => "57963158K  ",
                "Nombre" => "Piccolo",
                "Apellidos" => "Pikkoro",
                "Direccion" => "C/Namek",
                "Telefono" => "954786321",
                "Correo_Electrónico" => "Piccolo@gmail.com",
                "Foto" => "<img src='imagenes/4.png' />",
                ),

          array(

                "DNI" => "68974521O   ",
                "Nombre" => "Trunks",
                "Apellidos" => "Futuro",
                "Direccion" => "C/Futuro",
                "Telefono" => "954023646",
                "Correo_Electrónico" => "trunks@gmail.com",
                "Foto" => "<img src='imagenes/5.png' />",
                ),

          array(

                "DNI" => "84567920G    ",
                "Nombre" => "Bardock",
                "Apellidos" => "Ssj",
                "Direccion" => "C/vegeta",
                "Telefono" => "602126753",
                "Correo_Electrónico" => "bardock@gmail.com",
                "Foto" => "<img src='imagenes/6.png' />",
                ),

          array(

                "DNI" => "84018940Q    ",
                "Nombre" => "Frieza",
                "Apellidos" => "General",
                "Direccion" => "C/Espacio",
                "Telefono" => "647530128",
                "Correo_Electrónico" => "frieza@gmail.com",
                "Foto" => "<img src='imagenes/7.png' />",
                ),


            array(

                  "DNI" => "41265790H   ",
                  "Nombre" => "Cell",
                  "Apellidos" => "Androide",
                  "Direccion" => "C/Almeria",
                  "Telefono" => "606913624",
                  "Correo_Electrónico" => "cell@gmail.com",
                  "Foto" => "<img src='imagenes/8.png' />",
                  ),

            array(

                  "DNI" => "31285730Ñ  ",
                  "Nombre" => "Majin",
                  "Apellidos" => "Buu",
                  "Direccion" => "C/infinito",
                  "Telefono" => "600654987",
                  "Correo_Electrónico" => "buu@gmail.com",
                  "Foto" => "<img src='imagenes/9.png' />",
                  ),

     );


$alumno =  $alumnos  [ $_GET ["id"] ] ;

$dni = $alumno ["DNI"];
$nombre = $alumno ["Nombre"];
$apellido = $alumno ["Apellidos"];
$direccion = $alumno ["Direccion"];
$telefono = $alumno ["Telefono"];
$correo_electronico = $alumno ["Correo_Electrónico"];

echo "<center>
  <table class='striped'>
    <tr>
      <th colspan=2 align=center>Perfil del alumno</th>
   </tr>
   <tr>
    <td><img src = 'imagenes/$id.PNG' style='height:500px'></td>

    <td>
      <table id='datos'>
       <tr>
          <th colspan='2'> ".$nombre." ".$apellido."</th>
      </tr>
      <tr>
          <td>DNI :</td>
          <td>$dni</td>
      </tr>
      <tr>
          <td>Direccion :</td>
          <td>$direccion</td>
      </tr>
      <tr>
          <td>Telefono: </td>
          <td>$telefono</td>
      </tr>
      <tr>
          <td>Email :</td>
          <td>$correo_electronico</td>
      </tr>
    </table>
    </td>
    </tr>
</table>
</center>";




    ?>
    </div>
</body>
</html>
