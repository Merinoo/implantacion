<!DOCTYPE html>
<html lang="">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
</head>

<body>
    
    
    <?php
    //Programa en PHP para calcular el mayor de 2 enteros.
   
    $variablea="8";
    $variableb="4";

    if ($variablea > $variableb) {
        echo "La variable A es mayor que La variable B"; }
        
    elseif ($variablea < $variableb) {
        echo "La variable B es menor que La variable A"; }

    else { 
        echo "La variable A es igual a La variable B";}
        

    /*Recordar que las condiciones entre parentesis () y con sus llaves {
    las mostramos con echo y cerramos llaves  } ademas del punto y coma;
    una vez hecho esto podemos seguir con los elseif y en ultimo lugar else*/
    ?>

</body>
</html>