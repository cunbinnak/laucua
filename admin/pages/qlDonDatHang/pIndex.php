<h1>Quản lý đơn đặt hàng</h1>

<?php
    $a = 1; 
    if(isset($_GET["a"])){
        $a = $_GET["a"];
    }

    switch($a){
        case 1:
            include("pages/qlDonDatHang/pDanhSach.php");
            break;
        case 2: 
            include("pages/qlDonDatHang/pChiTietDonDatHang.php");
            break;
        
        case 201: 
            include("pages/qlDonDatHang/exDatHang.php");
            break;
        default:
            DataProvider::ChangeURL("index.php?c=404");
        
    }
?>