<?php
    if(isset($_GET['id']) == null){
        // header("location:index.php?c=404");
        DataProvider::ChangeURL("index.php?c=404");
    } else {
        $id = $_GET["id"];
        
        $gioHang = unserialize($_SESSION["SCart"]);
        $gioHang->Them($id);
        $_SESSION["SCart"] = serialize($gioHang);

        $sql = "SELECT SoLuotXem FROM sanpham WHERE BiXoa = 0 AND MaSanPham = $id";    
        $result = DataProvider::ExecuteQuery($sql);
        $row=mysqli_fetch_array($result);
        $soLuotXem = $row["SoLuotXem"] + 1;
        $sql = "UPDATE sanpham SET SoluotXem = $soLuotXem WHERE BiXoa = 0 AND MaSanPham = $id";
        DataProvider::ExecuteQuery($sql);
        DataProvider::ChangeURL("index.php?c=4");
    }
?>