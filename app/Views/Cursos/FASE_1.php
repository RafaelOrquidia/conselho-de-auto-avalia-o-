<?php
namespace app\Views;
session_start();
require_once __DIR__."/../../Models/Funcionario.php";
use app\Models\Funcionario;

$funcionario = new Funcionario();

if (!($funcionario->isCAA())) {
    
    header('Location: ../login.php?error=Admin');
    
exit();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página do Administrador</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../public/CSS/INICIO.css">
</head>
<body>
       
<header>
    <nav class="navbar navbar-expand-lg navbar-custom">
        <a class="navbar-brand"  id="sidebarToggle" href="../CAA.php">
            <img src="../../../public/IMG/UP-Logo.jpg" alt="Logotipo">
            <div class="nome">
            Conselho Nacional de Avaliação<br>
            e Qualidade
            </div>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" href="ViewFASE_1.php">
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


    <main class="flex-grow-1 p-4 imagem2">
        <div class="row">
            <div class="col-md-3 mb-4">
                <div id="compras" class="card" data-bs-toggle="modal" data-bs-target="#optionsModal">
                    <img src="../../../public/IMG/eng_informatica.jpg"  class="card-img-top" alt="Compras">
                    <div class="card-body">
                        <h5 class="card-title">Eng.Informática</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div id="compras" class="card" data-bs-toggle="modal" data-bs-target="#optionsModal">
                    <img src="../../../public/IMG/eng_civil.jpg" class="card-img-top" alt="Compras">
                    <div class="card-body">
                        <h5 class="card-title">Eng.Civil</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div id="vendas" class="card" data-bs-toggle="modal" data-bs-target="#optionsModal">
                    <img src="../../../public/IMG/eng agraria.jpg" class="card-img-top" alt="Vendas">
                    <div class="card-body">
                        <h5 class="card-title">Eng.Agraríaria</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div id="vendas" class="card" data-bs-toggle="modal" data-bs-target="#optionsModal">
                    <img src="../../../public/IMG/eng_quimica.jpg" class="card-img-top" alt="Vendas">
                    <div class="card-body">
                        <h5 class="card-title">Química</h5>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Modal -->
    <div class="modal fade" id="optionsModal" tabindex="-1" aria-labelledby="optionsModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="optionsModalLabel">Escolha uma opção</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <ul class="list-group">
                        <li class="list-group-item"><a href="FASE_3.php">Laboral</a></li>
                        <li class="list-group-item"><a href="FASE_3.php">Poslaboral</a></li>
                        <li class="list-group-item"><a href="FASE_3.php">Curta Duração</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
