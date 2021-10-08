<?php  
session_start();
include '../koneksi.php';


if (isset($_GET['idd'])) {
	$ida 		=	$_GET['ida'];
	$idu 		=	$_GET['idu'];
	$idd 		=	$_GET['idd'];
	
$queryAkun 		=	"SELECT * FROM akun WHERE id_user=$ida";
$queryDaftar	=	"SELECT * FROM pendaftaran WHERE id=$idd";
$queryDetail	=	"SELECT * FROM detail_pendaftaran WHERE id=$idu";

$execAkun		= mysqli_query($conn,$queryAkun);
$execDaftar		= mysqli_query($conn,$queryDaftar);
$execDetail	= mysqli_query($conn,$queryDetail);

if ($execAkun && $execDaftar && $execDetail) {
	$akun 		= mysqli_fetch_array($execAkun);
	$daftar 	= mysqli_fetch_array($execDaftar);
    $detail 	= mysqli_fetch_array($execDetail);
}else{
	echo mysqli_error($conn);
}

}else{
	echo 'tidak ada';
}
?>

<!doctype html>
<html lang="en">
	
<head>
<meta charset="utf-8" />
<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
<link rel="icon" type="image/png" href="../assets/img/favicon.png" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
<meta name="viewport" content="width=device-width" />
<!-- Bootstrap core CSS     -->
<link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
<!--  Material Dashboard CSS    -->
<link href="../assets/css/material-dashboard.css?v=1.2.0" rel="stylesheet" />
<!--  CSS for Demo Purpose, don't include it in your project     -->
<link href="../assets/css/demo.css" rel="stylesheet" />
<!--     Fonts and icons     -->
<link href="../assets/css/font-awesome.min.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>


</head>

<body>
<center><h2>Detail Pendaftaran</h2></center>

<div class="col-sm-12 col-md-8 col-lg-10 col-lg-offset-1">
<div class="card" style="margin-top: 50px">
<div class="card-header" data-background-color="blue">
<h4 class="title">Biodata Pendaftar</h4>

</div>
<div class="card-content table-responsive">

<h3 style="overflow: hidden;"><b>Data Siswa</b></h3>
<table class="table table-hover">

    <tbody>
        <tr>
            <td><b>Nama</b></td>
            <td>: <?php echo $daftar['nama']; ?></td>
        </tr>
              <tr>
            <td><b>TTL</b></td>
            <td>: <?php echo $daftar['tempat_lahir'].", ".$daftar['tgl_lahir'];; ?></td>
        </tr>
        <tr>
            <td><b>Jenis Kelamin</b></td>
            <td>: <?php echo $daftar['jenis_kelamin']; ?></td>
        </tr>
        
        <tr>
            <td><b>Anak Ke -</b></td>
            <td>: <?php echo $daftar['anak_ke']." dari ".$daftar['jumlah_saudara']?> bersaudara</td>
        </tr>
       
    </tbody>
</table>


<h3><b>Data Orangtua</b></h3>
<table class="table table-hover">

    <tbody>
        <tr>
            <td><b>Nama Ayah</b></td>
            <td>: <?php echo $daftar['nama_ayah']; ?></td>
        </tr>
        <tr>
            <td><b>TTL</b></td>
            <td>: <?php echo $daftar['tmpt_lahir_ayah'].", ".$daftar['tgl_lahir_ayah']; ?></td>
        </tr>
        <tr>
            <td><b>Pendidikan Terakhir</b></td>
            <td>: <?php echo $daftar['pendidikan_ayah'];; ?></td>
        </tr>
        
        <tr>
            <td><b>Pekerjaan</b></td>
            <td>: <?php echo $daftar['pekerjaan_ayah']; ?></td>
        </tr>
        
        <tr>
            <td><b>Agama</b></td>
            <td>: <?php echo $daftar['agama_ayah']; ?></td>
        </tr>
        <tr>
            <td><b>Nama Ibu</b></td>
            <td>: <?php echo $daftar['nama_ibu']; ?></td>
        </tr>
        <tr>
            <td><b>TTL</b></td>
            <td>: <?php echo $daftar['tmpt_lahir_ibu'].", ".$daftar['tgl_lahir_ibu']; ?></td>
        </tr>
        <tr>
            <td><b>Pendidikan Terakhir</b></td>
            <td>: <?php echo $daftar['pendidikan_ibu']; ?></td>
        </tr>
        
        <tr>
            <td><b>Pekerjaan</b></td>
            <td>: <?php echo $daftar['pekerjaan_ibu']; ?></td>
        </tr>
        
        <tr>
            <td><b>Agama</b></td>
            <td>: <?php echo $daftar['agama_ibu']; ?></td>
        </tr>
        <tr>
            <td><b>Telp/HP</b></td>
            <td>: <?php echo $daftar['telp_ibu']; ?></td>
        </tr>
    </tbody>
</table>
<h3><b>Download</b></h3>

<ol>
	<li>Akte Kelahiran <a href="<?php echo '../assets/uploads/'.$daftar['upload_transkip'];  ?>" title="Download Transkip Nilai"><i class="fa fa-eye"></i></a></li>
	<li>Kartu Keluarga <a href="<?php echo '../assets/uploads/'.$daftar['upload_ijazah'];  ?>" title="Download Ijazah"><i class="fa fa-eye"></i></a></li>
	
</ol>

<!--   Core JS Files   -->
<script src="../assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../assets/js/material.min.js" type="text/javascript"></script>
<!--  Charts Plugin -->
<script src="../assets/js/chartist.min.js"></script>
<!--  Dynamic Elements plugin -->
<script src="../assets/js/arrive.min.js"></script>
<!--  PerfectScrollbar Library -->
<script src="../assets/js/perfect-scrollbar.jquery.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../assets/js/bootstrap-notify.js"></script>
<!--  Google Maps Plugin    -->
<!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script> -->
<!-- Material Dashboard javascript methods -->
<script src="../assets/js/material-dashboard.js?v=1.2.0"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="../assets/js/demo.js"></script>

</body>
</html>