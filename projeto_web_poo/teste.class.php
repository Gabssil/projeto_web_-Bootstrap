<?php

require_once("pessoa.class.php");

class teste{
       private $pessoa;

       public function __construct(){
           $pessoa = new pessoa();
           //nome
           $pessoa->setNome($_POST['nome']);
           echo $pessoa->getNome() . "<br>";

           //endereço
           $pessoa->setTelefone($_POST['telefone']);
           echo $pessoa->getTelefone() . "<br>";

           //bairro
           $pessoa->setOrigem($_POST['origem']);
           echo $pessoa->getOrigem() . "<br>";

           //cep
           $pessoa->setDatadecontato($_POST['datadecontato']);
           echo $pessoa->getDatadecontato() . "<br>";

           //estado
           $pessoa->setObservacao($_POST['observacao']);
           echo $pessoa->getObservacao() . "<br>";
       }
}new teste();

?>