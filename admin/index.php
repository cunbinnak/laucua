<?php
    session_start();
    include("../libs/DataProvider.php");
    $c = 1;
    if(isset($_GET["c"])){
        $c = $_GET["c"];
    }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Quản lý hệ thống</title>
    <link href="../css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" type="text/css" href="css/admin.css" />
</head>
<body>
<div class="container">
	<div id="header" class="bg-primary text-center">
		<a href="index.php">
            <br><br>
            <h1 style="color:white;">QUẢN LÝ HỆ THỐNG HẢI SẢN TƯƠI SỐNG</h1>
            <br><br>
		</a>
	</div>
	<div id="menu">
        <?php
            if(isset($_SESSION["MaNhanVien"])){ 
                include("modules/mThongTinDangNhap.php");
                include("modules/mMenuAdmin.php"); 
            }
        ?>
	</div>
	<div id="content">
        <?php 
            if(isset($_SESSION["MaNhanVien"]) == false){
                $c = 0;
            }

            switch($c){
                case 0:
                    include("modules/mDangNhap/pIndex.php");
                    break;
                case 1:
                    include("pages/pIndex.php");
                    break;
                case 2:
                    include("pages/qlTaiKhoan/pIndex.php");
                    break;
                case 3:
                    include("pages/qlLoaiSanPham/pIndex.php");
                    break;
                case 4:
                    include("pages/qlSanPham/pIndex.php");
                    break;
                case 5:
                    include("pages/qlDonDatHang/pIndex.php");
                    break;
                default:
                    include("pages/pError.php");
                    break;
            }
        ?>
    </div>
    <br><br>
	<div id="footer" class="bg-primary text-center text-white">
        <br>
        &copy; 2018 - Hải sản Tươi sống
        <br><br>
    </div>
</div>
</body>
</html>