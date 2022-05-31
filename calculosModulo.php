<?php

    /********* Matriz A *************/
   
   
    $MA21=$_POST['a21'];
    $MA22=$_POST['a22'];
    $MA23=$_POST['a23'];

    //Escalar
  

    $S11=$MA21*$MA21;
    $S12=$MA22*$MA22;
    $S13=$MA23*$MA23;

    $suma=$S11+$S12+$S13;
    $modulo = sqrt($suma);
    echo "<tr align=center>";


        
        echo "<td>".$MA21."</td>";
        echo "<td>".$MA22."</td>";
        echo "<td>".$MA23."</td>";

        echo "<td>".$modulo."</td>";


    echo "</tr>";


?>