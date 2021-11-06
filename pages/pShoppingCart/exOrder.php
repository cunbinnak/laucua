<?php
    $maKhachHang = "";
    if(isset($_POST["txtMaKhachHang"]) == true){
        //Kiểm tra Mã khách hàng có tồn tại trong hệ thống chưa?
        $maKhachHang = $_POST["txtMaKhachHang"];

        $sql = "SELECT MaKhachHang FROM KhachHang WHERE BiXoa = 0 AND MaKhachHang = $maKhachHang";
        $result = DataProvider::ExecuteQuery($sql);
        $row = mysqli_fetch_array($result);
        if($row == null){
            DataProvider::ChangeURL("index.php?c=404&err_id=2");
        }
    } else {
        if(isset($_SESSION["MaKhachHang"]) == true){
            $maKhachHang = $_SESSION["MaKhachHang"];
        } else {
            DataProvider::ChangeURL("index.php?c=404&err_id=2");
        }
    }

    //Tạo thông tin đơn đặt hàng
    $ngayDatHang = date("Y-m-d");
    $tongThanhTien = $_SESSION["TongThanhTien"];
    $maTinhTrangDonDatHang = 1; //Dòng này đang code cứng (Hard code) => Không tốt

    $sql = "INSERT INTO DonDatHang(MaKhachHang, NgayDatHang, TongThanhTien, MaTinhTrangDonDatHang) VALUES ($maKhachHang, '$ngayDatHang', $tongThanhTien, $maTinhTrangDonDatHang)";
    DataProvider::ExecuteQuery($sql);

    $sql = "SELECT MaDonDatHang FROM DonDatHang ORDER BY MaDonDatHang DESC LIMIT 0, 1";
    $result = DataProvider::ExecuteQuery($sql);
    $row = mysqli_fetch_array($result);

    $maDonDatHang = $row["MaDonDatHang"];

    //Tạo chi tiết đơn đặt hàng
    $gioHang = unserialize($_SESSION["SCart"]);
    foreach($gioHang->arrSanPham as $sp){
        //Insert thông tin của một chi tiết đơn đặt hàng trong giỏ hàng vào CSDL
        $maSanPham = $sp->MaSanPham;
        $soLuong = $sp->SoLuong;

        //Lấy giá bán hiện tại của sản phẩm
        $sql = "SELECT Gia FROM SanPham WHERE MaSanPham = $maSanPham";
        $result = DataProvider::ExecuteQuery($sql);
        $row = mysqli_fetch_array($result);

        $giaSanPham = $row["Gia"];

        //Thực hiện Insert vào bảng ChiTietDonDatHang
        $sql = "INSERT INTO ChiTietDonDatHang(MaDonDatHang, MaSanPham, SoLuong, GiaBan) VALUES($maDonDatHang, $maSanPham, $soLuong, $giaSanPham)";
        DataProvider::ExecuteQuery($sql);
    }

    //Xóa thông tin giỏ hàng sau khi đã đặt hàng
    unset($_SESSION["SCart"]);
    $_SESSION["TongThanhTien"] = 0;

    DataProvider::ChangeURL("index.php?c=6&id=$maDonDatHang");
?>