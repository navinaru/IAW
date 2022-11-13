<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <meta charset="UTF-8">
    <title>Antonio Naveiro Exercicio08</title>
</head>
<body>

    <div class="cabtop">
        <img src="../recursos/logo.png" alt="logo" id="anslogo">
        <p><a href="../index.html" class="boton">indice</a></p>
    </div>

<div class="comptarea">
    <div class="nomtarea"><h1>Exercicio 8</h1></div>
    <div class="enunciado">
        <p>Crear	 un	 algoritmo	 que indique	 se	 un	 número	 é	 perfecto	 ou	 non.	 Dise	 que	 un	
número	é	perfecto	se	a	suma	dos	seus	divisores	é	igual	ao	número.	Por	exemplo,	6	ten	como	
divisores	1,	2	e	3,	entón	1+2+3=6.	Polo	tanto,	o	6	é	un	número	perfecto.	Se	o	número	é	9	ten	
como	divisores	1	e	3,	logo	1+3=4	polo	que	o	9	non	é	perfecto.	Utilizar	a	estrutura	for.</p>
    </div>
    <div class="respuesta">

    <?php
           $numero = 9 ;
           $numerocalc = $numero ;

           for($i = 1, $total = 0, $sum = 0; $i < $numerocalc; $i++){
            if ($numerocalc % $i == 0){
                $total++;
               $sum=$sum+$i;                 
           }                   
         }

         echo "la suma de los divisores de $numero es $sum \n" ;

         if ($numero == $sum) {
            echo "se trata de un numero perfecto";
         }
         else {
            echo "NO se trata de un numero perfecto";
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