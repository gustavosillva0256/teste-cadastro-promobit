<?php 
require_once("../../../conexao.php");

$id = $_POST['id'];

$query = $pdo->query("SELECT * from produtos WHERE tag = '$id'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
if(@count($res) > 0){
	echo 'Existem produtos relacionadas a essa tag, primeiro exclua esses produtos para depois excluir a tag!';
	exit();
}


$pdo->query("DELETE from tags WHERE id = '$id'");

echo 'Excluído com Sucesso!';
?>