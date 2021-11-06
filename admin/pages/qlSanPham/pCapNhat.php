<?php
    if(isset($_GET["id"])){
        $id = $_GET["id"];

        $sql = "SELECT TenSanPham, MaLoaiSanPham, Gia, SoLuongTon, GioiThieu, MoTa, HinhURL FROM SanPham WHERE MaSanPham = $id";
     
        $result = DataProvider::ExecuteQuery($sql);
        $row = mysqli_fetch_array($result);
        
        if($row == null){
            DataProvider::ChangeURL("index.php?c=404");
        }

        $tenSanPham = $row["TenSanPham"];
        $maLoaiSanPham_goc = $row["MaLoaiSanPham"];
        $gia = $row["Gia"];
        $soLuongTon = $row["SoLuongTon"];
        $gioiThieu = $row["GioiThieu"];
        $moTa = $row["MoTa"];
        $hinhURL = $row["HinhURL"];

    } else {
        DataProvider::ChangeURL("index.php?c=404");
    }
?>
<!-- <h2>Cập nhật thông tin của sản phẩm</h2>
<form name="frmTaoSanPham" action="index.php?c=4&a=301" method="post" enctype="multipart/form-data">
    <input type="hidden" name="hdMaSanPham" value="<?php echo $id; ?>" />
    <div>
        <span>Tên sản phẩm:</span>
        <input type="text" name="txtTenSanPham" value="<?php echo $tenSanPham ?>" required />
    </div>
    <div>
        <span>Loại sản phẩm:</span>
        <select name="cmbLoaiSanPham">
            <?php 
                $sql = "SELECT MaLoaiSanPham, TenLoaiSanPham FROM LoaiSanPham WHERE BiXoa = 0";
                $result = DataProvider::ExecuteQuery($sql);
                while($row = mysqli_fetch_array($result)){
                    $maLoaiSanPham = $row["MaLoaiSanPham"];
                    $tenLoaiSanPham = $row["TenLoaiSanPham"];
                    if($maLoaiSanPham == $maLoaiSanPham_goc){
                        echo "<option value='$maLoaiSanPham' selected>$tenLoaiSanPham</option>"; 
                    } else {
                        echo "<option value='$maLoaiSanPham'>$tenLoaiSanPham</option>";
                    }
                }
            ?>
        </select>
    </div>
    <div>
        <span>Hình:</span>
        <input type="file" name="fHinh" required />
    </div>
    <div>
        <span></span>
        <img src="../img/<?php echo $hinhURL; ?>" height="75" />
    </div>
    
    <div>
        <span>Giá:</span>
        <input type="number" name="txtGia" value="<?php echo $gia; ?>" required />
    </div>
    <div>
        <span>Số lượng:</span>
        <input type="number" name="txtSoLuongTon" value="<?php echo $soLuongTon; ?>" required />
    </div>
    <div>
        <span>Mô tả:</span>
        <textarea name="txtMoTa"><?php echo $moTa; ?></textarea>
    </div>
    <div>
        <span></span>
        <button type="submit">Cập nhật thông tin sản phẩm</button>
        <button type="button" onclick="location='index.php?c=4';">Hủy</button>
    </div>
    
    <?php
        if(isset($_GET["err"])){
            echo "<div class='error'>Không thể upload file</div>";
        }
    ?>
    
</form> -->

<h2 class="text-center">Cập nhật sản phẩm</h2>
<form class="form-horizontal" name="frmTaoSanPham" action="index.php?c=4&a=301" method="post" enctype="multipart/form-data">
    <input type="hidden" name="hdMaSanPham" value="<?php echo $id; ?>" />
    <div class="form-group">
        <span class="col-md-3 control-label">Tên sản phẩm:</span>
        <input type="text" name="txtTenSanPham" value="<?php echo $tenSanPham ?>" required />
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
        <span class="col-md-3 control-label"></span>
        <img src="../images/sanpham/<?php echo $hinhURL; ?>" height="75" /> <?php echo $hinhURL; ?>
    </div>
    <div class="form-group">
        <span class="col-md-3 control-label">Giá:</span>
        <input type="number" name="txtGia" value="<?php echo $gia; ?>" required />
    </div>
    <div class="form-group">
        <span class="col-md-3 control-label">Số lượng:</span>
        <input type="number" name="txtSoLuongTon" value="<?php echo $soLuongTon; ?>" required />
    </div>
    <div class="form-group">
        <span class="col-md-3 control-label">Giới thiệu:</span>
        <textarea name="txtGioiThieu" cols="60" rows="5"><?php echo $gioiThieu; ?></textarea>
    </div>
    <div class="form-group">
        <span class="col-md-3 control-label">Mô tả:</span>
        <textarea name="txtMoTa" cols="60" rows="5"><?php echo $moTa; ?></textarea>
    </div>
    <div class="form-group text-center">
        <button class="btn btn-primary" stype="submit">Cập nhật</button>
        <button class="btn btn-primary" stype="button" onclick="location='index.php?c=4';">Hủy</button>
    </div>
    
    <?php
        if(isset($_GET["err"])){
            echo "<div class='error'>Không thể upload file</div>";
        }
    ?>
    
</form>