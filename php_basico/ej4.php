<!DOCTYPE html>
<html lang="">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
</head>

<body>
    
    
    <?php
    //Utilizando dos variables muestra por pantalla el resultado de utilizar la función round() con las cuatro operaciones básicas (+,-,*,/). Busca     en el manual la operación round()
   
    $variablea="3.4";
    $variableb="2.7";

    echo round($variablea+$variableb)." "."==> Ejemplo de la suma "."<br>";//Ejemplo de la suma redondea a 6 siendo el total 6.1
    echo round($variablea-$variableb)." "."==> Ejemplo de la resta "."<br>"; //Ejemplo de la resta 
    echo round($variablea*$variableb)." "." ==> Ejemplo de la multiplicación"."<br>"; //Ejemplo de la multiplicacion
    echo round($variablea/$variableb)." "."==> Ejemplo de la división "."<br>";; //Ejemplo de la division

    //Es importante concatenar con . y "" y en el caso de la operacion fuera de los parentesis;
    ?>

</body>
</html>

