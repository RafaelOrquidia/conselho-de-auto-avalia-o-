<?php

namespace app\Models;

require_once __DIR__.'/../config/Conexao.php';

   use app\config\Conexao;

class Funcionario{

    public $nome;
    public $email;
    public $senha;
    public $funcao;
    public $permissao;

   

    public function Cadastrar($nome, $funcao, $email, $senha, $permissao) {
        $conexao = new Conexao();
        $conn = $conexao->getConn();
         
        $this->nome = $nome;
        $this->funcao = $funcao;
        $this->email = $email;
        $this->senha = $senha;
        $this->permissao = $permissao;
          $sql = 'INSERT INTO funcionario (nome,funcao,email,senha,permissao) VALUES (:nome, :funcao, :email, :senha,:permissao)';
  
          $stmt = $conn->prepare($sql);
          $stmt->bindParam(':nome', $this->nome);
          $stmt->bindParam(':funcao', $this->funcao);
          $stmt->bindParam(':email', $this->email);
          $stmt->bindParam(':senha', $this->senha);
          $stmt->bindParam(':permissao', $this->permissao);
          
  
          if ($stmt->execute()) {
            header('Location: VisualizarFuncionario_CNAQ.php');

              //echo 'Vaga cadastrada com sucesso!';
          } else {
              echo 'Erro ao cadastrar vaga.';
          }
        //  header('Location: ../Views/ADM.php');
          exit;
       }


       public function buscarPorId($id) {
        $conexao = new Conexao();
        $conn = $conexao->getConn();

        $sql = "SELECT * FROM funcionario WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch();
        
    }


       public function Buscar(){

        $conexao = new Conexao();
        $conn = $conexao->getConn();
  
        try{
            $stmt = $conn->prepare("SELECT * FROM funcionario");
            $stmt->execute();
  
              $dados = [];
              if ($stmt->rowCount() > 0) {
                  while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
                      $dados[] = $row;
                        }
              }
              return $dados;
        }catch (\PDOException $e) {
              echo 'Erro: ' . $e->getMessage();
              return [];
        }
  
    }

    public function Buscar_CAA(){

        $conexao = new Conexao();
        $conn = $conexao->getConn();
  
        try{
            $stmt = $conn->prepare("SELECT * FROM funcionario WHERE permissao = 'caa'");
            $stmt->execute();
  
              $dados = [];
              if ($stmt->rowCount() > 0) {
                  while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
                      $dados[] = $row;
                        }
              }
              return $dados;
        }catch (\PDOException $e) {
              echo 'Erro: ' . $e->getMessage();
              return [];
        }
  
    }

    public function Actualizar($id,$nome, $funcao, $email, $senha, $permissao) {
        $conexao = new Conexao();
        $conn = $conexao->getConn();
        $sql = "UPDATE funcionario SET nome = :nome,funcao = :funcao , email = :email, senha = :senha, permissao = :permissao WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':funcao', $funcao);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':senha', $senha);
        $stmt->bindParam(':permissao', $permissao);
        if($stmt->execute()) {
            header('Location: ../VisualizarFuncionario.php');
           // return true;

        } else {
            return false;
        }
    }



///////////////////////////LOGIN
public function login($email,$senha){
    session_start();
                    
        unset($_SESSION['cnaq']);
        unset($_SESSION['aaa']);
        unset($_SESSION['administrador']);

    $conexao = new Conexao();
    $conn = $conexao->getConn();

    $this->email = $email;
    $this->senha = $senha;
    

try{
    $stmt = $conn->prepare('SELECT * FROM funcionario WHERE email = :email AND senha = :senha');
    $stmt->execute(['email' => $this->email, 'senha' => $this->senha]);

        if ($stmt->rowCount() > 0) {
            $usuario = $stmt->fetch(\PDO::FETCH_ASSOC);

            if ($usuario['permissao'] === 'cnaq') {
                $_SESSION['cnaq'] = true;
                $_SESSION['nome'] = $usuario['nome'];
                $_SESSION['id']= $usuario['id'];

                header('Location: ../Views/Cnaq.php');
                exit;

            } elseif ($usuario['permissao'] === 'caa') {
                $_SESSION['caa'] = true;
                $_SESSION['nome'] = $usuario['nome'];
                $_SESSION['id']= $usuario['id'];                        // header('Location: user.php');

                header('Location: ../Views/CAA.php');
                exit;
            }elseif($usuario['permissao'] ==='administrador'){
                $_SESSION['administrador'] = true;
                $_SESSION['nome'] = $usuario['nome'];
                $_SESSION['id']= $usuario['id'];

                header('Location: ../Views/ADM.php');
                exit;

            } else {
                echo 'Permissão inválida';
                header('Location: ../Views/login.php');

                        }
        } else {
               
                header('Location: ../Views/login.php?success=error');

                }
} catch (\PDOException $e) {
    echo 'Erro: ' . $e->getMessage();
}
}

public function Apagar($id) {
    $conexao = new Conexao();
    $conn = $conexao->getConn();

    $sql = "DELETE FROM funcionario WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id);
    return $stmt->execute();
    header('Location: ../Views/VisualizarFuncionario_CNAQ.php');

}



public function logout() {
    session_start();
    session_destroy();
    header("Location: ../../public/index.php");
    exit();
}


function isAdmin() {
return isset($_SESSION['administrador']);
}

function isCAA() {
return isset($_SESSION['caa']);
}

function isCNAQ() {
return isset($_SESSION['cnaq']);
}













    }
?>