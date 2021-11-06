<?php
    if(isset($_POST["txtHoTen"]) ==  false){
        DataProvider::ChangeURL("index.php?c=404");
    } else {
        $hoTen = $_POST["txtHoTen"];
        $diaChi = $_POST["txtDiaChi"];
        $soDienThoai = $_POST["txtSoDienThoai"];

        $sql = "INSERT INTO KhachHang(HoTen, DiaChi, SoDienThoai) VALUES ('$hoTen','$diaChi','$soDienThoai')";
        DataProvider::ExecuteQuery($sql);

        $sql = "SELECT MaKhachHang FROM KhachHang WHERE BiXoa = 0 ORDER BY MaKhachHang DESC LIMIT 0, 1";
        $result = DataProvider::ExecuteQuery($sql);
        $row = mysqli_fetch_array($result);

        $maKhachHang = $row["MaKhachHang"];

        $_SESSION["MaKhachHang"] = $maKhachHang;

        DataProvider::ChangeURL("index.php?c=104");
    }
?>