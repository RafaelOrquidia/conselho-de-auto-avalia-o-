<?php

require_once __DIR__.'/../../Controllers/Dimensao_1_Controller.php';

    use app\Controllers\Dimensao_1_Controller;

    if(isset($_POST['send'])){
        $controller = new Dimensao_1_Controller();
        $controller->uploadFiles($_POST, $_FILES);
    
    }

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $controller = new Dimensao_1_Controller();
    $controller->uploadFiles($_POST, $_FILES);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../../public/CSS/D1.css">

    <title>Upload de Documentos PDF</title>
    <style>
     
        </style>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-custom">
        <a class="navbar-brand"  id="sidebarToggle" href="../Cursos/FASE_3.php">
            <img src="../../../public/IMG/UP-Logo.jpg" alt="Logotipo">
            <div class="nome">
            Conselho Nacional de Avaliação<br>
            e Qualidade
            </div>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" href="ViewFASE_1.php">
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
<!-- <header>
        <div class="container">
            <div class="logo">
                <img src="../../public/IMG/UP-Logo.jpg" alt="Logotipo" class="logo1" />
                <a id="sidebarToggle" class="btn btn1" href="../Cursos/FASE_3.php">☰</a>
                <h2>Conselho Nacional de Avaliação da Qualidade</h2>
            </div>

            <nav>
                <ul>
                     <li><a href="ajuda.php">Ajuda</a></li>
                </ul>
            </nav>
        </div>
    </header> -->

    <div class="container mt-5">
        <div class="tema">
        <h2>Dimensão 1:Missão e Política Institucional</h2>
        </div>
        <div class="subtema">
            <h5>1.1 A missão da Unidade Orgânica (UO) deve ser explícita, pública e relacionada com as estratégias de desenvolvimento institucional e sócio-económicas do país</h5>
        </div>
        <form id="uploadForm" method="post" enctype="multipart/form-data">
        <div class="subtema2">
        <h5>Verique se:</h5>
        </div>

    <div class="form-group row">
        <label class="col-sm-6 col-form-label">1.1.1 Existe missão da UO aprovada pelo órgão máximo da IES.</label>
        <input type="hidden" name="questao1" value="1.1.1 Existe missão da UO aprovada pelo órgão máximo da IES.">
        <div class="col-sm-2">
            <input type="file" name="file1" class="form-control" onchange="updateStatus(1)">
        </div>
        <div class="col-sm-2">
            <input type="text" name="uploaded1" id="uploaded1" class="form-control uploaded-input" readonly value="0">
        </div>
        <div class="col-sm-6">
            <textarea name="comment1" id="comment1" class="form-control" placeholder="Insira um comentário se não uploadar um documento" ></textarea>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-6 col-form-label">1.1.2 A missão da UO está em consonância com os domínios do conhecimento.</label>
        <input type="hidden" name="questao2" value="1.1.2 A missão da UO está em consonância com os domínios do conhecimento.">
        <div class="col-sm-2">
            <input type="file" name="file2" class="form-control" onchange="updateStatus(2)">
        </div>
        <div class="col-sm-2">
            <input type="text" name="uploaded2" id="uploaded2" class="form-control uploaded-input" readonly value="0">
        </div>
        <div class="col-sm-6">
            <textarea name="comment2" id="comment2" class="form-control" placeholder="Insira um comentário se não uploadar um documento"></textarea>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-6 col-form-label">1.1.3 A missão expressa as intenções fundamentais da UO.</label>
        <input type="hidden" name="questao3" value="1.1.3 A missão expressa as intenções fundamentais da UO.">
        <div class="col-sm-2">
            <input type="file" name="file3" class="form-control" onchange="updateStatus(3)">
        </div>
        <div class="col-sm-2">
            <input type="text" name="uploaded3" id="uploaded3" class="form-control uploaded-input" readonly value="0">
        </div>
        <div class="col-sm-6">
            <textarea name="comment3" id="comment3" class="form-control" placeholder="Insira um comentário se não uploadar um documento"></textarea>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-6 col-form-label">1.1.4. A missão da UO se articula com a estratégia de desenvolvimento de algum sector específico do país.</label>
        <input type="hidden" name="questao4" value="1.1.4. A missão da UO se articula com a estratégia de desenvolvimento de algum sector específico do país.">
        <div class="col-sm-2">
            <input type="file" name="file4" class="form-control" onchange="updateStatus(4)">
        </div>
        <div class="col-sm-2">
            <input type="text" name="uploaded4" id="uploaded4" class="form-control uploaded-input" readonly value="0">
        </div>
        <div class="col-sm-6">
            <textarea name="comment4" id="comment4" class="form-control" placeholder="Insira um comentário se não uploadar um documento"></textarea>
        </div>
    </div>


