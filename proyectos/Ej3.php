<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <meta charset="UTF-8">
    <title>Antonio Naveiro Exercicio03</title>
</head>
<body>

    <div class="cabtop">
        <img src="../recursos/logo.png" alt="logo" id="anslogo">
        <p><a href="../index.html" class="boton">indice</a></p>
    </div>

<div class="comptarea">
    <div class="nomtarea"><h1>Exercicio 3</h1></div>
    <div class="enunciado">
        <p> Unha	empresa	estableceu	diferentes	prezos	para	o	seus	produtos,	segundo	a	súa	
        calidade: Crea	un	script	que	devolva	o	prezo	a	pagar	para	un	produto e	unha	calidade	dada.
        Facer	o	algoritmo	empregando	só	a	estrutura	switch.</p>
    </div>
    <div class="respuesta">

    <?php
        $producto = 3 ;
        $calidad = 4 ;

        echo "el precio del producto $producto calidad $calidad es: \n" ; 

        switch ($producto . $calidad) {
            case 1 . 1:
                echo "5000" ;
                break;

            case 1 . 2:
                echo "4500" ;
                break;

            case 1 . 3:
                echo "4000" ;
                break;
            
                case 2 . 1:
                    echo "4500" ;
                    break;
    
                case 2 . 2:
                    echo "4000" ;
                    break;
    
                case 2 . 3:
                    echo "3500" ;
                    break;

                    case 3 . 1:
                        echo "4000" ;
                        break;
        
                    case 3 . 2:
                        echo "3500" ;
                        break;
        
                    case 3 . 3:
                        echo "3000" ;
                        break;

            
            default:
                echo "No existe precio para este producto";
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