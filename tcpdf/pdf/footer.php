<?php

    require_once('tcpdf_include.php');

    

    class MYPDF extends TCPDF {

   
     public function Header(){
        $html = '<div></div>
            <table style="color:#087190;">
                <tr>
                    <td style="width:150px; text-align:right;"><img src="framework/tcpdf/pdf/images/logo-negro-bloque.png"></td>
                <td  style="width:500px; text-align:center;">
                    <h3>BITÁCORA DIARIA DE KILOMETRAJE 
                        <br>RECORRIDO RECOLEKTA<br>
                        SUPERVICION
                    </h3>
                </td>       
                <td style="font-size: 10px  text-align: right;">Fecha: 11-05-2020<br>Hora:12:00:00</td>
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
?>