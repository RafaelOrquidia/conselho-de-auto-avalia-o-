<?php

require_once __DIR__ .('/../Models/fpdf186/fpdf.php');
require_once __DIR__.('/../Models/Dimensao.php');
 use app\Models\fpdf186;
 use app\Models\Dimensao;
 //$nome ="Under";

 
$relatorio = new Dimensao();
$NrQuestoes= $relatorio->NrQuestoesRespondidas();
$NrArquivos = $relatorio->NrArquivos();


class PDF extends FPDF {

    function ConvertToUTF8($text) {
        return iconv('UTF-8', 'windows-1252', $text);
    }
    // Header
    function Header() {
          // Background color (RGB)
          $this->SetFillColor(11,76,156); // Escolha a cor que você preferir
          // Full width rectangle
          $this->Rect(0, 0, $this->GetPageWidth(), 30, 'F');
        // Logo

        // Arial bold 15
        $this->SetFont('Arial', 'B', 20);
        $this->SetTextColor(255, 255, 255);
        // Move to the right
        $this->Cell(80);

        // Title
        $this->Cell(30, 10, $this->ConvertToUTF8('Conselho Nacional de Avaliação da Qualidade'), 0, 1, 'C');
        // $this->Cell(30, 10, , 0, 1, 'C');
        // Line break
        $this->Ln(20);
    }

    // Footer
    function Footer() {
        // Position at 1.5 cm from bottom
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial', 'I', 8);
        // Page number
        $this->Cell(0, 10, 'Page ' . $this->PageNo(), 0, 0, 'C');
    }
}


// Instantiation of inherited class
$pdf = new PDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 12);
// Parâmetros: caminho da imagem, posição X, posição Y, largura, altura
$pdf->Image(__DIR__ . '/../../public/IMG/UP-Logo.jpg', 10, 50, 50, 50);

$pdf->SetFillColor(240,255,255); 
$pdf->Rect(70, 31, $pdf->GetPageWidth(), 90, 'F');

$pdf->SetTextColor(11,76,156);
$pdf->Cell(210, 10, $pdf->ConvertToUTF8('CNAQ - zelando pela qualidade de ensino'), 20, 10, 'C');
$pdf->Cell(260, 10, $pdf->ConvertToUTF8('Com as Auto Avaliaões-(AA) feitas pela Faculdade de Engenharia'), 20, 10, 'C');
$pdf->Cell(155, 10, $pdf->ConvertToUTF8('e Tecnologias.'), 20, 10, 'C');
$pdf->Cell(250, 10, $pdf->ConvertToUTF8('Feito os levantamentos das Dimensões constatam-se que o '), 20, 10, 'C');
$pdf->Cell(250, 10, $pdf->ConvertToUTF8('processo de apuramento das DIMENSÕES:'), 20, 10, 'C');
// $pdf->SetFont('Arial', 'B', 12);
//  $pdf->SetXY(50, 100);
// $pdf->Cell(155, 10, $pdf->ConvertToUTF8('DIMENSÃO 1'), 20, 10, 'C');
// $pdf->SetTextColor(17,17,15);
// $pdf->Cell(190, 10, $pdf->ConvertToUTF8('NR de Questões presentes: ') . $NrQuestoes, 20, 10, 'C');
// $pdf->Cell(190, 10, $pdf->ConvertToUTF8('NR de arquivos recebidos: ') . $NrArquivos, 20, 10, 'C');
// $pdf->Cell(140, 10, $pdf->ConvertToUTF8('CNAQ - '), 20, 10, 'C');
// $pdf->Cell(140, 10, $pdf->ConvertToUTF8('CNAQ - '), 20, 10, 'C');



///TABELA

$pdf->SetFillColor(240,255,255); 
$pdf->Rect(0, 120, $pdf->GetPageWidth(), 120, 'F');
$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(190, 85, $pdf->ConvertToUTF8('Relatório'), 20, 10, 'C');

$pdf->SetFont('Arial', 'B', 12);
 $pdf->SetXY(25, 140);

// Adiciona a tabela
$pdf->Cell(40, 10, $pdf->ConvertToUTF8('Dimensões'), 1);
$pdf->Cell(40, 10, $pdf->ConvertToUTF8('Questões'), 1);
$pdf->Cell(40, 10, $pdf->ConvertToUTF8('Arquivos'), 1);
$pdf->Cell(40, 10, 'Percentagem', 1);
$pdf->Ln();

    $pdf->SetXY(25, 150);
    $pdf->Cell(40, 10, $pdf->ConvertToUTF8('DIMENSÃO 1'), 1);
    $pdf->Cell(40, 10, $NrQuestoes, 1);
    $pdf->Cell(40, 10, $NrArquivos, 1);
    $percentagem1 = ($NrArquivos *100)/ $NrQuestoes;
    $pdf->Cell(40, 10, $percentagem1. '%', 1);
    $pdf->Ln();

    $pdf->SetXY(25, 160);
    $pdf->Cell(40, 10, $pdf->ConvertToUTF8('DIMENSÃO 2'), 1);
    $pdf->Cell(40, 10, '0', 1);
    $pdf->Cell(40, 10, '0', 1);
    $pdf->Cell(40, 10, '0%', 1);
    $pdf->Ln();

    $pdf->SetXY(25, 170);
    $pdf->Cell(40, 10, $pdf->ConvertToUTF8('DIMENSÃO 3'), 1);
    $pdf->Cell(40, 10, '0', 1);
    $pdf->Cell(40, 10, '0', 1);
    $pdf->Cell(40, 10, '0%', 1);
    $pdf->Ln();

    $pdf->SetXY(25, 180);
    $pdf->Cell(40, 10, $pdf->ConvertToUTF8('DIMENSÃO 4'), 1);
    $pdf->Cell(40, 10, '0', 1);
    $pdf->Cell(40, 10, '0', 1);
    $pdf->Cell(40, 10, '0%', 1);
    $pdf->Ln();

    $pdf->SetXY(25, 190);
    $pdf->Cell(40, 10, $pdf->ConvertToUTF8('DIMENSÃO 5'), 1);
    $pdf->Cell(40, 10, '0', 1);
    $pdf->Cell(40, 10, '0', 1);
    $pdf->Cell(40, 10, '0%', 1);
    $pdf->Ln();




// $pdf->Output('D', 'relatorio.pdf');
$pdf->Output();






?>