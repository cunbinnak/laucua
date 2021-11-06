<?php
    if(isset($_GET["id"])){
        $id = $_GET["id"];
        $t = $_GET["t"];
        $maNhanVien = $_SESSION["MaNhanVien"];

        $sql = "UPDATE DonDatHang Set MaTinhTrangDonDatHang = $t, MaNhanVien = $maNhanVien WHERE MaDonDatHang = $id";
        DataProvider::ExecuteQuery($sql);
        DataProvider::ChangeURL("index.php?c=5");
    } else {
        DataProvider::ChangeURL("index.php?c=404");
    }
?>