<head>
    <title> OPERACIONES ENTRE VECTORES Y MATRICES: SUMA Y RESTA DE 3 X 3</title>
</head>

<body bgcolor="#000000" text="#ffff00" topmargin=50 link="#FF0000" vlink="#ffffff" alink="#FF9900">

    <center>

        <marquee bgcolor="#006699" behavior="scroll" direction="left">

            <b>
                <font color="#FFFFCC" size="5">
                    <h1>
                        <blink>
                            ESCALARA DE VECTORES 
                        </blink>
                    </h1>
                </font>
            </b>

        </marquee>

        <form action="operacionEscalar.php" method="POST">

            <table border = 1 >

                <tr align="center">
                    <td colspan=7> ESCALAR </td> 
                </tr>

                
                <tr align="center">
                    <td colspan=3>Vector A</td>
                    <td rowspan=4>x</td>
                    <td colspan=3>Escalar </td>
                </tr>

                

                <tr align="center">

                    <td><input type="text" name="a21" size=3></td>
                    <td><input type="text" name="a22" size=3></td>
                    <td><input type="text" name="a23" size=3></td>
                 
                    <td><input type="text" name="b22" size=3></td><!--Escalar-->
                 
                </tr>

                <tr align=center>
                    <td colspan=7> <input type="submit" name="cal" value="Calcular"> </td>
                </tr>

            </table>

        </form>

    </center>

</body>