<?php

 
namespace app\Views;
session_start();

require_once __DIR__."/../Models/Funcionario.php";
    use app\Models\Funcionario;

    $funcionario = new Funcionario();

    if (!($funcionario->isCAA() || $funcionario->isCNAQ()))  {
        
        header('Location: login.php?error=Admin');
        
    exit();
   }

   require_once __DIR__."/../Models/Dimensao.php";
   use app\Models\Dimensao;
   $dim = new Dimensao();
   $relatorios = $dim->getRepositorioData();
  
 



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página do Administrador</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="stylesheet" href="../../public/CSS/Repositorio.css">
</head>
<body>
   
<header>
    <nav class="navbar navbar-expand-lg navbar-custom">
        <a class="navbar-brand"  id="sidebarToggle">
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
        <!-- <a class="btn btn-info m-3" href="CadastrarDivida.php">Registrar</a> -->
        <h3>Repositório de Ficheiros</h3>
        <table class="table table-striped table-bordered m-3">
            <thead class="thead-dark table-dark">
                <tr>
                    <th>Id</th>
                    <th>Ficheiros</th>                  
                    <th>Data</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($relatorios)): ?>
                    <?php foreach ($relatorios as $fun): ?>
                        <tr>
                            <td class="table-warning"><?php echo $fun['id']; ?></td>
                            <td><a href="download.php?id=<?php echo $fun['id']; ?>"class="btn btn-link"><?= $fun['file_name'] ?></a></td>
                            <td class="table-warning"><?= $fun['created_at'] ?></td>

                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                    <td colspan="7">Nenhum dado encontrado.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
 </body>
 </html>