<!-- ////////////////////////////////////1.2 -->
    <div class="subtema2">
        <h5>Verifique se a missão se encontra divulgada</h5>
     </div>

        <div class="form-group row">
        <label class="col-sm-4 col-form-label">1.1.5 Na página WEB.</label>
        <input type="hidden" name="questao5" value="1.1.5 Na página WEB">
        <div class="form-check">
            <input class="form-check-input " type="radio" name="uploaded5" value="1">
            <label>SIM</label>
        </div> 
        <div class="form-check">
            <input class="form-check-input " type="radio" name="uploaded5" value="0" checked>
            <label>NÃO</label>
        </div> 
            <div class="col-sm-6">
                <textarea name="comment5" id="comment5" class="form-control" placeholder="Insira um comentário se não uploadar um documento"></textarea>
            </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-4 col-form-label">1.1.6 No programa curricular.</label>
        <input type="hidden" name="questao6" value="1.1.6 No programa curricular">
        <div class="form-check">
            <input class="form-check-input " type="radio" name="uploaded6" value="1" >
            <label>SIM</label>
        </div> 
        <div class="form-check">
            <input class="form-check-input " type="radio" name="uploaded6" value="0" checked>
            <label>NÃO</label>
        </div> 
            <div class="col-sm-6">
                <textarea name="comment6" id="comment6" class="form-control" placeholder="Insira um comentário se não uploadar um documento"></textarea>
            </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-4 col-form-label">1.1.7 Em locais públicos.</label>
        <input type="hidden" name="questao7" value="1.1.7 Em locais públicos">
        <div class="form-check">
            <input class="form-check-input " type="radio" name="uploaded7" id="uploaded7" value="1">
            <label>SIM</label>
        </div> 
        <div class="form-check">
            <input class="form-check-input " type="radio" name="uploaded7" id="uploaded7" value="0" checked>
            <label>NÃO</label>
        </div> 
            <div class="col-sm-6">
                <textarea name="comment7" id="comment7" class="form-control" placeholder="Insira um comentário se não uploadar um documento"></textarea>
            </div>
    </div>
    
     

    <!-- //////////////// -->
    <div class="subtema2">
        <h5>Verifique se a comunidade académica conhece a missão da UO, nomeadamente:</h5>
    </div>

    <div class="form-group row">
        <label class="col-sm-4 col-form-label">1.1.8 Estudantes.</label>
        <input type="hidden" name="questao8" value="1.1.8 Estudantes.">
        <div class="form-check">
            <input class="form-check-input " type="radio" name="uploaded8" id="uploaded8" value="1">
            <label>SIM</label>
        </div> 
        <div class="form-check">
            <input class="form-check-input " type="radio" name="uploaded8" id="uploaded8" value="0" checked>
            <label>NÃO</label>
        </div> 
            <div class="col-sm-6">
                <textarea name="comment8" id="comment8" class="form-control" placeholder="Insira um comentário sobre o assunto"></textarea>
            </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-4 col-form-label">1.1.9 Docentes, tutores e/ou investigadores.</label>
        <input type="hidden" name="questao9" value="1.1.9 Docentes, tutores e/ou investigadores.">
        <div class="form-check">
            <input class="form-check-input " type="radio" name="uploaded9" id="uploaded9" value="1">
            <label>SIM</label>
        </div> 
        <div class="form-check">
            <input class="form-check-input " type="radio" name="uploaded9" id="uploaded9" value="0" checked>
            <label>NÃO</label>
        </div> 
            <div class="col-sm-6">
                <textarea name="comment9" id="comment9" class="form-control" placeholder="Insira um comentário sobre o assunto"></textarea>
            </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-4 col-form-label">1.1.10 CTA.</label>
        <input type="hidden" name="questao10" value="1.1.10 CTA.">
        <div class="form-check">
            <input class="form-check-input " type="radio" name="uploaded10" id="uploaded10" value="1" >
            <label>SIM</label>
        </div> 
        <div class="form-check">
            <input class="form-check-input " type="radio" name="uploaded10" id="uploaded10" value="0" checked>
            <label>NÃO</label>
        </div> 
            <div class="col-sm-6">
                <textarea name="comment10" id="comment10" class="form-control" placeholder="Insira um comentário sobre o assunto"></textarea>
            </div>
    </div>

    <!-- ///////////////// -->
     <div class="subtema2">
        <h5>Verique se:</h5>
    </div>
    <div class="form-group row">
        <label class="col-sm-4 col-form-label">1.1.11 A missão da UO é actualizada..</label>
        <input type="hidden" name="questao11" value="1.1.11 A missão da UO é actualizada.">
        <div class="form-check">
            <input class="form-check-input " type="radio" name="uploaded11" id="uploaded11" value="1">
            <label>SIM</label>
        </div> 
        <div class="form-check">
            <input class="form-check-input " type="radio" name="uploaded11" id="uploaded11" value="0" checked>
            <label>NÃO</label>
        </div> 
            <div class="col-sm-6">
                <textarea name="comment11" id="comment11" class="form-control" placeholder="Insira um comentário sobre o assunto"></textarea>
            </div>
    </div>




    <!-- ////////////////////////////////////////-1.2-////////////////////////////// -->
    <!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <div class="subtema">
            <h5>1.2 Os objectivos gerais da UO devem estar claramente definidos, articulados com a missão e alinhados com as necessidades do sector profissional a que servem</h5>
        </div>
        <div class="subtema2">
        <h5>Verifique se os objectivos gerais da UO:</h5>
        </div>
        
        <div class="form-group row">
        <label class="col-sm-6 col-form-label">1.2.1 Estão definidos.</label>
        <input type="hidden" name="questao12" value="1.2.1 Estão definidos.">
        <div class="col-sm-2">
            <input type="file" name="file12" class="form-control" onchange="updateStatus(12)">
        </div>
        <div class="col-sm-2">
            <input type="text" name="uploaded12" id="uploaded12" class="form-control uploaded-input" readonly value="0">
        </div>
        <div class="col-sm-6">
            <textarea name="comment12" id="comment12" class="form-control" placeholder="Insira um comentário caso não uploadar um documento"></textarea>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-6 col-form-label">1.2.2 Estão alinhados com o sector profissional a que servem.</label>
        <input type="hidden" name="questao13" value="1.2.2 Estão alinhados com o sector profissional a que servem. ">
        <div class="col-sm-2">
            <input type="file" name="file13" class="form-control" onchange="updateStatus(13)">
        </div>
        <div class="col-sm-2">
            <input type="text" name="uploaded13" class="form-control uploaded-input" readonly value="0">
        </div>
        <div class="col-sm-6">
            <textarea name="comment13" class="form-control" placeholder="Insira um comentário caso não uploadar um documento"></textarea>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-6 col-form-label">1.2.3 Se articulam com a missão da UO.</label>
        <input type="hidden" name="questao14" value="1.2.3 Se articulam com a missão da UO. ">
        <div class="col-sm-2">
            <input type="file" name="file14" class="form-control" onchange="updateStatus(14)">
        </div>
        <div class="col-sm-2">
            <input type="text" name="uploaded14" class="form-control uploaded-input" readonly value="0">
        </div>
        <div class="col-sm-6">
            <textarea name="comment14" class="form-control" placeholder="Insira um comentário caso não uploadar um documento"></textarea>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-6 col-form-label">1.2.4 Estão articulados com os objectivos do curso</label>
        <input type="hidden" name="questao15" value="1.2.4 Estão articulados com os objectivos do curso">
        <div class="col-sm-2">
            <input type="file" name="file15" class="form-control" onchange="updateStatus(15)">
        </div>
        <div class="col-sm-2">
            <input type="text" name="uploaded15" class="form-control uploaded-input" readonly value="0">
        </div>
        <div class="col-sm-6">
            <textarea name="comment15" class="form-control" placeholder="Insira um comentário caso não uploadar um documento"></textarea>
        </div>
    </div>


     <!-- ////////////////////////////////////////-1.3-////////////////////////////// -->
    <!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
    <div class="subtema">
            <h5>1.3 A Missão e visão da UO devem estar em consonância com a política institucional</h5>
        </div>
        <div class="subtema2">
        <h5>Verifique se:</h5>
        </div>
    <div class="form-group row">
        <label class="col-sm-6 col-form-label">1.3.1 A UO possui plano de actividades alinhado ao plano estratégico da IES. </label>
        <input type="hidden" name="questao16" value="1.3.1 A UO possui plano de actividades alinhado ao plano estratégico da IES.">
        <div class="col-sm-2">
            <input type="file" name="file16" class="form-control" onchange="updateStatus(16)">
        </div>
        <div class="col-sm-2">
            <input type="text" name="uploaded16" class="form-control uploaded-input" readonly value="0">
        </div>
        <div class="col-sm-6">
            <textarea name="comment16" class="form-control" placeholder="Insira um comentário caso não uploadar um documento"></textarea>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-6 col-form-label">1.3.2 Existem planos de monitoria da execução do plano estratégico. </label>
        <input type="hidden" name="questao17" value="1.3.2 Existem planos de monitoria da execução do plano estratégico.">
        <div class="col-sm-2">
            <input type="file" name="file17" class="form-control" onchange="updateStatus(17)">
        </div>
        <div class="col-sm-2">
            <input type="text" name="uploaded17" class="form-control uploaded-input" readonly value="0">
        </div>
        <div class="col-sm-6">
            <textarea name="comment17" class="form-control" placeholder="Insira um comentário caso não uploadar um documento"></textarea>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-6 col-form-label">1.3.3 Existe relatório de avaliação da execução do plano estratégico.  </label>
        <input type="hidden" name="questao18" value="1.3.3 Existe relatório de avaliação da execução do plano estratégico. ">
        <div class="col-sm-2">
            <input type="file" name="file18" class="form-control" onchange="updateStatus(18)">
        </div>
        <div class="col-sm-2">
            <input type="text" name="uploaded18" class="form-control uploaded-input" readonly value="0">
        </div>
        <div class="col-sm-6">
            <textarea name="comment18" class="form-control" placeholder="Insira um comentário caso não uploadar um documento"></textarea>
        </div>
    </div>





    <div class="enviar">
      <button type="submit" name="send" class="btn btn-primary">Salvar</button>
    </div>
