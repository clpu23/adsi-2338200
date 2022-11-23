<?php
require '../librerias.php/vendor/autoload.php';

use Spipu\html2pdf\HTML2PDF;

$html2pdf = new HTML2PDF();

$html = "<h1>Hola Mundo desde una libreria de PHP para hacer PDFs</h1>";
$html .= "<p>Master en PHP</p>";

$html2pdf ->writeHTML($html);
$html2pdf ->output('pdf_generador.pdf'); 