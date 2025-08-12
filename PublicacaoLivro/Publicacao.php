<?php
    interface Publicacao{
        public function abrir();
        public function fechar();
        public function folhear($pag);
        public function avancarPag($pag);
        public function voltarPag($pag);
    }
?>