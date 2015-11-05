<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <?php
  
    $ciudad=array("San Critobal","Cucuta","Maracaibo","Caracas");   
    echo " numero de elementos ".sizeof($ciudad)."<br>";            
    for ($i=0;  $i<sizeof($ciudad);  $i++) {
    echo "Ciudad $i"."<br>"."<h1>".$ciudad[$i]."</h1>"."<br>";
        
    }


//Dentro de variable ciudad  meto los nombres de las ciudades en un vector(array).

//Utilizo echo para mostrarlo y lo concateno con sizeof con la variable ciudad asi me muestra ==> Numero de elementos 4.

//sizeof cuenta el numero de palabras dentro el array y las pone como numero. Ej: "San Critobal","Cucuta","Maracaibo","Caracas" ==> 4 

//Explicacion detallada 1
//Creo un vector indexado for 
//Creo variable    $i=0;    y la pongo a 0
//$i<sizeof($ciudad);  ==> Esto hace que recorra el vector desde 0 a 3 
//$i++ ==> Esto hace que una vez termina  0 que es la variable inicial continua con 1 asi hasta llegar al final que seria 3 


//Explicacion detallada 2
//echo "Ciudad $i"."<br>"."<h1>".$ciudad[$i]."</h1>"."<br>";

// Aqui muestro con un echo ciudad y con $i el numero ==> Ciudad 0
//Concateno con un punto "." y "<br>" para salto de linea
//Para que se vea en negrita y mas grande "h1" concateno $ciudad[$i] ==> Aqui consigo que me muestre todas las ciudades dentro del bucle cierro el <h1> y doy salto de linea concatenando con <br>

    
      
    ?>
</body>
</html>
