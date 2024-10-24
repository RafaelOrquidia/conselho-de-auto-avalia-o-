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
        <a class="navbar-brand"  id="sidebarToggle" href="FASE_1.php">
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
                    <div id="compras" class="card" onclick="redirectTo('../DIMENSAO/Dimensao_1.php')">
                        <img src="../../../public/IMG/basico.jpg"  class="card-img-top" alt="Dimensao1">
                        <div class="card-body">
                            <h5 class="card-title">Dimensão 1</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div id="compras" class="card" onclick="redirectTo('Dimensao_2.php')">
                        <img src="../../../public/IMG/basico.jpg"  class="card-img-top" alt="Dimensao2">
                        <div class="card-body">
                            <h5 class="card-title">Dimensão 2</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div id="vendas" class="card" onclick="redirectTo('Dimensao_3.php')">
                        <img src="../../../public/IMG/basico.jpg"  class="card-img-top" alt="Dimensao3">
                        <div class="card-body">
                            <h5 class="card-title">Dimensão 3</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div id="compras" class="card" onclick="redirectTo('Dimensao_4.php')">
                        <img src="../../../public/IMG/basico.jpg"  class="card-img-top" alt="Dimensao4">
                        <div class="card-body">
                            <h5 class="card-title">Dimensão 4</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div id="vendas" class="card" onclick="redirectTo('Dimensao_5.php')">
                        <img src="../../../public/IMG/basico.jpg"  class="card-img-top" alt="Dimensão5">
                        <div class="card-body">
                            <h5 class="card-title">Dimensão 5</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div id="vendas" class="card" onclick="redirectTo('Dimensao_6.php')">
                        <img src="../../../public/IMG/basico.jpg"  class="card-img-top" alt="Dimensão6">
                        <div class="card-body">
                            <h5 class="card-title">Dimensão 6</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div id="vendas" class="card" onclick="redirectTo('Dimensao_7.php')">
                        <img src="../../../public/IMG/basico.jpg"  class="card-img-top" alt="Dimensão7">
                        <div class="card-body">
                            <h5 class="card-title">Dimensão 7</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div id="vendas" class="card" onclick="redirectTo('Dimensao_8.php')">
                        <img src="../../../public/IMG/basico.jpg"  class="card-img-top" alt="Dimensão8">
                        <div class="card-body">
                            <h5 class="card-title">Dimensão 8</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div id="vendas" class="card" onclick="redirectTo('Dimensao_9.php')">
                        <img src="../../../public/IMG/basico.jpg"  class="card-img-top" alt="Dimensão9">
                        <div class="card-body">
                            <h5 class="card-title">Dimensão 9</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div id="vendas" class="card" onclick="redirectTo('Dimensao_10.php')">
                        <img src="../../../public/IMG/basico.jpg"  class="card-img-top" alt="Dimensão10">
                        <div class="card-body">
                            <h5 class="card-title">Dimensão 10</h5>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <script>
        function redirectTo(url){
            window.location.href = url;
        }
    </script>

</body>
</html>