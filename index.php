<?php

    require_once("config.php");

    /*$sql = new Sql();
    $usuarios = $sql -> select("SELECT * FROM tb_usuarios");
    echo json_encode($usuarios);*/

    /*Carrega um usuario do loadById
    $root = new Usuario();
    $root -> loadById(3);
    echo $root;*/

    /*Carrega a lista de usuarios
    $lista = Usuario::getList();
    echo json_encode($lista);*/

    /*Carrega uma lista de usuarios buscando pelo locale_get_display_name
    $search = Usuario::search("us");
    echo json_encode($search);*/

    /*Carrega um usuario usando o login e a senha
    $usuario = new Usuario();
    $usuario -> login("user", "666");
    echo $usuario;*/

    /*criando um novo usuario
    $aluno = new Usuario("aluno", "@alun0");
    $aluno -> insert();
    echo $aluno;*/

    /*Alterar um usuario
    $usuario = new Usuario();
    $usuario -> loadById(3);
    $usuario -> update("prof", "123");
    echo $usuario;*/

    $usuario = new Usuario();
    $usuario -> loadById(10);
    $usuario -> delete();
    echo $usuario;

?>