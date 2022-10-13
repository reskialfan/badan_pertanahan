<?php
ob_start();
?>

<div align="center"><h1>LAPORAN</h1></div>

<table border="1" width="100%">
    <tr>
        <th>No</th>
        <th style="width: 300px;">No Dokumen</th>
        <th style="width: 100px;">Jenis Surat</th>
        <th style="width: 300px;">Nama Pemilik</th>
    </tr>
    <?php
    $no=1;
    foreach ($datadokumen as $rowdata) {
        echo "
        <tr>
        <td>$no</td>
        <td>$rowdata->no_surat_dokumen</td>
        <td>$rowdata->uraian_jenisdokumen2</td>
        <td>$rowdata->nama_pemilik</td>
        </tr>
        ";
    }
    ?>
</table>


<?php

$html = ob_get_contents();
ob_end_clean();
require_once('./assets/html2pdf/html2pdf.class.php');
$pdf = new HTML2PDF('P', 'Legal', 'en', true, 'utf-8', array(10, 10, 10, 10));
$pdf->WriteHTML($html);
$tipe = '1';
if ($tipe == '1') {
    $pdf->Output('laporan.pdf', 'FI');
} else {
    $pdf->Output('laporan.pdf', 'FI');
}

$klien = str_replace(".", "", $_SERVER['REMOTE_ADDR']);
// $mpdf->Output($klien.'sep_termal.pdf', 'F');
// $printernya = $this->db_simrs->query("select * from printer_mandiri where ip='".$_SERVER['REMOTE_ADDR']."'")->row()->print_sep;
// shell_exec('lpr -P "'.$printernya.'" '.$klien."sep_termal.pdf");

// $printernya = 'HPLaserJet1020_IPDE';
// shell_exec('lpr -P "'.$printernya.'" '.$klien."surat_sehat.pdf");

error_reporting(E_ALL);
?>