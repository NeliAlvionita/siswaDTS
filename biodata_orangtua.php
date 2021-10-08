<?php  
	//start the session
	session_start();

    $redirect = "";
    
    if (isset($_SESSION['is_data_parent_exist'])) {
        $redirect = "<script> window.location='pendaftaran.php'; </script>";
    }else{
        $redirect = "<script> window.location='pendaftaran.php'; </script>";
    }

    if(isset($_POST['submit'])){
        foreach ($_POST as $key => $val) {
            ${$key} = $val;
            $_SESSION[''.$key.''] = $val;
        }

        if (!empty($_SESSION)) {
            echo $redirect;
            print_r($_SESSION);
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Penerimaan Siswa Baru</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="assets/css/material-dashboard.css?v=1.2.0" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="assets/css/main.css">

</head>
<body>
	<div class="container">

	    <div class="row">
	        <div class="col-sm-12 col-md-8 col-lg-10 col-lg-offset-1">

				<div class="card" style="margin-top: 50px">
                    <div class="card-header" data-background-color="blue">
                        <h4 class="title">Data Orang Tua</h4>
                        <p class="category">Isi Form pendaftaran dengan benar</p>
                    </div>
                    <div class="card-content">
                        <form method="post" action="biodata_orangtua.php">
                            
                            <fieldset class="the-fieldset">
                                <legend class="the-legend">Data Ayah</legend>
                                <!-- Father data form input -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Nama Ayah</label>
                                        <input type="text" class="form-control" name="nama_ayah" required 
                                        value="<?php isset($_SESSION['nama_ayah'])  ?  print($_SESSION['nama_ayah']) : ""; ?>"
                                        autofocus>
                                    </div>
                                </div>
                            </div>
                    
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Tempat lahir Ayah</label>
                                        <input type="text" class="form-control" name="tmpt_lahir_ayah" 
                                        value="<?php isset($_SESSION['tmpt_lahir_ayah'])  ?  print($_SESSION['tmpt_lahir_ayah']) : ""; ?>"
                                        required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Tanggal lahir Ayah</label>
                                        <input type="date" class="form-control" name="tgl_lahir_ayah" 
                                        value="<?php isset($_SESSION['tgl_lahir_ayah'])  ?  print($_SESSION['tgl_lahir_ayah']) :""; ?>"
 required>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Pendidikan Terakhir Ayah</label>
                                        <input type="text" class="form-control" name="pendidikan_ayah" required
                                        value="<?php isset($_SESSION['pendidikan_ayah'])  ?  print($_SESSION['pendidikan_ayah']) : ""; ?>"
                                        >
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Pekerjaan</label>
                                        <input type="text" class="form-control" name="pekerjaan_ayah" required
                                        value="<?php isset($_SESSION['pekerjaan_ayah'])  ?  print($_SESSION['pekerjaan_ayah']) : ""; ?>"
                                        >
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Agama</label>
                                        <input type="text" class="form-control" name="agama_ayah" 
                                        value="<?php isset($_SESSION['agama_ayah'])  ?  print($_SESSION['agama_ayah']) : ""; ?>"

                                        required>
                                    </div>
                                </div>
                            </div>
                            <!-- END Father data form input -->
                            </fieldset>

                            

                            
                                
                            <fieldset class="the-fieldset" style="margin-top: 20px">
                                <legend class="the-legend">Data Ibu</legend>
                                <!-- Father data form input -->
                            <!-- Mother data form input -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Nama Ibu</label>
                                        <input type="text" class="form-control" name="nama_ibu" required 
                                        value="<?php isset($_SESSION['nama_ibu'])  ?  print($_SESSION['nama_ibu']) : ""; ?>"

                                        autofocus>
                                    </div>
                                </div>
                            </div>
                    
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Tempat lahir Ibu</label>
                                        <input type="text" class="form-control" name="tmpt_lahir_ibu"
                                        value="<?php isset($_SESSION['tmpt_lahir_ibu'])  ?  print($_SESSION['tmpt_lahir_ibu']) : ""; ?>"

                                         required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Tanggal lahir Ibu</label>
                                        <input type="date" class="form-control" name="tgl_lahir_ibu"  
value="<?php isset($_SESSION['tgl_lahir_ibu'])  ?  print($_SESSION['tgl_lahir_ibu']) : ""; ?>"

                                        required>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Pendidikan Terakhir Ibu</label>
                                        <input type="text" class="form-control" name="pendidikan_ibu"
value="<?php isset($_SESSION['pendidikan_ibu'])  ?  print($_SESSION['pendidikan_ibu']) : ""; ?>"

                                         required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Pekerjaan</label>
                                        <input type="text" class="form-control" name="pekerjaan_ibu" 
value="<?php isset($_SESSION['pekerjaan_ibu'])  ?  print($_SESSION['pekerjaan_ibu']) : ""; ?>"

                                        required>
                                    </div>
                                </div>
                            </div>
                            
                            

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Agama</label>
                                        <input type="text" class="form-control" name="agama_ibu" 
value="<?php isset($_SESSION['agama_ibu'])  ?  print($_SESSION['agama_ibu']) : ""; ?>"

                                        required>
                                    </div>
                                </div>
                            </div>
                            <!-- END Mother data form input -->
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Telp/HP</label>
                                        <input type="text" class="form-control" name="telp_ibu" 
value="<?php isset($_SESSION['telp_ibu'])  ?  print($_SESSION['telp_ibu']) : ""; ?>"

                                        required>
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                            
                            <?php  
                            if (isset($_SESSION['is_data_parent_exist'])) {
                            ?>
                                <button type="submit" name="submit" class="btn btn-primary pull-right">Kembali <i class="fa fa-arrow-right"></i></button>
                            <?php
                            }else{
                            ?>
                                <a href="biodata_siswa.php" class="btn btn-warning pull-left"><i class="fa fa-arrow-left"></i> Kembali</a>
                                <button type="submit" name="submit" class="btn btn-primary pull-right">Lanjut <i class="fa fa-arrow-right"></i></button>
                            <?php
                            }
                            ?>

                            
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
	    </div>
	</div>
</body>
</html>