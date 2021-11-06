<h2 class="text-center">Tạo sản phẩm mới</h2>
<form class="form-horizontal" name="frmTaoSanPham" action="index.php?c=4&a=201" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <span class="col-md-3 control-label">Tên sản phẩm:</span>
        <input type="text" name="txtTenSanPham" required />
    </div>
    <div class="form-group">
        <span class="col-md-3 control-label">Loại sản phẩm:</span>
        <select name="cmbLoaiSanPham">
            <?php 
                $sql = "SELECT MaLoaiSanPham, TenLoaiSanPham FROM LoaiSanPham WHERE BiXoa = 0";
                $result = DataProvider::ExecuteQuery($sql);
                while($row = mysqli_fetch_array($result)){
                    $maLoaiSanPham = $row["MaLoaiSanPham"];
                    $tenLoaiSanPham = $row["TenLoaiSanPham"];
                    echo "<option value='$maLoaiSanPham'>$tenLoaiSanPham</option>";
                }
            ?>
        </select>
    </div>
    <div class="form-group">
        <span class="col-md-3 control-label">Hình:</span>
        <input type="file" name="fHinh" required />
    </div>
    <div class="form-group">
        <span class="col-md-3 control-label">Giá:</span>
        <input type="number" name="txtGia" required />
    </div>
    <div class="form-group">
        <span class="col-md-3 control-label">Số lượng:</span>
        <input type="number" name="txtSoLuongTon" required />
    </div>
    <div class="form-group">
        <span class="col-md-3 control-label">Giới thiệu:</span>
        <textarea name="txtGioiThieu" cols="60" rows="5"></textarea>
    </div>
    <div class="form-group">
        <span class="col-md-3 control-label">Mô tả:</span>
        <textarea name="txtMoTa" cols="60" rows="5"></textarea>
    </div>
    <div class="form-group text-center">
        <button class="btn btn-primary" stype="submit">Tạo mới sản phẩm</button>
        <button class="btn btn-primary" stype="button" onclick="location='index.php?c=4';">Hủy</button>
    </div>
    
    <?php
        if(isset($_GET["err"])){
            echo "<div class='error'>Không thể upload file</div>";
        }
    ?>
    
</form>