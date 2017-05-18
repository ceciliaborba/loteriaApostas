<?php
    
    function geradorApostas($possibilidades, $min, $max){
    
        echo "Quantas dezenas você deseja sortear?";
    
        $qtdeDezenas = trim(fgets(STDIN));
    
        while ($qtdeDezenas < $min || $qtdeDezenas > $max) {
    
            echo "Inválido. Quantas dezenas você deseja sortear";
            $qtdeDezenas = fgets(STDIN);
        }

        echo "Quantos jogos você quer apostar?";
        $qtdeApostas = trim(fgets(STDIN));

        for($i = 0; $i < $qtdeApostas; $i++){
            $dezenasSorteadas = [];

            for($j = 0; $j < $qtdeDezenas; $j++){
                $num = rand(1, $possibilidades);

                if(!in_array($num, $dezenasSorteadas)){
                    $dezenasSorteadas[$j] = $num;
                }else{
                    $j--;
                }
            }

            echo "resultado aposta ".($i+1).": ";

            sort($dezenasSorteadas);

            foreach ($dezenasSorteadas as $dezena){
                echo "$dezena ";
            }
            echo "\n";
        }
        echo "\n";
    }

    //--------------------------------------MEGA SENA----------------------------------

    if ($alternativa == 1 && $qtdeDezenas == 6) {
        $pagar = $qtdeDezenas * 3.50;
        echo $pagar;
    } elseif ($alternativa == 1 && $qtdeDezenas == 7) {
        $pagar = $qtdeDezenas * 24.50;
        echo $pagar;
    } elseif ($alternativa == 1 && $qtdeDezenas == 8) {
        $pagar = $qtdeDezenas * 98;
        echo $pagar;
    } elseif ($alternativa == 1 && $qtdeDezenas == 9) {
        $pagar = $qtdeDezenas * 294;
        echo $pagar;
    } elseif ($alternativa == 1 && $qtdeDezenas == 10) {
        $pagar = $qtdeDezenas * 735;
        echo $pagar;
    } elseif ($alternativa == 1 && $qtdeDezenas == 11) {
        $pagar = $qtdeDezenas * 1617;
        echo $pagar;
    } elseif ($alternativa == 1 && $qtdeDezenas == 12) {
        $pagar = $qtdeDezenas * 3234;
        echo $pagar;
    } elseif ($alternativa == 1 && $qtdeDezenas == 13) {
        $pagar = $qtdeDezenas * 6006;
        echo $pagar;
    } elseif ($alternativa == 1 && $qtdeDezenas == 14) {
        $pagar = $qtdeDezenas * 10510.50;
        echo $pagar;
    } elseif ($alternativa == 1 && $qtdeDezenas == 15) {
        $pagar = $qtdeDezenas * 17517.50;
        echo $pagar;
    } else {
        echo "Numero invalido";
    }

    //-----------------------------------QUINA-----------------------------------

    if ($alternativa == 2 && $qtdeDezenas == 5) {
        $pagar = $qtdeDezenas * 1.50;
        echo $pagar;
    } elseif ($alternativa == 2 && $qtdeDezenas == 6) {
        $pagar = $qtdeDezenas * 9;
        echo $pagar;
    } elseif ($alternativa == 2 && $qtdeDezenas == 7) {
        $pagar = $qtdeDezenas * 31.50;
        echo $pagar;
    } elseif ($alternativa == 2 && $qtdeDezenas == 8) {
        $pagar = $qtdeDezenas * 84;
        echo $pagar;
    } elseif ($alternativa == 2 && $qtdeDezenas == 9) {
        $pagar = $qtdeDezenas * 189;
        echo $pagar;
    } elseif ($alternativa == 2 && $qtdeDezenas == 10) {
        $pagar = $qtdeDezenas * 378;
        echo $pagar;
    } elseif ($alternativa == 2 && $qtdeDezenas == 11) {
        $pagar = $qtdeDezenas * 693;
        echo $pagar;
    } elseif ($alternativa == 2 && $qtdeDezenas == 12) {
        $pagar = $qtdeDezenas * 1188;
        echo $pagar;
    } elseif ($alternativa == 2 && $qtdeDezenas == 13) {
        $pagar = $qtdeDezenas * 1930.50;
        echo $pagar;
    } elseif ($alternativa == 2 && $qtdeDezenas == 14) {
        $pagar = $qtdeDezenas * 3003;
        echo $pagar;
    } elseif ($alternativa == 2 && $qtdeDezenas == 15) {
        $pagar = $qtdeDezenas * 4504.50;
        echo $pagar;
    } else {
        echo "Numero invalido";
    }

    //-----------------------------------LOTO MANIA---------------------------

    if ($alternativa == 3 && $qtdeDezenas == 50) {
        $pagar = $qtdeDezenas * 1.50;
        echo "$pagar";
    } else {
        echo "Numero invalido";
    }

    //-----------------------------------LOTO FACIL------------------------------

    if($alternativa == 4 && $qtdeDezenas == 15){
        $pagar = $qtdeDezenas * 2;
        echo $pagar;
    } elseif ($alternativa == 4 && $qtdeDezenas == 16) {
        $pagar = $qtdeDezenas * 32;
        echo $pagar;
    } elseif ($alternativa == 4 && $qtdeDezenas == 17) {
        $pagar = $qtdeDezenas * 272;
        echo $pagar;
    } elseif ($alternativa == 4 && $qtdeDezenas == 18) {
        $pagar = $qtdeDezenas * 1632;
        echo $pagar;
    }
