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

        public function getNome() {
            return $this->nomeUsuario;
        }

        public function setNome(string $_nomeUsuario) {
            $this-> nomeUsuario = $_nomeUsuario;
        }

        public function getDataNascimento() {
            return $this->dataNascimentoUsuario;
        }

        public function setDataNascimento(string $_dataNascimentoUsuario) {
            $this-> dataNascimentoUsuario = $_dataNascimentoUsuario;
        }

        public function getEmail() {
            return $this->emailUsuario;
        }

        public function setEmail(string $_emailUsuario) {
            $this-> emailUsuario = $_emailUsuario;
        }
    }

?>