<?php

interface Crud {

    public function create();
    public function read();
    public function update();
    public function delete();

}

class Noticias implements Crud {

    public function create() {
        //lógica para criar uma noticia *exemplo
    }

    public function read() {
        //lógica para ler uma noticia *exemplo
    }

    public function update() {
        //lógica para atualizar uma noticia *exemplo
    }

    public function delete() {
        //lógica para deletar uma noticia *exemplo
    }

}