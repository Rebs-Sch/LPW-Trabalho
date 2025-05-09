<?php

class Cartao{
    private $nome;
    private $banda;
    private $data;
    private $genero;
    private $capa;
    private $link;
    
    public function __construct($n, $b, $d, $g, $c, $l){
        $this->nome = $n;
        $this->banda = $b;
        $this->data = $d;
        $this->genero = $g;
        $this->capa = $c;
        $this->link = $l;
    }
    
    public function cartao(){
        echo'
        <div class="card m-3" style="width: 18rem;">
          <img src="'.$this->capa.'" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">'.$this->nome.', '.$this->banda.'</h5>
            <h6 class="card-subtitle mb-2 text-body-secondary">'.$this->data.'</h6>
            <p class="card-text">'.$this->genero.'</p>
            <a href="'.$this->link.'" class="btn btn-dark">Escute no spotify</i></a>
          </div>
        </div>
        ';
    }
}
