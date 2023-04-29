<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tarea 01 - Alumna</title>
</head>
<body>

        <form method="post" action="tarea1_1.php">

        -------------------------------------------------------------
        LA EMPRESA
        ------------------------------------------------------------
        <br>
        Ingresar la cantidad total de hijos que tiene: <br> <input type="text" name="cant_hijos"><br>

        Ingresar su importe total vendido del mes: <br> <input type="text" name="importe"><br>
       
        Resultados: <br>
        <input type="submit" name="Calcular" value="Calcular">

        </form>

    <?php

        $comision=$_POST['importe'];
            $com = $comision * 0.075 ;
            echo "La comisión es de: ".$com, " soles.";

    ?>
    <br>
    <?php

        $bonificacion=$_POST['cant_hijos'];
            $multi = $bonificacion * 50;
            echo "La bonificación es de: ".$multi, " soles.";
  
    ?>
    <br>
    <?php

        $suel_brut=600 + $com + $multi;
        echo "El sueldo bruto es de: ".$suel_brut, " soles.";

    ?>
    <br>
    <?php

        $porc_desc=11 / 100;
        $descuento=$suel_brut * $porc_desc;
        echo "El descuento es de: ".$descuento, " soles.";

    ?>
    <br>
    <?php

        $suel_neto=$suel_brut - $descuento;
        echo "El sueldo neto es de: ".$suel_neto, " soles.";

    ?>

</body>
</html>
