<?php
    namespace app\Views;
    session_start();
    include'header.php';
    include_once'../Models/Fluxo.php';
     
    

       if(isset($_POST['sair'])){
        unset($_SESSION['administrador']);
        header('Location: ../Views/login.php?logOut');

     }

     $logado  = $_SESSION['nome'];
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../public/CSS/cnaq.css">

    <title>Administrador</title>
</head>
    
</body>
</html>


</head>
<body>
   
    <main>
        <aside>
            <nav>
                <ul>
                    <h2>Administrador</h2>
                    <li><a href="Cadastrar.php" class="botao">Cadastrar</a></li>
                    <li><a href="VisualizarFuncionario.php" class="botao">Funcionario</a></li>
                    <!-- <li><a href="DOC/docMain.php" class="botao">__Docs__</a></li> -->
                    <!-- <li><a href="#" class="botao">Link 4</a></li> -->
                </ul>
            </nav>
        </aside>
        <section>
        <div class="bemVindo">
        <?php
            echo "<h2>Bem Vindo <u> $logado </u></h2>" ;
        ?>
            </div>
            <img class="img" src="IMG/Lions.jpeg" alt="Imagem da Empresa">
        </section>
    </main>
    <footer>
        <p>Informações da Empresa</p>
        <p>Endereço: Rua Exemplo, 123</p>
        <p>Telefone: (11) 1234-5678</p>
        <p>Email: [exemplo@empresa.com](mailto:exemplo@empresa.com)</p>
    </footer>
</body>
</html>
