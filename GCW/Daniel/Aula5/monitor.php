<?php

    $monitor1 = new Monitor();
    $monitor1 -> cor = "Preto";
    $monitor1 -> resoulucao = "1920x1080";
    $monitor1 -> marca = "AOC";
    $monitor1 -> ligar();
    $monitor1 -> mostrar_imagem();
    $monitor1 -> desligar();

    $monitor2 = new Monitor();
    $monitor2 -> cor = "Prata";
    $monitor2 -> resoulucao = "1366x768";
    $monitor2 -> marca = "Lenovo";
    $monitor2 -> ligar();
    $monitor1 -> mostrar_imagem();
    $monitor1 -> desligar();

    class Monitor
    {

        // Atributos

        public $cor;
        public $resoulucao;
        public $marca;

        // Metodos

        function ligar()
        {
            print("Computador Ligando... \n");
        }
        function desligar()
        {
            print("Computador Desigando... \n \n");
        }
        function mostrar_imagem()
        {
            print("Computador Mostrando Imagem com a Resolução: " . $this->resoulucao . "\n");
        }
    }

?>