<?php
    if(isset($_GET["id"])){
        $maSanPham = $_GET["id"];
        // Có 2 trường hợp xóa
        
        $sql = "SELECT COUNT(MaChiTietDonDatHang) FROM ChiTietDonDatHang WHERE MaSanPham = $maSanPham";
        $result = DataProvider::ExecuteQuery($sql);
        $row  = mysqli_fetch_array($result);
        if($row[0] == 0){
            // TH1: Xóa thiệt trong CSDL khi sản phẩm này vừa vừa được tạo và chưa có bán sản phẩm nào hết
            $sql = "DELETE FROM SanPham WHERE MaSanPham = $maSanPham";
        } else {
            // TH2: đã có chi tiết đơn đặt hàng của sản phẩm này ~ sản phẩm này đã được bán
            // ==> chỉ được đánh dấu xóa 

            $sql = "UPDATE SanPham SET BiXoa = 1 WHERE MaSanPham = $maSanPham";
        }
        DataProvider::ExecuteQuery($sql);
        DataProvider::ChangeURL("index.php?c=4");
    } else {
        DataProvider::ChangeURL("index.php?c=404");
    }
?>