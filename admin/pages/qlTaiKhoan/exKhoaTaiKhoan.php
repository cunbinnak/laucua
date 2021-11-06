<?php
    if(isset($_GET["id"])){
        $maNhanVien = $_GET["id"];
        $sql = "UPDATE NhanVien SET BiXoa = 1 - BiXoa WHERE MaNhanVien = $maNhanVien";
        DataProvider::ExecuteQuery($sql);
        DataProvider::ChangeURL("index.php?c=2");
    } else {
        DataProvider::ChangeURL("index.php?c=404");
    }
?>