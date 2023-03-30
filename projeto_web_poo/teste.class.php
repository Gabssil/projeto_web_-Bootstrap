<?php

require_once("pessoa.class.php");

class teste{
       private $pessoa;

       public function __construct(){
           $pessoa = new pessoa();
           //nome
           $pessoa->setNome($_POST['nome']);
           echo $pessoa->getNome() . "<br>";

           //telefone
           $pessoa->setTelefone($_POST['telefone']);
           echo $pessoa->getTelefone() . "<br>";

           //origem
           $pessoa->setOrigem($_POST['origem']);
           echo $pessoa->getOrigem() . "<br>";

           //Data de contato
           $pessoa->setDatadecontato($_POST['datadecontato']);
           echo $pessoa->getDatadecontato() . "<br>";

           //observação
           $pessoa->setObservacao($_POST['observacao']);
           echo $pessoa->getObservacao() . "<br>";
       }
}new teste();

?>
