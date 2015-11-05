<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    
    <?php
 
    $nombre=array("2222222X" => "Pepe",
                  "3333333X" =>  "Manuel",
                  "4444444X" => "Jose",
                  "5555555X" =>  "Rosa");
        
    $apellidos=array("2222222X" => "Pérez",
                     "3333333X" =>  "Jiménez",
                     "4444444X" => "Martínez",
                     "5555555X" =>  "Rodríguez");

echo "<table border=1>";

    foreach ( $nombre as $clave => $valor) {
        
        echo "<tr><td>$valor</td>"."<td>$apellidos[$clave]</td></tr>";
    }

    
    //Creo un variable $nombre y $apellidos que son vectores asociativos

    //Creamos la tabla con el border usando echo (Si no no tendremos tablas)

    /* Creamos un foreach para asociarlo donde $nombre as $clave (Equivale a "2222222X") y 
                                                          $valor(Equivale a "Pérez" ó "Pepe") */

    /* Como lo mostramos la primera columa <tr><td>$valor(muestra el nombre)</td> 
    todo esto lo concatenamos usando un punto "." 
    
    Ahora añadiremos una fila al lado con el apellido 
    pongo $apellidos[$clave] entre corchetes porque comparten la misma clave que seria por ejemplo del primero "2222222X" 
    y asi nos mostraria el apellido en la fila*/


    ?>
</body>
</html>
