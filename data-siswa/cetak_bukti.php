
<!DOCTYPE html>
<html>

<head>
    <title>Cetak Laporan Pembayaran</title>
    <style>
        .content img {
            width: 105px;
            height: 105px;
            float: left;
            margin-right: 10px;
        }

        .content p {
            text-align: left;
            margin-left: 20px;
        }

        .content h2 {
            text-align: left;
            margin-left: 5px;
        }

        .content h4 {
            text-align: left;
            margin-left: 5px;
        }
    </style>
</head>

<body>
    <div class="content">
        <table border="0" width="950">
            <tr>
                <td>
                    <img src="../assets/img/logo.png">
                    <p>
                        <span style="font-size:25px;">SMA DTS </span> <br>
                        <span style="font-size:20px;">Jl. Ahmad Yani </span><br>
                        <span style="font-size:15px;">E-mail: support@SMAdts.com</span>
                    </p>
                </td>
            </tr>
        </table>
    </div>


    <div class="card-content">
                
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

				    
				        
				   

            </div>
        </div>
    <script type="text/javascript">
        window.print();
    </script>
</body>


</html>