<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <meta charset="UTF-8">
    <title>Antonio Naveiro Exercicio05</title>
</head>
<body>

    <div class="cabtop">
        <img src="../recursos/logo.png" alt="logo" id="anslogo">
        <p><a href="../index.html" class="boton">indice</a></p>
    </div>

<div class="comptarea">
    <div class="nomtarea"><h1>Exercicio 5</h1></div>
    <div class="enunciado">
        <p> Dado	 o	 día,	 mes	 e	 ano,	 determinar	 se	 é	 unha	 data	 correcta.	 Considerar	 s	 anos	
bisestos	 e	 que	 o	 día,	mes	 e	 ano	 indicados	 son	 correctos.	 Por	 exemplo:	 se	 se	 indica	 o	 32	 de	
xaneiro	de	2016	indicar	que	a	data	é	incorrecta	porque	se	introduciu	mal	o	día.</p>
    </div>
    <div class="respuesta">

    <?php
          $dia = 29 ;
          $mes = 2 ;
          $ano = 2016 ;
          $calcdias = 0 ;

      for ($i=1;$i<=$mes;$i++){

              if($i==4 || $i==6 || $i==9 || $i==11 ){
                  $diasmax = 30 ;
              }
              elseif($i==2){
                  $diasmax = 28 ;

              }
              else{
                  $diasmax = 31 ;
              }
          }
          

          if ((($ano % 4 == 0) && ($ano % 100!= 0)) || ($ano%400 == 0)) {
            echo "$ano es bisiesto, \n";
            if ($mes == 2) {
                ++$diasmax;
              }
          }
          
          else {
            echo "$ano no es bisiesto, \n";
          }
   
          if ($dia > $diasmax || $dia == 0) {
            echo "O dia non e correcto,";
          }
          elseif ($dia <= $diasmax) {
            echo "o dia numero $dia e correcto, \n";
          }
          if ($mes > 12 || $mes == 0) {
            echo "O mes e incorrecto";
          }
          elseif ($mes < 12) {
            echo "o mes numero $mes e correcto, \n";
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
