<?php

class Empresa {

    protected $nome, $especificacao, $numFunc;
    protected $Funcionario;

    function __construct($nome, $especificacao) {
        $this->nome = $nome;
        $this->especificacao = $especificacao;
        $this->numFunc = 0;
    }

    function IncluirFunc() {
        $this->numFunc += 1;
    }

    function Empregar($Funcionario, $profissao, $salario) {
        $this->Funcionario = (object) $Funcionario;
        $this->Funcionario->Atuar($profissao, $salario, $this->nome);
        $this->IncluirFunc();
    }

    function PagarSalario() {
        $this->Funcionario->receberSalario($this->Funcionario->salario);
    }

    function SetarFuncionario($funcionario) {
        $this->Funcionario = (object) $funcionario;
    }

}
?>

