<?php 
require_once("../../../conexao.php");

$nome = $_POST['nome'];
$tag = $_POST['tag'];
$id = $_POST['id'];

//BUSCAR O REGISTRO JÁ CADASTRADO NO BANCO
$query = $pdo->query("SELECT * FROM produtos WHERE  id = '$id'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$nome_banco = @$res[0]['nome'];

if($nome != $nome_banco){
	$query = $pdo->prepare("SELECT * FROM produtos WHERE  nome = :nome");
	$query->bindValue(":nome", "$nome");
	$query->execute();
	$res = $query->fetchAll(PDO::FETCH_ASSOC);
	$total_reg = @count($res);
	if($total_reg > 0){
		echo 'Nome já Cadastrado!';
		exit();
	}
}



if($id == ""){
	$query = $pdo->prepare("INSERT INTO produtos SET nome = :nome, tag = :tag");
	
}else{$query = $pdo->prepare("UPDATE produtos SET nome = :nome, tag = :tag WHERE id = '$id'");
		
	}
	
$query->bindValue(":nome", "$nome");
$query->bindValue(":tag", "$tag");
$query->execute();

echo 'Salvo com Sucesso!';
?>