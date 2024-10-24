<?php 
namespace app\Views; 
session_start(); 
require_once __DIR__ . "/../Models/Funcionario.php"; 
use app\Models\Funcionario; 
require_once __DIR__ . "/../Controllers/FuncionarioController.php"; 
use app\Controllers\FuncionarioController; 

$funcionario = new Funcionario(); 
if (!($funcionario->isCNAQ())) { 
    header('Location: login.php?error=Admin'); 
    exit(); 
} 
if (isset($_POST['send'])) { 
    $funcionario = new FuncionarioController(); 
    $funcionario->Cadastrar(); 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registar Cliente</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../public/CSS/Divida.css">
</head>
<body>
    <div class="btn btn-secondary">
        <a href="VisualizarFuncionario_CNAQ.php">voltar</a>
    </div class="base">
    <div class="container mt-5">
        <h2 class="text-center">Registo de Funcionarios</h2>
        <form method="POST">
            <div class="form-group">
                <label for="Name">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome do funcionario">
            </div>
            <div class="form-group">
                <label for="Name">Função</label>
                <select class="form-control" id="funcao" name="funcao">
                <option value=""></option>
                <option value="Gestor">Gestor</option>
                    <option value="Analista">Analista</option>
                </select>
            </div>
            <div class="form-group">
                <label for="valor">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Digite o Email">
            </div>
            <div class="form-group">
                <label for="valor">Password</label>
                <input type="password" class="form-control" id="senha" name="senha" placeholder="Digite a Senha">
            </div>
            <div class="form-group">
                <label for="valor">Permissão</label>
                <select class="form-control" id="permissao" name="permissao">
                <option value=""></option>
                <option value="caa">CAA</option>
                    <option value="cnaq">CNAQ</option>
                </select>
            </div>
            <button type="button" class="btn btn-secondary" id="clearBtn">Limpar</button>
            <button type="submit" name="send" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="../../public/JS/Divida.js"></script>
    <script>
        document.getElementById('clearBtn').addEventListener('click', function() {
            document.getElementById('nome').value = '';
            document.getElementById('funcao').value = '';
            document.getElementById('permissao').value = '';
            document.getElementById('email').value = '';
            document.getElementById('senha').value = '';
        });
    </script>
</body>
</html>
