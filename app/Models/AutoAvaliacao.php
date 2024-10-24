<?php

namespace app\Models;

include'../config/Conexao.php';

   use app\config\Conexao;


   class Autoavaliacao {
    private $conn;

    public $instalacao;
    public $biblioteca;
    public $professor;
    public $programas;
    public $metodologia;
    public $avaliacao;
    public $comentario;

    public function __construct($instalacao,$biblioteca,$professor,$programas,$metodologia,$avaliacao,$comentario) {
        $this ->instalacao = $instalacao;
        $this ->biblioteca = $biblioteca;
        $this ->professor  =  $professor;
        $this ->programas = $programas;
        $this ->metodologia = $metodologia;
        $this ->avaliacao = $avaliacao;
        $this ->comentario = $comentario;

        $conexao = new Conexao();
        $conn = $conexao->getConn();
        


    }

    public function RegistarAutoAvaliacao() {
        $conexao = new Conexao();
        $conn = $conexao->getConn();

        $sql = 'INSERT INTO autoavaliacao (instalacao, biblioteca, professor, programas, metodologia, avaliacao,comentario) VALUES (:instalacao, :biblioteca, :professor, :programas, :metodologia, :avaliacao, :comentario)';
        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':instalacao', $this->instalacao);
        $stmt->bindParam(':biblioteca', $this->biblioteca);
        $stmt->bindParam(':professor', $this->professor);
        $stmt->bindParam(':programas', $this->programas);
        $stmt->bindParam(':metodologia', $this->metodologia);
        $stmt->bindParam(':avaliacao', $this->avaliacao);
        $stmt->bindParam(':comentario', $this->comentario);

        if($stmt->execute()) {
            return true;
            echo 'Cadastrado com sucesso';
        }

        printf("Error: %s.\n", $stmt->error);
        return false;
    }
}
?>