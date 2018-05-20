<?php 

require_once("config.php");

//Carrega um usuário
//$root = new Usuario();
//$root->loadById(5);
//echo $root;

//Carrega uam lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuarios buscando pelo login
//$busca = Usuario::search("Fonse");
//echo json_encode($busca);

//Carrega usuário usando o login e a senha
//$usuario = new usuario();
//$usuario->login("Igor Fonseca","123456789");
//echo $usuario;

//$aluno = new Usuario("aluno","@luno");
//$aluno->setDeslogin("aluno");
//$aluno->setDessenha("@lun0");
//$aluno->insert();

//echo $aluno;

$usuario = new Usuario();
$usuario->loadById(4);
$usuario->update("Diretor","D1r3t#)");

echo $usuario;

 ?>