<?php
namespace app\Views;

session_start();
// include_once'../Models/Fluxo.php';
 
// use app\Models\Fluxo;

// $fluxo = new Fluxo();

// if (!($fluxo->isUser())) {

//     header('Location: ../Views/login.php?userF');
    
//     exit();
//    }
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ajuda e Suporte - Sistema de Autoavaliação</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../public/CSS/Ajuda.css">
</head>
<body>

  
    <header>
    <nav class="navbar navbar-expand-lg navbar-custom">
        <a class="navbar-brand"  id="sidebarToggle">
            <img src="../../public/IMG/UP-Logo.jpg" alt="Logotipo">
            <div class="nome">
            Conselho Nacional de Avaliação<br>
            e Qualidade
            </div>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a  href="ajuda.php">Ajuda</a>

                </li>
                <li class="nav-item">
                    <a href="#">Contato</a>
                </li>
            </ul>
        </div>
    </nav>
</header>

    <main>
        <section class="ajuda-section">
            <h2>Ajuda e Suporte</h2>

            <!-- Perguntas Frequentes (FAQ) -->
            <div class="faq">
                <h3>Perguntas Frequentes</h3>
                <div class="faq-item">
                    <h4>1. Como faço para iniciar uma nova avaliação?</h4>
                    <p>Para iniciar uma nova avaliação, vá até o menu "Nova Avaliação" na parte superior da página e siga as instruções no formulário.</p>
                </div>
                <div class="faq-item">
                    <h4>2. Como posso acessar os relatórios das avaliações anteriores?</h4>
                    <p>Você pode acessar os relatórios das avaliações anteriores através da página "Histórico". Lá você encontrará os relatórios disponíveis para visualização e download.</p>
                </div>
                <div class="faq-item">
                    <h4>3. Como altero as configurações da minha conta?</h4>
                    <p>Vá para a página "Configurações" no menu superior, onde você pode alterar suas informações pessoais, senha e preferências de notificação.</p>
                </div>
                <div class="faq-item">
                    <h4>4. Não estou conseguindo acessar o sistema. O que devo fazer?</h4>
                    <p>Verifique se suas credenciais de login estão corretas. Caso continue enfrentando problemas, entre em contato com o suporte técnico.</p>
                </div>
            </div>

            <!-- Informações de Contato -->
            <div class="contato-suporte">
                <h3>Contato e Suporte Técnico</h3>
                <p>Se você precisar de mais assistência, entre em contato com nosso suporte técnico:</p>
                <ul>
                    <li><strong>E-mail:</strong> suporte@universidade.com</li>
                    <li><strong>Telefone:</strong> (11) 1234-5678</li>
                    <li><strong>Horário de Atendimento:</strong> Segunda a Sexta, das 9h às 18h</li>
                </ul>
            </div>

            <!-- Links úteis -->
            <div class="links-uteis">
                <h3>Links Úteis</h3>
                <ul>
                    <li><a href="manual_usuario.pdf" target="_blank">Manual do Usuário</a></li>
                    <li><a href="tutorial_video.html" target="_blank">Tutorial em Vídeo</a></li>
                    <li><a href="https://universidade.com/forum" target="_blank">Fórum de Discussão</a></li>
                </ul>
            </div>
        </section>
    </main>

    <!-- Rodapé fixo -->
    <footer>
        <div class="container">
            <p>&copy; 2024 Sistema de Autoavaliação Universitária. Todos os direitos reservados.</p>
            <nav>
                <ul>
                    <li><a href="#">Política de Privacidade</a></li>
                    <li><a href="#">Termos de Uso</a></li>
                    <li><a href="#">Contato</a></li>
                    <li><a href="#">Ajuda</a></li>
                </ul>
            </nav>
        </div>
    </footer>

</body>
</html>
