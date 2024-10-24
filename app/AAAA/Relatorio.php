<?php
class Relatorio {
  private $pdo;

  public function __construct() {
    global $pdo;
    $this->pdo = $pdo;
  }

  public function getQuestoes() {
    $stmt = $this->pdo->prepare('SELECT * FROM questoes');
    $stmt->execute();
    return $stmt->fetchAll();
  }

  public function saveRelatorio($nome_arquivo) {
    $stmt = $this->pdo->prepare('INSERT INTO rel (descricao) VALUES (:nome_arquivo)');
    $stmt->bindParam(':nome_arquivo', $nome_arquivo);
    $stmt->execute();
  }


  public function getRelatorios() {
    $stmt = $this->pdo->prepare('SELECT * FROM rel');
    $stmt->execute();
    return $stmt->fetchAll();
  }
  
  public function getDocumento($id) {
    $stmt = $this->pdo->prepare('SELECT * FROM rel WHERE id = :id');
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    return $stmt->fetch();
  }
}