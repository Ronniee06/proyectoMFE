<?php

    /********* Matriz A *************/
   
   
    $MA21=$_POST['a21'];
    $MA22=$_POST['a22'];
    $MA23=$_POST['a23'];
   
    $MA31=$_POST['a31'];
    $MA32=$_POST['a32'];
    $MA33=$_POST['a33'];

    $MB11=$_POST['b11'];
    $MB12=$_POST['b12'];
    $MB13=$_POST['b13'];

    //Escalar
  
    $MB22=$_POST['b22'];



    echo "<tr align=center>";

        echo "<td>".$MB11."</td>";
        echo "<td>".$MB12."</td>";
        echo "<td>".$MB13."</td>";

        $S11=$MB22*$MB11;
        echo "<td>".$S11."</td>";
        $S12=$MB22*$MB12;
        echo "<td>".$S12."</td>";
        $S13=$MB22*$MB13;
        echo "<td>".$S13."</td>";


    echo "</tr>";

    echo "<tr align=center>";

        echo "<td>".$MA21."</td>";
        echo "<td>".$MA22."</td>";
        echo "<td>".$MA23."</td>";
        echo "<td>".$MB22."</td>";
    
        $S22=$MB22*$MB22;
        echo "<td>".$S22."</td>";
      
       

    

    echo "</tr>";

    echo "<tr align=center>";

        echo "<td>".$MA31."</td>";
        echo "<td>".$MA32."</td>";
        echo "<td>".$MA33."</td>";
      
    echo "</tr>";


?>