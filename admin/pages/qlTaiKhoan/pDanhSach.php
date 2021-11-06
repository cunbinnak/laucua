<div class="TaoMoi">
    <a href="index.php?c=2&a=2">
        <span><img src="img/new.png" width="20" /></span><span> Tạo mới</span>
    </a>
</div>
<br>
<div class="table-responsive">
<table class="table table-bordered table-hover">
    <thead>
	<tr style="background:gray;">
		<th class="text-center">Mã nhân viên</th>
		<th class="text-center">Tên đăng nhập</th>
		<th class="text-center">Họ tên</th>
		<th class="text-center">Điện thoại</th>
		<th class="text-center">Email</th>
		<th class="text-center">Tình trạng</th>
		<th class="text-center">Thao tác</th>
    </tr>
    </thead>
    <tbody>
    <?php
        $sql = "SELECT * FROM nhanvien";
        $result = DataProvider::ExecuteQuery($sql);
        while($row = mysqli_fetch_array($result)){
            $maNhanVien = $row["MaNhanVien"];
            $tenDangNhap = $row["TenDangNhap"];
            $hoTen = $row["HoTen"];
            $email = $row["Email"];
            $soDienThoai = $row["SoDienThoai"];
            $biXoa = $row["BiXoa"];

            include("pages/qlTaiKhoan/tDanhSach.php");
        }
    ?>
    </tbody>
</table>
</div>