<?php

namespace app\Views;
session_start();
 
 use app\config\Conexao;

 include_once'../Models/Fluxo.php';
 
use app\Models\Fluxo;
$fluxo = new Fluxo();

if (!($fluxo->isCnaq())) {

    header('Location: ../Views/login.php?userF');
    
    exit();
   }


if (empty($_GET['id'])) {
    include_once'../config/Conexao.php';

    $conexao = new Conexao();
    $conn = $conexao->getConn();
echo 'entrei';
    // $id = $_GET['id'];
    $id = 1;
    $sql = "SELECT * FROM autoavaliacao WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id, \PDO::PARAM_INT);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $user = $stmt->fetch(\PDO::FETCH_ASSOC);
        $instalacao = $user['instalacao'];
        $biblioteca = $user['biblioteca'];
        $professor = $user['professor'];
        $programas = $user['programas'];
        $metodologia = $user['metodologia'];
        $avaliacao = $user['avaliacao'];
        $comentario = $user['comentario'];
    } else {
        echo 'erro';
        // header('Location: clientes.php');
        exit();
    }
}




   ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Revisão da Avaliação - Sistema de Autoavaliação</title>
    <link rel="stylesheet" href="../../public/CSS/RelatorioView.css">
</head>
<body>

    <!-- Cabeçalho fixo -->
    <header>
        <div class="container">
            <div class="logo">
                <img src="../../public/IMG/img-1.jpg" alt="Logotipo" class="logo1" />
                <h1>Conselho Nacional de Avaliação e Qualidade</h1>
            </div>

            <nav>
                <ul>
                   
                    <li><a href="ajuda.php">Ajuda</a></li>
                    <li><a href="login.ph">voltar</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Conteúdo Principal -->
    <main>
        <section class="revisao-form">
            <h2>Revisão da Autoavaliação</h2>
            <p>Revise os dados da sua avaliação antes de enviar para processamento final.</p>

            <!-- Seção 1: Infraestrutura -->
            <fieldset>
                <legend>Seção 1: Infraestrutura</legend>

                <div class="revisao-group">
                    <p><strong>As instalações físicas estão adequadas?</strong></p>
                    <p class="resposta"> <?php echo $instalacao; ?></p>

                </div>

                <div class="revisao-group">
                    <p><strong>A biblioteca está bem equipada?</strong></p>
                      <p class="resposta"> <?php echo $biblioteca; ?></p>
                </div>
            </fieldset>

            <!-- Seção 2: Corpo Docente -->
            <fieldset>
                <legend>Seção 2: Corpo Docente</legend>

                <div class="revisao-group">
                    <p><strong>Os professores possuem a qualificação necessária?</strong></p>
                    <p class="resposta"> <?php echo $professor; ?></p>
             
                   </div>

                <div class="revisao-group">
                    <p><strong>Há programas de treinamento contínuo para os professores?</strong></p>
                    <p class="resposta"> <?php echo $programas; ?></p>

                </div>
            </fieldset>

            <!-- Seção 3: Qualidade de Ensino -->
            <fieldset>
                <legend>Seção 3: Qualidade de Ensino</legend>

                <div class="revisao-group">
                    <p><strong>A metodologia de ensino é atualizada?</strong></p>
                    <p class="resposta"> <?php echo $metodologia; ?></p>

                </div>

                <div class="revisao-group">
                    <p><strong>As avaliações dos alunos são regulares e criteriosas?</strong></p>
                    <p class="resposta"> <?php echo $avaliacao; ?></p>

                    </div>
            </fieldset>

            <!-- Comentários Finais -->
            <fieldset>
                <legend>Comentários Finais</legend>

                <div class="revisao-group">
                    <p><strong>Comentários adicionais:</strong></p>
                    <div class="resposta">
                                 <?php echo $comentario; ?>
                            </div>
                </div>
            </fieldset>

            <!-- Botões de Ação -->
            <div class="actions">
                <button onclick="window.location.href='autoavaliacao.html'" class="btn">Editar Avaliação</button>
                <button onclick="submitReview()" class="btn">Enviar Avaliação</button>
            </div>
        </section>
    </main>

    <!-- Rodapé -->
   

    <script>
        function submitReview() {
            alert("Sua avaliação foi enviada com sucesso!");
            window.location.href = "relatorios.html";
        }
    </script>

</body>
</html>
