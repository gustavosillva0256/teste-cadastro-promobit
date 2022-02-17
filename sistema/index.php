<?php 
require_once("../conexao.php");

 ?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
     <!-- Favicon -->
    <link rel="shortcut icon" href="" type="image/x-icon">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Login</title>


    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link href="vendor/css/login.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="script.js"></script>
<!------ Include the above in your HEAD tag ---------->

<style>body {
    background: #000
}

.card {
    border: none;
    height: 320px
}

.forms-inputs {
    position: relative
}

.forms-inputs span {
    position: absolute;
    top: -18px;
    left: 10px;
    background-color: #fff;
    padding: 5px 10px;
    font-size: 15px
}

.forms-inputs input {
    height: 50px;
    border: 2px solid #eee
}

.forms-inputs input:focus {
    box-shadow: none;
    outline: none;
    border: 2px solid #000
}

.btn {
    height: 50px
}

.success-data {
    display: flex;
    flex-direction: column
}

.bxs-badge-check {
    font-size: 90px
}
</style>

</head>
<body>
    

    <div class="container mt-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-8"><br><br><br>
            <div class="card px-5 py-5" id="form1">
                <div class="form-data" v-if="!submitted">
                <form id="login-form" class="form" action="autenticar.php" method="post">
                            <h3 class="text-center text-dark">Faça seu login</h3>
                            <div class="form-group">
                                <label for="username" class="">Usuário:</label><br>
                                <input type="text" name="usuario" id="usuario" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="senha" class="">Senha:</label><br>
                                <input type="password" name="senha" id="senha" class="form-control" required>
                            </div>
                            <div class="form-group mt-4">
                               
                                <input type="submit" name="submit" class="btn btn-outline-secondary btn-md d-grid gap-2 col-6 mx-auto" value="Logar">
                            </div>
                           
                        </form>
                   
                </div>
            </div>
        </div>
    </div>
    </div>

</body>


</html>

