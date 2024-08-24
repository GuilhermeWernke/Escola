<?php

    $idade = 0;
    $posicao = 0;
    $matriz = array
    (
        array("Nome" => "", "Idade" => "", "CidadeNatal" => "", "Profissao" => ""),
        array("Nome" => "", "Idade" => "", "CidadeNatal" => "", "Profissao" => ""),
        array("Nome" => "", "Idade" => "", "CidadeNatal" => "", "Profissao" => ""),
        array("Nome" => "", "Idade" => "", "CidadeNatal" => "", "Profissao" => ""),
    );

    for($a = 0; $a < count($matriz); $a++)
    {
        foreach($matriz[$a] as $key => $value)
        {
            $matriz[$a][$key] = readline("Informe o/a " . $key . ": ");
        }
        print"\n";
    }

    for($a = 0; $a < count($matriz); $a++)
    {
        if($matriz[$a]["Idade"] > $idade)
        {
            $idade = $matriz[$a]["Idade"];
        }
    }
    print_r($matriz);
    print "O " . $matriz[$posicao]["Nome"] . " é o mais velho com seus " . $matriz[$posicao]["Idade"] . " anos, naceu em " . $matriz[$posicao]["CidadeNatal"] . " e trabalha como " . $matriz[$posicao]["Profissao"] . "\n";