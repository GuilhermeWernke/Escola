<?php

    class Cidade
    {

        // Atributos

        private $populacao;
        private $nome;
        private $area;

        // Metodos

        function aumentar_populacao()
        {

            $this->populacao += readline("A População atual é de: " . $this->populacao . ", você quer aumentar em quanto? \n");

        }
        function diminuir_populacao()
        {

            $this->populacao -= readline("A População atual é de: " . $this->populacao . ", você quer diminuir em quanto? \n");

        }

        function mudar_nome()
        {

            $this->nome = readline("O Nome atual desta cidade é: " . $this->nome . ", o novo nome dela é: \n");

        }

        function expandir_area()
        {

            $this->area += readline("A Área atual é de: " . $this->area . "km², você quer expanir em quanto? \n");

        }

        function diminuir_area()
        {

            $this->area -= readline("A Área atual é de: " . $this->area . "km², você quer diminuir em quanto? \n");

        }

        // GETTS & SETTS

        /**
         * Get the value of populacao
         */
        public function getPopulacao()
        {
                return $this->populacao;
        }

        /**
         * Set the value of populacao
         */
        public function setPopulacao($populacao): self
        {
                $this->populacao = $populacao;

                return $this;
        }

        /**
         * Get the value of nome
         */
        public function getNome()
        {
                return $this->nome;
        }

        /**
         * Set the value of nome
         */
        public function setNome($nome): self
        {
                $this->nome = $nome;

                return $this;
        }

        /**
         * Get the value of area
         */
        public function getArea()
        {
                return $this->area;
        }

        /**
         * Set the value of area
         */
        public function setArea($area): self
        {
                $this->area = $area;

                return $this;
        }
    }

    $opcao = 0;

    $opcao = readline("Você quer informar quantas cidades? \n");

    for ($i= 0; $i < $opcao; $i++) 
    { 
        $cidade[$i] = new Cidade;
        $cidade[$i]->setNome(readline("Escolha o nome da cidade " . $i +1 . ": \n"));
        $cidade[$i]->setArea(readline("Escolha a área da cidade (em km²) " . $i +1 . ": \n"));
        $cidade[$i]->setPopulacao(readline("Escolha a quantidade de habitantes/população da cidade " . $i +1 . ": \n"));
    }

    
    for ($i=0; $i < count($cidade); $i++) 
    { 
        
        while($opcao != 0)
        {

            print("O que deseja fazer agora com a cidade " . $i + 1 . "? \n\n 0-Sair, ir para próxima cidade e mostrar dados,\n 1-Trocar Nome,\n 2-Aumentar Area,\n 3-Diminuir Area,\n 4-Aumentar População,\n 5-Diminuir População \n\n");
            $opcao = readline("");

            switch ($opcao) 
            {

                case 0:
                    
                    $opcao = 0;

                break;

                case 1:
                    
                    $cidade[$i]->mudar_nome();

                break;

                case 2:
                    
                    $cidade[$i]->expandir_area();

                break;

                case 3:

                    $cidade[$i]->diminuir_area();
                    
                break;

                case 4:
                    
                    $cidade[$i]->aumentar_populacao();

                break;

                case 5:
                    
                    $cidade[$i]->diminuir_populacao();

                break;
            }
        }

    }

    for ($i=0; $i < count($cidade); $i++) 
    { 

        print("A cidade: " . $cidade[$i]->getNome()  . " de área: " . $cidade[$i]->getArea()  . " tem uma população de " . $cidade[$i]->getPopulacao() . " Habitantes! \n");

    }
?>