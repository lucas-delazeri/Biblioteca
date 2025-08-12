<?php
    require_once 'Publicacao.php';

    class Livro implements Publicacao{
        private $titulo;
        private $autor;
        private $totPaginas;
        private $pagAtual;
        private $aberto;
        private $leitor;

        function __construct($titulo, $autor, $totPaginas, $leitor)
        {
            $this->titulo = $titulo;
            $this->autor = $autor;
            $this->totPaginas = $totPaginas;
            $this->leitor = $leitor;
        } 
      

        public function getTitulo() {
            return $this->titulo;
        }
        public function setTitulo($titulo) {
            $this->titulo = $titulo;
        } 
        public function getAutor() {
            return $this->autor;
        }
        public function setAutor($autor) {
            $this->autor = $autor;
        }
        public function getTotPaginas() {
            return $this->totPaginas;
        }
        public function setTotPaginas($totPaginas) {
            $this->totPaginas = $totPaginas;
        }
        public function getPagAtual() {
            return $this->pagAtual;
        }
        public function setPagAtual($pagAtual) {
            $this->pagAtual = $pagAtual;
        }
        public function getAberto() {
            return $this->aberto;
        }
        public function setAberto($aberto) {
            $this->aberto = $aberto;
        }
        public function getLeitor() {
            return $this->leitor;
        }
        public function setLeitor($leitor) {
            $this->leitor = $leitor;
        }
        
        public function detalhes() {
            echo "<hr>Livro: " . $this->getTitulo() . " escrito por " . $this->getAutor();
            echo "<br> Páginas: " . $this->getTotPaginas() . " atual " . $this->getPagAtual();
            echo "<br> Sendo lido por " . $this->getLeitor()->getNome(); 
        }

        public function abrir(){
            $this->aberto = true;
        }

        public function fechar(){
            $this->aberto = false;
        }

        public function folhear($p){
            if ($p > $this->totPaginas) {
                $this->pagAtual = 0;
            } else {
                $this->pagAtual = $p;
            }
        }

        public function avancarPag($p){
            if ($p < $this->totPaginas){
                $this->pagAtual+=$p;
            } else {
                echo "Você chegou na última página!";
            }
        }

        public function voltarPag($p){
            if ($p < $this->totPaginas && $p > 0) {
                $this->pagAtual--;
            } else { 
                echo "Você chegou na primeira página!";
            }
        }
    }
?>