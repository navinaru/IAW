<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <meta charset="UTF-8">
    <title>Antonio Naveiro Exercicio07</title>
</head>
<body>

    <div class="cabtop">
        <img src="../recursos/logo.png" alt="logo" id="anslogo">
        <p><a href="../index.html" class="boton">indice</a></p>
    </div>

<div class="comptarea">
    <div class="nomtarea"><h1>Exercicio 7</h1></div>
    <div class="enunciado">
        <p>Determinar	se	un	número	é	capicúa	ou	non.	Dise	que	un	número	é	capicúa	se	ao	
inverter	as	 súas	 cifras	 dá	 o	mesmo	 número.	 Por	exemplo,	 12321	invertido	é	 12321,	entón	 o	
número	é	capicúa.</p>
    </div>
    <div class="respuesta">

    <?php  
        $numero = 123 ;
        $numcalculo = $numero;  
        $invnum = 0 ;  
        while ($numcalculo > 1)  {  
            $resto = $numcalculo % 10;  
            $invnum = ($invnum * 10) + $resto;
            //detener while  
            $numcalculo = ($numcalculo / 10);   
        }
        
        
        echo "el numero invertido de $numero es: $invnum"; 
        if ($numero == $invnum) {
            echo "\neste numero es capicua \n";
        } 
        else {
            echo "\neste numero NO es capicua \n";
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
