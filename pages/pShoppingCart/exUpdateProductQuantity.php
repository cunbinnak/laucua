<?php
    if(isset($_POST["hdMaSanPham"]) == false){
        DataProvider::ChangeURL("index.php?c=404");
    } else {
        $id = $_POST["hdMaSanPham"];
        $soLuong = $_POST["txtSoLuong"];

        $gioHang = unserialize($_SESSION["SCart"]);
        $gioHang->CapNhat($id, $soLuong);
        $_SESSION["SCart"] = serialize($gioHang);

        DataProvider::ChangeURL("index.php?c=4");
    }
?>