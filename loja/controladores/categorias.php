<?php
// CONTROLADOR PARA CATEGORIAS
// vai verificar que ação o usuário deseja fazer
//dependendo da acão, faz algo

require_once '../model/CategoriaCrud.php';


    if (isset($_GET['acao'])){

        $acao= $_GET['acao'];
    }else{

        $acao='index';
    }

    switch($acao){
        case'index';

        $crud = new CategoriaCrud();
        $categorias =$crud->getCategorias();
            include '../visoes/templates/cabecalho.php';
            include '../visoes/categorias/show.php';
            include '../visoes/templates/rodape.php';
            break;
        case 'show':
            $id=$_GET['id'];
            $crud = new CategoriaCrud();
            $cateorias = $crud->getCategorias();
            include '../visoes/templates/cabecalho.php';
            include '../visoes/categorias/show.php';
            include '../visoes/templates/rodape.php';
            break;
    }


