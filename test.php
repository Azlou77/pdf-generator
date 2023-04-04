<?php 
use Dompdf\Dompdf;
use Dompdf\Options;

//Connnexion to the database
require_once 'includes/connect.php';

//SQL requests
$sql = "SELECT * FROM `users` ";
$query= $db->query($sql);
$users = $query->fetchAll();

//Start the buffer, no data send to the browser except the headers
ob_start();
require_once 'pdf-content.php';
$html = ob_get_contents();
ob_end_clean();


require_once 'vendor/autoload.php';

//Make custom options
$options = new Options();
//Set the default font
$options->set('defaultFont', 'Courier');

//Instanciate the class
$dompdf = new Dompdf($options);
//Load HTML content
$dompdf->loadHtml($html);
//Changement size/position for the paper
$dompdf->setPaper('A4', 'landscape');
//Display the pdf
$dompdf->render();
$dompdf->stream("sample.pdf", array("Attachment" => false));

$fichier = 'sample.pdf';
$dompdf->stream($fichier);
?>