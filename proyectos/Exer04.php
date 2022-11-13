<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <meta charset="UTF-8">
    <title>Antonio Naveiro Exercicio04</title>
</head>
<body>

    <div class="cabtop">
        <img src="../recursos/logo.png" alt="logo" id="anslogo">
        <p><a href="../index.html" class="boton">indice</a></p>
    </div>

<div class="comptarea">
    <div class="nomtarea"><h1>Exercicio 4</h1></div>
    <div class="enunciado">
        <p> Deseña	un	algoritmo	que	avalíe	a	puntuación	obtida	no	lanzamento	de	tres	dados	
        en	base	a	cantidade	de	seis	obtidos,	de	acordo	ao	seguinte:
        Para	simular	a	tirada	do	dado,	xera	o	número	utilizando	a	función	matemática	que	permite	
        obter	un	número	aleatorio.	Ter	en	conta	que	só	se	pode	obter	un	número	entre	1	e	6</p>
    </div>
    <div class="respuesta">
        <?php
        $dado1 = rand(1,6);
        $dado2 = rand(1,6);
        $dado3 = rand(1,6);
        $puntuacion = 0 ;

        echo "tiro1 \n $dado1 tiro2 \n $dado2 tiro3 \n $dado3 \n" ;

       if ($dado1 == 6) {
        $puntuacion++;
       }

       if ($dado2 == 6) {
        $puntuacion++;
       }

       if ($dado3 == 6) {
        $puntuacion++;
       }

       switch ($puntuacion) {
        case '1':
            echo "has conseguido bronze";
            break;

            case '2':
                echo "has conseguido plata";
                break;

                case '3':
                    echo "has conseguido oro!!!!!!!!";
                    break;
        
        default:
            echo "suspenso";
            break;
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
