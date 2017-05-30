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
$Search = Usuario::search("jo");

echo jason_encode($search);

?>