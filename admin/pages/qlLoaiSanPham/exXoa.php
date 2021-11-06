<?php
    if(isset($_GET["id"])){
        $maLoaiSanPham = $_GET["id"];
        // Có 2 trường hợp xóa
        
        $sql = "SELECT COUNT(MaSanPham) FROM SanPham WHERE MaLoaiSanPham = $maLoaiSanPham";
        $result = DataProvider::ExecuteQuery($sql);
        $row  = mysqli_fetch_array($result);
        if($row[0] == 0){
            // TH1: Xóa thiệt trong CSDL khi Loại sản phẩm này vừa vừa được tạo và chưa có thêm Sản phảm nào thuộc loại này hết
            $sql = "DELETE FROM LoaiSanPham WHERE MaLoaiSanPham = $maLoaiSanPham";
        } else {
            $sql = "UPDATE LoaiSanPham SET BiXoa = 1 WHERE MaLoaiSanPham = $maLoaiSanPham";
        }
        DataProvider::ExecuteQuery($sql);
        DataProvider::ChangeURL("index.php?c=3");
    } else {
        DataProvider::ChangeURL("index.php?c=404");
    }
?>