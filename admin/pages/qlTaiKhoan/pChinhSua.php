<?php
    $id=0;
    if(isset($_GET["id"])){
        $id = $_GET["id"];
    }
    $sql = "SELECT MaNhanVien FROM nhanvien WHERE MaNhanVien = $id";
    $result = DataProvider::ExecuteQuery($sql);
    $row=mysqli_fetch_array($result);
    $id=$row["MaNhanVien"];
    if($id != NULL){
        $sql = "SELECT TenDangNhap, HoTen, Email, SoDienThoai FROM nhanvien WHERE MaNhanVien = $id";
        $result = DataProvider::ExecuteQuery($sql);
        $row=mysqli_fetch_array($result);
        $tenDangNhap = $row["TenDangNhap"];
        $hoTen = $row["HoTen"];
        $email = $row["Email"];
        $soDienThoai = $row["SoDienThoai"];
?>
<h2 class="text-center">Chỉnh sửa tài khoản</h2>
<form class="form-horizontal" name="frmTaoTaiKhoanMoi" action="index.php?c=2&a=202&id=<?=$id; ?>" method="post">
    <div class="form-group">
        <span class="col-md-4 control-label">Tên đăng nhập:</span>
        <input type="text" name="txtTenDangNhap" value="<?=$tenDangNhap;?>" required />
    </div>
    <div class="form-group">
        <span class="col-md-4 control-label">Mật khẩu:</span>
        <input type="password" name="txtMatKhau" required />
    </div>
    <div class="form-group">
        <span class="col-md-4 control-label">Họ tên:</span>
        <input type="text" name="txtHoTen" value="<?=$hoTen;?>" require />
    </div>
    <div class="form-group">
        <span class="col-md-4 control-label">Email:</span>
        <input type="email" name="txtEmail" value="<?=$email;?>" />
    </div>
    <div class="form-group">
        <span class="col-md-4 control-label">Số điện thoại:</span>
        <input type="tel" name="txtSoDienThoai" value="<?=$soDienThoai;?>" />
    </div>
    <div class="form-group col-md-8 text-center">
        <button class="btn btn-primary" type="submit">Cập nhật</button>
        <button class="btn btn-primary" type="button" onclick="location='index.php?c=2';">Hủy</button>
    </div>
</form>
<?php } else {DataProvider::ChangeURL("index.php?c=2");} ?>