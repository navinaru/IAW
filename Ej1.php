<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;900&display=swap" rel="stylesheet">
    <link href="./css/normalize.css" rel="stylesheet" type="text/css" /><link rel="stylesheet" href="./css/style.css">
    <meta charset="UTF-8">
    <title>Implantacion Web</title>
</head>
<body>

    <div class="cabtop">
        <img src="./recursos/logo.png" alt="logo" id="anslogo">
        <p><a href="/phpmyadmin/" class="boton">indice</a></p>
    </div>

<div class="comptarea">
    <div class="nomtarea"><h1>plantilla HTML/CSS</h1></div>
    <div class="enunciado">
        <p>Dada a hora, minuto e segundo, atopar a hora do seguinte segundo.</p>
    </div>
    <div class="respuesta">

    <?php
            $horas = 23 ;
            $minutos = 30 ;
            $segundos = 56 ;
            
            while ($segundos >= 60) {
                $segundos = $segundos - 60 ;
                $minutos++ ;
            }

            while ($minutos >= 60) {
                $minutos = $minutos - 60 ;
                $horas++ ;
            }

            while ($horas >= 24) {
                $horas = $horas - 24 ;
            }

            echo "la hora es $horas - $minutos - $segundos \n" ;
            echo "la siguiente hora es \n" . ++$horas ;
       
        ?>

    </div>
    

</div> 

<footer>
    <p>Antonio Naveiro Sequeiros</p>
    <p>22 de septiembre 2022</p>
</footer>

</body>
</html>