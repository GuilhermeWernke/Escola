<?php

    $num_prm;

    $cont = 0;
    $opc = 1;

    $matriz = array();

    while ($opc == true) 
    {
        $num_prm = readline("Escolha um número para saber se ele é um número primo:  \n");

        if(e_primo($num_prm, $cont) == true)
        {
            print "É primo! \n";
            array_push($matriz, $num_prm);
        }
        else 
        {
            print "Não é primo! \n";
        }
        $opc = readline("Digite 0 para sair do programa e mostrar todos os primos: \n");
    }
    
    foreach ($matriz as $key => $value)
    {
        print $value . ", ";
    }
    print "\n ";


    function e_primo($num_primo, $contador)
    {

        if($num_primo == 2)
        {
            return true;
        }
        else if($num_primo == 3)
        {
            return true;
        }
        else if(is_numeric($num_primo))
        {
            for($i = 2; $i != ($num_primo - 1); $i++)
            {
                if(($num_primo % $i) != 0)
                {
                    $contador++;
                }
                else 
                {
                    return false;
                }
            }
        }
        else
        {
            return false;
        }
        if($contador + 3 == $num_primo)
        {
            return true;
        }
    }
?>