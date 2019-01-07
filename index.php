<?php

require_once("config.php");

//$sql = new Sql();


//$root = new Usuario();

//$root->loadbyId(3);

//echo $root	;

//$usuarios = $sql->select("SELECT * FROM tb_usuarios");
//echo json_encode($usuarios);



//carrega um usuaruio
//$root = new Usuario();
//$root -> loadbyId(1);
//echo $root;


//carrega uma lista de usuários

//$lista = Usuario::getList();
//echo json_encode($lista);


//carrega uma lista de usuarios buscando por login
//$search = Usuario::search("j");
//echo json_encode($search);


//carrega um usuário usando o login e senha

//$usuario = new Usuario();
//$usuario->login("daniel","123456");
//echo $usuario;

//criando um novo usuário

	//sem construct:
	//$aluno = new Usuario();

	//$aluno->setDeslogin("aluno");
	//$aluno->setDessenha("@lun0");

	//$aluno->insert();

	//echo $aluno;

	//com construct:
	
	//$aluno = new Usuario("aluno","@alun0");

	//$aluno->insert();

	//echo $aluno;


//alterar um usuario
$usuario = new Usuario();
$usuario->loadById(3);
$usuario->update("auxiliar","!@#$%");
echo $usuario;

//deletar um usuário
//$usuario = new Usuario();
//$usuario->loadById(2);
//$usuario->delete();
//echo $usuario;


?>	