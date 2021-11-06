<h2 class="text-center">Tạo tài khoản mới</h2>
<form class="form-horizontal" name="frmTaoTaiKhoanMoi" action="index.php?c=2&a=201" method="post">
    <div class="form-group">
        <span class="col-md-5 control-label">Tên đăng nhập:</span>
        <input type="text" name="txtTenDangNhap" required />
    </div>
    <div class="form-group">
        <span class="col-md-5 control-label">Mật khẩu:</span>
        <input type="password" name="txtMatKhau" required />
    </div>
    <div class="form-group">
        <span class="col-md-5 control-label">Họ tên:</span>
        <input type="text" name="txtHoTen" required />
    </div>
    <div class="form-group">
        <span class="col-md-5 control-label">Email:</span>
        <input type="email" name="txtEmail" />
    </div>
    <div class="form-group">
        <span class="col-md-5 control-label">Số điện thoại:</span>
        <input type="tel" name="txtSoDienThoai" />
    </div>
    <div class="form-group text-center">
        <button class="btn btn-primary" type="submit">Tạo tài khoản</button>
        <button class="btn btn-primary" type="button" onclick="location='index.php?c=2';">Hủy</button>
    </div>
</form>