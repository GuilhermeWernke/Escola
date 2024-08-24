<?php

    $array = array();
    $contador = 0;

    for($i = 0; $i < 10; $i++)
    {
        $array[$i] = readline("Escolha um número para a posição " . $i + 1 . " para fazer a média de todos ");
    }
    foreach($array as $key)
    {
        $contador +=  $key;
    }
    $contador = $contador / 10 ;
    print $contador;
