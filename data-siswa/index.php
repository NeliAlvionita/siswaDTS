<?php

include '../auth.php';
include '../koneksi.php';

$role = "";

$id     = $_SESSION['auth'];


if ($_SESSION['role_user'] == 0) {
    $role = "Admin";
    $query      = "SELECT * FROM akun WHERE id = $id";

    $exec       = mysqli_query($conn, $query);

    if ($exec) {

        while ($user = mysqli_fetch_array($exec)) {
            foreach ($user as $key => $val) {
                ${$key} = $val;
            }
        }
    }
} else {
    $role = "User";
    $query      = "SELECT a.*,b.* FROM pendaftaran a, akun b WHERE a.id = $id AND b.id_user=$id";

    $exec       = mysqli_query($conn, $query);


    if ($exec) {
        while ($user = mysqli_fetch_array($exec)) {
            foreach ($user as $key => $val) {
                ${$key} = $val;
            }
        }
    }
}




$getPage = $_GET['page'];

switch ($getPage) {
    case 1:
        $page                 = "home.php";
        $_SESSION['active']    = "1";
        break;
    case 2:
        $page                 = "data_siswa.php";
        $_SESSION['active']    = "2";
        break;
    case 3:
        $page                 = "edit_profile.php";
        $_SESSION['active']    = "2";
        break;
    case 4:
        $page                 = "status_pendaftaran.php";
        $_SESSION['active'] = "3";
        break;
    case 5:
        $page                 = "upload_nilai.php";
        $_SESSION['active'] = "3";
        break;

    case 6:
        $page                 = "../data_admin/data_pendaftaran.php";
        $_SESSION['active']    = "4";
        break;
    case 7:
        $page               = "../data_admin/detail_pendaftaran.php";
        $ida                = $_GET['ida'];
        $idd                = $_GET['idd'];
        $_SESSION['active'] = "4";
        break;
    case 8:
        $page               = "../data_admin/konfirmasi_pendaftaran.php";
        $ida                = $_GET['ida'];
        $idd                = $_GET['idd'];
        $_SESSION['active'] = "4";
        break;
    case 9:
        $page                 = "../data_admin/laporan.php";
        $_SESSION['active']    = "5";
        break;
    case 10:
        $page                 = "../data_admin/data_user.php";
        $_SESSION['active']    = "6";
        break;
    case 11:
        $page                 = "cetak_bukti.php";
        $_SESSION['active']    = "2";
        break;
    default:
        $page     = "home.php";
        $_SESSION['active']    = "1";
        break;
}

?>

<!doctype html>
<html lang="en">

<head>

    <title>Dashboard <?php echo $role; ?></title>


    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="https://objectstorage.ap-sydney-1.oraclecloud.com/n/sdrwwjsjidrf/b/bucket-uts/o/css%2Fbootstrap.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="../assets/css/material-dashboard.css?v=1.2.0" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="https://objectstorage.ap-sydney-1.oraclecloud.com/n/sdrwwjsjidrf/b/bucket-uts/o/css%2Fdemo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="https://objectstorage.ap-sydney-1.oraclecloud.com/n/sdrwwjsjidrf/b/bucket-uts/o/css%2Ffont-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>


