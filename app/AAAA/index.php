<?php
require_once 'database.php';
require_once 'Relatorio.php';

$relatorio = new Relatorio();

// Exibir as 3 questões por página local
$questoes = $relatorio->getQuestoes();
?>

<html>
  <head>
    <title>Upload de Relatórios</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
      <h1>Upload de Relatórios</h1>
      <form action="upload.php" method="post" enctype="multipart/form-data">
        <?php foreach ($questoes as $questao) { ?>
          <div class="form-group">
            <label for="questao-<?php echo $questao['id']; ?>"><?php echo $questao['descricao']; ?></label>
            <input type="file" name="arquivo-<?php echo $questao['id']; ?>" id="questao-<?php echo $questao['id']; ?>">
          </div>
        <?php } ?>
        <button type="submit" class="btn btn-primary">Go</button>
      </form>
    </div>
  </body>
</html>