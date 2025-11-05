<?php
    class Usuario {
        
        private int $idUsuario;
        private string $nomeUsuario;
        private string $senhaUsuario;
        private string $emailUsuario;
        private string $dataNascimentoUsuario; 

        public function __construct(
            $_idUsuario,
            $_nomeUsuario,
            $_senhaUsuario,
            $_emailUsuario,
            $_dataNascimentoUsuario
        ) {
            $this->idUsuario = $_idUsuario;
            $this->nomeUsuario = $_nomeUsuario;
            $this->senhaUsuario = $_senhaUsuario;
            $this->emailUsuario = $_emailUsuario;
            $this->dataNascimentoUsuario = $_dataNascimentoUsuario;
        }

        public function getId(): int {
            return $this ->idUsuario;
        }

        public function getNome(): string {
            return $this->nomeUsuario;
        }

        public function setNome(string $_nomeUsuario): void {
            $this->nomeUsuario = $_nomeUsuario;
        }

        public function getDataNascimento(): string {
            return $this->dataNascimentoUsuario;
        }

        public function setDataNascimento(string $_dataNascimentoUsuario): void {
            $this->dataNascimentoUsuario = $_dataNascimentoUsuario;
        }

        public function getEmail(): string {
            return $this->emailUsuario;
        }

        public function setEmail(string $_emailUsuario): void {
            $this->emailUsuario = $_emailUsuario;
        }

        public function getSenha(): string {
            return $this->senhaUsuario;
        }
        
    }
?>