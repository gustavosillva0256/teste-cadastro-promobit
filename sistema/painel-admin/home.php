<?php 

require_once('verificar.php');

$hoje = date('Y-m-d');
$mes_atual = Date('m');
$ano_atual = Date('Y');
$dataInicioMes = $ano_atual."-".$mes_atual."-01";
$dataMesFinal = $ano_atual."-".$mes_atual."-31";

$query = $pdo->query("SELECT * from produtos");
	$res = $query->fetchAll(PDO::FETCH_ASSOC);
	$total_produtos = @count($res);


?>
		

<style type="text/css">
			#principal{
    width:100%;
    height: 100%;
    margin-left:10px;
    font-family:Verdana, Helvetica, sans-serif;
    font-size:14px;

}
#barra{
    margin: 0 2px;
    vertical-align: bottom;
    display: inline-block;
    padding:5px;
    text-align:center;

}
.cor1, .cor2, .cor3, .cor4, .cor5, .cor6, .cor7, .cor8, .cor9, .cor10, .cor11, .cor12{
    color:#FFF;
    padding: 5px;
}
.cor1{ background-color: #FF0000; }
.cor2{ background-color: #0000FF; }
.cor3{ background-color: #FF6600; }
.cor4{ background-color: #009933; }
.cor5{ background-color: #FF0000; }
.cor6{ background-color: #0000FF; }
.cor7{ background-color: #FF6600; }
.cor8{ background-color: #009933; }
.cor9{ background-color: #FF0000; }
.cor10{ background-color: #0000FF; }
.cor11{ background-color: #FF6600; }
.cor12{ background-color: #009933; }
		</style>


		



