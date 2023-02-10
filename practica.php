<?php
if(isset($_GET["suma_num"]))
    $res = $_GET["num1"] + $_GET["num2"];
    $res2 = $_GET["num1"] - $_GET["num2"];
    $res3 = $_GET["num1"] * $_GET["num2"];
    $res4 = $_GET["num1"] / $_GET["num2"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="practica.css">
   
</head>
<body>
    <form action="practica.php" method="get" name="suma_num">
        <section>
            <h1>Adicion</h1>
            <div>
                <input type="number" name="num1" placeholder="Ingrese el primer numero">
                <input type="number" name="num2" placeholder="Ingrese el segundo numero">
                <?php   echo "<input type='' value='$res'/>";
                        echo "<input type='' value='$res2'/>"; 
                        echo "<input type='' value='$res3'/>"; 
                        echo "<input type='' value='$res4'/>"; 
                
                ?>
                <button type="submit" name="suma_num" value="suma_num">Resultado</button>
            </div>
        </section>
    </form>
   
</body>
</html>
