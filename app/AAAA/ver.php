<?php
require_once 'Relatorio.php';
require_once 'database.php';

$relatorio = new Relatorio();
$relatorios = $relatorio->getRelatorios();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<table>
  <thead>
    <tr>
      <th>Descrição</th>
      <!-- <th>Nome do Arquivo</th> -->
      <th>Download</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($relatorios as $relatorio) { ?>
      <tr>
        <td><?php echo $relatorio['descricao']; ?></td>
        <!-- <td><?php echo $relatorio['nome_arquivo']; ?></td> -->
        <td><a href="download.php?id=<?php echo $relatorio['id']; ?>">Baixar</a></td>
      </tr>
    <?php } ?>
  </tbody>
</table>