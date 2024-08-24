<?php

    class Aluno
    {

        // Atributos

        private $nome;
        private $nota1;
        private $nota2;

        // Metodos

        public function calcula_media()
        {
            return ($this->nota1 + $this->nota2)/2;
        }

        // GETS & SETS


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
         * Get the value of nota1
         */
        public function getNota1()
        {
                return $this->nota1;
        }

        /**
         * Set the value of nota1
         */
        public function setNota1($nota1): self
        {
                $this->nota1 = $nota1;

                return $this;
        }

        /**
         * Get the value of nota2
         */
        public function getNota2()
        {
                return $this->nota2;
        }

        /**
         * Set the value of nota2
         */
        public function setNota2($nota2): self
        {
                $this->nota2 = $nota2;

                return $this;
        }
    }

    $a1 = new Aluno();
    $a1->setNome(readline("Qual o seu Nome? "));
    $a1->setNota1(readline("Qual a sua Nota 1? "));
    $a1->setNota2(readline("Qual o sua Nota 2? "));
    print ($a1->calcula_media() . "\n");

    $a2 = new Aluno();
    $a2->setNome(readline("Qual o seu Nome? "));
    $a2->setNota1(readline("Qual a sua Nota 1? "));
    $a2->setNota2(readline("Qual o sua Nota 2? "));
    print ($a2->calcula_media() . "\n");


    $a3 = new Aluno();
    $a3->setNome(readline("Qual o seu Nome? "));
    $a3->setNota1(readline("Qual a sua Nota 1? "));
    $a3->setNota2(readline("Qual o sua Nota 2? "));
    print ($a3->calcula_media() . "\n");

?>