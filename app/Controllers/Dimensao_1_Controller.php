<?php
namespace app\Controllers;

require_once __DIR__. '/../Models/Dimensao.php';

use app\Models\Dimensao;

class Dimensao_1_Controller {

    
    public function uploadFiles($postData, $filesData) {
        $total = 18;
        $uploadDir = '../../ZZZZ/';

        for ($i = 1; $i <= $total; $i++) {
            $file = "file$i";
            $uploaded = $postData["uploaded$i"];
            $comment = "comment$i";
            $questao = $postData["questao$i"];

            $fileName = null;
            $filePath = null;
            $uploadedValue = 0;
            $commentValue = isset($postData[$comment]) ? $postData[$comment] : '';

            if (isset($filesData[$file]) && $filesData[$file]['error'] == 0) {
                $fileName = basename($filesData[$file]['name']);
                $filePath = $uploadDir . $fileName;

                if (move_uploaded_file($filesData[$file]['tmp_name'], $filePath)) {
                    $uploadedValue = 1;
                    $commentValue = ''; // Clear comment if file is uploaded
                }
            } else {
                $fileName = 'default_file_name';
                $filePath = 'default_file_path'; // Defina um caminho padrão
            }
           $dimensao = new Dimensao();
           $dimensao->save($questao, $fileName, $filePath, $uploaded, $commentValue);

            
            // header('Location: ../Views/VisualizarPromocao.php');

        }

        // echo "Arquivos enviados e armazenados com sucesso!";
         header('Location: ../Cursos/FASE_3.php');

    }


    public function AddComentario(){
        $id= $_POST['id'];
        $notacao = $_POST['nota'];

        $anotacao = new Dimensao();
        $anotacao->AddComentario($id,$notacao);
    }




}

?>