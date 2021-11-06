<h1 class="text-center">Quản lý loại sản phẩm</h1>

<?php
    $a = 1; 
    if(isset($_GET["a"])){
        $a = $_GET["a"];
    }

    switch($a){
        case 1:
            include("pages/qlLoaiSanPham/pDanhSach.php");
            break;
        case 2: 
            include("pages/qlLoaiSanPham/pThemMoi.php");
            break;
        case 3: 
            include("pages/qlLoaiSanPham/pCapNhat.php");
            break;
        
        case 201: 
            include("pages/qlLoaiSanPham/exThemMoi.php");
            break;
        case 301:
            include("pages/qlLoaiSanPham/exCapNhat.php");
            break;
        case 401:
            include("pages/qlLoaiSanPham/exXoa.php");
            break;
        case 402:
            include("pages/qlLoaiSanPham/exKichHoat.php");
            beak;
        default:
            DataProvider::ChangeURL("index.php?c=404");
        
    }
?>