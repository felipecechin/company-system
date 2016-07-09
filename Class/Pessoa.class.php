<?php

class Pessoa {

    protected $nome, $idade, $endereco;

    function __construct($nome, $idade, $endereco) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->endereco = $endereco;

        echo 'O objeto ' . $this->nome . ' foi inicializado<br>';
    }

    function __destruct() {
        echo 'O objeto ' . $this->nome . ' foi removido da memória<br>';
    }

    function getNome() {
        return $this->nome;
    }

    function getIdade() {
        return $this->idade;
    }

    function getEndereco() {
        return $this->endereco;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setIdade($idade) {
        $this->idade = $idade;
    }

    function setEndereco($endereco) {
        $this->endereco = $endereco;
    }
    function ver() {
        var_dump($this);
    }
}
?>

