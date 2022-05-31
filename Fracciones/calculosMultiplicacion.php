<?php


    //fila 1
    $A1=$_POST['a1'];
    $A2=$_POST['a2'];

    $B1=$_POST['b1'];
    $B2=$_POST['b2'];

   $totalNumerador = $A1*$B1;
   $totalDenominador = $A2*$B2;
    echo "<table border='3'";
        echo "<tr>"."<th> Resultado </th>"."</tr>";
        echo "<tr>";
            echo "<td> &nbsp &nbsp" . $totalNumerador . "&nbsp &nbsp</td>";
        echo "</tr>";

        echo "<tr>";
            echo "<td> &nbsp &nbsp " . $totalDenominador . "&nbsp &nbsp</td>";
        echo "</tr>";
        
echo "</table>";
?>