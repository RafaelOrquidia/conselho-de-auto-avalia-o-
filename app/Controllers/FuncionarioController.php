<?php
namespace app\Controllers;

include_once __DIR__. '/../Models/Funcionario.php';

use app\Models\Funcionario;

class FuncionarioController{

    public function Cadastrar(){
        $nome = $_POST['nome'];
        $funcao = $_POST['funcao'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $permissao = $_POST['permissao'];

        $funcionario = new Funcionario();
        $funcionario -> Cadastrar($nome,$funcao,$email,$senha,$permissao);
    }

    public function Actualizar(){
        $id = $_GET['id'];

        $nome = $_POST['nome'];
        $funcao = $_POST['funcao'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $permissao = $_POST['permissao'];

        $funcionario = new Funcionario();
        $funcionario -> Actualizar($id,$nome,$funcao,$email,$senha,$permissao);
    }

    public function login(){
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $cliente = new Funcionario();
    
        $cliente->login($email, $senha);
    }

    public function Apagar(){
        //$id = $_GET['id'];
        $id = $_POST['id'];
        $funcionario = new Funcionario();
        $funcionario-> Apagar($id);
        
    }


}
?>
