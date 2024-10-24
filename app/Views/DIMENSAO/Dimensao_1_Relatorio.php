<?php
require_once __DIR__ . '/../../config/Conexao.php';
use app\config\Conexao;
require_once __DIR__ . "/../../Controllers/Dimensao_1_Controller.php";
use app\Controllers\Dimensao_1_Controller;

$conexao = new Conexao();
$conn = $conexao->getConn();
$stmt = $conn->prepare("SELECT * FROM dimensao_1");
$stmt->execute();
$results = $stmt->fetchAll();

if (isset($_POST['notacao'])) {
    $anotacao = new Dimensao_1_Controller();
    $anotacao->AddComentario();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../public/CSS/ViewDiagrama.css">
    <title>Relatório de Uploads</title>
    <style>
        .expanded-column {
            width: 400px !important;
        }
    </style>
</head>
<body>
<header>
    <div class="container">
        <div class="logo">
            <img src="../../../public/IMG/UP-Logo.jpg" alt="Logotipo" class="logo1" />
            <a id="sidebarToggle" class="btn btn1" href="../Cursos/ViewFASE_3.php">☰</a>
            <h2>Conselho Nacional de Avaliação da Qualidade</h2>
        </div>
        <nav>
            <ul>
                <li><a href="ajuda.php">Ajuda</a></li>
            </ul>
        </nav>
    </div>
</header>
<div class="container mt-5 table-container">
    <h2>Dimensão 1: Relatório</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Questão</th>
                <th>Arquivo</th>
                <th>Submeter</th>
                <th>Comentário</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($results as $result) { ?>
            <tr>
                <td><?= $result['question'] ?></td>
                <td><a href="../download.php?id=<?= $result['id']; ?>" class="btn btn-link"><?= $result['file_name'] ?></a></td>
                <td><?= $result['uploaded'] ? 'Sim' : 'Não' ?></td>
                <td><?= $result['comment'] ?></td>
                <td>
                    <button class="btn btn-primary" onclick="toggleTextarea(<?= $result['id'] ?>)">Adicionar Anotação</button>
                    <div class="text_Area" id="textarea-<?= $result['id'] ?>" style="display:none;">
                        <form method="post">
                            <textarea name="nota" class="form-control" rows="3"></textarea>
                            <input type="hidden" name="id" value="<?= $result['id'] ?>">
                            <button type="submit" name="notacao" class="btn btn-success mt-2">Salvar</button>
                        </form>
                    </div>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
<script>
    function toggleTextarea(id) {
        var textareaDiv = document.getElementById('textarea-' + id);
        var parentTd = textareaDiv.closest('td');

        if (textareaDiv.style.display === 'none') {
            textareaDiv.style.display = 'block';
            parentTd.classList.add('expanded-column');
        } else {
            textareaDiv.style.display = 'none';
            parentTd.classList.remove('expanded-column');
        }
    }
</script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
