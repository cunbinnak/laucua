<?php
	if(!isset($_GET["id"]))
		DataProvider::ChangeURL("index.php?c=404");

	$id = $_GET["id"];
	$sql = "SELECT d.MaDonDatHang, d.NgayDatHang, d.TongThanhTien, k.HoTen, k.DiaChi, k.SoDienThoai , tt.TenTinhTrangDonDatHang, tt.MaTinhTrangDonDatHang FROM DonDatHang d, KhachHang k, TinhTrangDonDatHang tt WHERE d.MaKhachHang = k.MaKhachHang AND d.MaTinhTrangDonDatHang = tt.MaTinhTrangDonDatHang AND MaDonDatHang = $id";
	$result = DataProvider::ExecuteQuery($sql);
	$row = mysqli_fetch_array($result);
?>
<fieldset>
	<legend>Thông tin đơn đặt hàng</legend>
	<div>
		<span>Mã đơn đặt hàng:</span>
		<?php echo $row["MaDonDatHang"]; ?>
	</div>
	<div>
		<span>Ngày đặt hàng:</span>
		<?php echo $row["NgayDatHang"]; ?>
	</div>
	<div>
		<span>Tên khách hàng:</span>
		<?php echo $row["HoTen"]; ?>
	</div>
	<div>
		<span>Số điện thoại:</span>
		<?php echo $row["SoDienThoai"]; ?>
	</div>
	<div>
		<span>Địa chỉ giao hàng:</span>
		<?php echo $row["DiaChi"]; ?>
	</div>
	<div>
		<span>Tổng thành tiền:</span>
		<?php echo $row["TongThanhTien"]; ?> đồng
	</div>
	<br>
	<a href="index.php?c=5&a=201&t=3&id=<?php echo $id; ?>" class="btn btn-info">
		Giao hàng
	</a>
	<a href="index.php?c=5&a=201&t=4&id=<?php echo $id; ?>" class="btn btn-info">
		Thanh toán
	</a>
	<a href="index.php?c=5&a=201&t=5&id=<?php echo $id; ?>" class="btn btn-info">
		Hủy đơn hàng
	</a>
	<a href="#" onclick="window.print();" class="btn btn-info">
		In đơn hàng
	</a>
</fieldset>
<?php
    // Xử lý cập nhật trạng thái đang xử lý cho đơn đặt hàng
    if($row["MaTinhTrangDonDatHang"] == 1){
        $maNhanVien = $_SESSION["MaNhanVien"];
        $sql = "UPDATE DonDatHang Set MaTinhTrangDonDatHang = 2, MaNhanVien = $maNhanVien WHERE MaDonDatHang = $id";
        DataProvider::ExecuteQuery($sql);
    }
?>
<h2>Chi tiết đơn hàng</h2>
<div class="table-responsive">
<table class="table table-bordered table-hover">
    <thead>
	<tr style="background:gray;">
		<th  class="text-center">STT</th>
		<th  class="text-center">Tên sản phẩm</th>
		<th  class="text-center">Hình</th>
		<th  class="text-center">Số lượng</th>
		<th  class="text-center">Giá bán</th>
    </tr>
	</thead>
	<tbody>
    <?php
		$sql = "SELECT s.TenSanPham, s.HinhURL, c.SoLuong, c.GiaBan FROM ChiTietDonDatHang c, SanPham s WHERE c.MaSanPham = s.MaSanPham AND c.MaDonDatHang = $id";
		$result = DataProvider::ExecuteQuery($sql);
		$i = 1;
		while ($row = mysqli_fetch_array($result))
		{
			?>	
				<tr>
					<td class="text-center"><?php echo $i++; ?></td>
					<td><?php echo $row["TenSanPham"]; ?></td>
					<td align="center">
						<img src="../images/sanpham/<?php echo $row["HinhURL"]; ?>" height="35" />
					</td>
					<td class="text-center"><?php echo $row["SoLuong"]; ?></td>
					<td class="text-center"><?php echo $row["GiaBan"]; ?></td>
				</tr>
			<?php
		}
	?>
	</tbody>
</table>
</div>