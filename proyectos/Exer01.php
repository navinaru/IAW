<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <meta charset="UTF-8">
    <title>Antonio Naveiro Exercicio01</title>
</head>
<body>

    <div class="cabtop">
        <img src="../recursos/logo.png" alt="logo" id="anslogo">
        <p><a href="../index.html" class="boton">indice</a></p>
    </div>

<div class="comptarea">
    <div class="nomtarea"><h1>Exercicio 1</h1></div>
    <div class="enunciado">
        <p>Dada a hora, minuto e segundo, atopar a hora do seguinte segundo.</p>
    </div>
    <div class="respuesta">

    <?php
            $horas = 23 ;
            $minutos = 60 ;
            $segundos = 56 ;
            
            while ($segundos >= 60) {
                $segundos = $segundos - 60 ;
                $minutos++ ;
            }

            while ($minutos >= 60) {
                $minutos = $minutos - 60 ;
                $horas++ ;
            }

            while ($horas > 23) {
                $horas = $horas - 24 ;
            }

            echo "la hora es $horas : $minutos : $segundos \n" ;
            echo "la siguiente hora es \n" . ++$horas ;
       
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
