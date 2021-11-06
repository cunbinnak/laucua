<?php
    if(isset($_POST["txtTenDangNhap"])){
        $tenDangNhap = $_POST["txtTenDangNhap"];
        $matKhau = $_POST["txtMatKhau"];

        $sql = "SELECT * FROM NhanVien WHERE BiXoa = 0 AND TenDangNhap = '$tenDangNhap' AND MatKhau='$matKhau'";
        $result = DataProvider::ExecuteQuery($sql);
        $row = mysqli_fetch_array($result);
        if($row == null){
            DataProvider::ChangeURL("index.php?c=0&err=1");
        } else {
            $_SESSION["MaNhanVien"] = $row["MaNhanVien"];
            $_SESSION["HoTen"] = $row["HoTen"];

            DataProvider::ChangeURL("index.php");
        }

    } else {
        DataProvider::ChangeURL("index.php?c=0&err=1");
    }
?>