<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tarea 01 - Alumna</title>
</head>
<body>

        <form method="post" action="tarea1.php">

        -------------------------------------------------------------
        LA EMPRESA
        ------------------------------------------------------------
        <br>
        Ingresar la edad de su(s) hijo(s) escolar(es) mayor(es): <br> <input type="text" name="edad"><br>
        
        Resultados: <br>
        <input type="submit" name="Calcular" value="Calcular">
    
        </form>

<?php

$hijo=$_POST['edad'];
    if ($hijo < 17){
        echo 'Puede continuar con el proceso <a href="tarea1_1.php">AQUÍ</a> para completar todo.';
    } else {
        echo "No puede continuar con el proceso.";
    }

?>

</body>
</html>