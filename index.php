<?php

require_once("config.php");

//$sql = new Sql();
//$usuarios = $sql->select("SELECT *FROM tb_usuarios");
//echo json_encode($usuarios);

//carrega um usuário
//$root = new Usuario(); //erro//
//$root->loadbyID(1);
//echo $root;

//carrega uma lista de usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuários buscando pelo login
//$Search = Usuario::search("jose");
//echo json_encode($Login);

//carrega um usuário usando o login e a senha
$usuario = new Usuario();
$usuario->login("jose", "123456789");
echo $usuario;

?>