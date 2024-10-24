<?php
    require_once __DIR__.'/../Controllers/FuncionarioController.php';
    use app\Controllers\FuncionarioController;

    if(isset($_POST['submit'])){
      
        $cliente = new FuncionarioController();
        $cliente->login();
        
        }
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../public/CSS/Login.css">

</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center bg-white">
                    <h1>Coselho Nacional de Avaliação de Qualidade</h1>
                        <img src="../../public/IMG/UP-Logo.jpg" alt="Universidade Pedagógica de Maputo" class="logo">
                    </div>
                    <div class="card-body">
                        <form  method="POST">
                            <div class="form-group">
                                <label for="username">Email</label>
                                <input type="text" id="username" name="email" class="form-control" placeholder="Email...">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" id="password" name="senha" class="form-control" placeholder="Senha...">
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary btn-block">Autenticar</button>
                            <!-- <a href="/recem-admitidos" class="btn btn-secondary btn-block">Recém-admitidos</a> -->
                            <a href="#" class="btn btn-link btn-block">Esqueci a senha</a>
                        </form>
                    </div>
                    <div class="card-footer text-center">
                        <p>© 2024 | Universidade Pedagógica de Maputo</p>
                        <!-- <a href="">Estado dos serviços</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
