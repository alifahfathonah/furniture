<?php
require_once '../dompdf/autoload.inc.php';
use Dompdf\Dompdf;

$html =
'<html><body>'.
'<h1>Halo</h1>'.
'<p>Fata</p>'.
'</body></html>';

$dompdf = new DOMPDF();
$dompdf->load_html($html);
$dompdf->render();
$dompdf->stream('laporan.pdf');



//
// (Optional) Setup the paper size and orientation


 ?>
