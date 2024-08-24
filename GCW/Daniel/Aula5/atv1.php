<?php

    class Pessoa
    {

        // Atributos

        public $nome;
        public $endereco;
        public $cidade;
        public $UF;
        public $altura;

        // Metodos

        function falar_ola()
        {
            print("Ola Mundo! Eu sou " . $this->nome . "\n");
        }
        function falar_endereco()
        {
            print("Moro em " . $this->endereco . ", " . $this->cidade . ", " . $this->UF . "! \n");
        }
        function falar_altura()
        {
            print("Eu tenho " . $this->altura . "metros! \n \n");
        }
    }

    $pessoa1 = new Pessoa();
    $pessoa1 -> nome = readline("Informe o Nome da pessoa 1: ");
    $pessoa1 -> endereco = readline("Informe o Endereço da pessoa 1: ");
    $pessoa1 -> cidade = readline("Informe o Cidade da pessoa 1: ");
    $pessoa1 -> UF = readline("Informe a UF da pessoa 1: ");
    $pessoa1 -> altura = readline("Informe a Altura da pessoa 1: ");

    $pessoa2 = new Pessoa();
    $pessoa2 -> nome = readline("Informe o Nome da pessoa 2: ");
    $pessoa2 -> endereco = readline("Informe o Endereço da pessoa 2: ");
    $pessoa2 -> cidade = readline("Informe a Cidade da pessoa 2: ");
    $pessoa2 -> UF = readline("Informe a UF da pessoa 2: ");
    $pessoa2 -> altura = readline("Informe a Altura da pessoa 2: ");


    $pessoa1 -> falar_ola();
    $pessoa1 -> falar_endereco();
    $pessoa1 -> falar_altura();

    $pessoa2 -> falar_ola();
    $pessoa2 -> falar_endereco();
    $pessoa2 -> falar_altura();

?>