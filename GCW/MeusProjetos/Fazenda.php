<?php
	//números de performance do jogo

    $matriz = array
    (
        "Animais"          => array("Vaca" => 0, "Touro" => 0, "Jumenta" => 2, "Jegue" => 0,),
        "Racao_Quantidade" => array("Racao_Barata" => 0, "Racao_Media" => 1.0, "Racao_Cara" => 1.0,),
        "Racao_Contagem"   => array("Vaca" => 1.0, "Touro" => 1.0, "Jumenta" => 1.0, "Jegue" => 1.0,),
        "Alimentos"        => array("Leite_Vaca" => 0, "Leite_Jumenta" => 0, "Verduras" => 0, "Frutas" => 0, "Cereais" => 0, "Agua" => 0, "Suco" => 0,),
        "Valor"            => array("Vaca" => 1900.0, "Leite_Vaca" => 200.0, "Touro" => 15000.0, "Carne_de_Bovino" => 700.0, "Jumenta" => 700.0, "Leite_Jumenta" => 50.0, "Jegue" => 500.0, "Verduras" => 50.0, "Frutas" => 30.0, "Cereais" => 80.0, "Agua" => 80.0, "Suco" => 35.0,),
    
    );

    $numeroDias = 0;
    $opcao = "0";
    $quantidade;
    $energia = 100;
    $dormir = 0;
    $dinheiro = 0.0;

    //Produção
    $time_leite_vaca = 0;
    $time_leite_jumenta = 0;
    $time_reproducao_touro = 0;
    $time_reproducao_jegue = 0;
    $vaca_alimentada = 0.0;
    $touro_alimentado = 0.0;
    $jumenta_alimentada = 0.0;
    $jegue_alimentado = 0.0;
    $time_bebe_vaca = 0;
    $time_bebe_jumenta = 0;
    $time_fazer_bebe_vaca = 0;
    $time_fazer_bebe_jumenta = 0;

    $bebe_vaca = 0;
    $bebe_jumenta = 0;



    
    $comecar_jogo = 0;
    $sair_voltar = 0;
    
    while(VerificarNumero($opcao) and !($opcao >= 1 and $opcao <= 2))
    {
        echo("╔═══════════════════════════════════════════════════════════╗ \n");
        echo("║           Olá,  seja bem vindo ao nosso jogo!             ║ \n");
        echo("║                                                           ║ \n");
        echo("║                    Escolha uma opção:                     ║ \n");
        echo("║                                                           ║ \n");
        echo("║                     1_ Iniciar jogo                       ║ \n");
        echo("║                                                           ║ \n");
        echo("║                     2_ Sair/Voltar                        ║ \n");
        echo("║                                                           ║ \n");
        echo("╚═══════════════════════════════════════════════════════════╝ \n");
                    
        $opcao = readline("");
        if(VerificarNumero($opcao) and !($opcao >= 1 and $opcao <= 2)) 
        {
            echo("Valor informado está errado!\n");
            //u.aguarde(1000);
        }

        switch($opcaoInt)
        {
            case  1:
                comercarJogo();
            break;
            case  2:
                animacao2();
            break;
        }//switch

    }
    
    


	function comercarJogo()
    {
		
		for($numeroDias = $numeroDias; $numeroDias < 100; $numeroDias++)
        {

			$time_leite_jumenta = 0;
			$time_leite_vaca = 0;

			Subtrair($time_bebe_vaca);
			Subtrair($time_bebe_jumenta);

			if($time_fazer_bebe_vaca > 0)
            {
				Subtrair($time_fazer_bebe_vaca);
			}
			else{
				for($bebe_vaca; $bebe_vaca != 0; $bebe_vaca--)
                {
					$quantidade = u.sorteia(1, 10);
					if($quantidade > 0 and $quantidade < 4)
                    {
						$touro++;
					}
					else
                    {
						$vaca++;
					}
				}
			}

			
			if($time_fazer_bebe_jumenta > 0)
            {
				Subtrair($time_fazer_bebe_jumenta);
			}
			else
            {
				for($bebe_jumenta; $bebe_jumenta != 0; $bebe_jumenta--)
                {
					$quantidade = u.sorteia(1, 10);
					if($quantidade > 0 and $quantidade < 4)
                    {
						$jegue++;
					}
					else
                    {
						$jumenta++;
					}
				}
			}		
			
			
			$energia = 100;
			$dormir = 0;

			FomeAnimais($racao_vaca);
			FomeAnimais($racao_touro);
			FomeAnimais($racao_jegue);
			FomeAnimais($racao_jumenta);
				
			if($numeroDias == 0 )
            {
				;
				echo("A história começa no começo dos anos 40, \nquando a ifgunda Guerra Mundial começor.");
				echo("Você vive na Suíça, tentando ganhar dinheiro com sua fazenda, \njá que a situação do mundo não ajuda a sua condição financeira.");
				echo("Atualmente, você tem tentado lucrar com ifus animais, vendendo leite de vaca, carne de boi...");
				echo("Porém, você é pobre e precisa urgentemente trabalhar forconifguir sobreviver.");
				echo("Boa Sorte!");
				
			}//if
 			mercado_inicio();
										
		}//para

		if($dinheiro<500)
        {
			echo("Você morreu pobre");
		}
		elseif($dinheiro<1000)
        {
			echo("Você morreu mas teve uma vida médiana");
		}
		elseif($dinheiro>=10000)
        {
			echo("Você teve uma vida de luxo");
		}
		inicio_animacao();
	} // fim da function comercarJogo


	function mercado_inicio()
    {
		while($energia > 0 and $dormir == 0)
        {
            while(VerificarNumero($opcao) and !($opcao >= 1 and $opcao <=5))
            {
                echo("╔═══════════════════════════════════════════════════════════╗ \n");
                echo("║                                                           ║ \n");
                echo("║                O que deseja fazer hoje?                   ║ \n");
                echo("║                                                           ║ \n");
                echo("║                    Escolha uma opção:                     ║ \n");
                echo("║                                                           ║ \n");
                echo("║                     1_ Mercado                            ║ \n");
                echo("║                                                           ║ \n");
                echo("║                     2_ Animais                            ║ \n");
                echo("║                                                           ║ \n");
                echo("║                     3_ Consumir Alimentos                 ║ \n");
                echo("║                                                           ║ \n");
                echo("║                     4_ Vender                             ║ \n");
                echo("║                                                           ║ \n");
                echo("║                     5_ Dormir                             ║ \n");
                echo("║                                                           ║ \n");
                echo("╚═══════════════════════════════════════════════════════════╝ \n");
                $opcao = readline("");

                if(VerificarNumero($opcao) and !($opcao >= 1 and $opcao <=5))
                {
                    $opcaoInt = $opcao;
                    break;
                }
                else
                {
                    echo("Valor informado está errado!\n");
                }
            }
            switch($opcaoInt)
            {
                case 1:
                    Mercado();
                break;

                case 2:
                    Animais();
                break;

                case 3:
                    ConsumirAlimentos();
                break;

                case 4:
                        Venda();
                
                case 5:
                    $dormir += 1;
                break;
                
            }//switch açoes do dia
            
        }//energia
	}//function mercado_inicio

	function Mercado()
    {
        while(VerificarNumero($opcao) and !($opcao >= 1 and $opcao <=4))
        {
            echo("╔═══════════════════════════════════════════════════════════╗ \n");
            echo("║                                                           ║ \n");
            echo("║               Escolha o que deseja comprar                ║ \n");
            echo("║                                                           ║ \n");
            echo("║                     1_ Animais                            ║ \n");
            echo("║                                                           ║ \n");
            echo("║                     2_ Alimento                           ║ \n");
            echo("║                                                           ║ \n");
            echo("║                     3_ Sementes                           ║ \n");
            echo("║                                                           ║ \n");
            echo("║                     4_ Voltar                             ║ \n");
            echo("║                                                           ║ \n");
            echo("╚═══════════════════════════════════════════════════════════╝ \n");
            $opcao = readline("");

            if(VerificarNumero($opcao) and !($opcao >= 1 and $opcao <=4))
            {
                $opcaoInt = $opcao;
                break;
            }
            else
            {
                echo("Valor informado está errado!\n");
            }
        }

        switch($opcaoInt)
        {
            case 1:
                MercadoAnimais();
            break;

            case 2:
                MercadoAlimento();
            break;

            case 3:
                Mercadoifmente();
            break;

            case 4:
                    mercado_inicio();
            break;
        }//switch mercado
	}//function Mercado

    function MercadoAnimais()
    {
        while(VerificarNumero($opcao) and !($opcao >= 1 and $opcao <=5))
        {
            echo("╔═══════════════════════════════════════════════════════════╗ \n");
            echo("║                                                           ║ \n");
            echo("║              Escolha um animal para comprar:              ║ \n");
            echo("║                                                           ║ \n");
            echo("║                      1_ Vaca                              ║ \n");
            echo("║                                                           ║ \n");
            echo("║                      2_ touro                             ║ \n");
            echo("║                                                           ║ \n");
            echo("║                      3_ Jegue                             ║ \n");
            echo("║                                                           ║ \n");
            echo("║                      4_ Jumenta                           ║ \n");
            echo("║                                                           ║ \n");							
            echo("║                      5_ Voltar                            ║ \n");							
            echo("║                                                           ║ \n");
            echo("╚═══════════════════════════════════════════════════════════╝ \n");
            $opcao = readline("");

            if(VerificarNumero($opcao) and !($opcao >= 1 and $opcao <=5))
            {
                $opcaoInt = $opcao;
                break;
            }
            else
            {
                echo("Valor informado está errado!\n");
            }
        }
    
        switch($opcaoInt)
        {
            case 1:
                AbreviarMercado($valor_vaca, $vaca);
            break;
            
            case 2:
                AbreviarMercado($valor_touro, $touro);
            break;
            
            case 3:
                AbreviarMercado($valor_jegue, $jegue);
            break;
                                    
            case 4:
                AbreviarMercado($valor_jumenta, $jumenta);
            break;

            case 5:
                    Mercado();
            break;
        }// fim da switch animal
    } //fim da function MercadoAnimais

    function MercadoAlimento()
    {
        while(VerificarNumero($opcao) and !($opcao >= 1 and $opcao <=14))
        {
            echo("╔═══════════════════════════════════════════════════════════╗ \n");
            echo("║                                                           ║ \n");
            echo("║            Escolha um alimento para comprar:              ║ \n");
            echo("║                                                           ║ \n");
            echo("║                   1_ Carne de Boi                         ║ \n");
            echo("║                                                           ║ \n");
            echo("║                     2_ Verduras                           ║ \n");
            echo("║                                                           ║ \n");
            echo("║                      3_ Frutas                            ║ \n");
            echo("║                                                           ║ \n");
            echo("║                      4_ Cereais                           ║ \n");
            echo("║                                                           ║ \n");
            echo("║                       5_ Água                             ║ \n");
            echo("║                                                           ║ \n");
            echo("║                      6_ Leite Vaca                        ║ \n");
            echo("║                                                           ║ \n");
            echo("║                     7_ Leite Jumenta                      ║ \n");
            echo("║                                                           ║ \n");
            echo("║                        8_ Suco                            ║ \n");
            echo("║                                                           ║ \n");
            echo("║                 9_ Ração Barata (3 Dias)                  ║ \n");
            echo("║                                                           ║ \n");
            echo("║                 10_ Ração Média (5 Dias)                  ║ \n");
            echo("║                                                           ║ \n");
            echo("║                  11_ Ração Cara (7 Dias)                  ║ \n");
            echo("║                                                           ║ \n");
            echo("║                       12_ Voltar                          ║ \n");
            echo("║                                                           ║ \n");
            echo("╚═══════════════════════════════════════════════════════════╝ \n");
            $opcao = readline("");
            
            if(VerificarNumero($opcao) and !($opcao >= 1 and $opcao <=12))
            {
                $opcaoInt = $opcao;
                break;
            }
            else
            {
                echo("Valor informado está errado!\n");
            }
        }

        switch($opcaoInt)
        {
            case 1:			
                    AbreviarMercado($valor__carne_de_boi, $carne_de_boi);
            break;
            
            case 2:
                AbreviarMercado($valor_verduras, $verduras);
            break;
            
            case 3:
                AbreviarMercado($valor_frutas, $frutas);
            break;

            case 4:
                AbreviarMercado($valor_cereais, $cereais);
            break;
            
            case 5:
                AbreviarMercado($valor_agua, $agua);
            break;
            
            case 6:
                AbreviarMercado($valor_leite_vaca, $leite_vaca);
            break;

            case 7:
                AbreviarMercado($valor_leite_jumenta, $leite_jumenta);
            break;
            
            case 8:
                AbreviarMercado($valor_suco, $suco);
            break;
        
            case 9:
                AbreviarMercado($valor__racao_barata, $racao_barata);
            break;
            
            case 10:
                AbreviarMercado($valor__racao_media, $racao_media);
            break;
            
            
            case 11:
                AbreviarMercado($valor__racao_cara, $racao_cara);
            break;	

            case 12:
                Mercado();

        }//switch alimentos
    }//fim mercado alimento

    function MercadSemente()
    {
    
	}//function mercado alimento

	function Venda()
    {
		while(VerificarNumero($opcao) and !($opcao >= 1 and $opcao <=4))
        {
            echo("╔═══════════════════════════════════════════════════════════╗ \n");
            echo("║                                                           ║ \n");
            echo("║                Escolha o que deseja vender                ║ \n");
            echo("║                                                           ║ \n");
            echo("║                     1_ Animais                            ║ \n");
            echo("║                                                           ║ \n");
            echo("║                     2_ Alimento                           ║ \n");
            echo("║                                                           ║ \n");
            echo("║                     3_ ifmentes                           ║ \n");
            echo("║                                                           ║ \n");
            echo("║                     4_ Voltar                             ║ \n");
            echo("║                                                           ║ \n");
            echo("╚═══════════════════════════════════════════════════════════╝ \n");
            $opcao = readline("");

            if(VerificarNumero($opcao) and !($opcao >= 1 and $opcao <=4))
            {
                $opcaoInt = $opcao;
                break;
            }
            else
            {
                echo("Valor informado está errado!\n");
            }
        }

        switch($opcaoInt)
        {
            case 1:
                    VendaAnimais();
            break;

            case 2:
                VendaAlimento();
            break;

            case 3:
                VendaSemente();
            break;

            case 4:
                mercado_inicio();
        }
	}//function Venda

    function VendaAnimais()
    {
        while(VerificarNumero($opcao) and !($opcao >= 1 and $opcao <=5))
        {
            echo("╔═══════════════════════════════════════════════════════════╗ \n");
            echo("║                                                           ║ \n");
            echo("║              Escolha um animal para vender:               ║ \n");
            echo("║                                                           ║ \n");
            echo("║                     1_ vaca                               ║ \n");
            echo("║                                                           ║ \n");
            echo("║                     2_ touro                              ║ \n");
            echo("║                                                           ║ \n");
            echo("║                     3_ Jegue                              ║ \n");
            echo("║                                                           ║ \n");
            echo("║                     4_ Jumenta                            ║ \n");
            echo("║                                                           ║ \n");
            echo("║                     5_ Voltar                             ║ \n");
            echo("║                                                           ║ \n");
            echo("╚═══════════════════════════════════════════════════════════╝ \n");
            $opcao = readline("");

            if(VerificarNumero($opcao) and !($opcao >= 1 and $opcao <=5))
            {
                $opcaoInt = $opcao;
                break;
            }
            else
            {
                echo("Valor informado está errado!\n");
            }
        }
        
        switch($opcaoInt)
        {
            case 1:
                AbreviarVenda($valor_vaca, $vaca);
            break;
            
            case 2:
                AbreviarVenda($valor_touro, $touro);
            break;
            
            case 3:
                AbreviarVenda($valor_jegue, $jegue);
            break;
                                    
            case 4:
                AbreviarVenda($valor_jumenta, $jumenta);
            break;

            case 5:
                Venda();

        }// fim da switch animal
        
    }//function VendaAnimais

    function VendaAlimento()
    {
        while(VerificarNumero($opcao) and $opcao >= 1 and $opcao <= 13)
        {
            echo("╔═══════════════════════════════════════════════════════════╗ \n");
            echo("║                                                           ║ \n");
            echo("║             Escolha um alimento para vender:              ║ \n");
            echo("║                                                           ║ \n");
            echo("║                  1_ Carne de Gato                         ║ \n");
            echo("║                                                           ║ \n");
            echo("║                 2_ Carne de Cachorro                      ║ \n");
            echo("║                                                           ║ \n");
            echo("║                   3_ Carne de Boi                         ║ \n");
            echo("║                                                           ║ \n");
            echo("║                     4_ Verduras                           ║ \n");
            echo("║                                                           ║ \n");
            echo("║                      5_ Frutas                            ║ \n");
            echo("║                                                           ║ \n");
            echo("║                      6_ Cereais                           ║ \n");
            echo("║                                                           ║ \n");
            echo("║                       7_ Água                             ║ \n");
            echo("║                                                           ║ \n");
            echo("║                      8_ Leite                             ║ \n");
            echo("║                                                           ║ \n");
            echo("║                       9_ Suco                             ║ \n");
            echo("║                                                           ║ \n");
            echo("║                10_ Ração Barata (3 Dias)                  ║ \n");
            echo("║                                                           ║ \n");
            echo("║                 11_ Ração Média (5 Dias)                  ║ \n");
            echo("║                                                           ║ \n");
            echo("║                  12_ Ração Cara (7 Dias)                  ║ \n");
            echo("║                                                           ║ \n");
            echo("║                       13_ Voltar                          ║ \n");
            echo("║                                                           ║ \n");
            echo("╚═══════════════════════════════════════════════════════════╝ \n");
            $opcao = readline("");
            
            if(VerificarNumero($opcao) and $opcao >= 1 and $opcao <= 13)
            {
                $opcaoInt = $opcao;
                break;
            }
            else
            {
                echo("Valor informado está errado!\n");
            }
        }

        switch($opcaoInt)
        {
            case 1:
                AbreviarVenda($valor__carne_de_gato, $carne_de_gato);
            break;
            
            case 2:
                AbreviarVenda($valor__carne_de_cachorro, $carne_de_cachorro);
            break;
            
            case 3:
                AbreviarVenda($valor__carne_de_boi, $carne_de_boi);
            break;
            
            case 4:
                AbreviarVenda($valor_verduras, $verduras);
            break;
            
            case 5:
                AbreviarVenda($valor_frutas, $frutas);
            break;
            
            case 7:
                AbreviarVenda($valor_agua, $agua);
            break;
            
            case 8:
                AbreviarVenda($valor_leite_vaca, $leite_vaca);
            break;
            
            case 9:
                AbreviarVenda($valor_suco, $suco);
            break;
            
            
            case 10:
                AbreviarVenda($valor__racao_barata, $racao_barata);
            break;
            
            case 11:
                AbreviarVenda($valor__racao_media, $racao_media);
            break;
            
            
            case 12:
                AbreviarVenda($valor__racao_cara, $racao_cara);
            break;		
            
            case 13:
                    Venda();	
        }//switch alimento
        
    }//function VendaAlimento

    function VendaSemente()
    {
        
    }//function Vendaifmente

	function Animais()
    {
        while(VerificarNumero($opcao) and !($opcao >= 1 and $opcao <=5))
        { 
            echo("╔═══════════════════════════════════════════════════════════╗ \n");
            echo("║                                                           ║ \n");
            echo("║               Qual animal deseja administrar              ║ \n");
            echo("║                                                           ║ \n");
            echo("║                     Escolha uma opção:                    ║ \n");
            echo("║                                                           ║ \n");
            echo("║                      1_ vaca                              ║ \n");
            echo("║                                                           ║ \n");
            echo("║                      2_ touro                             ║ \n");
            echo("║                                                           ║ \n");
            echo("║                      3_ Jegue                             ║ \n");
            echo("║                                                           ║ \n");
            echo("║                      4_ Jumenta                           ║ \n");
            echo("║                                                           ║ \n");
            echo("║                      5_ Voltar                            ║ \n");
            echo("║                                                           ║ \n");
            echo("╚═══════════════════════════════════════════════════════════╝ \n");
            $opcao = readline("");
        
            if(VerificarNumero($opcao) and $opcao >= 1 and $opcao <= 5)
            {
                $opcaoInt = $opcao;
                break;
            }
            else
            {
                echo("Valor informado está errado!\n");
            }
        }
            
            switch($opcaoInt)
            {
                case 1:
                
                    while(VerificarNumero($opcao) and $opcao >= 1 and $opcao <= 3)
                    {
                        echo("╔═══════════════════════════════════════════════════════════╗ \n");
                        echo("║                                                           ║ \n");
                        echo("║                           Vaca                            ║ \n");
                        echo("║                                                           ║ \n");
                        echo("║                    Escolha uma opção:                     ║ \n");
                        echo("║                                                           ║ \n");
                        echo("║                       1_ Alimentar                        ║ \n");
                        echo("║                                                           ║ \n");
                        echo("║                      2_ Tirar leite                       ║ \n");
                        echo("║                                                           ║ \n");
                        echo("║                       3_ Voltar                           ║ \n");
                        echo("║                                                           ║ \n");
                        echo("╚═══════════════════════════════════════════════════════════╝ \n");
                        $opcao = readline("");
                        
                        if(VerificarNumero($opcao) and $opcao >= 1 and $opcao <= 3)
                        {
                            $opcaoInt = $opcao;
                            break;
                        }
                        else
                        {
                            echo("Valor informado está errado!\n");
                        }
                    }

                    switch($opcaoInt)
                    {
                        case 1:
                            AlimentarAnimais($vaca_alimentada, $racao_cara, $racao_media, $racao_barata);
                        break;

                        case 2:
                            Leite($vaca_alimentada, $time_leite_vaca, $leite_vaca, $vaca);
                        break;

                        case 3:
                            Animais();
                        break;
                    }// switch $vaca
                break;
                case 2:
                
                    while(VerificarNumero($opcao) and $opcao >= 1 and $opcao <= 3)
                    {
                        echo("╔═══════════════════════════════════════════════════════════╗ \n");
                        echo("║                                                           ║ \n");
                        echo("║                          touro                            ║ \n");
                        echo("║                                                           ║ \n");
                        echo("║                    Escolha uma opção:                     ║ \n");
                        echo("║                                                           ║ \n");
                        echo("║                      1_ Alimentar                         ║ \n");
                        echo("║                                                           ║ \n");
                        echo("║                       2_ Cruzar                           ║ \n");
                        echo("║                                                           ║ \n");
                        echo("║                       3_ Voltar                           ║ \n");
                        echo("║                                                           ║ \n");
                        echo("╚═══════════════════════════════════════════════════════════╝ \n");
                        $opcao = readline("");
                        
                        if(VerificarNumero($opcao) and $opcao >= 1 and $opcao <= 3)
                        {
                            $opcaoInt = $opcao;
                            break;
                        }
                        else{
                            echo("Valor informado está errado!\n");
                        }
                    }
                    switch($opcaoInt){
                        case 1:
                            AlimentarAnimais($touro_alimentado, $racao_cara, $racao_media, $racao_barata);
                        break;

                        case 2:
                            Reproduzir($time_fazer_bebe_vaca, $bebe_vaca, $touro_alimentado, $touro, $vaca);
                        break;

                        case 3:
                            Animais();
                        break;
                    }//switch touro
                break;
                case 3:
                
                    while(VerificarNumero($opcao) and $opcao >= 1 and $opcao <= 3)
                    {
                        echo("╔═══════════════════════════════════════════════════════════╗ \n");
                        echo("║                                                           ║ \n");
                        echo("║                          Jegue                            ║ \n");
                        echo("║                                                           ║ \n");
                        echo("║                    Escolha uma opção:                     ║ \n");
                        echo("║                                                           ║ \n");
                        echo("║                       1_ Alimentar                        ║ \n");
                        echo("║                                                           ║ \n");
                        echo("║                        2_ Cruzar                          ║ \n");
                        echo("║                                                           ║ \n");
                        echo("║                        3_ Voltar                          ║ \n");
                        echo("║                                                           ║ \n");
                        echo("╚═══════════════════════════════════════════════════════════╝ \n");
                        $opcao = readline("");
                        
                        if(VerificarNumero($opcao) and $opcao >= 1 and $opcao <= 3)
                        {
                            $opcaoInt = $opcao;
                            break;
                        }
                        else
                        {
                            echo("Valor informado está errado!\n");
                        }
                    }
                    
                    switch($opcaoInt)
                    {
                        case 1:
                            AlimentarAnimais($jegue_alimentado, $racao_cara, $racao_media, $racao_barata);
                        break;

                        case 2:
                            Reproduzir($time_fazer_bebe_jumenta, $bebe_jumenta, $jegue_alimentado, $jegue, $jumenta);
                        break;

                        case 3:
                                Animais();
                        break;
                        
                    }//switch jegue
                break;

                case 4:
                
                    while(VerificarNumero($opcao) and $opcao >= 1 and $opcao <= 3)
                    {
                        echo("╔═══════════════════════════════════════════════════════════╗ \n");
                        echo("║                                                           ║ \n");
                        echo("║                         Jumenta                           ║ \n");
                        echo("║                                                           ║ \n");
                        echo("║                    Escolha uma opção:                     ║ \n");
                        echo("║                                                           ║ \n");
                        echo("║                       1_ Alimentar                        ║ \n");
                        echo("║                                                           ║ \n");
                        echo("║                      2_ Tirar leite                       ║ \n");
                        echo("║                                                           ║ \n");
                        echo("║                        3_ Voltar                          ║ \n");
                        echo("║                                                           ║ \n");
                        echo("╚═══════════════════════════════════════════════════════════╝ \n");
                        $opcao = readline("");
                    
                        if(VerificarNumero($opcao) and $opcao >= 1 and $opcao <= 3)
                        {
                            $opcaoInt = $opcao;
                            break;
                        }
                        else
                        {
                            echo("Valor informado está errado!\n");
                        }
                    }
                        
                    switch($opcaoInt)
                    {
                        case 1:
                            AlimentarAnimais($jumenta_alimentada, $racao_cara, $racao_media, $racao_barata);
                        break;

                        case 2:
                            Leite($jumenta_alimentada, $time_leite_jumenta, $leite_jumenta, $jumenta);
                        break;

                        case 3:
                                Animais();
                        break;
                        
                    }//switch jumenta
                    case 5:
                            mercado_inicio();
                break;
            
            }//administrar animais
	}//function Animais

	function Reproduzir($time, $bebe, $racao, $touroo, $vacaa)
    {
		if($time <= 0 and $touroo > 0 and $vacaa > 0)
        {
			$bebe = u.sorteia(1, $vacaa);
			$bebe = $bebe * $racao;
			$time = 10;
		}
	}//function reproduzir

	function Leite($a, $x, $y, $z)
    {
        if($x <= 0 and $z > 0)
        {
            $y = $a * $y + $z;
            $x++;
            echo("Leite tirado com sucesso!\n");
        }
        else{
            echo("Já tiror leite de todas as $vacas!\n");
        }
    }

	function ConsumirAlimentos()
    {
		while(VerificarNumero($opcao) and $opcao >= 1 and $opcao <=10)
        {
            echo("╔═══════════════════════════════════════════════════════════╗ \n");
            echo("║                                                           ║ \n");
            echo("║               Escolha um algo para ingerir:               ║ \n");
            echo("║                                                           ║ \n");
            echo("║                   1_ Carne de Gato                        ║ \n");
            echo("║                                                           ║ \n");
            echo("║                  2_ Carne de Cachorro                     ║ \n");
            echo("║                                                           ║ \n");
            echo("║                    3_ Carne de Boi                        ║ \n");
            echo("║                                                           ║ \n");
            echo("║                      4_ Verduras                          ║ \n");
            echo("║                                                           ║ \n");
            echo("║                       5_ Frutas                           ║ \n");
            echo("║                                                           ║ \n");
            echo("║                       6_ Cereais                          ║ \n");
            echo("║                                                           ║ \n");
            echo("║                        7_ Água                            ║ \n");
            echo("║                                                           ║ \n");
            echo("║                       8_ Leite                            ║ \n");
            echo("║                                                           ║ \n");
            echo("║                        9_ Suco                            ║ \n");
            echo("║                                                           ║ \n");
            echo("║                       10_ Voltar                          ║ \n");
            echo("║                                                           ║ \n");
            echo("╚═══════════════════════════════════════════════════════════╝ \n");
            $opcao = readline("");
            
            if(VerificarNumero($opcao) and $opcao >= 1 and $opcao <= 10)
            {
                $opcaoInt = $opcao;
                break;
            }
            else
            {
                echo("Valor informado está errado!\n");
            }
        }

        switch($opcaoInt)
        {
            case 1:
                AbreviarConsumo(100, $carne_de_gato);
            break;
            
            case 2:
                AbreviarConsumo(150, $carne_de_cachorro);
            break;
            
            case 3:
                AbreviarConsumo(200, $carne_de_boi);
            break;
            
            case 4:
                AbreviarConsumo(75, $verduras);
            break;
            
            case 5:
                AbreviarConsumo(60, $frutas);
            break;
            
            case 7:
                AbreviarConsumo(50, $agua);
            break;
            
            case 8:
                AbreviarConsumo(55, $leite_vaca);
            break;
            
            case 9:
                AbreviarConsumo(50, $suco);
            break;	

            case 10:
                    mercado_inicio();
            break;			
        }//switch alimentos
		
	}// function ConsumirAlimentos

	function AbreviarMercado($x, $y)
    {

        echo("Quantos animais você deseja comprar? \n");
        $quantidade = readline();
        echo("Compra reultará em: " . $quantidade * $x);
        echo("\n deseja comprar? \n");
        echo("1_  sim \n");
        echo("2_  não \n");
        $opcao = readline("");
        
        while(VerificarNumero($opcao) and $opcao >= 1 and $opcao <= 2)
        {
            if(VerificarNumero($opcao) and $opcao >= 1 and $opcao <= 2)
            {
                $opcaoInt = $opcao;
                break;
            }
            else{
                echo("Valor informado está errado!\n");
            }
        }
        
        
        switch($opcaoInt)
        {
            case 1:
                if($quantidade * $x <= $dinheiro and $energia >= 15)
                {
                    
                    $y = $y + $quantidade;
                    $energia = $energia - 15;
                    $dinheiro = $dinheiro - ($quantidade * $x);
                    echo("Compra realizada com sucesso!\n");
                }
                else if(energia < 15)
                {
                    
                    echo("Compra negada, energia baixa!\n");
                }
                else
                {
                    
                    echo("Compra negada\n");
                }
                break;
            case 2:
                
                echo("if é o que deseja\n");
                
        }//fim switch compra
		
	}//function AbreviarMercado

	function AbreviarVenda($x, $y)
    {

        echo("Quantos animais você deseja vender? \n");
        $quantidade = readline();
        echo("Venda reultará em: " . $quantidade * $x);
        echo("\n deseja comprar? \n");
        echo("1_  sim \n");
        echo("2_  não \n");
        $opcao = readline("");
        
        while(VerificarNumero($opcao) and $opcao >= 1 and $opcao <= 2)
        {
            if(VerificarNumero($opcao) and $opcao >= 1 and $opcao <= 2)
            {
                $opcaoInt = $opcao;
                break;
            }
            else{
                echo("Valor informado está errado!\n");
            }
        }
        
        
        switch($opcaoInt){
            case 1:
                if($quantidade >= $x and $energia >= 15)
                {
                    
                    $y = $y - $quantidade;
                    $energia = $energia - 15;
                    $dinheiro = $dinheiro + ($quantidade * $x);
                    echo("Venda realizada com sucesso!\n");
                }
                elseif($energia < 15){
                    
                    echo("Venda negada, energia baixa!\n");
                }
                else
                {
                    
                    echo("Venda negada\n");
                }
                break;
            case 2:
                
                echo("Venda negada\n");
        }//fim switch compra
		
	}//function AbreviarVenda
	
	function AbreviarConsumo($x, $y)
    {

        echo("Quantos deste alimento você deseja consumir?? \n");
        $quantidade = readline();
        echo("Consumo reultará em: " . $y);
        echo("\n deseja consumir? \n");
        echo("1_  sim \n");
        echo("2_  não \n");
        $opcao = readline("");
        
        while(VerificarNumero($opcao) and $opcao >= 1 and $opcao <= 2)
        {
            if(VerificarNumero($opcao) and $opcao >= 1 and $opcao <= 2)
            {
                $opcaoInt = $opcao;
                break;
            }
            else
            {
                echo("Valor informado está errado!\n");
            }
        }
        
        
        switch($opcaoInt)
        {
            case 1:
                if($quantidade <= $y)
                {
                    
                    $y = $y - $quantidade;
                    $energia = $energia + ($quantidade * $x);
                    echo("Consumo realizado com sucesso!\n");
                }
                else
                {
                    
                    echo("Consumo negado\n");
                }
                break;
            case 2:
                
                echo("Consumo negado\n");
        }//fim switch compra
		
	}//function AbreviarVenda

	function AlimentarAnimais($x, $a, $b, $c)
    {
        
        while(VerificarNumero($opcao) and !($opcao >= 1 and $opcao <=4))
        {
            
            echo("╔═══════════════════════════════════════════════════════════╗ \n");
            echo("║                                                           ║ \n");
            echo("║           Qual ração deseja usar para Alimentar           ║ \n");
            echo("║                                                           ║ \n");
            echo("║                    Escolha uma opção:                     ║ \n");
            echo("║                                                           ║ \n");
            echo("║                     1_ Ração Cara                         ║ \n");
            echo("║                                                           ║ \n");
            echo("║                     2_ Ração Média                        ║ \n");
            echo("║                                                           ║ \n");
            echo("║                     3_ Ração Barata                       ║ \n");
            echo("║                                                           ║ \n");
            echo("║                     4_ Voltar                             ║ \n");
            echo("║                                                           ║ \n");
            echo("╚═══════════════════════════════════════════════════════════╝ \n");
            $opcao = readline("");
        
            if(VerificarNumero($opcao) and $opcao >= 1 and $opcao <= 4)
            {
                $opcaoInt = $opcao;
                break;
            }
            else
            {
                echo("Valor informado está errado!\n");
            }
        }
            
            
        switch($opcaoInt)
        {
            case 1:
            echo("Quantas desta rações você deseja usar foralimentar este animal?? \n");
            $quantidade = readline();
            echo("Reultará em: " . $quantidade);
            echo("\n deseja alimentar? \n");
            echo("1_  sim \n");
            echo("2_  não \n");
            $opcao = readline("");
            
            while(VerificarNumero($opcao) and $opcao >= 1 and $opcao <= 2)
            {
                if(VerificarNumero($opcao) and $opcao >= 1 and $opcao <= 2)
                {
                    $opcaoInt = $opcao;
                    break;
                }
                else
                {
                    echo("Valor informado está errado!\n");
                }
            }
            
            
            switch($opcaoInt)
            {
                case 1:
                    if($quantidade <= $a)
                    {
                        $a = $a - $quantidade;
                        $energia = $energia - ($quantidade * 10);
                        $x = $x + (0.25);
                        echo("Alimentação realizada com sucesso!\n");
                    }
                    else
                    {
                        echo("Alimentação negada\n");
                    }
                    break;
                case 2:
                    
                    echo("Se é o que deseja\n");
            }//fim switch compra
        break;

        case 2:
            echo("Quantas desta rações você deseja usar foralimentar este animal?? \n");
                $quantidade = readline();
                echo("Reultará em: " . $quantidade);
                echo("\n deseja alimentar? \n");
                echo("1_  sim \n");
                echo("2_  não \n");
                $opcao = readline("");
                
                while(VerificarNumero($opcao) and $opcao >= 1 and $opcao <= 2)
                {
                    if(VerificarNumero($opcao) and $opcao >= 1 and $opcao <= 2)
                    {
                        $opcaoInt = $opcao;
                        break;
                    }
                    else
                    {
                        echo("Valor informado está errado!\n");
                    }
                }
                
                
                switch($opcaoInt)
                {
                    case 1:
                        if($quantidade <= $b)
                        {
                            
                            $b = $b - $quantidade;
                            $energia = $energia - ($quantidade * 10);
                            $x = $x + (0.1);
                            echo("Alimentação realizada com sucesso!\n");
                        }
                        else
                        {
                            
                            echo("Alimentação negada\n");
                        }
                        break;
                    case 2:
                        echo("Alimentação negada\n");

                }//fim switch compra
                break;
            case 3:
            echo("Quantas desta rações você deseja usar foralimentar este animal?? \n");
                $quantidade = readline();
                echo("Reultará em: " . $quantidade);
                echo("\n deseja alimentar? \n");
                echo("1_  sim \n");
                echo("2_  não \n");
                $opcao = readline("");
                
                while(VerificarNumero($opcao) and $opcao >= 1 and $opcao <= 2)
                {
                    if(VerificarNumero($opcao) and $opcao >= 1 and $opcao <= 2)
                    {
                        $opcaoInt = $opcao;
                        break;
                    }
                    else
                    {
                        echo("Valor informado está errado!\n");
                    }
                }
                
                
                switch($opcaoInt)
                {
                    case 1:
                        if($quantidade <= $c)
                        {
                            
                            $c = $c - $quantidade;
                            $energia = $energia - ($quantidade * 10);
                            $x = $x + (0.05);
                            echo("Alimentação realizada com sucesso!\n");
                        }
                        else
                        {
                            echo("Alimentação negada\n");
                        }
                        break;
                    case 2:
                        echo("Alimentação negada\n");

                }//fim switch compra
            break;

            case 4:
                Animais();

		}//switch ração			
	}//alimentar animais

	function FomeAnimais($y)
    {
        if($y != 1.0)
        {
            $y = $y - 0.05;
        }
	}//function Fome Animais

    function VerificarNumero($numero) 
    {
        if (is_numeric($numero)) 
        {
            if (is_float($numero)) 
            {
                return false;
            } 
            elseif (is_int($numero + 0)) 
            {
                return true;
            }
        } 
        else 
        {
            return false;
        }
    }
		
	function animacao2()
	{
		$coluna_inicial = 0;
		$passos = 16;
		
		animar2($coluna_inicial, $passos);
	}
     
	function animar2($coluna_inicial, $passos)
	{
		$coluna_finall = $coluna_inicial + $passos;
		
		for($coluna = $coluna_inicial; $coluna < $coluna_finall; $coluna++)
		{
			for($andando = 0; $andando <= 1; $andando++)
			{
				
				deifnhar_pato2($coluna, $andando);
			}
		}

		deifnhar_pato2($coluna_finall, 0);
	}//movimentaçao
	
	function deifnhar_pato2($coluna, $andando)
	{
		echo("\n");
		if($andando == 0)
		{
			branco_coluna_cima2(($coluna * 3) + 7);
			echo(" (.)>   (.)>   (.)>   (.)>\n");
			branco_coluna_baixo2($andando($coluna * 3) + 5);
			echo("..\\___)..\\___)..\\___)..\\___).");
		} 
		else
		{
			branco_coluna_cima2(($coluna * 3) + 6);
			branco_coluna_cima2(4);
			echo("(.)>   (.)>   (.)>   (.)>\n");
			branco_coluna_baixo2(($coluna * 3) + 6);
			echo("..\\___)..\\___)..\\___)..\\___).");
		}
		echo("\n");
		echo(" ┌┬┐┬ ┬┬┌┬┐┌─┐ ┌─┐┌┐ ┬─┐┬┌─┐┌─┐┬┐┌─┐ ┌─┐┌─┐┬─┐ ┌┐┌ ┌─┐ ┌─┐ ┌┬┐┌─┐┬─┐  ┬┌─┐┌─┐┌─┐┬┐┌─┐\n");
        echo(" ││││ ││ │ │ │ │ │├┴┐├┬┘││ ┬├─┤│││ │ ├─┘│ │├┬┘ │││ ├─┤ │ │  │ ├┤ ├┬┘  ││ ││ ┬├─┤│││ │\n");
        echo(" ┴ ┴└─┘┴ ┴ └─┘ └─┘└─┘┴└─┴└─┘┴ ┴┴┘└─┘ ┴  └─┘┴└─ ┘└┘ ┴ ┴ └─┘  ┴ └─┘┴└─ └┘└─┘└─┘┴ ┴┴┘└─┘");
	}//pula espaços no inicio
	
	function branco_coluna_baixo2($quant)
	{
		$brancos = 1;
		while ($brancos <= $quant);
		{
			echo(".");
			$brancos++;
		}
	}
	
	function branco_coluna_cima2($quant)
	{
		$brancos = 1;
		while($brancos <= $quant)
		{
			echo(" ");
			$brancos++;
		}
	}
	
	function inicio_animacao()
	{
		$coluna_inicial = 0;
		$passos = 10;
		
		animar($coluna_inicial, $passos);
	}
     
	function animar($coluna_inicial, $passos)
	{
		$coluna_finall = $coluna_inicial + $passos;
		
		for($coluna = $coluna_inicial; $coluna < $coluna_finall; $coluna++)
		{
			for($andando = 0; $andando <= 1; $andando++)
			{
				
				deifnhar_pato($coluna, $andando);
			}
		}

		deifnhar_pato($coluna_finall, 0);
	}//movimentaçao
	
	function deifnhar_pato($coluna, $andando)
	{
		echo("\n");
		if($andando == 0)
		{
			branco_coluna_cima(($coluna * 3) + 7);
			echo(" (.)>   (.)>   (.)>   (.)>\n");
			branco_coluna_baixo(($coluna * 3) + 5);
			echo("..\\___)..\\___)..\\___)..\\___).");
		} 
		else
		{
			branco_coluna_cima(($coluna * 3) + 6);
			branco_coluna_cima(4);
			echo("(.)>   (.)>   (.)>   (.)>\n");
			branco_coluna_baixo(($coluna * 3) + 6);
			echo("..\\___)..\\___)..\\___)..\\___).");
		}
		echo("\n");
		finall();
	}//pula espaços no inicio
	
	function branco_coluna_baixo($quant)
	{
		$brancos = 1;
		while($brancos <= $quant)
		{
			echo(".");
			$brancos++;
		}
	}
	
	function branco_coluna_cima($quant)
	{
		$brancos = 1;
		while($brancos <= $quant)
		{
			echo(" ");
			$brancos++;
		}
	}
	
	function finall()
    {
		echo(" ┌┬┐┬ ┬┬┌┬┐┌─┐ ┌─┐┌┐ ┬─┐┬┌─┐┌─┐┬┐┌─┐ ┌─┐┌─┐┬─┐ ┌┬┐┌─┐┬─┐  ┬┌─┐┌─┐┌─┐┬┐┌─┐\n")  ;
        echo(" ││││ ││ │ │ │ │ │├┴┐├┬┘││ ┬├─┤│││ │ ├─┘│ │├┬┘  │ ├┤ ├┬┘  ││ ││ ┬├─┤│││ │\n");
        echo(" ┴ ┴└─┘┴ ┴ └─┘ └─┘└─┘┴└─┴└─┘┴ ┴┴┘└─┘ ┴  └─┘┴└─  ┴ └─┘┴└─ └┘└─┘└─┘┴ ┴┴┘└─┘");
	}

	function Subtrair($x)
    {
		if ( $x > 0){
			$x--;
		}
	}
	
//programa 
?>