<?php
	

	require_once('tcpdf_include.php');

	

	class MYPDF extends TCPDF {

   
     public function Header(){
        $html = '<div></div>
        	<table style="color:#087190;">
				<tr>
					<td style="width:150px; text-align:right;"><img src="images/logo-negro-bloque.png"></td>
				<td  style="width:500px; text-align:center;">
					<h3>BITÁCORA DIARIA DE KILOMETRAJE 
						<br>RECORRIDO RECOLEKTA<br>
						SUPERVICION
					</h3>
				</td>		
				<td style="font-size: 10px 	text-align: right;">Fecha: 11-05-2020<br>Hora:12:00:00</td>
				</tr>
				<hr>
        	</table>
        ';
        $this->writeHTMLCell($w = 0, $h = 0, $x = '', $y = '', $html, $border = 0, $ln = 1, $fill = 0, $reseth = true, $align = 'top', $autopadding = true);
     }

    // Page footer
    public  function Footer() {
        // Position at 15 mm from bottom
        $this->SetY(-15);
        // Set font
        $this->SetFont('helvetica', 'I', 8);
        // Page number
        $this->Cell(0, 10, 'Page '.$this->getAliasNumPage().'/'.$this->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');
    }
}

// create new PDF document
$pdf = new MYPDF('L', 'mm', 'A4', true, 'UTF-8', false);


// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Nicola Asuni');
$pdf->SetTitle('TCPDF Example 003');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');


// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(10, 35, 10);


$pdf->SetFont('Helvetica', '', 8);

    $pdf->addPage();

              
    $content = '';
    $content .= '    		
      <table border="1" cellpadding="5">
        <thead>
          <tr>
            <th style="width:90px">FECHA</th>
            <th style="width:150px">ROCOLECTORA</th>
            <th style="width:100px">VEHICULO</th>
            <th style="width:100px">VELOCIDAD MAXIMA PERMITIDA (km/h)</th>
            <th style="width:100px">VELOCIDAD MAXIMA ALCANZADA (km/h)</th>
            <th  style="width:120px">LAD/LOD</th>
            <th  style="width:127px">DIRECCIÓN</th>
          </tr>
        </thead>
    ';

 
         
         $content .= '
		<tr id="fill">
            <td style="width:90px"></td>
            <td style="width:150px"></td>
            <td style="width:100px"></td>
            <td style="width:100px"></td>
            <td style="width:100px"></td>
            <td style="width:120px"></td>
            <td style="width:127px">Direccion</td>
        </tr>	';		
   

	$content .='</table>

	<style>

	table{
		border-collapse:collapse;
	}


	th , td {
	
		border:1px solid #888;
		padding:5px;
	}	
	


	tr th{
		background-color:#808080;
		color:#fff;
		font-weight:bold;
	}
	h1{
		text-align: center;
	}
	tr{

			text-align: center;
			line-height: 20px;
	}

	
	</style>';
  
  $pdf->writeHTML($content, true, 0, true, 0);


// ---------------------------------------------------------

//Close and output PDF document
$pdf->Output('example_003.pdf', 'I');

?>

