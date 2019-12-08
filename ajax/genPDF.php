
<?php
header("Content-Type: application/json; charset=UTF-8");
$titulo=$_GET["titulo"];
$data=$_GET["data"];

//$valor = $_REQUEST["bryan"];
require_once '../lib/dompdf/autoload.inc.php';
use Dompdf\Dompdf;
$content ='
<html>
<head>
  <link rel="stylesheet" href="../view/css/bootstrap.min.css">
</head>
<body>

<img   src="../view/img/LAMP2.jpg" style="position:absolute;width:680px; margin:20px">
<h1 style="margin-left: 60px;margin-top: 130px;position:absolute;height: 300px;width: 100%">'.$titulo.'</h1>
<div style="margin-left: 10px;margin-top: 230px;position:absolute;height: 300px;width: 100%">
<table>'.$data.'</table></div>
</body>
</html>';
#<img  src="../view/img/LAMP2.jpg" style=\'width:680px;z-index:1; margin=\'20px\'\'>

$dompdf = new Dompdf();
$dompdf->loadHtml($content);

$dompdf->render();
$pdf = $dompdf->output();
$dompdf->stream();
/*http://localhost/masagro/ajax/genPDF.php?titulo=Reporte%20de%20Parcelas%20%20%20%20%20&data=%0A%20%20%3Cthead%20class%3D%22thead-dark%22%3E%0A%20%20%20%20%3Ctr%3E%0A%20%20%20%20%20%20%3Cth%3EID%3C%2Fth%3E%0A%20%20%20%20%20%20%3Cth%3ENOMBRE%3C%2Fth%3E%0A%20%20%20%20%20%20%3Cth%3EPRODUCTOR%3C%2Fth%3E%0A%20%20%20%20%20%20%3Cth%3EUbicacion%3C%2Fth%3E%0A%20%20%20%20%20%20%3Cth%3ESUPERFICIE%3C%2Fth%3E%0A%20%20%20%20%20%20%3Cth%3EOPCIONES%3C%2Fth%3E%0A%20%20%20%20%3C%2Ftr%3E%0A%20%20%3C%2Fthead%3E%0A%20%20%3Ctbody%20id%3D%22tbodyreport%22%3E%3Ctr%3E%3Cth%3E1%3C%2Fth%3E%3Ctd%3ESatam%3C%2Ftd%3E%3Ctd%3ETRANSPORTES%20RINOCERONTE%20S.A%20DE%20C.VADADAD%3C%2Ftd%3E%3Ctd%3E1%3C%2Ftd%3E%3Ctd%3E3h%3C%2Ftd%3E%3Ctd%3E%3Ci%20class%3D%22fas%20fa-trash-alt%22%20aria-hidden%3D%22true%22%3E%3C%2Fi%3E%3Ci%20class%3D%22fas%20fa-edit%22%20aria-hidden%3D%22true%22%3E%3C%2Fi%3E%3C%2Ftd%3E%20%3C%2Ftr%3E%3Ctr%3E%3Cth%3E3%3C%2Fth%3E%3Ctd%3E%3C%2Ftd%3E%3Ctd%3ETRANSPORTES%20RINOCERONTE%20S.A%20DE%20C.VADADAD%3C%2Ftd%3E%3Ctd%3E1%3C%2Ftd%3E%3Ctd%3E3h%3C%2Ftd%3E%3Ctd%3E%3Ci%20class%3D%22fas%20fa-trash-alt%22%20aria-hidden%3D%22true%22%3E%3C%2Fi%3E%3Ci%20class%3D%22fas%20fa-edit%22%20aria-hidden%3D%22true%22%3E%3C%2Fi%3E%3C%2Ftd%3E%20%3C%2Ftr%3E%3Ctr%3E%3Cth%3E2%3C%2Fth%3E%3Ctd%3ESATAN%3C%2Ftd%3E%3Ctd%3EALEXA%20ARLETTE%20ARTEAGA%20OLVERA%3C%2Ftd%3E%3Ctd%3E1%3C%2Ftd%3E%3Ctd%3E666H%3C%2Ftd%3E%3Ctd%3E%3Ci%20class%3D%22fas%20fa-trash-alt%22%20aria-hidden%3D%22true%22%3E%3C%2Fi%3E%3Ci%20class%3D%22fas%20fa-edit%22%20aria-hidden%3D%22true%22%3E%3C%2Fi%3E%3C%2Ftd%3E%20%3C%2Ftr%3E%3C%2Ftbody%3E%0A*/
?>

