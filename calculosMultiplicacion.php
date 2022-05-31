<?php

    /********* Matriz A *************/
    //fila 1
    $MA11=$_POST['a11']; 
    $MA12=$_POST['a12'];
    $MA13=$_POST['a13'];

    /********* Matriz B *************/
    //columna 1
    $MB11=$_POST['b11'];
    $MB12=$_POST['b12'];
    $MB13=$_POST['b13'];

    echo "<tr align=center>";

        echo "<td>".$MA11."</td>";
        echo "<td>".$MA12."</td>";
        echo "<td>".$MA13."</td>";
        
        echo "<td>".$MB11."</td>";
        echo "<td>".$MB12."</td>";
        echo "<td>".$MB13."</td>";

        $S11= ($MA11 * $MB11) + ($MA12 *  $MB12) + ($MA13*$MB13);
        echo "<td>".$S11."</td>";


    echo "</tr>";


?>