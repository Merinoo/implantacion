<!DOCTYPE html>
<html lang="">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
</head>

<body>
    
    
    <?php
    //Relizar un programa que utilizando la función date() (buscarla en el manual) nos diga si el sitio está o no fuera de servicio. Estará fuera       activo si estamos en los 10 primero días del mes.
   
    $tiempo=date("d"); //Con esto creo la variable tiempo y dentro almaceno con date ("d") la de equivale al numero de los dias 01 hasta 31;

    if ($tiempo <= 10) {
        echo "Sitio en funcionamiento"; }
        
    else {
        echo "Sitio fuera de servicio"; }    
    /*Es importante recordar en este que la variable tiempo tiene los dias y al ponerle el signo < el = detras cogera el mismo dia
   el la primera condicion sino se nos quedara fuera el dia 10*/
    ?>

</body>
</html>