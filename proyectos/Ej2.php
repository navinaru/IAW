<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <meta charset="UTF-8">
    <title>Antonio Naveiro Exercicio02</title>
</head>
<body>

    <div class="cabtop">
        <img src="../recursos/logo.png" alt="logo" id="anslogo">
        <p><a href="../index.html" class="boton">indice</a></p>
    </div>

<div class="comptarea">
    <div class="nomtarea"><h1>Exercicio 2</h1></div>
    <div class="enunciado">
        <p>Dada	un	día	e	o	número	de	mes,	devolver	a	estación	do	ano	de	acordo	á	seguinte	
        táboa:</p>
    </div>
    <div class="respuesta">

    <?php
           $mes = 3 ;
           $dia = 21 ;

           echo "la estacion del mes $mes dia $dia es: \n";
           
           if ($mes == 12 && $dia >= 21  || $mes == 1 || $mes == 2 || $mes == 3 && $dia <= 20) {
            echo "INVIERNO";
           }

           if ($mes == 3 && $dia >= 21  || $mes == 4 || $mes == 5 || $mes == 6 && $dia <= 21) {
            echo "PRIMAVERA";
           }

           if ($mes == 6 && $dia >= 22  || $mes == 7 || $mes == 8 || $mes == 9 && $dia <= 22) {
            echo "VERANO";
           }

           if ($mes == 9 && $dia >= 23  || $mes == 10 || $mes == 11 || $mes == 12 && $dia <= 23) {
            echo "OTONO";
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