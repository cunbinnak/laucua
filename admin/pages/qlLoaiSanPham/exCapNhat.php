<?php
    if(isset($_POST["hdMaLoaiSanPham"])){
        $maLoaiSanPham = $_POST["hdMaLoaiSanPham"];
        $tenLoaiSanPhm = $_POST["txtTenLoaiSanPham"];

        $sql = "UPDATE LoaiSanPham SET TenLoaiSanPham = '$tenLoaiSanPhm' WHERE MaLoaiSanPham = $maLoaiSanPham";
        DataProvider::ExecuteQuery($sql);
        DataProvider::ChangeURL("index.php?c=3");
    } else {
        DataProvider::ChangeURL("index.php?c=404");
    }
?>