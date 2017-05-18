<?php
include 'sorteador.php';

menu();

function menu(){
    global $alternativa;

    echo "Digite 1 para apostar na MegaSena \n";
    echo "Digite 2 para apostar na Quina \n";
    echo "Digite 3 para apostar na LotoMania \n";
    echo "Digite 4 para apostar na Lotofacil \n";
    echo "Digite 5 para sair \n";

    $alternativa = fgets(STDIN);

    switch ($alternativa) {

        case 1:
            geradorApostasMega(60, 6, 15);
            menu();
            break;

        case 2:
            geradorApostasQuina(80, 5, 15);
            break;

        case 3:
            geradorApostasMania(100, 50, 50);
            break;

        case 4:
            geradorApostasFacil(25, 15, 18);
            break;

        case 5:
            exit();
            break;

        default:
            echo "numero invalido";
            menu();
            break;
    }
}
