<?php
include "../koneksi.php";

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
                        <span style="font-size:25px;">SMA DTS</span> <br>
                        <span style="font-size:20px;">Jl. Ahmad Yani </span><br>
                        <span style="font-size:15px;">E-mail: support@smadts.com</span>
                    </p>
                </td>
            </tr>
        </table>
    </div>


    <div class="row">
    <div class="col-sm-12 col-md-8 col-lg-10 col-lg-offset-1">
        <div class="card" style="margin-top: 50px">
            <div class="card-header" data-background-color="blue">
               <center> <h4 class="title">Data Pendaftaran</h4> </center>

            </div>
            <div class="card-content">
                
                <h3 style="overflow: hidden;"><b>Data Siswa</b></h3>
				<table class="table table-hover">
					<thead>
						<tr>
							<td><b>No</b></td>
							<td><b>Nama Pendaftar</b></td>
							<td><b>Email</b></td>
							<td><b>Tempat Lahir</b></td>
							<td><b>Tanggal Lahir</b></td>
							<td><b>Status Pendaftaran</b></td>
							
						</tr>
					</thead>
				    <tbody>
				    	<?php  
				    		$query 	= "SELECT a.*, a.id as id_daftar,b.*, b.id as id_akun,b.email,c.status_pendaftaran
				    				FROM pendaftaran a, akun b, detail_pendaftaran c 
						    		WHERE a.id=b.id_user 
						    		AND b.role_user=1 
						    		AND c.id_user = a.id
                    				AND a.upload_transkip != '' 
                    				AND a.upload_ijazah != '' ";

				    		$exec 	=	mysqli_query($conn, $query);

				    		if ($exec) {
				    			$total	= mysqli_num_rows($exec);
				    			if ($total > 0) {
				    				while ($rows = mysqli_fetch_array($exec)) {
				    				    
				    				    $status = $rows['status_pendaftaran'];
		
				    	?>

									<tr>
										<td><?php echo ++$no; ?></td>
										<td><?php echo $rows['nama']; ?></td>
										<td><?php echo $rows['email']; ?></td>
										<td><?php echo $rows['tempat_lahir'] ; ?></td>
										<td><?php echo $rows['tgl_lahir'] ; ?></td>
										<td> <?php
											if ($rows['status_pendaftaran'] == 1) {
                            					echo 'Diterima';

                        					}else if ($rows['status_pendaftaran'] == 2) {
                            					echo "Tidak Diterima";

                        					}else if ($rows['status_pendaftaran'] == 3) {
                           						 echo "Cadangan";
                        					}?>
										
										</td>
										
									</tr>

				    	<?php
				    				}
				    			}else{
				    				echo "<td colspan='5' align='center'><h3><b>Belum ada siswa daftar</b></h3></td>";
				    			}
				    		}else{
				    			echo mysqli_error($conn);
				    		}
				    	?>
				        
				    </tbody>
				</table>

            </div>
        </div>
    </div>
</div>

    <script type="text/javascript">
        window.print();
    </script>
	
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="js/my-login.js"></script>
</body>


</html>