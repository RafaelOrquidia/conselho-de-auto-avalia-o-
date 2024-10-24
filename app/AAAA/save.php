<?php
require_once 'database.php';
require_once 'Relatorio.php';

$relatorio = new Relatorio();

// Armazenar o arquivo na base de dados
if (!empty($_GET['nome_arquivo'])) {
  $nome_arquivo = $_GET['nome_arquivo'];
  $relatorio->saveRelatorio($nome_arquivo);
  echo 'Relatório armazenado com sucesso!';
} else {
  echo 'Erro: não foi possível armazenar o relatório.';
}