<?php
    if(isset($_POST["txtTenDangNhap"])){
        $tenDangNhap = $_POST["txtTenDangNhap"];
        $matKhau = $_POST["txtMatKhau"];
        $hoTen = $_POST["txtHoTen"];
        $email = $_POST["txtEmail"];
        $soDienThoai = $_POST["txtSoDienThoai"];

        $sql = "INSERT INTO NhanVien(TenDangNhap, MatKhau, HoTen, Email, SoDienThoai) VALUES ('$tenDangNhap', '$matKhau', '$hoTen', '$email', '$soDienThoai')";
        DataProvider::ExecuteQuery($sql);
        DataProvider::ChangeURL("index.php?c=2");
    } else {
        DataProvider::ChangeURL("index.php?c=404");
    }
?>