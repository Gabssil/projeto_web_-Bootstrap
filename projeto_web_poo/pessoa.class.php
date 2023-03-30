<?php

class pessoa{

    private $nome;
    private $telefone;
    private $origem;
    private $datadecontato;
    private $observacao;
    
    //nome
    public function getNome(){
        return $this -> nome;
    }
    public function setNome($nome){
        $this -> nome = $nome;
    }

    //Telefone
    public function getTelefone(){
        return $this -> telefone;
    }
    public function setTelefone($telefone){
        $this -> telefone = $telefone;
    }

    //Origem
    public function getOrigem(){
        return $this -> origem;
    }
    public function setOrigem($origem){
        $this -> origem = $origem;
    }

    //Data de contato
    public function getDatadecontato(){
        return $this -> datadecontato;
    }
    public function setDatadecontato($datadecontato){
        $this -> datadecontato = $datadecontato;
    }

    //observação
    public function getObservacao(){
        return $this -> observacao;
    }
    public function setObservacao($observacao){
        $this -> observacao = $observacao;
    }
    }

?>