</form>

    </div>
    <script>

        let total = 12;
        function updateStatus(index) {
            const fileInput = document.querySelector(`input[name="file${index}"]`);
            const statusInput = document.querySelector(`input[name="uploaded${index}"]`);
            const commentTextarea = document.querySelector(`textarea[name="comment${index}"]`);

            if (fileInput.files.length > 0) {
                statusInput.value = "1";
                commentTextarea.disabled = true;
            } else {
                statusInput.value = "0";
                commentTextarea.disabled = false;
            }
        }

           document.getElementById('uploadForm').addEventListener('submit', function(event) {
            let valid = true;
            for (let i = 1; i <= 4; i++) {
                const fileInput = document.querySelector(`input[name="file${i}"]`);
                const statusInput = document.querySelector(`input[name="uploaded${i}"]`);
                const commentTextarea = document.querySelector(`textarea[name="comment${i}"]`);

                if (fileInput.files.length === 0 && statusInput.value === "0" && commentTextarea.value.trim() === "") {
                    alert(`Por favor, insira um comentário para a questão ${i} se não fizer o upload de um documento.`);
                    valid = false;
                    break;
                }
            }

            if (!valid) {
                event.preventDefault();
            }
        });
        document.getElementById('uploadForm').addEventListener('submit', function(event) {
            let valid = true;
            for (let i = 12; i <= 18; i++) {
                const fileInput = document.querySelector(`input[name="file${i}"]`);
                const statusInput = document.querySelector(`input[name="uploaded${i}"]`);
                const commentTextarea = document.querySelector(`textarea[name="comment${i}"]`);

                if (fileInput.files.length === 0 && statusInput.value === "0" && commentTextarea.value.trim() === "") {
                    alert(`Por favor, insira um comentário para a questão ${i} se não fizer o upload de um documento.`);
                    valid = false;
                    break;
                }
            }

            if (!valid) {
                event.preventDefault();
            }
        });
////////////////

            
             function updateUploadedStatus(index) {
    const radioInputs = document.querySelectorAll(`input[name="uploaded${index}"]`);
    const commentTextarea = document.querySelector(`textarea[name="comment${index}"]`);

    radioInputs.forEach((radioInput) => {
        radioInput.addEventListener('change', () => {
            if (radioInput.value === "1") {
                commentTextarea.disabled = true;
            } else {
                commentTextarea.disabled = false;
            }
            });
         });
        }   

        // Call the function for each question
        for (let i = 5; i <= 11; i++) {
            updateUploadedStatus(i);
        }

        // document.getElementById('uploadForm').addEventListener('submit', function(event) {
        //     let value= true;
        //     const radioInputs = document.querySelectorAll(`input[name="uploaded${index}"]`);

        //      for (let i = 5; i <= 11; i++) {
        
        //         if (radioInput.value === "0") {
        //             alert(`Por favor, é obrigatório a Inserção de uma justificação na Questão ${i} .`);
        //             valid = false;
        //             break;
        //         } 
        //     }
        
        //     if (!valid) {
        //         event.preventDefault();
        //     }
        // });
    </script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
