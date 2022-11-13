<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <meta charset="UTF-8">
    <title>Antonio Naveiro Exercicio09</title>
</head>
<body>

    <div class="cabtop">
        <img src="../recursos/logo.png" alt="logo" id="anslogo">
        <p><a href="../index.html" class="boton">indice</a></p>
    </div>

<div class="comptarea">
    <div class="nomtarea"><h1>Exercicio 9</h1></div>
    <div class="enunciado">
        <p>Crear	un	algoritmo	que	mostre	a	táboa	de	multiplicar	completa	desde	o	número	1	
ao	10</p>
    </div>
    <div class="respuesta">

    <?php
            for ($i=1; $i <= 10 ; $i++) {
                $num1 = $i;
                $a = 1;
                echo "</br>";
                while ($a <= 10) {
                   $num2 = $a;
                   $total = $num1 * $num2;
                   echo "$num1 x $num2 = $total </br>";
                   $a++;
                }
            }
        ?>

    </div>
    

</div> 

<footer>
    <p>Antonio Naveiro Sequeiros</p>
    <p>
        <?php
            $t = date('d-m-Y');
            echo $t;
        ?>
    </p>
</footer>

</body>
</html>