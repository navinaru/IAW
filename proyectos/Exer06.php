<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <meta charset="UTF-8">
    <title>Antonio Naveiro Exercicio06</title>
</head>
<body>

    <div class="cabtop">
        <img src="../recursos/logo.png" alt="logo" id="anslogo">
        <p><a href="../index.html" class="boton">indice</a></p>
    </div>

<div class="comptarea">
    <div class="nomtarea"><h1>Exercicio 6</h1></div>
    <div class="enunciado">
        <p>Dados	 dous	 números	 determinar	 se	 son	amigos.	Dous	 números	 son	amigos	 se	a	
suma	dos	divisores	de	un	deles	é	igual	ao	outro	e	viceversa.	Por	exemplo,	os	números	220	e	
284	son	amigos.</p>
    </div>
    <div class="respuesta">

    <?php
            $numero1 = 220 ;
            $numero2 = 284 ;        
           
           
                      for($i = 1, $total1 = 0, $sum1 = 0; $i < $numero1; $i++){
                         if ($numero1 % $i == 0){
                             $total1++;
                            $sum1=$sum1+$i;                 
                        }                   
                      }
           
           
                     for($i = 1, $total2 = 0, $sum2 = 0; $i < $numero2; $i++){
                         if ($numero2 % $i == 0){
                             $total2++;
                            $sum2=$sum2+$i;                 
                          }                   
                      }
                     echo "La suma de divisores de $numero1 es: ".$sum1." <br> La suma de divisores de $numero2 es: ".$sum2;
            if ($numero1 == $sum2 && $numero2 == $sum1){
          echo " <br> Los Numeros son amigos";
         }
            
            else{
          echo "<br> Los Numeros NO son amigos";
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
