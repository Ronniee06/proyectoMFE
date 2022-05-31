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
    //columna 1
    $MB11=$_POST['b11'];
    $MB21=$_POST['b21'];
    $MB31=$_POST['b31'];
    //columna 2
    $MB12=$_POST['b12'];
    $MB22=$_POST['b22'];
    $MB32=$_POST['b32'];
    //columna 3
    $MB13=$_POST['b13'];
    $MB23=$_POST['b23'];
    $MB33=$_POST['b33'];

    echo "<tr align=center>";

        echo "<td>".$MA11."</td>";
        echo "<td>".$MA12."</td>";
        echo "<td>".$MA13."</td>";
        
        echo "<td>".$MB11."</td>";
        echo "<td>".$MB12."</td>";
        echo "<td>".$MB13."</td>";

        $S11= $MA11 * $MB11 + $MA12 *  $MB21 + $MA13 *  $MB31;
        echo "<td>".$S11."</td>";
        $S12= $MA11 * $MB12 + $MA12 *  $MB22 + $MA13 *  $MB32;
        echo "<td>".$S12."</td>";
        $S13= $MA11 * $MB13 + $MA12 *  $MB23 + $MA13 *  $MB33;
        echo "<td>".$S13."</td>";


    echo "</tr>";

    echo "<tr align=center>";

        echo "<td>".$MA21."</td>";
        echo "<td>".$MA22."</td>";
        echo "<td>".$MA23."</td>";
        
        echo "<td>".$MB21."</td>";
        echo "<td>".$MB22."</td>";
        echo "<td>".$MB23."</td>";

        $S21= $MA21 * $MB11 + $MA22 *  $MB21 + $MA23 *  $MB31;
        echo "<td>".$S21."</td>";
        $S22= $MA21 * $MB12 + $MA22 *  $MB22 + $MA23 *  $MB32;
        echo "<td>".$S22."</td>";
        $S23= $MA21 * $MB13 + $MA22 *  $MB23 + $MA23 *  $MB33;
        echo "<td>".$S23."</td>";

    

    echo "</tr>";

    echo "<tr align=center>";

        echo "<td>".$MA31."</td>";
        echo "<td>".$MA32."</td>";
        echo "<td>".$MA33."</td>";
        echo "<td>".$MB31."</td>";
        echo "<td>".$MB32."</td>";
        echo "<td>".$MB33."</td>";

        $S31= $MA31 * $MB11 + $MA32 *  $MB21 + $MA33 *  $MB31;
        echo "<td>".$S31."</td>";
        $S32= $MA31 * $MB12 + $MA32 *  $MB22 + $MA33 *  $MB32;
        echo "<td>".$S32."</td>";
        $S33= $MA31 * $MB13 + $MA32 *  $MB23 + $MA33 *  $MB33;;
        echo "<td>".$S33."</td>";


    echo "</tr>";


?>