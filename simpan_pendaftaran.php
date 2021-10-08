<?php
	//Start session  
	session_start();
	
	//import connection to database
	include "koneksi.php";

	//check if $_SESSION is exist
	if (isset($_SESSION)) {
		foreach ($_SESSION as $key => $val) {
			${$key} = $val;
		}


		$sql	= "INSERT INTO pendaftaran VALUES(null,'$nama', '$tempat_lahir'
					, '$tgl_lahir' ,'$jenis_kelamin', '$anak_ke', '$jmlh_saudara', 
					 '$nama_ayah', '$tmpt_lahir_ayah','$tgl_lahir_ayah', '$pendidikan_ayah'
					, '$pekerjaan_ayah', '$agama_ayah','$nama_ibu', '$tmpt_lahir_ibu', '$tgl_lahir_ibu'
					, '$pendidikan_ibu', '$pekerjaan_ibu', '$agama_ibu', '$telp_ibu','','')";

		$exec 	= mysqli_query($conn,$sql);

		if ($exec) {

			$id 		= $conn->insert_id;
			//echo $id;
			$query 		= "INSERT INTO akun VALUES(null, '$email', '$password', '',1, $id)";

			$exec_akun 	=  mysqli_query($conn, $query);

			$date_regis	= date("Y-m-d");

			$query2		= "INSERT INTO detail_pendaftaran (id_user,tgl_daftar,status_pendaftaran)
							VALUES($id, '$date_regis', 0)";

			$exec_detil	= mysqli_query($conn, $query2);

			if ($exec_akun && $exec_detil) {
				session_destroy();
				echo'<script> window.location="pendaftaran_sukse.php"; </script> ';
			}else{
				echo mysqli_error($conn);
				echo 'gagal';
			}

		}else{
			echo mysqli_error($conn);
		}
	}
?>