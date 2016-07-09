<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once './Class/Pessoa.class.php';
        require_once './Class/Funcionario.class.php';
        require_once './Class/Empresa.class.php';

        /*  $p1 = new Pessoa('Totumo', 15, 'Avenida Dores');
          $p1->ver();

          $p2 = new Pessoa('Fernando', 16, 'Avenida Dores');
          $p2->ver(); */

        $f1 = new Funcionario('Fabio', 32, 'SM', 'Programador');
        $emp1 = new Empresa('CTISM', 'Desenvolvimento');
        $emp1->Empregar($f1, 'Analista de sistemas', 4500);
        $emp1->PagarSalario();
        $emp1->PagarSalario();

        $f2 = new Funcionario('Joao', 50, 'POA', 'Designer');
        $emp1->Empregar($f2, 'Designer', 2000);
        $emp1->PagarSalario();

        echo var_dump($f2, $f1, $emp1);
        ?>
    </body>
</html>
