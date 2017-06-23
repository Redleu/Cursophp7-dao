<?php

require_once("config.php");

//Tabela
/*$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_usuarios");
echo json_encode($usuarios);*/

//Carrega um usuário
//$root = new Usuario();
//$root->loadbyId(4);
//echo $root;

//Carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuários buscando pelo login
//$search = Usuario::search("jo");
//echo json_encode($search);

//Carrega um usuário usando o login e a senha
//$usuario = new Usuario();
//$usuario->login("joão", "1234");
//echo $usuario;

//Criando um novo usuário
/*$aluno = new Usuario("Marcio", "çlkjg");
$aluno->insert();
echo $aluno;
*/

/*
//Alterar um usuário
$usuario = new Usuario();
$usuario->loadbyId(18);
$usuario->update("Amadeu", "##@@");
echo $usuario;
*/

//Deleta um usuario
$usuario = new Usuario();
$usuario->loadbyId(20);
$usuario->delete();
echo $usuario;


?>