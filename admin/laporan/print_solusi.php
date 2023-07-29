<?php
require '../../koneksi/koneksi.php';
require_once("../../assets/dompdf/autoload.inc.php");
use Dompdf\Dompdf;
$dompdf = new Dompdf();
$query = mysqli_query($koneksi, "SELECT * FROM laporan_solusi");
$html = '
			<link href="../../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
			 <link href="../../assets/css/sb-admin-2.min.css" rel="stylesheet">
			 <link href="../../assets/css/style.css" rel="stylesheet">

			 <div class="kontent">
				<div class="kiri"><img src="../../assets/img/dejaka_print.png" class="gambar" ></div>
				<div class="kanan">
					<h3 align="center"> SISTEM CERDAS DIET SEHAT</h3>
					<h5 align="center"> Laporan Solusi </h5>
				</div>
			</div>
			<hr class="bg-secondary">
		';
$html .= '<table class="table  table-bordered">
 <thead  class="bg-success text-white">
	 <tr>
		 <th>No</th>
		 <th>Kode</th>
		 <th>Keterangan</th>
		 <th>Status</th>
		 <th>ID Kriteria</th>
	 </tr>
 </thead>';
$no = 1;
while($row = mysqli_fetch_assoc($query))
{
 $html .= "
<tbody>
	 <tr>
		 <td>".$no."</td>
		 <td>".$row['kode']."</td>
		 <td>".$row['keterangan']."</td>
		 <td>".$row['status']."</td>
		 <td>".$row['kriteria_id']."</td>
	 </tr>
</tbody>";
	 $no++;
}
$html .= '
			<script src="../../assets/vendor/jquery/jquery.min.js"></script>
  			<script src="../../assets/vendor/bootstrap/js/ootstrap.bundle.min.js"></script>
  			<script src="../../assets/vendor/jquery-easing/jquery.easing.min.js"></script>
  			<script src="../../assets/js/sb-admin-2.min.js"></script>
  			<script src="../../assets/vendor/chart.js/Chart.min.js"></script>
  			<script src="../../assets/js/demo/chart-area-demo.js"></script>
  			<script src="../../assets/js/demo/chart-pie-demo.js"></script>
			</html>

		';
$dompdf->loadHtml($html);
// Setting ukuran dan orientasi kertas
$dompdf->setPaper('A4', 'potrait');
// Rendering dari HTML Ke PDF
$dompdf->render();
// Melakukan output file Pdf
$dompdf->stream('laporan_solusi.pdf');
?>