<?php

    /********* Matriz A *************/
   
   
    $MA21=$_POST['a21'];
    $MA22=$_POST['a22'];
    $MA23=$_POST['a23'];

    //Escalar
  
    $escalar=$_POST['b22'];

    $S11=$escalar*$MA21;
    $S12=$escalar*$MA22;
    $S13=$escalar*$MA23;

    echo "<tr align=center>";


        
        echo "<td>".$MA21."</td>";
        echo "<td>".$MA22."</td>";
        echo "<td>".$MA23."</td>";
        echo "<td>".$escalar."</td>";

        echo "<td>".$S11."</td>";
        echo "<td>".$S12."</td>";
        echo "<td>".$S13."</td>";


    echo "</tr>";


?>