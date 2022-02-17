<?php 
@session_start();
require_once("../../conexao.php");
require_once("verificar.php");

//MENUS PARA O PAINEL
$menu1 = 'home';
$menu2 = 'produtos';
$menu3 = 'tags';


//recuperar os dados do usuário
$id_usuario = $_SESSION['id'];
$query = $pdo->query("SELECT * FROM usuarios WHERE id = '$id_usuario'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_reg = @count($res);
if($total_reg > 0){
	$nome_usu = $res[0]['nome'];
	$email_usu = $res[0]['email'];
	$senha_usu = $res[0]['senha'];
	$nivel_usu = $res[0]['nivel'];
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Painel Administrativo</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

	<link rel="shortcut icon" href="../img/icone2.ico" type="image/x-icon">

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">   

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<link rel="stylesheet" type="text/css" href="../vendor/DataTables/datatables.min.css"/>
	<script type="text/javascript" src="../vendor/DataTables/datatables.min.js"></script>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">


</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
		
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link active text-light" aria-current="page" href="index.php?pag=<?php echo $menu1 ?>">Home</a>
					</li>					

					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							Produtos /Tags
						</a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
							<li><a class="dropdown-item" href="index.php?pag=<?php echo $menu2 ?>">Produtos</a></li>
							
							<li><a class="dropdown-item" href="index.php?pag=<?php echo $menu3 ?>">Tag</a></li>								
						</ul>
					</li>

					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							Relatórios
						</a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
							<li><a class="dropdown-item" target="_blank" href="../rel/rel_produtos_class.php">Produtos</a></li>

						</ul>
					</li>

				</ul>
				<div class="d-flex mr-4">
							
					<div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
						<ul class="navbar-nav">
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle text-light" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
									<?php echo $nome_usu ?>
								</a>
								<ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
									
                 					 <li><hr class="dropdown-divider"></li>
                  					<li><a class="dropdown-item <?php echo @$classeMenu ?>" href="../logout.php">Sair</a></li>

								</ul>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</nav>

	<div class="container-fluid mt-4 mx-4 px-4">
		<?php 
		if(@$_GET['pag'] == $menu1){
			require_once($menu1.'.php');

		}else if(@$_GET['pag'] == $menu2){
			require_once($menu2.'.php');


		}else if(@$_GET['pag'] == $menu3){
			require_once($menu3.'.php');


		}else{
			require_once($menu1.'.php');
		}
		?>
	</div>

</body>
</html>

<!-- Mascaras JS -->
<script type="text/javascript" src="../../assets/js/mascaras.js"></script>

<!-- Ajax para funcionar Mascaras JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script> 



