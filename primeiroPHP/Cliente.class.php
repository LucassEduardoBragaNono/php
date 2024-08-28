<?php
    class Cliente
    {
        // Atributos
        public function __construct(
        public string $nome = "",
        public string $sobrenome,
        public string $cpf){}

        // public string $nome;
        // public string $sobrenome;
        // public string $cpf;

        // Métodos
        public function inserir()
        {
            echo "inserir";
        }
    }
?>