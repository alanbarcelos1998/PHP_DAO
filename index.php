<?php

    require_once("config.php");

    // $us = new Usuario();
    // $us->loadById(1);
    // echo $us;

    // Carrega uma lista de usuarios
    // $lista = Usuario::getList();
    // echo json_encode($lista);

    // Carrega uma lista de usuários buscando pelo login
    // $search = Usuario::search("se");
    // echo json_encode($search);

    // Carrega um usuário usando o login e a senha
    // $usuario = new Usuario();
    // $usuario->login("jose","145");
    // echo $usuario;

    // Inserindo novo usuario
    // $aluno = new Usuario("Maria", "45823");
    // $aluno->insert();
    // echo $aluno;

    // update do usuario
    // $usuario = new Usuario();
    // $usuario->loadById(3);
    // $usuario->update("professor", "ASdf!@3s");
    // echo $usuario;

    // Excluir usuario
    $usuario = new Usuario();
    $usuario->loadById(3);
    $usuario->delete();
    echo $usuario;