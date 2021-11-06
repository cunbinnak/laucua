<?php
    if(isset($_GET["id"])){
        $id = $_GET["id"];

        $sql = "SELECT TenLoaiSanPham FROM LoaiSanPham WHERE MaLoaiSanPham = $id";
     
        $result = DataProvider::ExecuteQuery($sql);
        $row = mysqli_fetch_array($result);
        
        if($row == null){
            DataProvider::ChangeURL("index.php?c=404");
        }
    } else {
        DataProvider::ChangeURL("index.php?c=404");
    }
?>
<h2 class="text-center">Chỉnh sửa loại sản phẩm</h2>
<form class="form-horizontal" name="frmTaoLoaiSanPham" action="index.php?c=3&a=301" method="post">
    <div class="form-group">
        <span class="col-md-5 control-label">Tên loại sản phẩm:</span>
        <input type="text" name="txtTenLoaiSanPham" value="<?php echo $row["TenLoaiSanPham"]; ?>" required />
        <input type="hidden" name="hdMaLoaiSanPham" value="<?php echo $id; ?>" />
    </div>
    <div class="form-group text-center">
        <button class="btn btn-primary" type="submit">Cập nhật</button>
        <button class="btn btn-primary" type="button" onclick="location='index.php?c=3';">Hủy</button>
    </div>
</form>