<?php

namespace app\Views;
session_start();

require_once __DIR__."/../Models/Funcionario.php";
    use app\Models\Funcionario;

    $funcionario = new Funcionario();

    if (!($funcionario->isCNAQ())) {
        
        header('Location: login.php?error=Admin');
        
    exit();
   }

   
   $logado = $_SESSION['nome'];
//    $id = 1;
   



if(isset($_POST['sair'])){
    unset($_SESSION['caa']);
    header('Location: login.php');
 }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página do Administrador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../public/CSS/CNAQ.css">

</head>
<body>
<style>
       
    </style>
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
   
<!-- <header>
        <div class="container">
            <div class="logo">
                <img src="../../public/IMG/UP-Logo.jpg" alt="Logotipo" class="logo1" />
                <button id="sidebarToggle" class="btn btn1">☰</button>
                <h2>Conselho Nacional de Avaliação da Qualidade</h2>
            </div>

            <nav>
                <ul>
                     <li><a href="ajuda.php">Ajuda</a></li>
                </ul>
            </nav>
        </div>
    </header> -->
    <div class="bemVindo">
        <?php
            echo "<h2>Bem Vindo <u>$logado </u></h2>" ;
        ?> 
     </div>
    
     <div class="d-flex">
    <nav id="sidebar" class="closed">
        <button id="sidebarClose" class="btn btn-light">✖</button>
        <ul class="list-unstyled mt-3">
            <li><a href="VisualizarFuncionario_CNAQ.php" class="nav-link"><i class="bi bi-person"></i>Funcionarios</a></li>
            <li><a href="historico.php" class="nav-link"><i class="bi bi-box"></i>Historial</a></li>
            <li><a href="VisualizarRepositorio.php" class="nav-link"><i class="bi bi-box"></i>Repositório</a></li>
            <li><a href="#" class="nav-link"><i class="bi bi-cash-stack"></i>Estatistica</a></li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="faculdadeDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Faculdade
                </a>
                <ul class="dropdown-menu" aria-labelledby="faculdadeDropdown">
                    <li><a class="dropdown-item nav-link" id="faculdades" href="Cursos/ViewFASE_1.php">FET</a></li>
                    <li><a class="dropdown-item nav-link"  id="faculdades" href="#">FEP</a></li>
                    <li><a class="dropdown-item nav-link"  id="faculdades" href="#">FCNM</a></li>
                    
                </ul>
            </li>
            <form method="post">
                <button type="submit" name="sair" class="nav-link"><i class="bi bi-box-arrow-right"></i>LogOut</button>
            </form>
        </ul>
    </nav>
        
        <main class="flex-grow-1 p-4 imagem">
            <div class="row">
                <div class="col-md-5 mb-4" >
                    <div id="compras" class="card" onclick="redirectTo('Pdf_Relatorio.php')">
                        <img src="../../public/IMG/fet.jpg" class="card-img-top" alt="Compras">
                        <div class="card-body">
                            <h5 class="card-title">A.A. Relatório-FET </h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 mb-4">
                    <div id="vendas" class="card" onclick="showMessage()">
                        <img src="../../public/IMG/fep.jpg" class="card-img-top" alt="Vendas">
                        <div class="card-body">
                            <h5 class="card-title">A.A. Relatório-FCNM</h5>
                        </div>
                    </div>
                </div>
               
               
            </div>
        </main>
    </div>

    <div id="messageModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeMessage()">&times;</span>
            <p>Area Restrita: Ainda em Desenvolvimento</p>
            <button class="btn btn-primary" onclick="closeMessage()">OK</button>
        </div>
    </div>
    <footer>
    <p>&copy; 2024 Sistema de Autoavaliação Universitária. Todos os direitos reservados.</p>
        <nav>
            <ul>
                <li><a href="#">Política de Privacidade</a></li>
                <li><a href="#">Termos de Uso</a></li>
                <li><a href="#">Contato</a></li>
                <li><a href="#">Ajuda</a></li>
            </ul>
        </nav>
    </footer>
    <script>
        function redirectTo(url){
            window.location.href = url;
        }
        function showMessage() {
            document.getElementById('messageModal').style.display = "block";
        }

        function closeMessage() {
            document.getElementById('messageModal').style.display = "none";
        }

        // Fecha a janela se o usuário clicar fora dela
        window.onclick = function(event) {
            const modal = document.getElementById('messageModal');
            if (event.target === modal) {
                modal.style.display = "none";
            }
        }
       
    </script>

<script src="../../public/JS/CAA.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
