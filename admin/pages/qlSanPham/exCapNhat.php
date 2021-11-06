<?php
    if(isset($_POST["hdMaSanPham"])){
        $maSanPham = $_POST["hdMaSanPham"];
        
        $tenSanPham = $_POST["txtTenSanPham"];
        $maLoaiSanPham = $_POST["cmbLoaiSanPham"];
        $gia = $_POST["txtGia"];
        $soLuongTon = $_POST["txtSoLuongTon"];
        $gioiThieu = $_POST["txtGioiThieu"];
        $moTa = $_POST["txtMoTa"];

        if($_FILES["fHinh"]["size"] > 0){
            $hinhURL = $_FILES['fHinh']['name'];
            move_uploaded_file($_FILES['fHinh'][tmp_name], "../images/sanpham/".$hinhURL);

            if(file_exists("../images/sanpham/".$hinhURL) == false){
                DataProvider::ChangeURL("index.php?c=4&a=2&err=1");
            }

            $sql = "UPDATE SanPham SET TenSanPham = '$tenSanPham', MaLoaiSanPham = $maLoaiSanPham, Gia = $gia, SoLuongTon = $soLuongTon, GioiThieu = '$gioiThieu', MoTa = '$moTa', HinhURL = '$hinhURL' WHERE MaSanPham = $maSanPham";
        } else {
            $sql = "UPDATE SanPham SET TenSanPham = '$tenSanPham', MaLoaiSanPham = $maLoaiSanPham, Gia = $gia, SoLuongTon = $soLuongTon, GioiThieu = '$gioiThieu', MoTa = '$moTa' WHERE MaSanPham = $maSanPham";    
        }
        
        DataProvider::ExecuteQuery($sql);
        // DataProvider::ChangeURL("index.php?c=4");
    } else {
        // DataProvider::ChangeURL("index.php?c=404");
    }
?>