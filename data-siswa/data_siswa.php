<h2>Profile</h2>

<div class="col-sm-12 col-md-8 col-lg-10 col-lg-offset-1">
<div class="card" style="margin-top: 50px">
<div class="card-header" data-background-color="blue">
<h4 class="title">Biodata Pendaftar</h4>
<p class="category">Klik Cetak Bukti untuk mengunduh bukti pendaftaran</p>
</div>
<div class="card-content table-responsive">

<h3 style="overflow: hidden;"><b>Data Siswa</b></h3>
<table class="table table-hover">

    <tbody>
        <tr>
            <td><b>Email</b></td>
            <td>: <?php echo $email; ?> </td>
        </tr>
        <tr>
            <td><b>Nama</b></td>
            <td>: <?php echo $nama; ?></td>
        </tr>
      
        <tr>
            <td><b>TTL</b></td>
            <td>: <?php echo $tempat_lahir.", ".$tgl_lahir;; ?> <?php isset($_SESSION['tgl_lahir'])  ?  print($_SESSION['tgl_lahir']) : ""; ?></td>
        </tr>
        <tr>
            <td><b>Jenis Kelamin</b></td>
            <td>: <?php echo $jenis_kelamin; ?></td>
        </tr>
        
        <tr>
            <td><b>Anak Ke -</b></td>
            <td>: <?php echo $anak_ke." dari ".$jmlh_saudara?> bersaudara</td>
        </tr>

    </tbody>
</table>


<h3><b>Data Orangtua</b></h3>
<table class="table table-hover">

    <tbody>
        <tr>
            <td><b>Nama Ayah</b></td>
            <td>: <?php echo $nama_ayah;; ?></td>
        </tr>
        <tr>
            <td><b>TTL</b></td>
            <td>: <?php echo $tmpt_lahir_ayah.", ".$tgl_lahir_ayah; ?></td>
        </tr>
        <tr>
            <td><b>Pendidikan Terakhir</b></td>
            <td>: <?php echo $pendidikan_ayah;; ?></td>
        </tr>
        
        <tr>
            <td><b>Pekerjaan</b></td>
            <td>: <?php echo $pekerjaan_ayah; ?></td>
        </tr>
        
        <tr>
            <td><b>Agama</b></td>
            <td>: <?php echo $agama_ayah; ?></td>
        </tr>
        <tr>
            <td><b>Nama Ibu</b></td>
            <td>: <?php echo $nama_ibu;; ?></td>
        </tr>
        <tr>
            <td><b>TTL</b></td>
            <td>: <?php echo $tmpt_lahir_ibu.", ".$tgl_lahir_ibu; ?></td>
        </tr>
        <tr>
            <td><b>Pendidikan Terakhir</b></td>
            <td>: <?php echo $pendidikan_ibu; ?></td>
        </tr>
        
        <tr>
            <td><b>Pekerjaan</b></td>
            <td>: <?php echo $pekerjaan_ibu; ?></td>
        </tr>
        
        <tr>
            <td><b>Agama</b></td>
            <td>: <?php echo $agama_ibu; ?></td>
        </tr>
        <tr>
            <td><b>Telp/HP</b></td>
            <td>: <?php echo $telp_ibu; ?></td>
        </tr>
    </tbody>
</table>

<div class="row">
				<center><a href="index.php?page=11" class="btn btn-primary"><i class="fa fa-print"></i> Cetak Bukti Daftar</a></center>
			</div>
