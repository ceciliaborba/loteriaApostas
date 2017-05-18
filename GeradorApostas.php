<?php

$alternativa = 0;

function geradorApostasMega($possibilidades, $min, $max){

    global $alternativa;

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

    if ($alternativa == 1 && $qtdeDezenas == 6) {
        $pagar = $qtdeApostas * 3.50;
        echo "$pagar reais \n";
    } elseif ($alternativa == 1 && $qtdeDezenas == 7) {
        $pagar = $qtdeApostas * 24.50;
        echo "$pagar reais \n";
    } elseif ($alternativa == 1 && $qtdeDezenas == 8) {
        $pagar = $qtdeApostas * 98;
        echo "$pagar reais \n";
    } elseif ($alternativa == 1 && $qtdeDezenas == 9) {
        $pagar = $qtdeApostas * 294;
        echo "$pagar reais \n";
    } elseif ($alternativa == 1 && $qtdeDezenas == 10) {
        $pagar = $qtdeApostas * 735;
        echo "$pagar reais \n";
    } elseif ($alternativa == 1 && $qtdeDezenas == 11) {
        $pagar = $qtdeApostas * 1617;
        echo "$pagar reais \n";
    } elseif ($alternativa == 1 && $qtdeDezenas == 12) {
        $pagar = $qtdeApostas * 3234;
        echo "$pagar reais \n";
    } elseif ($alternativa == 1 && $qtdeDezenas == 13) {
        $pagar = $qtdeApostas * 6006;
        echo "$pagar reais \n";
    } elseif ($alternativa == 1 && $qtdeDezenas == 14) {
        $pagar = $qtdeApostas * 10510.50;
        echo "$pagar reais \n";
    } elseif ($alternativa == 1 && $qtdeDezenas == 15) {
        $pagar = $qtdeApostas * 17517.50;
        echo "$pagar reais \n";
    } else {
        echo "Numero invalido \n";
    }
}

