<?php 

require_once('../../config.php');

//CARREGAR DOMPDF
require_once '../dompdf/autoload.inc.php';
use Dompdf\Dompdf;

$dompdf = new Dompdf(["enable_remote" => true]);


ob_start();

require_once './sistema/rel/rel_produtos.php';

$dompdf->loadHtml(ob_get_clean());

//Definir o tamanho do papel e orientação da página
$pdf->setPaper('A4', 'portrait'); //caso queira a folha em paisagem use landscape em vez de portrait



//RENDERIZAR O PDF
$pdf->render();

//NOMEAR O PDF GERADO
$pdf->stream(
'produtos.pdf',
array("Attachment" => false)
);


