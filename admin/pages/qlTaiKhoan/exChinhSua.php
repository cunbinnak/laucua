<?php
    $id=0;
    if(isset($_GET["id"])){
        $id = $_GET["id"];
    }
    $sql = "SELECT MaNhanVien FROM nhanvien WHERE MaNhanVien = $id";
    $result = DataProvider::ExecuteQuery($sql);
    $row=mysqli_fetch_array($result);
    $id=$row["MaNhanVien"];
    if($id != NULL){
        $tenDangNhap = $_POST["txtTenDangNhap"];
        $matKhau = $_POST["txtMatKhau"];
        $hoTen = $_POST["txtHoTen"];
        $email = $_POST["txtEmail"];
        $soDienThoai = $_POST["txtSoDienThoai"];
        $sql = "UPDATE nhanvien SET TenDangNhap = '$tenDangNhap', HoTen = '$hoTen', Email = '$email',
                SoDienThoai = '$soDienThoai' WHERE MaNhanVien = $id";
        DataProvider::ExecuteQuery($sql);
        DataProvider::ChangeURL("index.php?c=2");
    } else {
        DataProvider::ChangeURL("index.php?c=404");
    }
?>