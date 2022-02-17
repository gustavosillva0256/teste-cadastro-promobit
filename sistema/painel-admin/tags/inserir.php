<?php 
require_once("../../../conexao.php");

$nome = $_POST['nome'];
$id = $_POST['id'];

//BUSCAR O REGISTRO JÁ CADASTRADO NO BANCO
$query = $pdo->query("SELECT * FROM tags WHERE  id = '$id'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$nome_banco = @$res[0]['nome'];


if($nome != $nome_banco){
	$query = $pdo->prepare("SELECT * FROM tags WHERE  nome = :nome");
	$query->bindValue(":nome", "$nome");
	$query->execute();
	$res = $query->fetchAll(PDO::FETCH_ASSOC);
	$total_reg = @count($res);
	if($total_reg > 0){
		echo 'tag já Cadastrada!';
		exit();
	}
}

if($id == ""){
	$query = $pdo->prepare("INSERT INTO tags SET nome = :nome");
}else{
	$query = $pdo->prepare("UPDATE tags SET nome = :nome WHERE id = '$id'");
}

$query->bindValue(":nome", "$nome");
$query->execute();

echo 'Salvo com Sucesso!';
?>