<?php

namespace app\Views;
session_start();

require_once __DIR__."/../Models/Funcionario.php";
    use app\Models\Funcionario;

    $funcionario = new Funcionario();

    if (!($funcionario->isCAA())) {
        
        header('Location: login.php?error=Admin');
        
    exit();
   }

    
    

        $funcionario = new Funcionario();
        $dados = $funcionario->Buscar_CAA();
       


      



?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizar Vagas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="stylesheet" href="../../public/CSS/VisualizarFuncionario.css">


</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-custom">
        <a class="navbar-brand"  href="CAA.php">
            <img src="../../public/IMG/UP-Logo.jpg" alt="Logotipo">
            <div class="nome">
            Conselho Nacional de Avaliação<br>
            e Qualidade
            </div>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a  href="ajuda.php">Ajuda</a>

                </li>
                <li class="nav-item">
                    <a href="#">Contato</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
   
  
    <div class="base">
        <div class="btn ">
            <!-- <a href="ADM.php">voltar</a> -->
        </div>
        <table class="table table-striped table-bordered m-3">
      <thead class="thead-dark">
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Função</th>
                <th>Email</th>
                <th>Permissão</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($dados)): ?>
                <?php foreach ($dados as $fun): ?>
                    <tr>
                    <td class="table-success"><?php echo $fun['id']; ?></td>
                        <td class="table-warning"><?php echo $fun['nome']; ?></td>
                        <td class="table-success"><?php echo $fun['funcao']; ?></td>
                        <td class="table-warning"><?php echo $fun['email']; ?></td>
                        <td class="table-success"><?php echo $fun['permissao']; ?></td>
                        <td>
                           <!-- <a href="EDITAR/EditarFuncionario.php?id=<?php echo $fun['id']; ?>" class="btn btn-warning btn-sm">Editar</a> -->
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="4">Nenhum dado encontrado.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
            </div>
</body>
</html>