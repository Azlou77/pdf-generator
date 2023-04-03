<?php 
use Dompdf\Dompdf;


//Database connection
require_once 'connect.php';
$sql = "SELECT * FROM users";
$query= $db -> query($sql);
$users = $query -> fetchAll(PDO::FETCH_ASSOC);
var_dump($users);


require_once 'dompdf/autoload.inc.php';

//Instanciate the class
$dompdf = new Dompdf();

//Make custom options
$options = new Options();
//Set the default font
$options->set('defaultFont', 'Courier');

//Load HTML content
$dompdf->loadHtml('Hello World');
//Changement size/position for the paper
$dompdf->setPaper('A4', 'landscape');
//Display the pdf
$dompdf->render();
$dompdf->stream("sample.pdf", array("Attachment" => false));

?>