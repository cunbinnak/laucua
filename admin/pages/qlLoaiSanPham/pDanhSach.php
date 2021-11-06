<div class="TaoMoi">
    <a href="index.php?c=3&a=2">
        <span><img src="img/new.png" width="20" /></span><span> Tạo mới</span>
    </a>
</div>
<br>
<div class="table-responsive">
<table class="table table-bordered table-hover">
    <thead>
	<tr style="background:gray;">
		<th class="text-center">Mã loại sản phẩm</th>
		<th class="text-center">Tên loại sản phẩm</th>
		<th class="text-center">Tình trạng</th>
		<th class="text-center">Thao tác</th>
    </tr>
    <tbody>
    <?php
        $sql = "SELECT * FROM LoaiSanPham";
        $result = DataProvider::ExecuteQuery($sql);
        while($row = mysqli_fetch_array($result)){
            $maLoaiSanPham = $row["MaLoaiSanPham"];
            $tenLoaiSanPham = $row["TenLoaiSanPham"];
            $biXoa = $row["BiXoa"];

            include("pages/qlLoaiSanPham/tDanhSach.php");
        }
    ?>
    </tbody>
</table>