<?php  


session_start();
include '../koneksi.php';

date_default_timezone_get("Asia/Jakarta");

if (isset($_GET['idd'])) {
	$id 		=	$_GET['idd'];
	$idu 		=	$_GET['idu'];
	$idd 		=	$_GET['idd'];
	

	$queryAge 	=	"SELECT tanggal_lahir FROM pendaftaran WHERE Id = $idd";
	$exec2		= 	mysqli_query($conn, $queryAge); 

	if ($exec2) {
		$tanggal_lahir	=	mysqli_fetch_array($exec2);
		$kelas 	= findage($tanggal_lahir['tgl_lahir']);
		$age 	= getAge($tanggal_lahir['tgl_lahir']);
	}else{
		echo mysqli_error($conn);
	}

	$query		=	"UPDATE detail_pendaftaran 
					SET status_pendaftaran=3, id_admin=$idu
					WHERE id_user=$id";
	$exec 		= 	mysqli_query($conn, $query);

	if ($exec) {
		$_SESSION['message']	= "1";
		echo '<script>window.location="../data-siswa/index.php?page=6"</script>';
	}else{
		echo mysqli_error($conn);
	}
}else{
	echo 'tidak ada';
}



?>