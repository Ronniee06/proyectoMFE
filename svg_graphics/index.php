<?php
    
    $array['Jan'] = 10;
    $array['Feb'] = 90;
    $array['Mar'] = 30;
    $array['Apr'] = 50;
    $array['May'] = 20;
    $array['Jun'] = 350;
    $array['Jul'] = 200;
    $array['Aug'] = 50;

    $max_data = max($array) + 100;

    $max_width = 500;
    $max_height= 200;

    $xgap = $max_width / (count($array) + 1);
    $ygap = $max_height / (count($array) + 1);

    $one_unit = $max_height / $max_data;

?>

<svg viewbox="0 0 <?php echo $max_width . " " . $max_height; ?> " style="font-size:12px; font-family:tahoma; background-color: #056795; width:50%;">

    <style>
        @keyframes move{

            0%{transform:rotate(-180deg);opacity:0;}
            100%{transform: rotate(0deg);opacity:1;}

        }
        @keyframes move2{

            0%{transform: translate(200px);opacity:0;}
            100%{transform: translate(0px);opacity:1;}

        }

        circle{
            fill:grey;
        }
        circle:hover{
            fill:pink;
            stroke-width: 5px;
        }

    </style>

    <?php

        $num = $xgap;
        $num2 = $ygap;

        $points = "";
        $elements = "";

        foreach($array as $key => $value){

            $y = $max_height - ($value * $one_unit);

            $elements .= "<polyline points='$num,0 $num,$max_height' style='stroke:#ffffff22;' />";
            $elements .=  "<polyline points='0,$num2 $max_width,$num2' style='stroke:#ffffff22;' />";

            $elements .=  "<text x='$num' y='12' style='fill:white;' > $key </text>";
            $elements .=  "<text x='$num' y='".($y -10)."' style='fill:white;' > $value </text>";



            $points .= "$num,$y ";
            echo "<polyline points='$points' style='animation: move 1.".rand(0,9)."s ease;stroke:white;' />";
            $points = "$num,$y ";

            $elements .=  "<a href=''><circle r='5' cx='$num' cy='$y' style='animation: move2 1.".rand(0,9)."s ease; stroke:white;fill:grey;' /></a>";

            
            $num += $xgap;
            $num2 += $ygap;

        }

        echo $elements;
    
    ?>


</svg>