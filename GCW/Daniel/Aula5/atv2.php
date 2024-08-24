<?php

    class Retangulo
    {

        // Atributos

        public $base;
        public $altura;

        // Metodos

        function area()
        {
            return $this->base * $this->altura;
        }
        function perimetro()
        {
            return $this->base * 2 + $this->altura * 2;
        }
    }


    $retangulo1 = new Retangulo();
    $retangulo1 -> base = readline("Informe a base do retangulo 1: ");
    $retangulo1 -> altura = readline("Informe a altura do retangulo 1: ");
    
    $retangulo2 = new Retangulo();
    $retangulo2 -> base = readline("Informe a base do retangulo 2: ");
    $retangulo2 -> altura = readline("Informe a altura do retangulo 2: ");

    $retangulo3 = new Retangulo();
    $retangulo3 -> base = readline("Informe a base do retangulo 3: ");
    $retangulo3 -> altura = readline("Informe a altura do retangulo 3: ");

    $area = $retangulo1 -> area();
    $perimetro = $retangulo1 -> perimetro();

    print("A area do retangulo1 é " . $area . " e o perimetro é " . $perimetro . "\n");

    $area = $retangulo2 -> area();
    $perimetro = $retangulo2 -> perimetro();

    print("A area do retangulo2 é " . $area . " e o perimetro é " . $perimetro . "\n");

    $area = $retangulo3 -> area();
    $perimetro = $retangulo3 -> perimetro();

    print("A area do retangulo3 é " . $area . " e o perimetro é " . $perimetro . "\n");

?>