<h2>Konfirmasi Pendaftaran</h2>


<div class="row">
    <div class="col-sm-12 col-md-8 col-lg-10 col-lg-offset-1">
        <div class="card" style="margin-top: 50px">
            <div class="card-header" data-background-color="blue">
                <h4 class="title">Informasi Data</h4>
            </div>
            <div class="card-content">
                
                <h3 style="overflow: hidden;"><b>Data Siswa</b></h3>
				<table class="table table-hover">
					<thead>
						<tr>
							<td><b>No</b></td>
							<td><b>Email</b></td>
							<td><b>Nama</b></td>
							<td><b>Password</b></td>
						</tr>
					</thead>
				    <tbody>
				    	<?php  
				    		$query 	= "SELECT a.nama, a.id as id_daftar, b.password,b.id as id_akun,b.email,c.* 
							FROM pendaftaran a, akun b, detail_pendaftaran c 
							WHERE a.id=b.id_user 
							AND b.role_user=1 
							AND c.id_user = a.id ";


				    		$exec 	=	mysqli_query($conn, $query);

				    		if ($exec) {
				    			$total	= mysqli_num_rows($exec);
				    			if ($total > 0) {
				    				while ($rows = mysqli_fetch_array($exec)) {
				    				    
				    				    $status = $rows['role_user'];

				    			
				    	?>
									<tr>
										<td><?php echo ++$no; ?></td>
										<td><?php echo $rows['email']; ?></td>
										<td><?php echo $rows['nama']; ?></td>
										<td><?php echo $rows['password']; ?></td>
										
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

<?php  

unset($_SESSION['message']);

?>