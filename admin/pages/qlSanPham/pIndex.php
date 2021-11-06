<h1 class="text-center">Quản lý Sản phẩm</h1>

<?php
    $a = 1; 
    if(isset($_GET["a"])){
        $a = $_GET["a"];
    }

    switch($a){
        case 1:
            include("pages/qlSanPham/pDanhSach.php");
            break;
        case 2: 
            include("pages/qlSanPham/pThemMoi.php");
            break;
        case 3: 
            include("pages/qlSanPham/pCapNhat.php");
            break;
        case 201: 
            include("pages/qlSanPham/exThemMoi.php");
            break;
        case 301:
            include("pages/qlSanPham/exCapNhat.php");
            break;
        case 401:
            include("pages/qlSanPham/exXoa.php");
            break;
        case 402:
            include("pages/qlSanPham/exKichHoat.php");
            beak;
        default:
            DataProvider::ChangeURL("index.php?c=404");
        
    }
?>