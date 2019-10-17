<?php

 class Carro{
     private $cor;
     private $aro;
     private $marca;
     private $nome;
     private $ano;

     //construtor
      public function __construct($cor, $aro, $marca, $nome, $ano){

        $this->setCor($cor);

        $this->setAro($aro);

        $this->setMarca($marca);

        $this->setNome($nome);

        $this->setAno($ano);
    }
     //função pra chamar todos getters
     public function dadosDoCarro(){
         $this->getMarca();
         echo '<br>';
         $this->getNome();
         echo '<br>';
         $this->getCor();
         echo '<br>';
         $this->getAno();
         echo '<br>';
         $this->getAro();
     }

     //setters and getters
      public function setCor($corDoCarro){

        $this->cor=$corDoCarro;

    }
     public function getCor(){
         echo $this->cor;
     }
      public function setAro($aroDoCarro){

        $this->aro=$aroDoCarro;

    }
     public function getAro(){
         echo $this->aro;
     }
      public function setMarca($marcaDoCarro){

        $this->marca=$marcaDoCarro;

    }
     public function getMarca(){
         echo $this->marca;
     }
      public function setNome($nomeDoCarro){

        $this->nome=$nomeDoCarro;

    }
     public function getNome(){
         echo $this->nome;
     }
      public function setAno($anoDoCarro){

        $this->ano=$anoDoCarro;

    }
     public function getAno(){
         echo $this->ano;
     }

 }



?>
