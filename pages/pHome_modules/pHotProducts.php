<h2>Hải sản Phổ biến</h2>
<?php
    $id = 1;
    if(isset($_GET["id"])){
        $id = $_GET["id"];
    }
    
    $sql = "SELECT MaSanPham, TenSanPham, HinhURL, Gia, GioiThieu FROM SanPham WHERE BiXoa = 0 ORDER BY SoLuotXem DESC LIMIT 0, 4";
    $result = DataProvider::ExecuteQuery($sql);
    $i=0;    
    while($row = mysqli_fetch_array($result)){
        $i++;
        if($i===1) echo "<div class='top_grid2'>";
        $HinhURL = $row["HinhURL"];
        $TenSanPham = $row["TenSanPham"];
        $Gia = $row["Gia"];
        $MaSanPham = $row["MaSanPham"];
        $GioiThieu = $row["GioiThieu"];
        include("pages/pTemplates/tProductShortInfo.php");
        if($i===2){
            $i=0;
            echo "</div>";
            echo "<div class='clearfix'> </div>";
        }
    }    
?>
<br>