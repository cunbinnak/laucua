<?php
    if(isset($_POST["txtTenLoaiSanPham"])){
        $tenLoaiSanPham = $_POST["txtTenLoaiSanPham"];
        $sql = "INSERT INTO LoaiSanPham(TenLoaiSanPham) VALUES('$tenLoaiSanPham')";
        DataProvider::ExecuteQuery($sql);
        DataProvider::ChangeURL("index.php?c=3");
    } else {
        DataProvider::ChangeURL("index.php?c=404");
    }
?>