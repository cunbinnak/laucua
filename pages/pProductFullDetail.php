<?php
    $id = 1;
    if(isset($_GET["id"])){
        $id = $_GET["id"];
    }

    $sql = "SELECT MaSanPham, TenSanPham, HinhURL2, Gia, SoLuongTon, SoLuotXem, s.GioiThieu, MoTa, l.TenLoaiSanPham
            FROM sanpham s, loaisanpham l
            WHERE s.BiXoa = 0 AND l.BiXoa = 0 AND s.MaLoaiSanPham = l.MaLoaiSanPham AND MaSanPham = $id";
    
    $result = DataProvider::ExecuteQuery($sql);
    $row = mysqli_fetch_array($result);
?>

<div class="row">
    <div class="col-md-8">
        <img src="images/sanpham/<?php echo $row["HinhURL2"]; ?>" class="img-responsive" />
    </div>
    <div class="col-md-4">
        <div>
            <span class="itemName">Tên sản phẩm:</span>
            <span class="productname"><?php echo $row["TenSanPham"]; ?></span>
        </div>
        <div>
            <span class="itemName">Giá:</span>
            <span class="price"><?php echo number_format($row["Gia"],0,",","."); ?> đ/Kg</span>
        </div>
        <div>
            <span class="itemName">Loại sản phẩm:</span>
            <span class="data"><?php echo $row["TenLoaiSanPham"]; ?></span>
        </div>
        <div>
            <span class="itemName">Số lượng:</span>
            <span class="data"><?php echo $row["SoLuongTon"]; ?></span>
        </div>
        <div>
            <span class="itemName">Số lượt xem:</span>
            <span class="data"><?php echo $row["SoLuotXem"]; ?> lượt</span>
        </div><br>
        <a href="index.php?c=101&id=<?php echo $row["MaSanPham"]; ?>">
            <div class="btn btn-success btn-normal btn-inline " target="_self" title="Get It">Mua</div>
        </a>
    </div>
</div>
<br>
<div class="container"></div>
    <?php if($row["MoTa"] != NULL){echo $row["MoTa"];}else{echo $row["GioiThieu"];} ?>
</div>	

<?php
    $SoLuotXem = $row["SoLuotXem"] + 1;
    $sql = "UPDATE SanPham SET SoLuotXem = $SoLuotXem WHERE MaSanPham = $id";
    DataProvider::ExecuteQuery($sql);
?>