<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    
<?php
 
$numeros = array(19, 12, 27, 36, 1, 56, 48, 22, 69, 46); // Creamos una array con los  10 numeros


for($i=0; $i<= count($numeros)-1;  ) {  /*Usamos bucle for y con $i lo ponemos a 0 y este le asigna un valor entero del 0-9 a cada valor del array
                                   le decimos reste 1 a cada valor de $numeros si es menor o igual */

if ($i == 0)  // Si la $i es igual a 0
    
    $maximo = $numeros[0]; /*Aqui igualamos la variable $maximo con la $numeros en su primera posicion es decir 0 que equivale 19 con lo que el                                primer numero pasa a ser el maximo */ 
    
    else {
                            /* Aqui lo que hacemos es comparar el valor anterior con el resto de numeros del array y si lo supera sera el                                       nuevo maximo  Ej: 19 es el primer maximo  lo va comparando con todos los valores cuando encuentra otro mayor hace lo                               mismo */
        if ($numeros[$i] > $maximo)  
            $maximo = $numeros[$i]; 
 }
$i++; //con este vamos almacenando los nuevos maximos hasta llegar al final.
}
 
echo 'El máximo es: '.$maximo;
?>

</body>
</html>
