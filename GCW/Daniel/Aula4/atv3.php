<?php

    $matriz = array
    (
        "1" => array("Quantidade_Alunos" => 39, "Curso" => "TDS", "Ano" => 2,),
        "2" => array("Quantidade_Alunos" => 38, "Curso" => "AMB", "Ano" => 2,),
        "3" => array("Quantidade_Alunos" => 35, "Curso" => "EDIF", "Ano" => 2,),
        "4" => array("Quantidade_Alunos" => 29, "Curso" => "AQUI", "Ano" => 3,),
    );
    $QNTalunos = 0;

    for ($j=1; $j < 4; $j++) 
    { 
        $matriz[$j]['Quantidade_Alunos'] = readline("Quantos Alunos tem na Turna " . $j . "? ");
        $matriz[$j]['Curso'] = readline("Qual o curso desta Turna? ");
        $matriz[$j]['Ano'] = readline("Qual o ano desta Turna? ");
        print("\n");
    }

    for ($j=1; $j < 4; $j++) 
    { 
        $QNTalunos += $matriz[$j]['Quantidade_Alunos'];
    }

    print("Temos " . $QNTalunos . " alunos no IFPR");

?>