<?php

require_once("config.php");

//carrega um usuaruio
//$root = new Usuario();
//$root -> loadbyId(1);
//echo $root;


//carrega uma lista de usuários

//$lista = Usuario::getList();

//echo json_encode($lista);


//carrega uma lista de usuarios buscando por login
//$search = Usuario::search("jo");
//echo json_encode($search);


//carrega um usuário usando o login e senha

//$usuario = new Usuario();
//$usuario->login("jose","123456");
//echo $usuario;

//criando um novo usuário
//$aluno = new Usuario("aluno","@lun0");
//$aluno->insert();
//echo $aluno;

$usuario = new Usuario();

$usuario->loadById(3);

$usuario->update("auxiliar","!@#$%");

echo $usuario;

?>	