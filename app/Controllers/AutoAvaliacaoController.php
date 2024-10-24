<?php
namespace app\Controllers;

include_once '../Models/AutoAvaliacao.php';

use app\Models\AutoAvaliacao;


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo 'entrei';
    $instalacao = $_POST['instalacao'];
    $biblioteca = $_POST['biblioteca'];
    $professor = $_POST['professor'];
    $programas = $_POST['programas'];
    $metodologia = $_POST['metodologia'];
    $avaliacao = $_POST['avaliacao'];
    $comentario = $_POST['comentarios'];

    $auto = new AutoAvaliacao($instalacao,$biblioteca,$professor,$programas,$metodologia,$avaliacao,$comentario);
    $auto -> RegistarAutoAvaliacao();

    // if($autoavaliacao->create()) {
    //     echo 'Dados cadastrados com sucesso!';
    // } else {
    //     echo 'Erro ao cadastrar dados.';
    // }

}











?>