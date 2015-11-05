<!DOCTYPE html>
<html lang="">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
</head>

<body>
    
    
    <?php
    //Utilizando switch comprobar si el valor de una variables es "arriba", "abajo", "derecha" o "izquierda" sacando por pantalla en negrita un         mensaje informando del valor
  
  $i="arriba";

switch ($i) {
case "arriba":
	echo "arriba";
	break;
case "abajo":
	echo "abajo";
	break;
case "izquierda":
	echo "izquierda";
	break;
case "derecha":
	echo "derecha";
	break;
}
?>

</body>
</html>