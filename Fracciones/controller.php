<?php
    
    $opercion = $_POST['operacion'];

    switch ($opercion) {

        case "suma":
            header("Location: suma.php");
            break;
  
        case "resta":
            header("Location: resta.php ");
            break;
  
        case "multiplicacion":
            header("Location: multiplicacion.php");
            break;
        
        case "division":
            header("Location: division.php");
            break;
           
    }

?>

