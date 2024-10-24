<?php
require_once 'database.php';
require_once 'Relatorio.php';

$relatorio = new Relatorio();

// Verificar se os arquivos foram enviados corretamente
if (!empty($_FILES)) {
  foreach ($_FILES as $arquivo) {
    // Verificar se o arquivo é um PDF
    if ($arquivo['type'] == 'application/pdf') {
      // Armazenar o arquivo temporariamente
      $tmp_name = $arquivo['tmp_name'];
      $nome_arquivo = $arquivo['name'];
      // Redirecionar para a página de save
      header('Location: save.php?nome_arquivo=' . $nome_arquivo);
      exit;
    } else {
      echo 'Erro: apenas arquivos PDF são permitidos.';
      exit;
    }
  }
}