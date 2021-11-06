<div class="table-responsive">
<table class="table table-bordered table-hover">
    <thead>
	<tr style="background:gray;">
		<th class="text-center">Mã đơng đặt hàng</th>
		<th class="text-center">Khách hàng</th>
        <th class="text-center">Số điện thoại</th>
        <th class="text-center">Địa chỉ</th>
        <th class="text-center">Tình trạng</th>
        <th class="text-center">Nhân viên xử lý</th>
        <th class="text-center">Thao tác</th>
    </tr>
    </thead>
    <tbody>
    <?php
        $sql = "SELECT  MaDonDatHang, HoTen, DiaChi, SoDienThoai, TenTinhTrangDonDatHang, MaTinhTrangDonDatHang, HoTenNhanVien
        FROM ((SELECT MaDonDatHang, KhachHang.HoTen, KhachHang.DiaChi, KhachHang.SoDienThoai, TenTinhTrangDonDatHang, DonDatHang.MaTinhTrangDonDatHang, '' As HoTenNhanVien
        FROM KhachHang, DonDatHang, TinhTrangDonDatHang, NhanVien 
        WHERE KhachHang.MaKhachHang = DonDatHang.MaKhachHang AND DonDatHang.MaTinhTrangDonDatHang = TinhTrangDonDatHang.MaTinhTrangDonDatHang AND DonDatHang.MaNhanVien Is NULL
        ORDER BY TinhTrangDonDatHang.MaTinhTrangDonDatHang) UNION
        (SELECT MaDonDatHang, KhachHang.HoTen, KhachHang.DiaChi, KhachHang.SoDienThoai, TenTinhTrangDonDatHang, DonDatHang.MaTinhTrangDonDatHang, NhanVien.HoTen As HoTenNhanVien
        FROM KhachHang, DonDatHang, TinhTrangDonDatHang, NhanVien 
        WHERE KhachHang.MaKhachHang = DonDatHang.MaKhachHang AND DonDatHang.MaTinhTrangDonDatHang = TinhTrangDonDatHang.MaTinhTrangDonDatHang AND DonDatHang.MaNhanVien = NhanVien.MaNhanVien
        ORDER BY TinhTrangDonDatHang.MaTinhTrangDonDatHang)) t";
        $result = DataProvider::ExecuteQuery($sql);
        while($row = mysqli_fetch_array($result)){
            $maDonDatHang = $row["MaDonDatHang"];
            $hoTen = $row["HoTen"];
            $diaChi = $row["DiaChi"];
            $soDienThoai = $row["SoDienThoai"];
            $tenTinhTrangDonDatHang = $row["TenTinhTrangDonDatHang"]; 
            $maTinhTrangDonDatHang = $row["MaTinhTrangDonDatHang"];
            $hoTenNhanVien = $row["HoTenNhanVien"];

            $class = "";
            switch($maTinhTrangDonDatHang){
                case 1:
                    $class = "";
                    break;
                case 2:
                    $class = "classDangXuLy";
                    break;
                case 3:
                    $class = "classGiaoHang";
                    break;
                case 4:
                    $class = "classThanhToan";
                    break;
                case 5:
                    $class = "classHuy";
                    break;
            }

            include("pages/qlDonDatHang/tDanhSach.php");
        }
    ?>
    </tbody>
</table>
</div>