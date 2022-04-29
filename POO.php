<?php
    class Numeros {
        public $primeiro;
        public $segundo;
        public $terceiro;
    
        // Get
        public function getPrimeiro() {
            return $this->primeiro;
        }
        public function getSegundo() {
            return $this->segundo;
        }
        public function getTerceiro() {
            return $this->terceiro;
        }
    
        // Set
        public function setPrimeiro($primeiro) {
            $this->primeiro = $primeiro;
        } 
        public function setSegundo($segundo) {
            $this->segundo = $segundo;
        } 
        public function setTerceiro($terceiro) {
            $this->terceiro = $terceiro;
        }  

        // função para multiplicar os três valores
        public function multiplicarValores(){
            return $this->primeiro*$this->segundo*$this->terceiro;
        }

    }

    // Exemplo de uso da classe
    $numeros = new Numeros; // intância da classe

    // atribuindo valores
    $numeros->setPrimeiro(5);
    $numeros->setSegundo(8);
    $numeros->setTerceiro(2);

    // Acessando um método da classe
    echo 'O resultado da multiplicação dos valores é '.$numeros->multiplicarValores();
?>