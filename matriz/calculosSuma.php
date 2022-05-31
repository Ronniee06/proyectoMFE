<?php

    /********* Matriz A *************/
    //fila 1
    $MA11=$_POST['a11']; 
    $MA12=$_POST['a12'];
    $MA13=$_POST['a13'];
    //fila 2
    $MA21=$_POST['a21'];
    $MA22=$_POST['a22'];
    $MA23=$_POST['a23'];
    //fila 3
    $MA31=$_POST['a31'];
    $MA32=$_POST['a32'];
    $MA33=$_POST['a33'];

    /********* Matriz B *************/
    //fila 1
    $MB11=$_POST['b11'];
    $MB12=$_POST['b12'];
    $MB13=$_POST['b13'];
    //fila 2
    $MB21=$_POST['b21'];
    $MB22=$_POST['b22'];
    $MB23=$_POST['b23'];
    //fila 3
    $MB31=$_POST['b31'];
    $MB32=$_POST['b32'];
    $MB33=$_POST['b33'];

    echo "<tr align=center>";

        echo "<td>".$MA11."</td>";
        echo "<td>".$MA12."</td>";
        echo "<td>".$MA13."</td>";
        
        echo "<td>".$MB11."</td>";
        echo "<td>".$MB12."</td>";
        echo "<td>".$MB13."</td>";

        $S11=$MA11+$MB11;
        echo "<td>".$S11."</td>";
        $S12=$MA12+$MB12;
        echo "<td>".$S12."</td>";
        $S13=$MA13+$MB13;
        echo "<td>".$S13."</td>";


    echo "</tr>";

    echo "<tr align=center>";

        echo "<td>".$MA21."</td>";
        echo "<td>".$MA22."</td>";
        echo "<td>".$MA23."</td>";
        
        echo "<td>".$MB21."</td>";
        echo "<td>".$MB22."</td>";
        echo "<td>".$MB23."</td>";

        $S21=$MA21+$MB21;
        echo "<td>".$S21."</td>";
        $S22=$MA22+$MB22;
        echo "<td>".$S22."</td>";
        $S23=$MA23+$MB23;
        echo "<td>".$S23."</td>";

    

    echo "</tr>";

    echo "<tr align=center>";

        echo "<td>".$MA31."</td>";
        echo "<td>".$MA32."</td>";
        echo "<td>".$MA33."</td>";
        echo "<td>".$MB31."</td>";
        echo "<td>".$MB32."</td>";
        echo "<td>".$MB33."</td>";

        $S31=$MA31+$MB31;
        echo "<td>".$S31."</td>";
        $S32=$MA32+$MB32;
        echo "<td>".$S32."</td>";
        $S33=$MA33+$MB33;
        echo "<td>".$S33."</td>";


    echo "</tr>";


?>