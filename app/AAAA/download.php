<?php
require_once 'Relatorio.php';
require_once 'database.php';
$relatorio = new Relatorio();
$relatorio_id = $_GET['id'];
$documento = $relatorio->getDocumento($relatorio_id);



header('Content-Type: application/pdf');
header('Content-Disposition: attachment; filename="' . $documento['nome_arquivo'] . '"');
echo $documento['arquivo'];
exit;

?>