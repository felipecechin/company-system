<?php

class Funcionario extends Pessoa {

    protected $profissao;
    public $salario;
    protected $empresa, $poupanca;

    function __construct($nome, $idade, $endereco, $profissao) {
        parent::__construct($nome, $idade, $endereco);
        $this->poupanca = 1000;
        $this->profissao = $profissao;
    }

    function Atuar($profissao, $salario, $empresa) {
        $this->profissao = $profissao;
        $this->salario = $salario;
        $this->empresa = $empresa;
    }

    function receberSalario($sal) {
        $this->poupanca += $sal;
    }

    function ver() {
        return var_dump($this);
    }

}
?>
