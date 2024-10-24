<?php
include'../config/Conexao.php';
use app\config\Conexao;



if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    $conexao = new Conexao();
        $conn = $conexao->getConn();
    $query = "SELECT file_name, file_path FROM dimensao_1 WHERE id = :id";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $fileName = $row['file_name'];
        $filePath = $row['file_path'];

        if (file_exists($filePath)) {
            header('Content-Type: application/pdf');
            header('Content-Disposition: attachment; filename="' . $fileName . '"');
            readfile($filePath);
            exit;
        } else {
            echo "Arquivo não encontrado.";
            header('Location: VisualizarRepositorio.php?error:ARQUIVO NAO ENCONTRADO');
        }
    } else {
        echo "Documento não encontrado.";
    }
} else {
    echo "ID inválido.";
}
?>

