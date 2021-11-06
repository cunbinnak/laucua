<div class="TaoMoi">
    <a href="index.php?c=4&a=2">
        <span><img src="img/new.png" width="20" /></span><span> Tạo mới</span>
    </a>
</div>
<br>
<div class="table-responsive">
<table class="table table-bordered table-hover">
    <thead>
	<tr style="background:gray;">
		<th class="text-center">Mã sản phẩm</th>
		<th class="text-center">Tên sản phẩm</th>
        <th class="text-center">Hình</th>
		<th class="text-center">Loại</th>
        <th class="text-center">Giá bán</th>
        <th class="text-center">Số lượng tồn</th>
        <th class="text-center">Số lượt bán</th>
        <th class="text-center">Số lượt xem</th>
        <th class="text-center">Giới thiệu</th>
        <th class="text-center">Tình trạng</th>
		<th class="text-center">Thao tác</th>
    </tr>
    </thead>
    <tbody>
    <?php
        $sql = "SELECT MaSanPham, TenSanPham, sanpham.HinhURL, TenLoaiSanPham, Gia, SoLuongTon, SoLuongBan, SoLuotXem, SanPham.BiXoa, sanpham.GioiThieu FROM SanPham, LoaiSanPham WHERE SanPham.MaLoaiSanPham = LoaiSanPham.MaLoaiSanPham ORDER BY MaSanPham";
        $result = DataProvider::ExecuteQuery($sql);
        while($row = mysqli_fetch_array($result)){
            $maSanPham = $row["MaSanPham"];
            $tenSanPham = $row["TenSanPham"];
            $hinhURL = $row["HinhURL"];
            $tenLoaiSanPham = $row["TenLoaiSanPham"];
            $gia = $row["Gia"];
            $soLuongTon = $row["SoLuongTon"];
            $soLuongBan = $row["SoLuongBan"];
            $soLuotXem = $row["SoLuotXem"];
            $gioiThieu = $row["GioiThieu"];
            $biXoa = $row["BiXoa"];

            include("pages/qlSanPham/tDanhSach.php");
        }
    ?>
    </tbody>
</table>