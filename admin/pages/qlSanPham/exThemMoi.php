<?php
    if(isset($_POST["txtTenSanPham"])){
        $tenSanPham = $_POST["txtTenSanPham"];
        $maLoaiSanPham = $_POST["cmbLoaiSanPham"];
        $gia = $_POST["txtGia"];
        $soLuongTon = $_POST["txtSoLuongTon"];
        $gioiThieu = $_POST["txtGioiThieu"];
        $moTa = $_POST["txtMoTa"];

        // Xử lý upload hình
        $hinhURL = $_FILES['fHinh']['name'];
        move_uploaded_file($_FILES['fHinh'][tmp_name], "../images/sanpham/".$hinhURL);

        if(file_exists("../images/sanpham/".$_FILES['fHinh']['name']) == false){
            DataProvider::ChangeURL("index.php?c=4&a=2&err=1");
        }

        $sql = "INSERT INTO SanPham(TenSanPham, MaLoaiSanPham, Gia, SoLuongTon, SoLuongBan, SoLuotXem, GioiThieu, MoTa, HinhURL) VALUES('$tenSanPham', $maLoaiSanPham, $gia, $soLuongTon, 0, 0, '$gioiThieu', '$moTa','$hinhURL')";
        DataProvider::ExecuteQuery($sql);
        
        DataProvider::ChangeURL("index.php?c=4");
    } else {
        DataProvider::ChangeURL("index.php?c=404");
    }
?>