</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-color="blue" data-image="../assets/img/sidebar-1.jpg">
            <!--
                Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

                Tip 2: you can also add an image using data-image tag
            -->
            <div class="logo">
                <a href="#" class="simple-text">
                    Selamat datang <?php $role == "Admin" ? print($nama_admin) : print($nama); ?>
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="<?php $_SESSION['active'] == 1 ? print("active") : print("") ?>">
                        <a href="index.php?page=1">
                            <i class="material-icons">dashboard</i>
                            <p>Home</p>
                        </a>
                    </li>

                    <?php
                    if ($role == "User") {
                    ?>
                        <li class="<?php $_SESSION['active'] == 2 ? print("active") : print("") ?>">
                            <a href="index.php?page=2">
                                <i class="material-icons">person</i>
                                <p>User Profile </p>
                            </a>
                        </li>
                        <li class="<?php $_SESSION['active'] == 2 ? print("active") : print("") ?>">
                            <a href="index.php?page=11">
                                <i class="material-icons">person</i>
                                <p>Cetak Bukti </p>
                            </a>
                        </li>
                    <?php
                    }
                    ?>


                    <?php
                    if ($role == "Admin") {
                    ?>
                        <li class="<?php $_SESSION['active'] == 4 ? print("active") : print("") ?>">
                            <a href="index.php?page=6">
                                <i class="material-icons">content_paste</i>
                                <p>Konfirmasi Pendaftaran </p>
                            </a>
                        </li>
                        <li class="<?php $_SESSION['active'] == 5 ? print("active") : print("") ?>">
                            <a href="index.php?page=9">
                                <i class="material-icons">content_paste</i>
                                <p>Laporan </p>
                            </a>
                        </li>
                        <li class="<?php $_SESSION['active'] == 6 ? print("active") : print("") ?>">
                            <a href="index.php?page=10">
                                <i class="material-icons">content_paste</i>
                                <p>Data User </p>
                            </a>
                        </li>
                    <?php
                    }
                    ?>

                    <?php
                    if ($role == "User") {
                    ?>
                        <li class="<?php $_SESSION['active'] == 3 ? print("active") : print("") ?>">
                            <a href="index.php?page=4">
                                <i class="material-icons">content_paste</i>
                                <p>Syarat Pendaftaran</p>
                            </a>
                        </li>
                    <?php
                    }
                    ?>

                    <li>
                        <a href="../logout.php">
                            <i class="material-icons text-black">notifications</i>
                            <p>Logout</p>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
        <div class="main-panel">
            <div class="content">
                <div class="container-fluid">

                    <?php

                    include $page;

                    ?>

                </div>
            </div>

        </div>
    </div>

</body>

<!--   Core JS Files   -->
<script src="https://objectstorage.ap-sydney-1.oraclecloud.com/n/sdrwwjsjidrf/b/bucket-uts/o/js%2Fjquery-3.2.1.min.js" type="text/javascript"></script>
<script src="https://objectstorage.ap-sydney-1.oraclecloud.com/n/sdrwwjsjidrf/b/bucket-uts/o/js%2Fbootstrap.min.js" type="text/javascript"></script>
<script src=".https://objectstorage.ap-sydney-1.oraclecloud.com/n/sdrwwjsjidrf/b/bucket-uts/o/js%2Fmaterial.min.js" type="text/javascript"></script>
<!--  Charts Plugin -->
<script src="https://objectstorage.ap-sydney-1.oraclecloud.com/n/sdrwwjsjidrf/b/bucket-uts/o/js%2Fchartist.min.js"></script>
<!--  Dynamic Elements plugin -->
<script src="https://objectstorage.ap-sydney-1.oraclecloud.com/n/sdrwwjsjidrf/b/bucket-uts/o/js%2Farrive.min.js"></script>
<!--  PerfectScrollbar Library -->
<script src="https://objectstorage.ap-sydney-1.oraclecloud.com/n/sdrwwjsjidrf/b/bucket-uts/o/js%2Fperfect-scrollbar.jquery.min.js"></script>
<!--  Notifications Plugin    -->
<script src="https://objectstorage.ap-sydney-1.oraclecloud.com/n/sdrwwjsjidrf/b/bucket-uts/o/js%2Fbootstrap-notify.js"></script>
<!--  Google Maps Plugin    -->
<!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script> -->
<!-- Material Dashboard javascript methods -->
<script src="../assets/js/material-dashboard.js?v=1.2.0"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="
https://objectstorage.ap-sydney-1.oraclecloud.com/n/sdrwwjsjidrf/b/bucket-uts/o/js%2Fdemo.js"></script>

<script>
    $(document).ready(function() {
        $("#cetak").click(function() {
            window.print();
        });
    });
</script>

</html>