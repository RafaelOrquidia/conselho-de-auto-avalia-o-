<?php
namespace app\Views;
require_once __DIR__."/../../Controllers/FuncionarioController.php";
    use app\Controllers\FuncionarioController;

require_once __DIR__."/../../Models/Funcionario.php";
use app\Models\Funcionario;

$funcionario = new Funcionario();


if(!empty($_GET['id'])) {
    $id = $_GET['id'];
    $user =$funcionario->buscarPorId($id);

    if($user) { 
        $nome = $user["nome"];
        $funcao = $user["funcao"];
        $email = $user["email"];
        $senha = $user["senha"];
        $permissao = $user["permissao"];
    } else {
        // header('Location: clientes.php');
        echo 'erro';
    }

    


    if(isset($_POST['submit'])){
        $funcionario = new FuncionarioController();
        $funcionario ->Actualizar();
    }
    
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Funcionarios</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../../public/CSS/Divida.css">
</head>
<body>
    <div class = "btn btn-secondary ">
        <a href="../VisualizarFuncionario.php">voltar</a>
    </div>
    <div class="container mt-5">
        <h2 class="text-center">Actualizar Funcionario</h2>
        <form  method="POST">
            <div class="form-group">
                <label for="Name">Nome do Funcionario</label>
                <input type="text" class="form-control" name="nome"  value="<?php echo $nome; ?> ">
            </div>
            <div class="form-group">
                <label for="Name">Funcao</label>
                <input type="text" class="form-control" name="funcao"  value="<?php echo $funcao; ?> ">
            </div>
            <div class="form-group">
                <label for="valor">Email</label>
                <input type="email" class="form-control"  name="email"  value="<?php echo $email; ?>">
            </div>
            <div class="form-group">
                <label for="valor">Password</label>
                <input type="password" class="form-control"  name="senha"  value="<?php echo $senha; ?>">
            </div>
            <div class="form-group">
                <label for="valor">Estado</label>
                <input type="text" class="form-control"  name="permissao"  value="<?php echo $permissao; ?>">
            </div>
            <!-- /button type="button" class="btn btn-secondary" id="clearBtn">Limpar</button> -->
            <button type="submit" name="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="../../public/JS/Divida.js"></script>
</body>
</html>
