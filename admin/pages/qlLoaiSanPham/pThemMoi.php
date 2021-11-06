<h2 class="text-center">Tạo loại sản phẩm mới</h2>
<form class="form-horizontal" name="frmTaoLoaiSanPham" action="index.php?c=3&a=201" method="post">
    <div class="form-group">
        <span class="col-md-5 control-label">Tên loại sản phẩm:</span>
        <input type="text" name="txtTenLoaiSanPham" required />
    </div>
    <div class="form-group text-center">
        <button class="btn btn-primary" type="submit">Tạo mới loại sản phẩm</button>
        <button class="btn btn-primary" type="button" onclick="location='index.php?c=3';">Hủy</button>
    </div>
</form>