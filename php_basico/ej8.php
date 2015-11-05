<!DOCTYPE html>
<html lang="">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
</head>

<body>
    
    
    <?php
    //General un valor entre 1 y 5 y luego utilizar ese valor para sacar por pantalla ("uno", "dos","tres", "cuatro" o "cinco" según sea el valor       obtenido
   
    $aleatorio=rand(1,5);

    switch ( $aleatorio) {
        case "1":
            echo "UNO";
        break;
            
        case "2":
            echo "DOS";
        break;
            
        case "3":
            echo "TRES";
        break;
            
        case "4":
            echo "CUATRO";
        break;
        case "5":
            echo "CINCO";
        break; 
    };

    ?>

</body>
</html>