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
                            RESTA DE VECTORES 
                        </blink>
                    </h1>
                </font>
            </b>

        </marquee>

        <form action="operacionResta.php" method="POST">

            <table border = 1 >

                <tr align="center">
                    <td colspan=7> RESTA </td> 
                </tr>

                
                <tr align="center">
                    <td colspan=3>Vector A</td>
                    <td rowspan=4>-</td>
                    <td colspan=3>Vector B</td>
                </tr>

                <tr align="center">
                    <td><input type="text" name="a11" size=3></td>
                    <td><input type="text" name="a12" size=3></td>
                    <td><input type="text" name="a13" size=3></td>
                    <td><input type="text" name="b11" size=3></td>
                    <td><input type="text" name="b12" size=3></td>
                    <td><input type="text" name="b13" size=3></td>
                </tr>

                <tr align=center>
                    <td colspan=7> <input type="submit" name="cal" value="Calcular"> </td>
                </tr>

            </table>

        </form>

    </center>

</body>