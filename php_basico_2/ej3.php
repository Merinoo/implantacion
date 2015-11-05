<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    
<?php
 

$nombres=array("roberto","juan","marta","moria","martin","jorge","mirian","nahuel","mirta"); //Metemos todos lo nombres en un array.

$nombres_m=array();     // Creamos un segundo array y los dejamos vacio y este sera el que muestre los nombre que empiezen por M.
    
$i=0;   // Creamos la variable $i y la ponemos a 0.

foreach ($nombres as $k) {  /* Creamos un foreach que guarde el valor para cada nombre de $nombres como $k quiere decir que guarda
                            dentro de $k ==> "roberto","joan","marta","moria","martin","jorge","mirian","nahuel","mirta".*/
        
    if ($k[0] == 'm') {     /* Ponemos condicion con if le decimos que $k[0] lo que va dentro corchetes con numero 0 es la posicion de la letra
                            es igual a letra "m"  quiere decir que de cada palabra del array mirara cada primera letra ej: roberto ==> r */

        $nombres_m[$i] = $k;  /* Si se ha cumplido la condicion de arriba y comienza por "m" if pasara dentro del array a $nombre_m Ej: primer                                 nombre es roberto empieza r ese no lo mete, mira el siguiente tampoco, tercero marta comienza por m pues lo                                       almaceno dentro del array y con[$i] le da la posicion numerada Ej: marta(0)  */  
                            
          $i++;              /* $i++ Lo que hace es incrementar, lo que mete dentro del array sino pusieramos esto solo apareceria la ultima                                  coincidencia que hayamos puesto dentro del array Ej: mirta y con esto pues mete cada uno de los que van dentro del                                array asi marta(0) , moria (1), ... */
        }
}
 
foreach ($nombres_m as $clave=>$valor) { /* Este segundo foreach nos mostrara por pantalla el resultado almacenado dentro $nombres_m usando                                                $clave => $valor   Ej= $clave=0   $valor=marta  se ve claro si cambiamos la letra a r y hacemos                                                  var_dump($clave); var_dump($valor); Nos aparecera roberto y nos dira su posicion el puntero 0 y la                                                cadena de 7*/
    
    echo "$valor"; //Mostramos con variable valor
    
    if (count($nombres_m)-1 != $clave) /* Aqui usamos if para que cuente dentro $nombres_m y reste 1 por cada $clave
                                       la finalidad de esto esta clara recorre el array restando */
        
        echo ', ';                      /* Cada vez que pasa por uno pone una coma a no ser que el valor sea -1
                                        Ej: 4-1=3; 3-1=2; 2-1=1 1-1=0 */
    
    else
        echo '.';                       /* Cuando llega al ultimo pone un punto  
                                        en este array seria 0-1 = -1 */
}


?>
    
</body>
</html>
