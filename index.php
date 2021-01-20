<?php

require_once("config.php");

//$sql = new sql();

//$usuarios = $sql->select("SELECT * FROM tb_usuarios");

//echo json_encode($usuarios);
//commit: tras um só usuário
//$root = new Usuario();
//$root->loadbyID(3);

//echo $root;

//commit: Carrega uma lista de usuário

//$lista = Usuario::getList();

//echo json_encode($lista);

//commit: carrega uma lista de usuario buscando pelo login

//$search = Usuario::search("jo");

//echo json_encode($search);

//carrega um usúario usando o login e a senha

//$usuario = new Usuario();
//$usuario->login("root","!@#$");

//echo $usuario;
/*
//Criando um novo usuário
$aluno = new Usuario("aluno", "@luar");
//$aluno->setDeslogin("aluno");
//$aluno->setDessenha("@luar");

$aluno->insert();

echo $aluno;
*/

//alterar um usuario
/*
$usuario = new Usuario();

$usuario->loadById(6);

$usuario->update("professor","3e4r5t");

echo $usuario;
*/
$usuario = new Usuario();

$usuario->loadById(6);
$usuario->delete();

echo $usuario;

?>