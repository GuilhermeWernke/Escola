<?php

    $vetor1[0] = 0;
    $vetor2[0] = 0;
    $vetor3[0] = 0;

    $variavel = 0;

    for($i = 1; $i <= 5; $i++) 
    {
        $variavel= readline("Escolha o número de posição " . $i . ":\n");

        array_push($vetor1, $variavel);
        array_push($vetor2, $variavel);
        array_push($vetor3, $variavel);
    }

    for($i = 1; $i<=5; $i++)
    {
        Vet1($vetor1[$i]);
    }
    for($i = 1; $i<=5; $i++)
    {
        Vet2($vetor1[$i]);
    }
    for($i = 1; $i<=5; $i++)
    {
        Vet3($vetor1[$i]);
    }


    ImprimeVetor($vetor1);
    ImprimeVetor($vetor2);
    ImprimeVetor($vetor3);

    function Vet1($vet)
    {
        for($i = 1; $i <= 5; $i++)
        {
            $vet[$i] = $vet[$i] * 1.8 + 32;
        }
    }

    function Vet2($vet)
    {
        for($i = 1; $i <= 5; $i++)
        {
            if($vet[$i] >= 1)
            {
                for($j = $vet[$i]; $j >= 0; $j--)
                {
                    $vet[$i] = $vet[$i] * $j;
                }
            }
            else
            {
                $vet[$i] = 0;
            }
        }
    }

    function Vet3($vet)
    {
        for($i = 0; $i <= 5; $i++)
        {
            $vet[$i] = $vet[$i] * $vet[$i] + $vet[$i] + 4;
        }
    }

    function ImprimeVetor($vet)
    {
        foreach ($vet as $key => $value)
        {
            print $value . ", ";
        }
        print "\n ";
    }