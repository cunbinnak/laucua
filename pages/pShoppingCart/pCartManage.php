<div class="text-center">
    <h1>Quản lý giỏ hàng</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead>
            <tr style="background:DodgerBlue;">
                <th class="text-center">STT</th>
                <th class="text-center">Tên sản phẩm</th>
                <th class="text-center">Hình</th>
                <th class="text-center">Giá</th>
                <th class="text-center">Số lượng</th>
                <th class="text-center">Thao tác</th>
            </tr>
            </thead>
            <tbody>
                <?php
                    $gioHang = unserialize($_SESSION["SCart"]);
                    
                    $TongThanhTien = 0;
                    $SoSanPham = count($gioHang->arrSanPham);
                    
                    for($i = 0; $i < $SoSanPham; $i++){
                        $STT = $i + 1;
                        $id = $gioHang->arrSanPham[$i]->MaSanPham;

                        $sql = "SELECT MaSanPham, TenSanPham, HinhURL, Gia FROM SanPham WHERE BiXoa = 0 AND MaSanPham = $id";
                        $result = DataProvider::ExecuteQuery($sql);

                        $row = mysqli_fetch_array($result);

                        $tenSanPham = $row["TenSanPham"];
                        $hinhURL = $row["HinhURL"];
                        $gia = $row["Gia"];

                        $soLuong = $gioHang->arrSanPham[$i]->SoLuong;

                        $TongThanhTien += $gia * $soLuong;

                        include("pages/pTemplates/tSCartItemInfo.php");
                    }

                    $_SESSION["TongThanhTien"] = $TongThanhTien;
                ?>
            </tbody>
        </table>
    </div>
    <div class="total">
        Tổng thành tiền: <?php echo number_format($TongThanhTien,0,",","."); ?> đ
    </div>
    <br>
    <?php
        if($SoSanPham != 0){
            ?>
                <a href="index.php?c=5">
                <div class="btn btn-success btn-normal btn-inline " target="_self" title="Get It">Đặt Hàng</div>
                </a>        
            <?php
        }
    ?>
</div>