function geradorApostasQuina($possibilidades, $min, $max)
{

    global $alternativa;

    echo "Quantas dezenas você deseja sortear?";

    $qtdeDezenas = trim(fgets(STDIN));

    while ($qtdeDezenas < $min || $qtdeDezenas > $max) {

        echo "Inválido. Quantas dezenas você deseja sortear";
        $qtdeDezenas = fgets(STDIN);
    }
    echo "Quantos jogos você quer apostar?";
    $qtdeApostas = trim(fgets(STDIN));
    for ($i = 0; $i < $qtdeApostas; $i++) {
        $dezenasSorteadas = [];
        for ($j = 0; $j < $qtdeDezenas; $j++) {
            $num = rand(1, $possibilidades);
            if (!in_array($num, $dezenasSorteadas)) {
                $dezenasSorteadas[$j] = $num;
            } else {
                $j--;
            }
        }
        echo "resultado aposta " . ($i + 1) . ": ";
        sort($dezenasSorteadas);
        foreach ($dezenasSorteadas as $dezena) {
            echo "$dezena ";
        }
        echo "\n";
    }
    echo "\n";

    if ($alternativa == 2 && $qtdeDezenas == 5) {
        $pagar = $qtdeApostas * 1.50;
        echo "$pagar reais \n";
    } elseif ($alternativa == 2 && $qtdeDezenas == 6) {
        $pagar = $qtdeApostas * 9;
        echo "$pagar reais \n";
    } elseif ($alternativa == 2 && $qtdeDezenas == 7) {
        $pagar = $qtdeApostas * 31.50;
        echo "$pagar reais \n";
    } elseif ($alternativa == 2 && $qtdeDezenas == 8) {
        $pagar = $qtdeApostas * 84;
        echo "$pagar reais \n";
    } elseif ($alternativa == 2 && $qtdeDezenas == 9) {
        $pagar = $qtdeApostas * 189;
        echo "$pagar reais \n";
    } elseif ($alternativa == 2 && $qtdeDezenas == 10) {
        $pagar = $qtdeApostas * 378;
        echo "$pagar reais \n";
    } elseif ($alternativa == 2 && $qtdeDezenas == 11) {
        $pagar = $qtdeApostas * 693;
        echo "$pagar reais \n";
    } elseif ($alternativa == 2 && $qtdeDezenas == 12) {
        $pagar = $qtdeApostas * 1188;
        echo "$pagar reais \n";
    } elseif ($alternativa == 2 && $qtdeDezenas == 13) {
        $pagar = $qtdeApostas * 1930.50;
        echo "$pagar reais \n";
    } elseif ($alternativa == 2 && $qtdeDezenas == 14) {
        $pagar = $qtdeApostas * 3003;
        echo "$pagar reais \n";
    } elseif ($alternativa == 2 && $qtdeDezenas == 15) {
        $pagar = $qtdeApostas * 4504.50;
        echo "$pagar reais \n";
    } else {
        echo "Numero invalido";
    }
}

    function geradorApostasMania($possibilidades, $min, $max)
    {

        global $alternativa;

        echo "Quantas dezenas você deseja sortear?";

        $qtdeDezenas = trim(fgets(STDIN));

        while ($qtdeDezenas < $min || $qtdeDezenas > $max) {

            echo "Inválido. Quantas dezenas você deseja sortear";
            $qtdeDezenas = fgets(STDIN);
        }
        echo "Quantos jogos você quer apostar?";
        $qtdeApostas = trim(fgets(STDIN));
        for ($i = 0; $i < $qtdeApostas; $i++) {
            $dezenasSorteadas = [];
            for ($j = 0; $j < $qtdeDezenas; $j++) {
                $num = rand(1, $possibilidades);
                if (!in_array($num, $dezenasSorteadas)) {
                    $dezenasSorteadas[$j] = $num;
                } else {
                    $j--;
                }
            }
            echo "resultado aposta " . ($i + 1) . ": ";
            sort($dezenasSorteadas);
            foreach ($dezenasSorteadas as $dezena) {
                echo "$dezena ";
            }
            echo "\n";
        }
        echo "\n";


        if ($alternativa == 3 && $qtdeDezenas == 50) {
            $pagar = $qtdeApostas * 1.50;
            echo "$pagar reais \n";
        } else {
            echo "Numero invalido";
        }
    }

        function geradorApostasFacil($possibilidades, $min, $max)
        {

            global $alternativa;

            echo "Quantas dezenas você deseja sortear?";

            $qtdeDezenas = trim(fgets(STDIN));

            while ($qtdeDezenas < $min || $qtdeDezenas > $max) {

                echo "Inválido. Quantas dezenas você deseja sortear";
                $qtdeDezenas = fgets(STDIN);
            }
            echo "Quantos jogos você quer apostar?";
            $qtdeApostas = trim(fgets(STDIN));
            for ($i = 0; $i < $qtdeApostas; $i++) {
                $dezenasSorteadas = [];
                for ($j = 0; $j < $qtdeDezenas; $j++) {
                    $num = rand(1, $possibilidades);
                    if (!in_array($num, $dezenasSorteadas)) {
                        $dezenasSorteadas[$j] = $num;
                    } else {
                        $j--;
                    }
                }
                echo "resultado aposta " . ($i + 1) . ": ";
                sort($dezenasSorteadas);
                foreach ($dezenasSorteadas as $dezena) {
                    echo "$dezena ";
                }
                echo "\n";
            }
            echo "\n";
            if ($alternativa == 4 && $qtdeDezenas == 15) {
                $pagar = $qtdeApostas * 2;
                echo "$pagar reais \n";
            } elseif ($alternativa == 4 && $qtdeDezenas == 16) {
                $pagar = $qtdeApostas * 32;
                echo "$pagar reais \n";
            } elseif ($alternativa == 4 && $qtdeDezenas == 17) {
                $pagar = $qtdeApostas * 272;
                echo "$pagar reais \n";
            } elseif ($alternativa == 4 && $qtdeDezenas == 18) {
                $pagar = $qtdeApostas * 1632;
                echo "$pagar reais \n";
            }
        }
