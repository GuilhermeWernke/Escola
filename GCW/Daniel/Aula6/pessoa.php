<?php

    class Pessoa
    {

        // Atributos

        private $nome;
        private $endereco;
        private $cidade;
        private $UF;
        private $altura; 

        // Metodos

        public function getApresentacao()
        {

             return "Olá Mundo, meu nome é " .  $this -> nome . " resido no endereço " . $this -> endereco . ", " . $this -> cidade . " " . $this -> UF . " e possuo uma altura de " . $this -> altura . "M! \n";

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
         * Get the value of endereco
         */
        public function getEndereco()
        {
                return $this->endereco;
        }

        /**
         * Set the value of endereco
         */
        public function setEndereco($endereco): self
        {
                $this->endereco = $endereco;

                return $this;
        }

        /**
         * Get the value of cidade
         */
        public function getCidade()
        {
                return $this->cidade;
        }

        /**
         * Set the value of cidade
         */
        public function setCidade($cidade): self
        {
                $this->cidade = $cidade;

                return $this;
        }

        /**
         * Get the value of UF
         */
        public function getUF()
        {
                return $this->UF;
        }

        /**
         * Set the value of UF
         */
        public function setUF($UF): self
        {
                $this->UF = $UF;

                return $this;
        }

        /**
         * Get the value of altura
         */
        public function getAltura()
        {
                return $this->altura;
        }

        /**
         * Set the value of altura
         */
        public function setAltura($altura): self
        {
                $this->altura = $altura;

                return $this;
        }

    } // Fim da classe Liquidificador

    $p1 = new Pessoa();
    $p1->setNome("GCW");
    $p1->setEndereco("B. Dom Pedro I");
    $p1->setCidade("Foz do Iguaçu");
    $p1->setUF("PR");
    $p1->setAltura("1,90");

    print($p1->getApresentacao());

    $p2 = new Pessoa();
    $p2->setNome("Petrus");
    $p2->setEndereco("skibidi");
    $p2->setCidade("sigma");
    $p2->setUF("Bora Bill");
    $p2->setAltura("1,81");

    print($p2->getApresentacao());


?>