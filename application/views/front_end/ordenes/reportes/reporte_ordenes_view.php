<?php

include("../../libraries/tcpdf/font/times.php"); //fpdf
$this->load->library('fpdf'); //fpdf

class PDF extends FPDF
{
//Page header
function Header()
    {

    $this->SetFont('Arial', '', 12);
    $this->SetTextColor("255", "255", "255"); //BLANCO
    $this->Image('assets/img/franja_superior.png', 0, 0 );
    $this->Image('assets/img/logo.png', 124, 30 , 80, 13);
    //$this->SetFontSize(17);

    $this->SetFont('Arial', 'B', 15);
    $this->Cell(0, 6, 'SISTEMA SAT', 0, 1, 'C');
    $this->SetTextColor("85", "78", "78"); //GRIS
    $this->Ln();
    $this->SetFont('Arial', '', 12);
    $this->Cell(25, 5, 'Direccion: ', 0);
    $this->Cell(0, 6, 'Calle Grimaldi, 4ta Av Nte casa #3 ', 0);
    $hora = new DateTime();
    $hora->setTimezone(new DateTimeZone('America/El_Salvador'));
    $horaok = $hora->format("h:iA   d-m-y");
    $this->Cell(0, 6, $horaok , 0, 1, 'R');
    $this->Cell(25, 5, 'Empresa: ', 0);
    $this->Cell(0, 6, 'Cable Vision Por Satelite ', 0);
    $this->Ln();
    $this->Cell(25, 5, 'Telefono: ', 0);
    $this->Cell(0, 6, '2633-8400, 2633-8401', 0);
    $this->Ln();
    $this->SetFont('Arial', 'B', 15);
    $this->Cell(0, 12, 'REPORTE DE ORDENES', 0, 1, 'C');
    }

    function Footer()
    {
        //Position at 1.5 cm from bottom
        $this->SetY(-13);
        //Arial italic 8
        $this->SetFont('Arial','BI',12);
        //Page number
         $this->Image('assets/img/franja_inferior.png', 0, 282 );
         $this->Image('assets/img/logo_sisgamec_blanco.png', 8, 284, 55, 10);
         $this->SetTextColor("255", "255", "255"); //GRIS
         $this->Cell(0, 10, 'Pagina '.$this->PageNo().'/{nb}', 0, 0,'R');
        //$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    //Page footer
    }
}








$fpdf = new PDF();

ob_end_clean();
//inicializa pagina pdf
$fpdf->Open();
$fpdf->AliasNbPages();
$fpdf->AddPage();
$fpdf->SetAuthor("codigoweblibre.comli.co - codigoweblibre.wordpress.com", true);
$fpdf->SetCreator("codigoweblibre.comli.co - codigoweblibre.wordpress.com", true);

//Cabecera


foreach ($datos as $valor) 
{
    
    $nombre_cuen = $valor['NombreCuenta'];
    $descripcion_cuen = $valor['DescripcionCuenta'];
    

    
    $fpdf->SetFontSize(12);
    $fpdf->SetTextColor("85", "78", "78"); //gris
    $fpdf->SetFont('Arial', 'BI', 12);

    
    $fpdf->SetFont('Arial', 'BI', 12);
    $fpdf->Cell(45, 5, "Nombre: ", 1);
    $fpdf->SetFont('Arial', '', 12);    
    $fpdf->Cell(0, 5, $nombre_cuen, 1);
    $fpdf->Ln();


    $fpdf->SetFont('Arial', 'BI', 12);
    $fpdf->Cell(45, 5, "Descripcion: ", 1);
    $fpdf->SetFont('Arial', '', 12);
    $fpdf->Cell(0, 5, $descripcion_cuen, 1);
    $fpdf->Ln();

    $fpdf->Ln();
    
    
}
   

//finaliza y muestra en pantalla pdf
$fpdf->Output("Reporte-de-Cuentas.pdf","I");
?>
s