<?php
// Conexão com a base de dados
$dsn = 'mysql:host=localhost;dbname=cnaq';
$username = 'root';
$password = '';

try {
  $pdo = new PDO($dsn, $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo 'Erro: não foi possível conectar à base de dados.';
  exit;
}