<?php

    class Animais
    {

        // Atributos

        public $especie;
        public $num_patas;
        public $tipo_pele;
        public $som;
        public $movimento;

        // Metodos

        function emitir_sons()
        {
            print("O/A " . $this->especie . $this->som);
        }
        function movimento()
        {
            print("O/A " . $this->especie . $this->movimento);
        }
    }

    $animal1 = new Animais();
    $animal1 -> especie = "Vaca";
    $animal1 -> num_patas = "4";
    $animal1 -> tipo_pele = "pelo";
    $animal1 -> som = "Muuu";
    $animal1 -> movimento = "anda";


?>