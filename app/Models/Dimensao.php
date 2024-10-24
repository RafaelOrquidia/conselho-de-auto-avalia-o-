<?php


namespace app\Models;

require_once __DIR__. '/../config/Conexao.php';

   use app\config\Conexao;

class Dimensao{


    public $fileName;
    public $flePath;
    public $uploaded;
    public $questao;
    public $dimensao;
    public $comment;
    public $anotacao;




    public function save($question, $fileName, $filePath, $uploaded, $comment) {
        $conexao = new Conexao();
        $conn = $conexao->getConn();

        // $deleteStmt = $conn->prepare("DELETE FROM dimensao_1");
        // $deleteStmt->execute();
        
        $stmt = $conn->prepare("INSERT INTO dimensao_1 (question, file_name, file_path, uploaded, comment) VALUES (:question, :file_name, :file_path, :uploaded, :comment)");
        $stmt->bindParam(':question', $question);
        $stmt->bindParam(':file_name', $fileName);
        $stmt->bindParam(':file_path', $filePath);
        $stmt->bindParam(':uploaded', $uploaded);
        $stmt->bindParam(':comment', $comment);
        $stmt->execute();
               
    }

    public function getRepositorioData(){
        $conexao = new Conexao();
        $conn = $conexao->getConn();
        $stmt = $conn->prepare('SELECT id, file_name,created_at FROM dimensao_1 WHERE file_name <> "default_file_name" ');
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function AddComentario($id,$anotacao){
        $conexao = new Conexao();
        $conn = $conexao->getConn();

    
        $stmt = $conn->prepare("UPDATE dimensao_1 SET anotacao = :anotacao WHERE id = :id");
        $stmt->bindParam(':anotacao', $anotacao);
        $stmt->bindParam(':id', $id);

    if ($stmt->execute()) {
        return true;
       // echo "Comentário salvo com sucesso!";
    } else {
        return false;
        //echo "Erro ao salvar comentário.";
    }
    }
      
    

    /////////////////PDF
    public function NrQuestoesRespondidas(){
        $conexao = new Conexao();
        $conn = $conexao->getConn();

        $stmt = $conn->query("SELECT COUNT(*) FROM dimensao_1");
        return $stmt->fetchColumn();
    }
    public function NrArquivos(){
        $conexao = new Conexao();
        $conn = $conexao->getConn();

        $stmt = $conn->query("SELECT COUNT(*) FROM dimensao_1 WHERE uploaded = 1");
        return $stmt->fetchColumn();
    }



}
?>

