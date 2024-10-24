<?php

namespace app\Views;
session_start();
include_once'../Models/Fluxo.php';
 
use app\Models\Fluxo;

$fluxo = new Fluxo();

if (!($fluxo->isUser())) {

    header('Location: ../Views/login.php?userF');
    
    exit();
   }




?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Autoavaliação</title>
    <link rel="stylesheet" href="../../public/CSS/autoAvaliacao.css">
</head>
<body>

    <!-- Cabeçalho fixo -->
    <header>
        <div class="container">
            <!-- Logotipo e Menu -->
            <div class="logo">
                <img src="../../public/IMG/img-1.jpg" alt="Logotipo" class="logo1" />
                <h1>Conselho Nacional de Avaliação da Qualidade</h1>
            </div>

            <nav>
                <ul>
                    <!-- <li><a href="dashboard.html">Início</a></li>  -->
                     <!-- <li><a href="autoavaliacao.html">Nova Avaliação</a></li> -->
                    <!-- <li><a href="relatorios.html">Relatórios</a></li> -->
                    <!-- <li><a href="historico.html">Histórico</a></li> 
                     <li><a href="configuracoes.html">Configurações</a></li> -->
                     <li><a href="ajuda.php">Ajuda</a></li>
                    <li><a href="login.php">Sair</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Conteúdo principal - Formulário de Autoavaliação -->
    <main>
        <section class="autoavaliacao-form">
            <h2>Formulário de Autoavaliação</h2>
            <p>Preencha o formulário abaixo para realizar a autoavaliação da sua universidade.</p>

            <form action="../Controllers/AutoAvaliacaoController.php" method="post">
                <!-- Seção 1: Infraestrutura -->
                <fieldset>
                    <legend>Seção 1: Infraestrutura</legend>

                    <div class="form-group">
                        <label for="instalacoes">As instalações físicas estão adequadas?</label>
                        <select id="instalacoes" name="instalacao" required>
                            <option value="">Selecione</option>
                            <option value="sim">Sim</option>
                            <option value="nao">Não</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="biblioteca">A biblioteca está bem equipada?</label>
                        <select id="biblioteca" name="biblioteca" required>
                            <option value="">Selecione</option>
                            <option value="sim">Sim</option>
                            <option value="nao">Não</option>
                        </select>
                    </div>
                </fieldset>

                <!-- Seção 2: Corpo Docente -->
                <fieldset>
                    <legend>Seção 2: Corpo Docente</legend>

                    <div class="form-group">
                        <label for="qualificacao">Os professores possuem a qualificação necessária?</label>
                        <select id="qualificacao" name="professor" required>
                            <option value="">Selecione</option>
                            <option value="sim">Sim</option>
                            <option value="nao">Não</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="treinamento">Há programas de treinamento contínuo para os professores?</label>
                        <select id="treinamento" name="programas" required>
                            <option value="">Selecione</option>
                            <option value="sim">Sim</option>
                            <option value="nao">Não</option>
                        </select>
                    </div>
                </fieldset>

                <!-- Seção 3: Qualidade de Ensino -->
                <fieldset>
                    <legend>Seção 3: Qualidade de Ensino</legend>

                    <div class="form-group">
                        <label for="metodologia">A metodologia de ensino é atualizada?</label>
                        <select id="metodologia" name="metodologia" required>
                            <option value="">Selecione</option>
                            <option value="sim">Sim</option>
                            <option value="nao">Não</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="avaliacoes">As avaliações dos alunos são regulares e criteriosas?</label>
                        <select id="avaliacoes" name="avaliacao" required>
                            <option value="">Selecione</option>
                            <option value="sim">Sim</option>
                            <option value="nao">Não</option>
                        </select>
                    </div>
                </fieldset>

                <!-- Comentários Finais -->
                <fieldset>
                    <legend>Comentários Finais</legend>
                    <div class="form-group">
                        <label for="comentarios">Deseja adicionar algum comentário adicional?</label>
                        <textarea id="comentarios" name="comentarios" rows="4" placeholder="Escreva seus comentários aqui..."></textarea>
                    </div>
                </fieldset>

                <!-- Botão de Envio -->
                <button type="submit" class="btn">Enviar Avaliação</button>
            </form>
        </section>
    </main>

    <!-- Rodapé -->
   
</body>
</html>
