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
                $dezenasSorteadas[$j] = $num;
            }

            echo "resultado aposta ".($i+1).": ";
            //[6,5,4,1,7,8]
            sort($dezenasSorteadas);
            foreach ($dezenasSorteadas as $dezena){
                echo "$dezena ";
            }

            echo "\n";
        }
    echo "\n";
    }