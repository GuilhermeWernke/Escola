<?php

    class Pokemon
    {
        // Atributos 

        public $dados;
        

        public $nome;
        public $tipo;
        public $nivel;
        public $experiencia;
        public $pontos_vida;


        public $ataque;
        public $defesa;
        public $velocidade;

        // Construtor

        function __construct()
        {
            $this -> nivel = "1";
            $this -> experiencia = "0";
            $this -> pontos_vida = "10";
            $this -> ataque = "10";
            $this -> defesa = "10";
            $this -> velocidade = "35";

        }

        // Métodos

        function batalhar()
        {
            $this -> aumentar_experiencia(12);
        }
    
        function aumetar_nivel()
        {
            if($this -> nivel == 100)
            {
                print("Seu pokemon está no lvl máximo!\n");
            }
             
            
            else 
            {
                $this -> nivel = $this -> nivel +1;
                $this -> aumentar_vida();
                $this -> experiencia = 0;
            }
        }

        function aumentar_experiencia($exp)
        {
            $this -> experiencia += $this -> $exp;

            if($this -> experiencia += 100)
            {
                $this -> aumentar_nivel();
            }
        }

        function aumentar_nivel()
        {
            $this -> nivel = $this -> nivel + 1;
            $this -> aumentar_vida();
            $this -> experiencia = 0;
        }
    
        function aumentar_vida()
        {
            $this -> pontos_vida = $this -> nivel * 10;
        }
    
        function aumentar_velociadade()
        {
            $this -> velocidade = $this -> nivel * 3;
        }

        function aumentar_ataque()
        {
            $this -> velocidade = $this -> nivel * 5;
        }
    
        function aumentar_defesa()
        {
            $this -> velocidade = $this -> nivel * 5;
        }

        function dados()
        {
            $this -> dados = ("Nome: " . $this -> nome . "\n Tipo: " . $this -> tipo . "\n Nivel: " . $this -> nivel . "\n Experiencia: " . $this -> experiencia . "\n Pontos de Vida" . $this -> pontos_vida . "\n Ataque: " . $this -> ataque . "\n Defesa: " . $this -> defesa . "\n Velocidade: " . $this -> velocidade . "\n");
            return $this -> dados;
        }

    }

    $Rayquaza = new Pokemon();
    $Rayquaza -> nome = "Rayquaza";
    $Rayquaza -> tipo = "Dragao";

    for ($i=0; $i < 30; $i++) 
    { 
        $Rayquaza -> batalhar();
    }

    print($Rayquaza -> dados());

?>