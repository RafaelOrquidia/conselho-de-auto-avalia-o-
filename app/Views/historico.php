<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Histórico de Avaliações </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="stylesheet" href="../../public/CSS/historico.css">
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
        <section class="historico-section">
            <h2>Histórico de Avaliações</h2>

            <!-- Tabela do histórico de avaliações -->
            <table class="historico-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Data</th>
                        <th>Nome da Avaliação</th>
                        <th>Status</th>
                        <th>Resultado</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>001</td>
                        <td>01/09/2024</td>
                        <td>Avaliação Semestral - 2024</td>
                        <td>Concluída</td>
                        <td>85%</td>
                        <td><a href="#">Ver Relatório</a></td>
                    </tr>
                    <tr>
                        <td>002</td>
                        <td>15/08/2024</td>
                        <td>Avaliação Anual - 2024</td>
                        <td>Concluída</td>
                        <td>90%</td>
                        <td><a href="#">Ver Relatório</a></td>
                    </tr>
                    <tr>
                        <td>003</td>
                        <td>10/06/2024</td>
                        <td>Avaliação Parcial - 2024</td>
                        <td>Pendente</td>
                        <td>-</td>
                        <td><a href="#">Continuar Avaliação</a></td>
                    </tr>
                    <!-- Adicione mais linhas conforme necessário -->
                </tbody>
            </table>

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
