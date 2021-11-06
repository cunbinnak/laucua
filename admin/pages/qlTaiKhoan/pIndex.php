<h1 class="text-center">Quản lý tài khoản</h1>
<?php
    $a = 1;
    if(isset($_GET["a"])){
        $a = $_GET["a"];
    }

    switch($a){
        case 1:
            include("pages/qlTaiKhoan/pDanhSach.php");
            break;
        case 2: 
            include("pages/qlTaiKhoan/pThemMoi.php");
            break;
        case 101:
            include("pages/qlTaiKhoan/exKhoaTaiKhoan.php");
            break;
        case 102:
            include("pages/qlTaiKhoan/pChinhSua.php");
            break;
        case 201:
            include("pages/qlTaiKhoan/exThemMoi.php");
            break;
        case 202:
            include("pages/qlTaiKhoan/exChinhSua.php");
            break;
        default:
            DataProvider::ChangeURL("index.php?c=404");
    }
?>